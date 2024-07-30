
<?php include('header.php'); ?>

<?php

		include('session.php');?>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
                <div class="span5" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
				 <div id="block_bg" class="block">
					     <ul class="breadcrumb">
		
							<li><a href="#"><b>Announcements</b></a></li>
							
						</ul>
						</div>
						




	
		<?php
			$_SESSION['message']='';
		
		$query_inst = mysql_query("SELECT username  FROM instructor  ")or die(mysql_error());
		$num_row_inst = mysql_num_rows($query_inst);
		$row_inst = mysql_fetch_array($query_inst);
        $user =$row_inst['username'];
		
		  
		$_SESSION['user']=$user;
		$_SESSION['user']=$user;
	$result=mysql_query("select head_id from instructor where username='$user'") or die( mysql_error());
	$row = mysql_fetch_array($result);
	$head_id=$row['head_id'];
	?>
	
	<?php
	$statu="post";
									$dese = mysql_query("SELECT * FROM post_notices WHERE head_id='$head_id' and  statu='$statu' ")or die( mysql_error()); 
										  $X=0;
										  while($de = mysql_fetch_array($dese)){
											$statu=$de['statu'];
											if($statu=="post"){
											$X++;
											}
											else{
											$X=0;
											}}?>
							<?php 
							echo"";
		                  echo"<font face='times new roman' size='5px' color='blue'>";
			           echo'There is &nbsp;'.$X.'&nbsp; new announcement.';
			          echo"</font>";
			              echo"</script>";
			                 echo"";?>
	<?php
	$result=mysql_query("select * ,UNIX_TIMESTAMP() - date AS TimeSpent from post_notices where head_id='$head_id' order by post_id DESC ") or die( mysql_error());

		 $array = array();					
		 
	while($row = mysql_fetch_array($result)){
		 $array[] = $row;
		$string=$row["post_content"];
		 $news_id=$row['post_id'];
		
		 $string = strip_tags($string);

                                          if (strlen($string) > 250) {
										    $stringCut = substr($string, 0, 250);
                                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                                               }
		?>
 
 	
 
                              

                            <div class="navbar navbar-inner block-header">

						       <!-- block -->
                     
		 		   
		<div class="postTitle">
	
			<div class="innerTitle"> 
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
					
					echo $row["post_title"];
					
				?>
				
			<hr>
			</div>
			
			<div class="postBasicInfo">
				<?php
					echo "<i><b>Post by</b> <b>".$row["usernam"]."</b> <b>on</b> <b> ".$row["date"]."</b> </i>";
					
				?>
				<hr>
				
			</div>
		</div>
		<div class="postPost">
			 <p class="search-desc"> <?php echo $string;?>...<a  style="color:red;" href="read.php?ID=<?php echo $news_id;?>">Read More</a>  </p>
			
		</div>
		</div>
		<br>
		
		
		
<?php
	}
?>

<?php

$sqls=mysql_query("select * from post_notices where status ='posted'")or die(mysql_error());
								while($no=mysql_fetch_array($sqls)){
									$deadline=$no['deadline'];
								$mysql=mysql_query("DELETE FROM post_notices WHERE deadline < NOW()");	
								}
?>
		
		
</div>
</div>
<div>
</div>
<div>
</div>
</div>
</div>
</div>
</div>
</div>
