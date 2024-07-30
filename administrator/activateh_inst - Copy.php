<?php
include('admin/connect.php');
$get_id = $_GET['id'];
mysql_query("update instructor set inst_status = 'activated' where inst_id = '$get_id'");
header('location:instructor.php');
?>