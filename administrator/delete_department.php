<?php
include('admin/connect.php');
if (isset($_POST['delete_department'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM department where department_name='$id[$i]'");
}
header("location:department.php");
}
?>