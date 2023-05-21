<?php
include '../connection/index.php';
$query="update clearance set status = '2'";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>