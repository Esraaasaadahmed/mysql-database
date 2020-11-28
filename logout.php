<?php
//start session
session_start();

unset($_SESSION['username']);


//destroy
session_destroy();
header('Location: account.php');
?>
