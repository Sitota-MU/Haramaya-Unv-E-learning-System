<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_head.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('head_sidebar.php'); ?>
                <div class="span5" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
																<?php $class_query = mysql_query("select * from user
										LEFT JOIN head ON head.head_id= user.head_id
							
									where Inst_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										?>
	
				
					     <ul class="breadcrumb">
			
							<li><a href="#"><b>Announcements</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul class="nav nav-tabs">
										<li  class="active">
											<a href="head_announcements.php">For Instructor</a>
										</li>
											<li>
											<a href="head_announcements_student.php">For Student</a>
										</li>
										
									</ul>
									
								<form method="post" action="head_announcements.php"  onsubmit="return validateForm()">
								<div class="control-group">
			                   <label class="control-label" for="post_title">Title:</label>
			                    <div class="controls">
			                   <input type="text"  name="post_title" maxlength="10" required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('Name must be aletter and  above three letter  ')" onchange="try{setCustomValidity('')}catch(e){}"   placeholder="title of noties">
			                    </div>
								<textarea name="content" id="ckeditor_full"></textarea>
								<br>
	                         	<button name="submit" type="submit" class="btn btn-info" ><i class="icon-save icon-large"></i>Post </button>
	

								</form>
									



                                </div>
								</div>
								
								
								
								<?php	
		if(isset($_POST['submit'])){							
	    //$post_id = $_POST["post_id"];					
		$date = date('y-m-d');
		$post_title = $_POST["post_title"];
		$post_content=$_POST['content'];
		$id=$row['username'];
		$datee = date('y-m-d');
         $da = date('y-m-d', strtotime($datee. ' + 1 days'));
		 $st = "posted";
		 $stu = "post";
		
		
				mysql_query("insert into  post_notices (date,deadline,head_id,post_title,post_content,usernam,status,statu)
				values('$date','$da','$session_id','$post_title','$post_content','$id','$st','$stu') ")or die(mysql_error());	
		?>
									<script>
			         alert('announcement inserted sucessfully')
									
									window.location = 'head_announcements.php<?php echo '?id='.$get_id; ?>';
									</script>
									<?php
									}
								?>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				
				<div class="span4 row-fluid">
						       <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								 <?php
								 $query_announcement = mysql_query("select * from   post_notices where head_id='$session_id'  order by date DESC
																	")or die(mysql_error());
								 while($row = mysql_fetch_array($query_announcement)){
								 $id = $row['post_id'];
								 ?>
											<div class="post"  id="del<?php echo $id; ?>">
											<?php echo $row['post_content']; ?>
										
											<hr>
											
										
											<strong><i class="icon-calendar"></i> <?php echo $row['date']; ?></strong>
											
											<div class="pull-right">
											<a class="btn btn-link"  href="#<?php echo $id; ?>" data-toggle="modal" ><i class="icon-remove"></i> </a>
											</div>
								
											<div class="pull-right">
												<form method="post" action="edit_post.php<?php echo '?id='.$get_id; ?>">
												<input type="hidden" name="id" value="<?php echo $id; ?>">
												<button class="btn btn-link" name="edit"><i class="icon-pencil"></i> </button> 
												</form>
											</div>	
											
											</div>
								<?php include("remove_sent_message_modal.php"); ?>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


					<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_announcements.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Post is Successfully Deleted", { header: 'Data Delete' });
		
			}
			}); 
			
			return false;
		});				
	});

</script>
					
                </div>
				
			
            </div>
			
		
		
		</div>
			<div class="container">
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>