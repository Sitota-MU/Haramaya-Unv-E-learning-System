<?php
include('admin/connect.php');
$id = $_POST['id'];
mysql_query("delete from files where file_id = '$id' ")or die(mysql_error());
?>
