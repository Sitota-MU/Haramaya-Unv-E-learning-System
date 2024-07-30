<?php include('admin/connect.php'); ?>
<?php
$id = $_POST['id'];
mysql_query("delete from post_notices where post_id = '$id'")or die(mysql_error());
?>
