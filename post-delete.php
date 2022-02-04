<?php require_once "core/auth.php"; ?>
<?php require_once "core/base.php"; ?>
<?php 

    
    $id = $_GET['id'];
    $sql = "DELETE FROM post WHERE id =$id";

    if(mysqli_query(con(),$sql)){
        header("location:post-list.php");
    }

?>