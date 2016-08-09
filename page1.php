<?php 
session_start();

$_SESSION['abc'] = 343434;
header('location:page2.php');
?>