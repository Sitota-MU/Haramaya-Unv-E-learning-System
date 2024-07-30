<?php

		include('admin/connect.php');
		session_start();
		$_SESSION['message']='';
		if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query_users = mysql_query("SELECT * FROM head WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_users = mysql_num_rows($query_users);
		$row_users = mysql_fetch_array($query_users);
		
		
		  if ($num_row_users > 0){
		$_SESSION['id']=$row_users['head_id'];
	   if($row_users['dep_head_status']=='activated')
		{
		/*mysql_query("insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row_users['head_id'].")")or die(mysql_error());*/
		
		 
		/*mysql_query("insert into user_login (username,login_date)values('$username',NOW()")or die(mysql_error());
		
	*/?>
					<script>
alert('wellcome to Department Head panal');
</script>
		<?php
		echo"<script>window.location='head_index.php';</script>";
		 
		  } 
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
		}		
		  
		?>