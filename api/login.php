<?php
session_start();
 include 'connection/index.php';
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $password=base64_encode($_POST['password']);
  $query="select * from user where email='$email' and password='$password'";
  $result=mysqli_query($connect,$query);
  $count=mysqli_fetch_assoc($result);

  if($count) {
    $_SESSION['user_id'] = $count['id'];
    $_SESSION['role'] = $count['role'];
  if ($count['role'] == '1') {
    //   header("location: home/");
    echo 'admin';
  }
} else {
  echo 'Wrong email/ password';
}

}
 ?>
