<?php
include '../connection/index.php';
$id = base64_decode($_GET['id']);
$query = "SELECT percent FROM clearance WHERE id = '$id'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$currentValue = $row['percent'];

// Add 1 to the current value
$newValue = $currentValue + 1;
$query1="update clearance set status = '0', percent = '$newValue', bursar = '1' where id = '$id'";
  $insert=mysqli_query($connect,$query1);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>