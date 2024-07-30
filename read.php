
<?php include('header.php'); ?>

<?php

		include('session.php');
	
		$_SESSION['message']='';
		
		$query_inst = mysql_query("SELECT username  FROM instructor  ")or die(mysql_error());
		$num_row_inst = mysql_num_rows($query_inst);
		$row_inst = mysql_fetch_array($query_inst);
        $user =$row_inst['username'];
		
		  
		$_SESSION['user']=$user;
		
	
	 ?>
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
		$_SESSION['user']=$user;
	$result=mysql_query("select head_id from instructor where username='$user'") or die( mysql_error());
	$row = mysql_fetch_array($result);
	$head_id=$row['head_id'];
	
	$result=mysql_query("select *  from post_notices where head_id='$head_id' order by post_id DESC ") or die( mysql_error());

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
 
 	
 <div id="block_bg" >
	<div class="block-content collapse in">
                                <div class="span12">
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
			 <?php echo $string;?>
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
