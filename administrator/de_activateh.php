<?php
include('admin/connect.php');
$get_id = $_GET['department_name'];
mysql_query("update department set dept_status = 'deactivated' where department_name = '$get_id'");
header('location:department.php');
?>