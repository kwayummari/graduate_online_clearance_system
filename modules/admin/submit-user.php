<?php
 include '../../connection/index.php';
if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $id_number=$_POST['id_number'];
  $password=base64_encode($_POST['password']);
  $query="INSERT INTO user (fullname,email,role,password,status,id_number)
    values('$fname', '$email', '$role', '$password', '1', '$id_number')";
  if(mysqli_query($connect,$query)) {
    echo "Succefully added user";
} else {
  echo "Failed adding user";
}
}
 ?>
