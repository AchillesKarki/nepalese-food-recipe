<?php
    if($_GET['logout'] == 1){
        session_start();
        session_unset();
        session_destroy();
        setcookie("rememberme", "", time() - 3600); //past time deko so that cookie had expired.
        header("location:index.php");
        }
?>