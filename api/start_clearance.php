<?php
include '../connection/index.php';
$today = date('Y-m-d');
  $query="insert into clearance (student_id,stage,status,remarks,date) values('$user_id','1','1', '0','$today')";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>