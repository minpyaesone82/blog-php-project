<?php 

    session_start();
    if(!$_SESSION['users']){
        header("location:login.php");
    }
?>