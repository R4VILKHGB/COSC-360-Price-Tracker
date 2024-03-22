<?php 
session_start();
$_SESSION["currentUser"] = null;
$_SESSION["acctType"] = 0;
header('Location: home.php');
exit();
?>