<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];
$connect=$db =mysqli_connect('localhost','root','','gocs')
or die("connection Failed");
?>