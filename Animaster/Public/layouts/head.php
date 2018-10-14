<?php
  //Directory function
  //###########################################################################
  function mkdirectory($dir, $depth) {
    $newdir = '';
    if ($dir == 'root'){
      $newdir = '';
    }else{
      if($depth == 1){
        $newdir = '../';
      }else if($depth == 2){
        $newdir = '../../';
      }else if($depth == 3){
        $newdir = '../../../';
      }
    }
    return $newdir;
  }

  //Useful variables
  //###########################################################################
  $tabtitle= $title.'| Animaster';              //Tab title
  $directory = mkdirectory($dir, $depth);       //Dir for load resources
  $dirpublic = $directory.'Public/';            //Specific Public dir

  //Colors array list
  //###########################################################################
  $colorbarray = array("green", "blue", "red", "orange", "teal", "cyan", "dark-blue", "purple", "indigo", "brown");


  if(session_status() == PHP_SESSION_NONE){
    session_start();
    if(isset($_SESSION['user'])){
      if(!isset($menu)){$menu='';}  //Show menu
      if(!isset($icons)){$icons='';} //Hide icons
      //Session -> Get user info
      //#######################################################################
      require_once($directory.'System/Classes/Users.php');
      $id_user = unserialize($_SESSION['user'])->getid_user();
      $user_name = unserialize($_SESSION['user'])->getuser_name();
      $user_mail = unserialize($_SESSION['user'])->getuser_mail();
      $user_pass = unserialize($_SESSION['user'])->getuser_pass();
      $user_rol = unserialize($_SESSION['user'])->getuser_rol();
      $user_color = unserialize($_SESSION['user'])->usercolor($id_user);

      //gravatar QuickHash
      //#######################################################################
      $user_gravatar = md5(trim($user_mail));
      $gravatar_link = "https://secure.gravatar.com/avatar/".$user_gravatar."?d=mp";

      //Set user color preference
      //#######################################################################
      $coloractive = array("", "", "", "", "", "", "", "", "", "");
      $coloractive[$user_color] = "active"; //set user color active
      $color = $colorbarray[$user_color]; //set user color

    }else{
      //No Session
      //#######################################################################
      if(!isset($menu)){$menu='';}//Show menu if not set
      if(!isset($icons)){$icons="style='display:none;'";}//Hide icons
      $coloractive = array("", "", "", "", "", "", "active", "", "", ""); //set color 6 active
      $color = $colorbarray[6]; //set color 6

      //Set user info to = '' if no session loaded
      //#######################################################################
      if(!isset($id_user)){$id_user='';}
      if(!isset($user_name)){$user_name='';}
      if(!isset($user_mail)){$user_mail='';}
      if(!isset($user_pass)){$user_pass='';}
      if(!isset($user_rol)){$user_rol='';}
      if(!isset($user_color)){$user_color='';}
      if(!isset($user_gravatar)){$user_gravatar='';}

      //gravatar icon -> mp
      //#######################################################################
      $gravatar_link = "https://secure.gravatar.com/avatar/".$user_gravatar."?d=mp";
    }
  }


?>

<!-- Inicio de la pagina -->
<!DOCTYPE html>
<html lang="en">
    <head>
      <title><?=$tabtitle?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- libs styles -->
      <link rel="stylesheet" href="<?=$dirpublic?>libs/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/bower_components/animate.css/animate.min.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/bower_components/jquery.scrollbar/jquery.scrollbar.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/bower_components/fullcalendar/dist/fullcalendar.min.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/fontawesome-5.3.1/css/all.min.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/fontawesome-5.3.1/css/v4-shims.min.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/waves.css">
      <link rel="stylesheet" href="<?=$dirpublic?>libs/bower_components/sweetalert2/dist/sweetalert2.min.css">

      <!-- App styles -->
      <link rel="stylesheet" href="<?=$dirpublic?>theme/app.min.css">
      <link rel="stylesheet" href="<?=$dirpublic?>theme/theme.css">

      <!-- Javascript -->
      <!-- libs -->
      <script src="<?=$dirpublic?>libs/bower_components/jquery/dist/jquery.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/popper.js/dist/umd/popper.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

      <script src="<?=$dirpublic?>libs/bower_components/flot/jquery.flot.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/flot/jquery.flot.resize.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/flot.curvedlines/curvedLines.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/salvattore/dist/salvattore.min.js"></script>
      <script src="<?=$dirpublic?>libs/jquery.sparkline/jquery.sparkline.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/moment/min/moment.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
      <script src="<?=$dirpublic?>libs/waves.js"></script>
			<script src="<?=$dirpublic?>libs/three.min.js"></script>
			<script src="<?=$dirpublic?>libs/cannon.min.js"></script>
      <script src="<?=$dirpublic?>libs/fontawesome-5.3.1/js/all.min.js"></script>
      <script src="<?=$dirpublic?>libs/fontawesome-5.3.1/js/v4-shims.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
      <script src="<?=$dirpublic?>libs/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

      <!-- App functions and actions -->
      <script src="<?=$dirpublic?>theme/app.min.js"></script>
      <script src="<?=$dirpublic?>theme/theme.js"></script>

			<!-- Favicon -->
      <link rel="shortcut icon" href="<?=$dirpublic?>icon/favicon.ico">
    </head>
    <div class="overlay"></div>

    <body data-ma-theme="<?=$color?>">
      <main class="main main--alt">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    		<?php
    			include "menu.php";
    		?>
