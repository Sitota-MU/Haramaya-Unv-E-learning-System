<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Change password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['change'])){
$d=$_POST['name'];
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","quiz");
$connect=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connect)
{
die("connection is fail".mysql_error());
}
$select=mysql_select_db(DB_NAME,$connect);
if(!$select){
die("database selection is failed".mysql_error());
}
if(isset($_POST['change']))
{
$w=$_POST['name'];
$y=$_POST['pass'];
$x1="update mst_user set pass='$y' WHERE username='$w'";

$b=mysql_query($x1);
if(!($b))
{
die("selection failed".mysql_error());
}
echo"you are successfully updated";
mysql_close($connect);
}
}
?>
<table width="100%" border="0">
   <tr>
     <td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>
     <td width="468" height="57"><h1 align="center"><span class="style8">Change your password</span></h1></td>
   </tr>
   <tr>
     <td><form name="form1" method="post" action="changeuser.php" onSubmit="return check();">
       <table width="301" border="0" align="left">
	   <tr>
           <td class="style7">Username</td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td><div align="left" class="style7">Old password </div></td>
           <td><input type="text" name="pass"></td>
         </tr>
         <tr>
           <td class="style7"> New Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
		 <tr>
           <td></td>
           <td><input type="submit" name="change" value="change">
		   <td><input type="reset" name="cancel" value="cancel">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>

</body>
</html>
	