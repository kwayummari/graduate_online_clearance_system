<?php 
if($role == '1'){
  include 'admin-aside.php';
} else if($role == '2'){
  include 'student-aside.php';
}
else if($role == '3'){
  include 'convacation-aside.php';
}
?>