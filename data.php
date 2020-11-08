<?php
  $db_host = "localhost";
  $db_user = "user7";
  $db_password = "12345678";
  $db_name = "week8";

  $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

  if(mysqli_connect_error())
  {
    echo mysqli_connect_error();
    exit;
  }
  echo "connected successfully";
?>