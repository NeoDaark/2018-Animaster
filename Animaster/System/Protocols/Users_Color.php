<?php
    require_once('../Classes/Users.php');
    if(session_status() == PHP_SESSION_NONE){
      session_start();
      if(isset($_SESSION['user'])){
        $color = $_POST['id_color'];
        $id = unserialize($_SESSION['user'])->getid_user();
        $usuari = new Users();
        $result = $usuari->moduser_color($id, $color);
        if($result != true){
          echo 'fail';
        }else{
          echo 'succes';
        }
      }else{
        echo 'nosession';
      }
    }
