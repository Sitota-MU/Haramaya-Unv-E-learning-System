<?php
include('admin/connect.php');
if (isset($_POST['delete_head'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM head where head_id='$id[$i]'");
}
header("location: dept_heads.php");
}
?>