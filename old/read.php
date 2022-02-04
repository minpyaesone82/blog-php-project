<?php 
 require_once "conn.php";
    $sql = "SELECT * FROM todo";
    $query = mysqli_query($conn,$sql);
   $total_row = mysqli_num_rows($query);
   
   echo "<ul>";
   while($rows= mysqli_fetch_assoc($query)){
      $time = date("g:i", strtotime($rows['created_at']));
      echo "<li>[ {$rows['id']} ]  {$rows['message']} [<a href='delete.php?id={$rows['id']}'>delete</a>] [<a href='update.php?id={$rows['id']}'>update</a>]  [$time]</li>";
   }

   echo "</ul>";
 ?>