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
}
} else {
  echo 'Wrong Identification number or password';
}
}
 ?>
