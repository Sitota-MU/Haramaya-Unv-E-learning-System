<?php
session_start();
 ?>
<script>
	
function getText() {
		
	var $a =	document.getElementById('text').value;
	
		xhr = new XMLHttpRequest();
		xhr.open('POST' , 'chatdb.php',true);
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send('chat='+$a);
		xhr.onreadystatechange=function(){
			if (xhr.responseText){
			//	document.getElementById('chatarea').innerHTML=xhr.responseText;
									}
				}
					}
		

function setText(){
	
	xhr = new XMLHttpRequest();
	xhr.open('POST' , 'chatFetch.php' , true);
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr.send();
	xhr.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('chatarea').innerHTML = xhr.responseText;
			}
		
	}
	setInterval("setText()",2000);
	
	
setInterval("users()",3000);

	
	
		
		
</script>
<?php

include_once('config.php');
				//	echo		$_SESSION['email'];
				//	echo	$_SESSION['password'];
		
					
					
						
if (isset($_GET['logout'])){
	$result = mysqli_query($conn, "UPDATE user
SET user_status = '0'
WHERE user_email = '$_SESSION[email]';");
session_destroy();
header('location: practice.php?logout_successfully=<span style="color:green">You have successfully Logged Out.</span>');
	
	}

?>
<form action="">
<input type="submit" name="logout" value="logout">
</form>
<div id="chatbox">

<div id ="chatarea">
</div>

<div id="loginperson">
</div>

<div id="textbox">
<form>
<textarea   rows="4" cols="90" id="text"></textarea>
<input type="button" value="send"  onclick="getText()" />
</form>
</div></center>

</div>
<style>
#chatbox
{		
			border:double;
			height:500px;
			width:1000px;
			align;
			
			}
			#chatarea {
				width:750px;
				height:400px;
				border:double;
				background-color:yellow;
				float:left;
				overflow:auto;

				}
				#loginperson {
					width:238px;
					height:497px;
					border:double;
					float:right;
					background-color:blue;}
					#textbox {
						width:700px;
						height:89px;
						border:double;
						float:left;
						color:yellow
						}
						#chatting {
							float:left;
							}
</style>
<?php
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		//session_destroy();
		header('location: practice.php');
		}

 ?>
 
 
 
 