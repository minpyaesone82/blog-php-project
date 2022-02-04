<?php require_once "core/auth.php"; ?>
<?php require_once "core/base.php"; ?>
<?php require_once "core/functions.php";?>
<?php 

    
    $id = $_GET['id'];

   if(categoryPin($id)){
        header('location:category-create.php');
    }
?>