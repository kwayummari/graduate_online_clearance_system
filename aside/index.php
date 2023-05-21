<?php 
if($role == '1'){
  include 'admin-aside.php';
} else if($role == '2'){
  include 'student.php';
}
else {
  include 'convacation-aside.php';
}
?>