

<?php
include('admin/connect.php');
include('session.php');
/*mysql_query("update user_log set logout_Date = NOW() ")or die(mysql_error());
*/
 session_destroy();
header('location:../administrator/index.php');
?>