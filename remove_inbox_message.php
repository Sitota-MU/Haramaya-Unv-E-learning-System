<?php include('admin/connect.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from message where message_id = '$id'")or die(mysql_error());
?>

