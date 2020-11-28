<?php
//session 
session_start();
if(isset($_SESSION['email']))
{
    header('Location: singin.php');
}
elseif(!isset($_SESSION['email']))
{
    header('Location: singin.php');

}
?>
