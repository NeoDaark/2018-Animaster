var DiceRoller = {
  createScene: function (containerElement) {
    DiceRoller.width = parseInt(containerElement.offsetWidth);
    DiceRoller.height = parseInt(containerElement.offsetHeight);

    Physijs.scripts.worker = "../../bower_components/physijs/physijs_worker.js";
    Physijs.scripts.ammo = "../../bower_components/ammo.js/builds/ammo.js";

    var scene = DiceRoller._createScene(),
      camera = DiceRoller._createCamera(),
      renderer = DiceRoller._createRenderer();

    containerElement.appendChild(renderer.domElement);

    // Begin render loop
    function render() {
      renderer.render(scene, camera);
      scene.simulate();
      requestAnimationFrame(render);
    }

    render();

    DiceRoller._createWalls(scene);

    var ground = DiceRoller._createGround();
    scene.add(ground);

    DiceRoller.scene = scene;
  },

  dice: [],
  diceColor: '#8B2323',
  dotColor: '#0A0A0A',

  rollDie: function () {
    console.log("rollDie");
    var die = DiceRoller._createDie();
    DiceRoller.scene.add(die);
    DiceRoller.dice.push(die);
  },

  reset: function () {
    var arrayLength = this.dice.length;
    for (var i = 0; i < arrayLength; i++) {
      DiceRoller.scene.remove(this.dice[i]);
    }
    DiceRoller.dice = [];
  }
};

DiceRoller._createRenderer = function () {
  var renderer = new THREE.WebGLRenderer({ alpha: true });
  renderer.setClearColor('black', 0);
  renderer.setSize(DiceRoller.width, DiceRoller.height);

  return renderer;
};

DiceRoller._createCamera = function () {
  var camera = new THREE.PerspectiveCamera(45, DiceRoller.width/DiceRoller.height, 1, 1000);

  camera.position.set(30, 30, 100);
  camera.up = new THREE.Vector3(0,0,1);
  camera.lookAt(new THREE.Vector3(0,0,0));

  return camera;
};

DiceRoller._createScene = function () {
  var scene = new Physijs.Scene();

  // Physics
  scene.setGravity(new THREE.Vector3(0, 0, -300));

  // Lighting
  DiceRoller._addAmbientLighting(scene);
  DiceRoller._addDirectionalLighting(scene);

  // Debug
  //DiceRoller._addVertices(scene);

  return scene;
};

DiceRoller._createGround = function () {
  var groundMaterial = Physijs.createMaterial(new THREE.MeshLambertMaterial({ transparent: true, opacity: 0 }),
    .8, // high friction
    .8 // low restitution
  );

  var ground =  new Physijs.BoxMesh(
    new THREE.PlaneBufferGeometry(DiceRoller.width, DiceRoller.height),
    groundMaterial,
    0 // mass
  );

  return ground;
};

DiceRoller._rollAreaWidth = 30;

DiceRoller._createWalls= function (scene) {
  var wall1 = DiceRoller._createGround(),
    wall2 = DiceRoller._createGround(),
    wall3 = DiceRoller._createGround(),
    wall4 = DiceRoller._createGround();

  wall1.rotateOnAxis(new THREE.Vector3(1, 0, 0), Math.PI/2);
  wall1.position.set(0, -1 * DiceRoller._rollAreaWidth, 0);

  wall2.rotateOnAxis(new THREE.Vector3(1, 0, 0), Math.PI/2);
  wall2.position.set(0, DiceRoller._rollAreaWidth, 0);

  wall3.rotateOnAxis(new THREE.Vector3(0, 1, 0), Math.PI/2);
  wall3.position.set(-1 * DiceRoller._rollAreaWidth, 0, 0);

  wall4.rotateOnAxis(new THREE.Vector3(0, 1, 0), Math.PI/2);
  wall4.position.set(DiceRoller._rollAreaWidth, 0, 0);

  scene.add(wall1);
  scene.add(wall2);
  scene.add(wall3);
  scene.add(wall4);
};

DiceRoller._createDie = function () {
  var materials = [];
  for (var i=0; i<6; i++) {
    materials.push(new THREE.MeshLambertMaterial({
      map: DiceRoller._createDiceSideTexture(i + 1, DiceRoller.diceColor),
      side: THREE.DoubleSide
    }));
  }

  var cubeGeometry = new THREE.BoxGeometry(10, 10, 10);
  var die = new Physijs.BoxMesh(cubeGeometry, new THREE.MeshFaceMaterial(materials), 2);

  die.position.set(
    (Math.random() * DiceRoller._rollAreaWidth) - DiceRoller._rollAreaWidth/2,
    (Math.random() * DiceRoller._rollAreaWidth) - DiceRoller._rollAreaWidth/2,
    75);
  die.rotation.x = Math.random() * 360;
  die.rotation.y = Math.random() * 360;
  die.rotation.z = Math.random() * 360;

  return die;
};


/*
 Scene util functions
 */
DiceRoller._addVertices = function (scene) {
  scene.add(DiceRoller._line(1000, 0, 0, -1000, 0, 0, 'red')); // x
  scene.add(DiceRoller._line(0, 1000, 0, 0, -1000, 0, 'blue')); // y
  scene.add(DiceRoller._line(0, 0, 1000, 0, 0, -1000, 'green')); // z
};

DiceRoller._addAmbientLighting = function (scene) {
  var ambientLight = new THREE.AmbientLight('#FAFAFA');
  scene.add(ambientLight);
};

DiceRoller._addDirectionalLighting = function (scene) {
  var directionalLight = new THREE.DirectionalLight('white', 0.9);
  directionalLight.position.set(5, 0, 10);
  scene.add(directionalLight);
};

DiceRoller._line = function (x1, y1, z1, x2, y2, z2, color) {
  var material = new THREE.LineBasicMaterial({color: color});
  var geometry = new THREE.Geometry();
  geometry.vertices.push(new THREE.Vector3(x1, y1, z1));
  geometry.vertices.push(new THREE.Vector3(x2, y2, z2));
  return new THREE.Line(geometry, material);
};


/*
 Dice util functions
 */

DiceRoller._createDiceSideTexture = function (i, back_color) {
  var size = 100;
  var margin = 100;
  var canvas = document.createElement("canvas");
  var context = canvas.getContext("2d");
  canvas.width = size + margin;
  canvas.height = size + margin;

  // background
  context.fillStyle = back_color;
  context.fillRect(0, 0, canvas.width, canvas.height);

  // text
  var leftX = canvas.width/ 4,
    rightX = 3 * canvas.width/ 4,
    middleX = canvas.width/ 2,
    topY = canvas.height/ 4,
    bottomY = 3 * canvas.height/ 4,
    middleY = canvas.height/2;
  if (i != 1) {
    DiceRoller._drawDot(context, leftX, topY);
  }
  if (i > 3) {
    DiceRoller._drawDot(context, rightX, topY);
    DiceRoller._drawDot(context, leftX, bottomY);
  }
  if (i != 1) {
    DiceRoller._drawDot(context, rightX, bottomY);
  }
  if (i % 2 == 1) {
    DiceRoller._drawDot(context, middleX, middleY);
  }
  if (i == 6) {
    DiceRoller._drawDot(context, leftX, middleY);
    DiceRoller._drawDot(context, rightX, middleY);
  }

  var texture = new THREE.Texture(canvas);
  texture.needsUpdate = true;
  return texture;
};

DiceRoller._drawDot= function (context, x, y) {
  context.beginPath();
  context.arc(x, y, 20, 0, 2 * Math.PI, false);
  context.fillStyle = DiceRoller.dotColor;
  context.fill();
};
