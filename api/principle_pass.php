<?php
include '../connection/index.php';
$id = base64_decode($_GET['id']);
$query="update clearance set status = '0', percent = '2', principal = '1', warden = '0', usab = '0', daruso = '0', library = '0', dean = '0', coach = '0', bursar = '0', card = '0', loan = '0' where id = '$id'";
  $insert=mysqli_query($connect,$query);
  if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
 ?>