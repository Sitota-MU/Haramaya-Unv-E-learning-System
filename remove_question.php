<?php include('admin/connect.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from quiz where id = '$id'")or die(mysql_error());
?>
