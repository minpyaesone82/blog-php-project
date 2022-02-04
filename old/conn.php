<?php 
    
    $conn = mysqli_connect("localhost","root","","my_list");
    if (!$conn){
        die("fail" . mysqli_connect_error());
    }
  ?>