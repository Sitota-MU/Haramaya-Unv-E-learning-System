<?php
include('admin/connect.php');
$get_id = $_GET['Inst_id'];
mysql_query("update instructor set inst_status = 'deactivated' where Inst_id = '$get_id'");
header('location:instructor.php');
?>