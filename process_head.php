<?php
session_start();
include_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
					
					$result = mysqli_query($conn , "select * from user where username='$email' and password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$name = $row['username'];
						}
					
					
					if(mysqli_num_rows($result)>0){
						echo "success";
						$_SESSION['username'] = $email;
						$_SESSION['password'] = $password;
						$_SESSION['name'] = $name;
						
						$query = mysqli_query($conn,"UPDATE user
SET user_status = '1'
WHERE username = '$email';");
						
						header('location: chatroom_head.php');
						
						}
						else {
							echo "failed";
							header('location: forum.php?login_error=<span style="color:red">Username or password is wrong</span>');
							}	
					
	

 ?>