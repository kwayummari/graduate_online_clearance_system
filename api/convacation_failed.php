<?php
include '../connection/index.php';
$id = $_POST['id'];
$remarks = $_POST['remarks'];
$query="update clearance set status = '2', remarks = '$remarks' where id = '$id'";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>