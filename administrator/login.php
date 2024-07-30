<?php

		include('admin/connect.php');
		session_start();
		$_SESSION['message']='';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query_users = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_users = mysql_num_rows($query_users);
		$row_users = mysql_fetch_array($query_users);
		
		
		  if ($num_row_users > 0){
		$_SESSION['id']=$row_users['admin_id'];
		 
		mysql_query("insert into user_login (username,login_date,admin_id)values('$username',NOW(),".$row_users['admin_id'].")")or die(mysql_error());
		
		?>
					<script>
alert('wellcome to admin panal');
</script>
		<?php
		echo"<script>window.location='admin_index.php';</script>";
		  mysql_query("insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['account_id'].")")or die(mysql_error());
		  } 
		else
		{
			?>
						<script>
alert('please correct your password and username');
</script>
			<?php
				                                
		   echo"<script>window.location='index.php';</script>";
		}	
		  
		?>