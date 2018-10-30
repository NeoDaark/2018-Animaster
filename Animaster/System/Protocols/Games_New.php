<?php
    require_once('../Classes/Users.php'); //necesari per al unserialize de forma que obtenim el id del usuari d'aquesta session
    require_once('../Classes/Games.php');
    if(session_status() == PHP_SESSION_NONE){
      session_start();
      if(isset($_SESSION['user'])){
        ob_start();
        $newgame_name = strtolower ($_POST['game_name']);
        $newgame_dess =  $_POST['game_dess'];
        $newgame_master = unserialize($_SESSION['user'])->getid_user();

        $newGame = new Games($newgame_name, $newgame_dess, $newgame_master);

        //Afegir Game a la BD
        $db = $newGame->add();
        if($db != false){
          echo 'succes';
        }else{
          echo 'fail';
        }
      }
    }
?>
