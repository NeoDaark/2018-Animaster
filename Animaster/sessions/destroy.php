<?php
    session_start();
    session_destroy();
    header('location: '.$directory.'/animaster'); 
?>
