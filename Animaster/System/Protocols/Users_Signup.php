<?php
    require_once('../Classes/Users.php');

    ob_start();
    $newuser_name = strtolower ($_POST['user']);
    $newuser_pass = md5($_POST['pass']);
    $newuser_mail = strtolower ($_POST['mail']);
    $newuser_rol = 0; //user_rol >> User = 0 | Admin = 1 <<

    $newUsuari = new Users($newuser_name, $newuser_mail, $newuser_pass, $newuser_rol);

		$mailflag = $newUsuari->mailexiste($newuser_mail);
		$userflag = $newUsuari->userexiste($newuser_name);

		if ($mailflag && $userflag){
			echo "fail03";
		}else if($mailflag){
			echo "fail02";
		}else if($userflag){
			echo "fail01";
		}else if(!$mailflag && !$userflag){
      //Afegir Usuari a la BD.
      $db2 = $newUsuari->add();
      if($db2 != false){
          $usuari = $newUsuari->verificar_login($newuser_mail,$newuser_pass);
          if( $usuari != null){
              session_start();
              $_SESSION['user'] = $usuari;
              echo 'succes';
          }
      }else{
        echo 'fail00';
      }

    }
?>
