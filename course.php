<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="course.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
      input {
    background-color: cornflowerblue;
    border-radius:5px;
    color:white;
    font-size:24px;
    height:40px;
}
    </style>
</head>

<body style="background-image: url(https://html5book.ru/wp-content/uploads/2015/05/background9.jpg);">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="main.php">COURSERA.KZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="course.php">Courses</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <!-- <a class="btn btn-sm btn-outline-secondary" style="background-color:red;color:white" href="#">Sign up</a> -->
    <?php
    if(isset($_SESSION["login"]))
    {
        echo '<a class="btn btn" style="background-color:red;color:white" >'.$_SESSION["login"].'</a>';
        echo '<br/><br/><a style="color:white"href="logout.php">Logout</a>';
    }
    else
    {
        header("Location:login.php");
    }
    ?>
    
  </div>
</nav>
<br><br><br>
<?php 
require_once('dbase.php'); 
$stmt = $pdo->query("SELECT * FROM goods");
?>
<?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
?>
<center>
<div class="container">
      <div class="row">
        <div class="col-md-12 mt-3">
          <div class="card">
        <center><img src="<?php echo $row['image']; ?>"style="margin-top:5px" width="250px" height="250px" alt="Course images"></center>
        <div class="card-body">
        <h2 class="card-tittle" ><?php echo $row['name']?></h2>
          <h3 class="card-tittle" style="font-size:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:red"><?php echo $row['price']?> ₸</h3>
          <p class="card-text" style="font-size:26px">
          <?php echo $row['description']?>
          </p>
          <input type="submit"  value="Add to basket">
        </div>
      </div>
    </div>
      </div>
    </div>
    
</center>
    
    
<?php
  }

  ?>
