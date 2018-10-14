<?php
    require_once('../Classes/Users.php');

    ob_start();
    $mail = strtolower ($_POST['mail']);
    $pass = $_POST['pass'];


    $usuari = new Users();
    $usuari = $usuari->verify_login($mail,$pass);
    if(!isset($_SESSION['user'])){
        if( $usuari != null){
            session_start();
            $_SESSION['user'] = serialize($usuari);
            echo 'succes';
        }else{
            echo 'fail';
        }
    }
