<?php
session_start();
 include 'connection/login.php';
if (isset($_POST['submit'])) {
  $id_number=$_POST['id_number'];
  $password=base64_encode($_POST['password']);
  $query="select * from user where id_number='$id_number' and password='$password'";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);

  if($count) {
    $_SESSION['user_id'] = $count['id'];
    $_SESSION['role'] = $count['role'];
  if ($count['role'] == '1') {
      header("location: modules/admin/");
  } else if ($count['role'] == '2') {
    header("location: modules/students/");
} else if ($count['role'] == '3') {
    header("location: modules/convacation/");
} else if ($count['role'] == '4') {
  header("location: modules/college_principle/");
} else if ($count['role'] == '5') {
  header("location: modules/warden/");
} else if ($count['role'] == '6') {
  header("location: modules/usab/");
} else if ($count['role'] == '7') {
  header("location: modules/daruso/");
} else if ($count['role'] == '8') {
  header("location: modules/library/");
} else if ($count['role'] == '9') {
  header("location: modules/dean/");
} else if ($count['role'] == '10') {
  header("location: modules/coach/");
} else if ($count['role'] == '11') {
  header("location: modules/bursar/");
} else if ($count['role'] == '12') {
  header("location: modules/card/");
} else if ($count['role'] == '13') {
  header("location: modules/loan/");
}
} else {
  echo 'Wrong Identification number or password';
}
}
 ?>
