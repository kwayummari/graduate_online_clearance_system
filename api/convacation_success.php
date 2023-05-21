<?php
include '../connection/index.php';
  $query="insert into clearance (student_id,stage,status,remarks) values('$user_id','1','1', '0')";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>