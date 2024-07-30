<script>
function getcity(id) {
			xhr = new XMLHttpRequest();
			xhr.open('GET' , 'test.php?idd='+id, true);
			xhr.send();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status==200){
					document.getElementById("city_display").innerHTML = xhr.responseText;
					}
			
				}


}

function getEmail(emailid){

			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				
				}
	
	
	}
	
	
	function password (pass){
	var a =	document.getElementById('pass1').value;
	//	document.write(a);
		var b = document.getElementById('pass2').value;
		if (a == b ){
			document.getElementById('cnfrmpass').innerHTML = "<font color='#00CC00'>Matched</font>";
			}
			else {
				
				document.getElementById('cnfrmpass').innerHTML = "<font color='red'>Miss matched</font>";
				}
		}

</script>




<?php if( isset($_GET['logout_successfully'])){ ?><?php echo $_GET['logout_successfully']; ?>
<?php } ?>




<form method="post" action="process.php">
<table><tr>
<td colspan="2"><center> <h1>Login</h1></td>
</tr>

<tr>
<td>
Email : </td><td><input type="text" name="email"  /></td></tr><tr>
<td> Password : </td><td><input type="password" name="password" /></td></tr>
<tr><td colspan="2"><center> <input type="submit" name="loginbtn" /></td></tr></table>
<?php if( isset($_GET['login_error'])){ ?><?php echo $_GET['login_error']; ?>
<?php } ?>
</form> 