<?php include('header_lo.php'); ?>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
	<div style="width:420px; height:300px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,1,0,0.4); margin-top:20px; color:blue; ">

  <form id="form1" name="login" method="POST" action="login_head.php" onsubmit="return validateForm()">
 <div style="background-color:gray;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 

 
 <div style="float:left;" ><strong><font color="white" size="2px">Department head Login</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:black; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="index.php" title="Close"><img src="admin/img/close_icon.gif"></a></div>
 
 
 </div>
 
 <p align="center"><img src="admin/img/kkk.gif" title="Member Login" width="80"></p>
  <table width="286" valign="top" align="center" border="0">
  
  <tr>

	       <td class='para1_text' width="300px" height="50px"> Username:</td><td>
		   <input type="text"   name="username"   required x-moz-errormessage="Enter Username" ></td>
		 
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red"></font>Password:</td><td><input type="password" name="password" required x-moz-errormessage="Enter password" ></td>
	     </td></tr>
		  
  <tr>
    <td>&nbsp;</td>
	<br>
    <td>	<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large">Login</button></td>
  </tr>
</table> 
  </form>
  </div>
<!--Php Script-->  
<


<!--End Body of section-->

                                
								
         
<

	
<?php include('script.php'); ?>
</body>
</html>