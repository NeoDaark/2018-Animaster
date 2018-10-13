<?php
$self = $_SERVER['PHP_SELF']; // $self --> Lugar actual visitado

$status = session_status();
if($status == PHP_SESSION_NONE){
	//aqui no hay sesion activa
    session_start();
}
//$value --> Login Session.
if(isset($_SESSION['user'])){
        $value=$_SESSION['user'];
        //var_dump($value);
}
?>

<!-- Inicio de la pagina -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
          $subtitle='| Animaster';
          echo '
          <title>'.$title.' '.$subtitle.'</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          ';
  	      echo mkhead($dir, $depth);
          function mkhead($dir, $depth) {
            $response = '';
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
            $dirpublic = $directorio . 'Public/';

  				$response = '
          <!-- libs styles -->
          <link rel="stylesheet" href="'.$dirpublic.'libs/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/bower_components/animate.css/animate.min.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/bower_components/jquery.scrollbar/jquery.scrollbar.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/bower_components/fullcalendar/dist/fullcalendar.min.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/fontawesome-5.3.1/css/all.min.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/fontawesome-5.3.1/css/v4-shims.min.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/waves.css">
          <link rel="stylesheet" href="'.$dirpublic.'libs/bower_components/sweetalert2/dist/sweetalert2.min.css">

          <!-- App styles -->
          <link rel="stylesheet" href="'.$dirpublic.'theme/app.min.css">
          <link rel="stylesheet" href="'.$dirpublic.'theme/theme.css">

          <!-- Javascript -->
          <!-- libs -->
          <script src="'.$dirpublic.'libs/bower_components/jquery/dist/jquery.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/popper.js/dist/umd/popper.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/flot/jquery.flot.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/flot/jquery.flot.resize.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/flot.curvedlines/curvedLines.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/salvattore/dist/salvattore.min.js"></script>
          <script src="'.$dirpublic.'libs/jquery.sparkline/jquery.sparkline.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/moment/min/moment.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
          <script src="'.$dirpublic.'libs/waves.js"></script>
  				<script src="'.$dirpublic.'libs/three.min.js"></script>
  				<script src="'.$dirpublic.'libs/cannon.min.js"></script>
          <script src="'.$dirpublic.'libs/fontawesome-5.3.1/js/all.min.js"></script>
          <script src="'.$dirpublic.'libs/fontawesome-5.3.1/js/v4-shims.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
          <script src="'.$dirpublic.'libs/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>


          <!-- App functions and actions -->
          <script src="'.$dirpublic.'theme/app.min.js"></script>
          <script src="'.$dirpublic.'theme/theme.js"></script>

  				<!-- Favicon -->
          <link rel="shortcut icon" href="'.$directorio.'icon/favicon.ico">
  				';
          return $response;
          }
        ?>
    </head>
    <div class="overlay"></div>
    <body data-ma-theme="cyan">
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
