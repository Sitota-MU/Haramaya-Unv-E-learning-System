 <?php
 include('admin/connect.php');
 include('session.php');
 $new_password  = MD5($_POST['new_password']);
 mysql_query("update instructor set password = '$new_password' where Inst_id = '$session_id'")or die(mysql_error());
 ?>