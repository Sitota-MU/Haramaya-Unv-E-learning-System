<?php
include('admin/connect.php');
if (isset($_POST['delete_instructor'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM instructor where Inst_id='$id[$i]'");
}
header("location: instructor.php");
}
?>