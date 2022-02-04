<?php 

    require_once "conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `todo` WHERE id =$id";

    if(!mysqli_query($conn,$sql)){
        echo "delete fail";
    }else{
        header("location:read.php");
    }

?>