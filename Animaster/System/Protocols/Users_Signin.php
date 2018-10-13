<?php
    require_once('../Classes/Users.php');

    ob_start();
    $mail = strtolower ($_POST['mail']);
    $pass = md5($_POST['pass']);

    $usuari = new Users();
    $usuari = $usuari->verificar_login($mail,$pass);
    if(!isset($_SESSION['user'])){
        if( $usuari != null){
            session_start();
            $_SESSION['user'] = $usuari;
            echo 'succes';
        }else{
            echo 'fail';
        }
    }
