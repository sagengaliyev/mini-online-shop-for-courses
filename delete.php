<?php

 $connect = mysqli_connect("localhost", "user7", "12345678", "week8");  
 $sql = "DELETE  FROM goods WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>