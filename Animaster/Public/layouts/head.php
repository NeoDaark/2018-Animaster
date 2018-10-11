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
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.min.js"></script>
        <script>
            function NotificationCenter($scope) {
                var permissionLevels = {};
                permissionLevels[notify.PERMISSION_GRANTED] = 0;
                permissionLevels[notify.PERMISSION_DEFAULT] = 1;
                permissionLevels[notify.PERMISSION_DENIED] = 2;
                $scope.isSupported = notify.isSupported;
                $scope.permissionLevel = permissionLevels[notify.permissionLevel()];
                $scope.getClassName = function() {
                    if ($scope.permissionLevel === 0) {
                        return "allowed";
                    } else if ($scope.permissionLevel === 1) {
                        return "default";
                    } else {
                        return "denied";
                    }
                }
                $scope.callback = function() {
                    console.log("test");
                }
                $scope.requestPermissions = function() {
                    notify.requestPermission(function() {
                        $scope.$apply($scope.permissionLevel = permissionLevels[notify.permissionLevel()]);
                    })
                }
            }
            function DesktopNotifyshow($title, $body, $icon) {
                notify.createNotification($title, {body:$body, icon: $icon});
            }
        </script>
        <?php
            $subtitle='| Animaster';
            echo '<title>'.$title.' '.$subtitle.'</title>';
			echo '<meta charset="UTF-8">';
			echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">';
			// Fonts
			echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">';
			echo '<link href="https://fonts.googleapis.com/css?family=Rokkitt:700,400" rel="stylesheet" type="text/css">';

			echo mkhead($dir, $depth);
			function mkhead($dir, $depth) {
				$response = '';
				$directorio = '';

				if ($dir == 'root'){
					$directorio = 'Public/';
				}else{
					if($depth == 1){
						$directorio = '../Public/';
					}else if($depth == 2){
						$directorio = '../../Public/';
					}else if($depth == 3){
						$directorio = '../../../Public/';
					}
				}

				$response = '

				<!-- Libs -->
				<script src="'.$directorio.'libs/jquery-1.12.3.min.js"></script>
                <script src="'.$directorio.'libs/bootstrap-notify.js"></script>
                <script src="'.$directorio.'libs/desktop-notify.js"></script>
                <script src="'.$directorio.'libs/waves.js"></script>
                <link href="'.$directorio.'libs/waves.css" rel="stylesheet">
                <script src="'.$directorio.'libs/sweetalert.min.js"></script>
                <link href="'.$directorio.'libs/sweetalert.css" rel="stylesheet">
                <script src="'.$directorio.'libs/bootstrap-select.js"></script>
                <link href="'.$directorio.'libs/bootstrap-select.css" rel="stylesheet">
                <script src="'.$directorio.'libs/summernote-updated.min.js"></script>
                <link href="'.$directorio.'libs/summernote.css" rel="stylesheet">
				<script src="'.$directorio.'libs/three.min.js"></script>
				<script src="'.$directorio.'libs/cannon.min.js"></script>

				<!-- Bootstrap Core CSS & Js -->
                <link href="'.$directorio.'libs/bootstrap-3.3.6/css/bootstrap.css" rel="stylesheet">
                <script src="'.$directorio.'libs/bootstrap-3.3.6/js/bootstrap.js"></script>

				<!-- FontAwesome -->
                <LINK REL=StyleSheet HREF="'.$directorio.'libs/fontawesome-5.3.1/css/all.min.css" TYPE="text/css" MEDIA=screen>
				<LINK REL=StyleSheet HREF="'.$directorio.'libs/fontawesome-5.3.1/css/v4-shims.min.css" TYPE="text/css" MEDIA=screen>
                <script src="'.$directorio.'libs/fontawesome-5.3.1/js/all.min.js"></script>
                <script src="'.$directorio.'libs/fontawesome-5.3.1/js/v4-shims.min.js"></script>

				<!-- material Design Iconic Font -->
                <LINK REL=StyleSheet HREF="'.$directorio.'libs/material-design-iconic-font/css/material-design-iconic-font.css" TYPE="text/css" MEDIA=screen>

				<!-- Theme Css -->
				<link href="'.$directorio.'theme/theme.css?123" rel="stylesheet">
                <script src="'.$directorio.'theme/template.js"></script>

				<!-- Favicon -->
                <link rel="shortcut icon" href="'.$directorio.'icon/favicon.ico">
				';

				return $response;
			}
        ?>
    </head>
    <body class="customcontentbody">
        <div class="page-loader bgm-white">
            <div class="preloader pls-blue">
                <svg class="pl-circular " viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20"></circle>
                </svg>
                <p>Please wait...</p>
            </div>
        </div>
		<?php
			include "menu.php";
		?>
