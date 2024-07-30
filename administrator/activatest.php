<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update student set student_stat = 'activated' where student_id = '$get_id'");
header('location:students.php');
?>