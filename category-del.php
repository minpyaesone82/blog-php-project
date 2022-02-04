<?php require_once "core/auth.php"; ?>
<?php require_once "core/base.php"; ?>
<?php 

    
    $id = $_GET['id'];
    $sql = "DELETE FROM categories WHERE id =$id";

    if(mysqli_query(con(),$sql)){
        header("location:category-create.php");
    }

?>