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
$id=$_POST['id'];
echo $id;
//$limit=$_POST['limit'];
//run query
$queryString="SELECT * 
FROM customers
WHERE customerNumber=$id";
    $dbResult=$con->query($queryString);
    ?>
    <h2> Search By Id</h2>
    <?php
 while($row=mysqli_fetch_assoc($dbResult))
    {       
   echo $row ['customerName'].''."<br/>"
   . $row ['customerNumber'].''."<br/>"
   .$row ['city'].''."<br/>"
   .$row ['creditLimit'].''."<br/>"
   .$row ['country'].''."<br/>"
   .$row ['phone'].''."<br/>"
   .$row ['addressLine1'].''."<br/>".'<br/>';      
    }

?>
    <script src="bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/popper.min.js"></script>
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script> 
    </body>
</html>