<?php include('header.php'); ?>
<?php include('session.php'); ?>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
				


               <div class="span9" id="content">
						<div class="row-fluid"></div>
					

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

	
	function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'userFetch.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('loginperson').innerHTML = xhr1.responseText;
			}
		
		
		}
		
		
</script>
<?php

include_once('config.php');
				//	echo		$_SESSION['email'];
				//	echo	$_SESSION['password'];
		
					echo	$_SESSION['name'];	
						
if (isset($_GET['logout'])){
	$result = mysqli_query($conn, "UPDATE user
SET user_status = '0'
WHERE username = '$_SESSION[username]';");
session_destroy();
header('location: forum.php?logout_successfully=<span style="color:green">You have successfully Logged Out.</span>');
	
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
<textarea   rows="3" cols="50" id="text"></textarea>
<input type="button" value="send"  onclick="getText()" />
</form>
</div></center>

</div>
<style>
#chatbox
{		
			border:double;
			height:400px;
			width:800px;
			align;
			
			}
			#chatarea {
				width:600px;
				height:300px;
				border:double;
				
				float:left;
				overflow:auto;

				}
				#loginperson {
					width:188px;
					height:300px;
					border:double;
					float:right;
				}
					#textbox {
						width:70px;
						height:89px;
						border:single;
						float:left;
					
						}
						#chatting {
							float:left;
							}
</style>

        </div>
				</div>
				</div>
				</div>
				</div>
				</div>
            
			 <div class="container">
		<?php include('footer.php'); ?>
      </div>
		<?php include('script.php'); ?>
 
 
 
 