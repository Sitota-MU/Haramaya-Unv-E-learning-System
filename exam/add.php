<?php	
	include "connect.inc";
	$fName = $_POST["fName"];
	$lName = $_POST["lName"];
	$mName = $_POST["mName"];
	$username = $_POST["userName"];
	$password = $_POST["password"];
	$cpass = $_POST["cpass"];
	$user = $_POST["user"];
	$users = mysql_query("select * from user where userName = '$username'");
	$rows = mysql_fetch_array($users);
	if($lName == "" || $fName == "" || $username == "")
		echo '<br><font color = "red" >You have to fill all the required fields</font>';
	/*se
	{
	if($rows == NULL && $password == $cpass)
	{
	        mysql_query("insert into user(fName,lName,mName,userName,password,user) values('$fName', '$lName','$mName', '$username', '$password', '$user')");
			echo "<br><font color = "."green".">The user ".$fName."(<i>user name = ".$username.") is Added";
	}
	else if($rows != NULL)
	{
		echo '<br><font color = "red" >A user with this username already exists</font>';
	}
	else
	{
		echo '<br><font color = "red" >Password did not match</font>';
*/
?>