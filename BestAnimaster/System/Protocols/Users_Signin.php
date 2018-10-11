<?php
    require_once('../Classes/Users.php');
    //Requiered inputs
    ob_start();
    $newuser_name = strtolower ($_POST['user']);
    $newuser_pass = md5($_POST['pass']);
    $newuser_mail = $_POST['email'];
	
    //user_rol >> User = 0 | Admin = 1 <<
    $newuser_rol = 0;
    
    //Afegir Usuari a la BD.
    $newUsuari = new Users($newuser_name, $newuser_mail, $newuser_pass, $newuser_rol);
    $db2 = $newUsuari->add();
    var_dump($test);
    //Comprobació de si s'ha afegit l'usuari i loggin
    if($db2 != false){
        $usuari = $newUsuari->verificar_login($newuser_name,$newuser_pass);
        if( $usuari != null){ 
            session_start();
            $_SESSION['user'] = $usuari;
            header('Location: ../../home');
        }
    }else{
		session_start();
		$_SESSION['nuser'] = $newuser_name; //usuario escrito por el cliente
		$_SESSION['nmail'] = $newuser_mail; //email escrito por el cliente
		$_SESSION['neror'] = ""; //error obtenido
		$mailflag = $newUsuari->mailexiste($newuser_mail);
		$userflag = $newUsuari->userexiste($newuser_name);
		
		if ($mailflag && $userflag){
			header("Location: ../../account/create");
			$_SESSION['neror'] = "03";
		}else if($mailflag){
			header("Location: ../../account/create");
			$_SESSION['neror'] = "02";
		}else if($userflag){
			header("Location: ../../account/create");
			$_SESSION['neror'] = "01";
		}else{
			header("Location: ../../account/create");
			$_SESSION['neror'] = "00";
		}
		
		die();
	}
?>