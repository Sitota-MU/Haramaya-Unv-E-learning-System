<?php 
include('admin/connect.php');
include('session.php');
?>

		
						  <?php
							$query=mysql_query("select * from head where head_id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                            <h3>
<?php	
		if(isset($_POST['submit'])){							
	    //$post_id = $_POST["post_id"];					
		$date = date('y-m-d');
		$post_title = $_POST["post_title"];
		$post_content=$_POST['post_content'];
		$id=$row['user_type'];
		$datee = date('y-m-d');
         $da = date('y-m-d', strtotime($datee. ' + 10 days'));
		 $st = "posted";
		 $stu = "post";
		
		
				mysql_query("insert into noticee (date,deadline,post_title,post_content,username,status,statu)
				values('$date','$da','$post_title','$post_content','$id','$st','$stu') ")or die(mysql_error());	
			echo"<script>alert('news posted successfully')</script>";
				echo "<script>windows: location='adminpagee.php?dis='</script>";
					
					
				
		}
		$sqls=mysql_query("select * from post_noticee where status ='posted'");
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
								$mysql=mysql_query("DELETE FROM post_noticee WHERE deadline < NOW()");	
								}
		?>