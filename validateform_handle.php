<?php
  
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}
$username=$_POST['username'];
$username=cleanData($username);
$password=$_POST['password'];
$password=cleanData($password);
$email=$_POST['email'];
$email=cleanData($email);
$is_right_data=true;
if(strlen($username)<=8)

{
    echo"you have to enter right username format <br/>";
    $is_right_data=false;
}
if(strlen($password)<=8)
{
    echo"you have to enter right password format <br/>";
    $is_right_data=false;
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo"you have to enter right email format <br/>";
    $is_right_data=false;
}
if($is_right_data)
{
  session_start();

//check db 
//save to session
$_SESSION['username']=$username;
$_SESSION['email']=$email;
$_SESSION['password']=$password;
$_SESSION['isLoggedIn']=true;

    header('location: header.php');
}


?>