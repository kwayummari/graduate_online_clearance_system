<?php 
error_reporting(E_ALL & ~E_WARNING);
session_start();
$role = $_SESSION['role'];
$user_id = $_SESSION['user_id'];
$connect=$db =mysqli_connect('localhost','root','','gocs')
or die("connection Failed");
?>