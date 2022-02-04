<?php
require_once "conn.php";


if(isset($_GET["add"])){
    $message = $_GET['message'];
    $sql = "INSERT INTO todo (message) VALUES ('$message')";
if(mysqli_query($conn,$sql)){
    header("location:create.php");
}else{
    echo "fail";
}
}

?>

<form  method="get">
    <input type="text" name="message" required>
    <button name="add">add</button>
</form>