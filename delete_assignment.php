<?php
include('admin/connect.php');
$id = $_POST['id'];
mysql_query("delete from assignment where ass_id = '$id' ")or die(mysql_error());
?>
