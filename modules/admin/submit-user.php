<?php
 include '../../connection/index.php';
if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $password=base64_encode($_POST['password']);
  $query="INSERT INTO user (fullname,email,role,password,status)
    values('$fname', '$email', '$role', '$password', '1')";
  if(mysqli_query($connect,$query)) {
    echo "Succefully added user";
} else {
  echo "Failed adding user";
}
}
 ?>