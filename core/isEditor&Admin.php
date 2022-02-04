<?php 
    if($_SESSION["users"]['role'] > 1){
        header("location: dashboard.php");
    }