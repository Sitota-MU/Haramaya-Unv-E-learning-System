<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php

 $get_id1 = $_POST['id'];
 ?>
    <body>
		<?php include('navbar_head.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('head_sidebar.php'); ?>
                <div class="span9" id="content">
				
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
								<a href="head_announcements.php<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left icon-large"></i> Back</a>
								<br>
								<br>
								<form method="post">
									 <?php
								 $query_announcement = mysql_query("select * from post_notices
																	where head_id = '$session_id' and post_id = '$get_id1'  and Inst_id = '$get_id' order by date DESC
																	")or die(mysql_error());
								$row = mysql_fetch_array($query_announcement);
								 $id = $row['post_id'];
								 ?>
								 <input type="hidden" name="id" value="<?php echo $id; ?>">
								<textarea name="content" id="ckeditor_full">
								<?php echo $row['post_content']; ?>
								</textarea>
								<br>
								<button name="post" class="btn btn-info"><i class="icon-check icon-large"></i> Post</button>
								</form>
                                </div>
								
								<?php
									if (isset($_POST['post'])){
									$content = $_POST['post_content'];
									$id = $_POST['post_id'];
									
									mysql_query("update post_notices set post_content = '$content' where post_id = '$id' ")or die(mysql_error());
									?>
									<script>
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