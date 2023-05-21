<?php
include '../connection/index.php';
$query="update clearance set status = '1', stage = '2', remarks = '-' where student_id = '$user_id'";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>