<?php
include '../../connection/index.php';
  $query="select * from clearance where stage = '2' and status = '1'";
  $result4=mysqli_query($connect,$query);
  $total_clearance = mysqli_num_rows($result4);
 ?>