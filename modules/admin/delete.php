<?php
include '../../connection/index.php';
$id = base64_decode($_GET['id']);
$sql= "DELETE FROM user WHERE id= '$id'";
$result=mysqli_query($connect,$sql);
if ($result) {
                header('location: index.php');
             }
mysqli_close($connect);
?>