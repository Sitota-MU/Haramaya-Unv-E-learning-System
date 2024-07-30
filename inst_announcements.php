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
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
							
                            </div>
                            <div class="block-content collapse in">
						
                                <div class="span12">
							
								<form method="post" action="postnotice.php" action="post>
								<div class="control-group">
			                   <label class="control-label" for="post_title">Title:</label>
			                    <div class="controls">
			                   <input type="text" id="post_title" name="post_title" class="validate[required,custom[onlyLetterSp],minSize[8],maxSize[40]] text-input" maxlength="40"  placeholder="title of News">
			                    </div>
								<textarea name="content" id="ckeditor_full"></textarea>
								<br>
								<button name="post" class="btn btn-info"><i class="icon-check icon-large"></i> Post To student</button>
								<button name="posttt" class="btn btn-info"><i class="icon-check icon-large"></i> Post  To  Teacher</button>
								</form>
                                </div>
								
								
							
									
								
								
								
			        
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


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
								$query_announcement = mysql_query("select * from head_announcement
																	where head_id = '$session_id'   order by date DESC
																	")or die(mysql_error());
								 while($row = mysql_fetch_array($query_announcement)){
								 $id = $row['announce_id'];
								 ?>
									
									<div class="post"  id="del<?php echo $id; ?>">
											<?php echo $row['content']; ?>
										
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