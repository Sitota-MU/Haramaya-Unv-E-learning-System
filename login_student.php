<?php

		include('admin/connect.php');
		session_start();
		$_SESSION['message']='';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query_inst = mysql_query("SELECT * FROM instructor WHERE username='$username' AND password='$password'")or die(mysql_error());
		$num_row_inst = mysql_num_rows($query_inst);
		$row_inst = mysql_fetch_array($query_inst);
		
		
		  if ($num_row_inst > 0){
		$_SESSION['id']=$row_inst['Inst_id'];
		 
/*mysql_query("insert into user_login (username,login_date)values('$username',NOW()")or die(mysql_error());
		*/?>
					<script>
alert('wellcome to Instructor panal');
</script>
		<?php
		echo"<script>window.location='index_student.php';</script>";
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