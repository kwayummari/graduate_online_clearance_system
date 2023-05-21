<?php 
if($role == '1'){
  include 'admin-aside.php';
} else if($role == '2'){
  include 'student.php';
}
else if($role == '3'){
  include 'convacation-aside.php';
} else if($role == '4') {
  echo 'convacation-aside.php';
} else if($role == '5') {
  echo 'convacation-aside.php';
}
?>