<?php
    session_start();
    
    if(!isset($_SESSION["username"])) {
        header("Location: 5.login.php");
        exit();
    }
?>