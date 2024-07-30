
<?php include('header.php'); ?>
<?php include('session.php'); ?>

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
	$result=mysql_query("select * from post_notices LEFT JOIN head on head.head_id = post_notices.head_id
	LEFT JOIN instructor on instructor.head_id=post_notices.head_id 
	where instructor.Inst_id= '$session_id' order by post_id DESC ") or die( mysql_error());

	$result=mysql_query("select *,UNIX_TIMESTAMP() - date AS TimeSpent from post_notices  order by post_id DESC ") or die( mysql_error());

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
 
 	<?php

			 $username =$row["usernam"];
		if($username == 'jems' || $username == 'zeki')
		{									
		 
	 
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
			 <p class="search-desc"> <?php echo $string;?>...<a  style="color:red;" href="read.php?ID=<?php echo $news_id;?>">Read More</a>  </p>
			
		</div>
		<br>
		
		
		
<?php
	}
?>
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
