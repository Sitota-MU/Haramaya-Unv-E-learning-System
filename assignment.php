<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

        <body id="class_div">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
				<div class="span5" id="content">
                     <div class="row-fluid">
						<div class="pull-right">
							<a href="add_text.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Text Resource</a>
							<a href="my_course.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add video</a>
							<a href="add_quiz.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Quiz</a>
						</div>
						</div>
					
				<?php include('add_assignment.php'); ?>		   			
				
				<div class="span4 row-fluid">
						       <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								 <?php
								 $query_announcement = mysql_query("select * from  assignment where course_code='$get_id'")or die(mysql_error());
								 while($row = mysql_fetch_array($query_announcement)){
								 $id = $row['ass_id'];
								 ?>
											<div class="post"  id="del<?php echo $id; ?>">
											
											
											<?php echo $row['file']; ?>
										
											<hr>
											
										
											<strong><i class="icon-calendar"></i> <?php echo $row['datesub']; ?></strong>
											
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
								<?php include("remove_assignmentt_message_modal.php"); ?>
								<?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					</div>


					<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_assignment.php",
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