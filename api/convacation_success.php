<?php
include '../connection/index.php';
$id = base64_decode($_GET['id']);
$query="update clearance set status = '0' where id = '$id'";
  $query="insert into clearance (student_id,stage,status,remarks) values('$user_id','1','1', '0')";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>