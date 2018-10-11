<?php

	//Directorio --> enlaces del menu
	$directorio = '';
	if ($dir == 'root'){
		$directorio = '';
	}else{
		if($depth == 1){
			$directorio = '../';
		}else if($depth == 2){
			$directorio = '../../';
		}else if($depth == 3){
			$directorio = '../../../';
		}
	}

	//Funcion migas de pan
	function migasdepan($migas){
		$migasdepan = explode("#",$migas);
		$contmigas = count($migasdepan);
		echo '<ol class="breadcrumb bgm-lightblue z-depth-1-bottom">';
		for ($i = 1; $i < $contmigas; $i++){
			$pan = explode("|", $migasdepan[$i]);
			if ($i == 1){
				if(count($pan) == 2){
					echo '<li><a class ="c-white" href="'.$pan[1].'">'.$pan[0].'</a></li>';
				}else{
					echo '<li class="active c-white">'.$pan[0].'</li> ';
				}
			}else{
				if(count($pan) == 2){
					echo '<li><a class ="c-white" href="'.$pan[1].'">'.$pan[0].'</a></li>';
				}else{
					echo '<li class="active">'.$pan[0].'</li> ';
				}
			}
		}
                echo '</ol>';

	}
?>

<script>
	//funcion para abrir (menu) estilo tactil
    $( document ).ready(function() {
		$("#menu-trigger").click(function(e) {
            e.preventDefault();
            console.log('here');
            $(".ha-menu").toggleClass("toggled bgm-cyan");
            $(".idplr").toggleClass("pull-right");
        });
		//alert msg function
		function alert(msg, tipe) {
			$.notify({
					// options
					message: msg
			},{
					// settings
					type: tipe,
					delay: 4000,
					offset : {
							y: 120,
							x: 20
					},
					placement: {
						from: "bottom",
						align: "right"
					}
			});
		}
		// Login 1
		$('#loginput').click(function(){
			var user = {
				user : $('#userinput').val(),
				pass : $('#passinput').val()
			};
			if ($('#userinput').val()== "" || $('#passinput').val()== ""){
				if($('#userinput').val()== "" && $('#passinput').val()== ""){
					alert('User and password are empty!', 'red');
				}else if ($('#userinput').val()== ""){
					alert('User is empty!', 'red');
				}else if($('#passinput').val()== ""){
					alert('Password is empty!', 'red');
				}


			}else{
				$.ajax({
					type: "POST",
					url: "<?php echo $directorio?>System/Protocols/Users_Validate.php",
					data: user,
					success: function (response) {
						console.log(response);
						if(response == 'fail'){
							alert('Invalid user or password!', 'red');
						}else if(response == 'succes'){
							alert('Welcome to animaster!', 'green');

							setInterval(function() {
								var url = "<?php echo $directorio?>home";
								location.href=url;
							}, 1000);

						}
					}
				});
			}
		});
		// Login 2
		$('#loginput2').click(function(){
			var user = {
				user : $('#userinput2').val(),
				pass : $('#passinput2').val()
			};
			if ($('#userinput2').val()== "" || $('#passinput2').val()== ""){
				if($('#userinput2').val()== "" && $('#passinput2').val()== ""){
					alert('User and password are empty!', 'red');
				}else if ($('#userinput2').val()== ""){
					alert('User is empty!', 'red');
				}else if($('#passinput2').val()== ""){
					alert('Password is empty!', 'red');
				}


			}else{
				$.ajax({
					type: "POST",
					url: "<?php echo $directorio?>System/Protocols/Users_Validate.php",
					data: user,
					success: function (response) {
						console.log(response);
						if(response == 'fail'){
							alert('Invalid user or password!', 'red');
						}else if(response == 'succes'){
							alert('Welcome to animaster!', 'green');

							setInterval(function() {
								var url = "<?php echo $directorio?>home";
								location.href=url;
							}, 1000);

						}
					}
				});
			}
		});
    });
</script>

<!-- Aqui empieza el header -->
<header id="header" class="clearfix bgm-blue" >
    <ul class="header-inner">
        <li id="menu-trigger" class="visible-xs">
            <div class="line-wrap m-t-0 p-t-0 ">
                <i class="zmdi zmdi-menu f-30 p-5 waves-effect" ></i>
            </div>
        </li>
		<!-- Logo -->
        <li class="logo hidden-xs">
            <a href="<?php echo $directorio.'home'?>">Animaster</a>
        </li>
        <li class="pull-right">
            <ul class="top-menu">

				<li class="dropdown">
					<a class="p-5 waves-effect" data-toggle="dropdown" href="#">
						<i class="tm-icon zmdi zmdi-notifications-none"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-lg pull-right">
						<div class="listview">
							<div class="lv-header">
								Notifications
							</div>
							<div class="lv-body">
							</div>
						</div>
					</div>
				</li>

                <li class="dropdown">
                    <a class="p-5 waves-effect" data-toggle="dropdown" href="#"><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dm-icon pull-right">

						<?php
						if(!isset($_SESSION['user'])){
							echo '
								<li><a href="'.$directorio.'account/create"><i class="zmdi zmdi-account-add"></i> Sign Up</a></li>
							';
						}
						if(isset($_SESSION['user'])){
							echo '
								<li><a href="'.$directorio.'sessions/destroy"><i class="zmdi zmdi-time-restore"></i> Logout</a></li>

							';
						}
						?>
						<!-- <li role="separator" class="divider"></li>
						<li class="dropdown-header">Actions</li> -->
                        <li class="hidden-xs"><a data-action="fullscreen" href="#" ><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Top Search -->
    <div class="clearfix">
    </div>

    <!-- Top Menu -->
    <nav class="ha-menu">
        <ul>
            <?php
				//Menu izquierda
				if(!isset($_SESSION['user'])){
                    echo '
						<li class="waves-effect"><a href="'.$directorio.'sessions/new">Play now</a></li>
						<li class="waves-effect"><a href="'.$directorio.'home">home</a></li>

					';
                }
                if(isset($_SESSION['user'])){
					echo '
						<li class="waves-effect"><a href="'.$directorio.'home">home</a></li>


					';
                }

				//Menu derecha
                if(!isset($_SESSION['user'])){
                    echo '
					<li class="dropdown pull-right idplr">
						<a data-toggle="dropdown" href="">
							Sign In <i class="zmdi zmdi-chevron-down"></i>
						</a>
						<ul class="dropdown-menu dm-icon pull-right">
							<div class="navbar-form form-inline">
								<input name="user" type="text" placeholder="User" id="userinput">
								<li role="separator" class="divider"></li>
								<input name="password" type="password" placeholder="Password" id="passinput">
								<li role="separator" class="divider"></li>
								<button class="btn btn-primary" id="loginput">Sign In</button>
							</div>
						</ul>
					</li>
					';

                }
                if(isset($_SESSION['user'])){
					echo '  <li class="waves-effect pull-right idplr"><a href="'.$directorio.'account/">Hola, '.$value['user_name'].'!</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>

<!-- Migas de pan -->
<?php
    if (strpos($self,"Phantom-RPG/index.php")) {
        //none
    }else if (strpos($self,"Animaster/sessions/new")) {
        //migasdepan($migas);
    }else{
        //imprimim migas de pan
        //migasdepan($migas);
    }

?>

<!-- //Imagen de fondo -->
<div id="slider">
    <img src="<?php echo $directorio.'Public/img/rpgbg.jpg'?>" />
	<script>
            $(document).ready(function(){
                var src = $("#slider img").eq(0).attr('src');
                $('html').css('backgroundImage','url('+src+')');

            });
	</script>
</div>          
