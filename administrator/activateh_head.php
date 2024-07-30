<?php
include('admin/connect.php');
$get_id = $_GET['head_id'];
mysql_query("update head set dep_head_status = 'activated' where head_id = '$get_id'");
header('location:dept_heads.php');
?>