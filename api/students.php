<?php
include '../../connection/index.php';
  $query="select * from clearance where student_id = $user_id";
  $result4=mysqli_query($connect,$query);
  $total_clearance = mysqli_num_rows($result4);
 ?>