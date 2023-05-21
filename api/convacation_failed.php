<?php
if (isset($_POST['submit'])) {
$id = $_POST['id'];
$remarks = $_POST['remarks'];
$query="update clearance set status = '2', remarks = '$remarks' where id = '$id'";
  $insert=mysqli_query($connect,$query);
  if($insert) {
    echo "Remarks updated successfully";
} else {
    echo "Failed to update remarks";
}
}
 ?>