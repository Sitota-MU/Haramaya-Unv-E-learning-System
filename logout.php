

<?php
include('admin/connect.php');
include('session.php');
mysql_query("insert into user_login(logout_Date)values(NOW())")or die(mysql_error());
header('location:index.php');
?>