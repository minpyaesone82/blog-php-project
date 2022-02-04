
<?php require_once "core/auth.php"; ?>
<?php include "template/header.php" ?>

    <h1>Dashboard page</h1>
    <?php  print_r($_SESSION['users']) ?>

<?php include "template/footer.php"?>