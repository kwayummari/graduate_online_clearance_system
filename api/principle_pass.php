<?php
include '../connection/index.php';
$id = base64_decode($_GET['id']);
$query="update clearance set status = '0', percent = '2' where id = '$id'";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>