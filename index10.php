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
<?php
$name=$_POST['name'];
$pass=$_POST['pass'];
//define server data
$serverName="localhost";
$dbUser="root";
$dbPassword='';
$dbName="monday_company";
//talk to db
$con=new mysqli ($serverName,$dbUser,$dbPassword,$dbName);
//if connection error
if($con->connect_error)
{
    die($con->connect_error);
}
//$limit=$_POST['limit'];
//run query
$queryString="ALTER TABLE customers
            ADD COLUMN username VARCHAR(100) NOT NULL,
            ADD COLUMN pass int(8) NOT NULL;
        INSERT INTO customers(username,pass)
        VALUES('esraa asaad','12345678')";
    $dbResult=$con->query($queryString);
    ?>
    <h2> Search By Id</h2>
    <?php
 while($row=mysqli_fetch_assoc($dbResult))
    {       
   echo $row ['customers.customerNumber']."".
    $row ['COUNT(orders.orderNumber)']."".
    $row ['customers.customerName'];      
    }

?>
<script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/popper.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script> 
    </body>
</html>