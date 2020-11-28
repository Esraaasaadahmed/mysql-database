<?php
//session start
session_start();
if(!isset($_SESSION['username']))
    header('Location: singin.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    
    <link href="css/style.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>


<!-- first nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">C&O</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link text-white" action="index.php" method="post" href="index.php">customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="form_id.php">search_ids</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="form_city.php">City_name</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="form_product.php">Product_name</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="singin.php">Login</a>
      </li>
      
      </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link  text-white" action="index3.php" method="post" href="index3.php"> N_Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white"  action="index3.php" method="post" href="index4.php">H-Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" action="index3.php" method="post" href="index5.php">S-join</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="form_search.php">search_name</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="form_id.php">search_ids_customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-white" href="logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>
<!-- start home -->
<header class="Home" id="home">
    <div class="layer d-flex justify-content-center align-items-center text-center text-white">
      <div class="caption">
        <h2>Welcome To My MySQL</h2>
      </div>
    </div>  
  </header> 
<script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/popper.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>    
</body>
</html>