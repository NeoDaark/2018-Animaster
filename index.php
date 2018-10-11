<html>
    <head>
        <title>Localhost</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt:700,400" rel="stylesheet" type="text/css">
        <LINK REL=StyleSheet HREF="Public/css/style.css<?php echo '?'.mt_rand(); //solucion php para actualizar siempre el css?>" TYPE="text/css" MEDIA=screen> 
        <LINK REL=StyleSheet HREF="Public/css/font-awesome.css" TYPE="text/css" MEDIA=screen>
        <link rel="shortcut icon" href="Public/favicon.ico">
    </head>
    <body>
        <!-- Body box -->
        <div class="user-box">
            <!--user menu Box -->
            <div class="user-menu">

            </div>
            <!--Content Box -->
            <div class="user-content">
                <div class="user-title"><h3>Proyectos</h3></div>
                <?php
                    $directorio = opendir(".");
                    echo '<a href="/phpmyadmin/">';
						echo '<div class="user-info">';
							echo '<span>PhpMyAdmin</span>';
							echo '<i class="fa fa-archive"></i>';
						echo '</div>';
					echo '</a>';
                    while($archivo = readdir($directorio)){    
                        if(is_dir($archivo) && $archivo!="." && $archivo!=".." && $archivo!="Public" && $archivo!="404"){
                            echo '<a href="'.$archivo.'"/>';
                                echo '<div class="user-info">';
                                    echo '<span>'.$archivo.'</span>';
                                    echo '<i class="fa fa-chevron-right"></i>';
                                echo '</div>';
                            echo '</a>';
                        }
                    }
                    closedir($directorio); 
                ?>
                <div class="user-info"><strong>By: </strong>
                    <span>David Bonet Daga</span>
                </div>
            </div> 
        </div>
    </body>
</html>
