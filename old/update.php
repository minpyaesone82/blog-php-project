<?php 
    require_once "conn.php";
    $id =$_GET['id'];
    $sql = "SELECT * FROM todo WHERE id=$id";
    $query = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($query);

    if(isset($_GET['update'])){
        $message = $_GET['message'];
        $id = $_GET['id'];
        $sql = "UPDATE todo SET message ='$message' WHERE id=$id";
        if(mysqli_query($conn,$sql)){
            header('location:read.php');
        }else{
            echo "fail";
        }
    }
?>

<form  method="get">
    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
    <input type="text" name="message" value="<?php echo $rows['message']?> " required>
    <button name="update">add</button>
</form>