<?php
    require_once('../Classes/Users.php');

    ob_start();
    $newgame_name = strtolower ($_POST['game_name']);
    $newgame_dess =  $_POST['game_dess'];
    $newgame_master = unserialize($_SESSION['user'])->getid_user();;

    $newGame = new Games($newgame_name, $newgame_dess, $newgame_master);

    //Afegir Usuari a la BD.
    $db = $newGame->add();
    if($db != false){
      echo 'succes';
    }else{
      echo 'fail';
    }
?>
