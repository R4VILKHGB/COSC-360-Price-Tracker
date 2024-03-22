<?php 
session_start();
$_SESSION["currentUser"] = null;
header('Location: home.php');
exit();
?>