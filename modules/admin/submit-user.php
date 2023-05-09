<?php
 include 'connection/index.php';
if (isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $role=$_POST['role'];
  $password=$_POST['password'];
  $query="INSERT INTO user (firstname,lastname,email,role,password)
    values('$fname','$lname', '$email', '$role', '$password')";

  if(mysqli_query($connect,$query)) {
    echo "Succefully added user";
} else {
  echo "Failed adding user";
}

}
 ?>
