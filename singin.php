<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    
</head>
<body>
<form action="validateform_handle.php" method="post">
    <input type="text"  name="username" placeholder="username" class="form-control w-50"/>
    
    <br>
    <input type="password"  name="password" placeholder="password" class="form-control w-50"/>
    
    <br> 
        <input type="email"  name="email" placeholder="email" class="form-control w-50"/>
        
        <br> 
    <button type="submit" class="btn btn-primary" >Submit</button>
        <br>          
    </form>
    
    <script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/popper.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>

</html>

