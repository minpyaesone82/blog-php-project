<?php 
    if($_SESSION["users"]['role'] != 0){
        header("location: dashboard.php");
    }