
<?php

		include('admin/connect.php');
		session_start();
		$_SESSION['message']='';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query_inst = mysql_query("SELECT * FROM student WHERE fname='$username' AND stud_id='$password'")or die(mysql_error());
		$num_row_inst = mysql_num_rows($query_inst);
		$row_inst = mysql_fetch_array($query_inst);
		
		
		  if ($num_row_inst > 0){
		$_SESSION['id']=$row_inst['stud_id'];
		
		
		$session=$_SESSION['id'];
			
	   

				/*mysql_query("insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row_inst['Inst_id'].")")or die(mysql_error());
		
*
		 
		/*mysql_query("insert into user_login (username,login_date)values('$username',NOW()")or die(mysql_error());
		*/?>
					<script>
alert('wellcome to Instructor panal');
</script>
		<?php
		echo"<script>window.location='student_index.php';</script>";
		  }
		
		else
		{
			?>
						<script>
alert('Login Failed Please Check your username and Password or Your account has been deactivate');
</script>
			<?php
				                                
		   echo"<script>window.location='index.php';</script>";
		}	
		  
		?>
								