<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Change your password </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  </script>
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php
include("header.php");
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
 <p>&nbsp; </p>
</body>
</html>