<?php
include '../../connection/index.php';

  $query="select * from user where role = '1'";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);
  $total_admin = mysqli_num_rows($result);

  $query="select * from user where role = '2'";
  $result1=mysqli_query($connect,$query);
  $count1=mysqli_fetch_assoc($result1);
  $total_student = mysqli_num_rows($result1);

  $query="select * from user";
  $result4=mysqli_query($connect,$query);
  // $count=mysqli_fetch_assoc($result4);
  $total_users = mysqli_num_rows($result4);

 ?>