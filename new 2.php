<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

        <body id="class_div">
		<?php include('student_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
				<div class="span5" id="content">
                     <div class="row-fluid">
						<div class="pull-right">
							<a href="view_video.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Text Resource</a>
							<a href="my_course.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add video</a>
							<a href="add_quiz.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Quiz</a>
						</div>
						</div>
					
					   			
				
	<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div id="downloadable_table.php" class="span12">
									<div class="pull-right">
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
								 <?php
								// $_SESSION['id']=$row_inst['stud_id'];
								// $_SESSION['id']=$id;
										$query = mysql_query("select Inst_id,course_code from student where stud_id = '$session_id'   ")or die(mysql_error());
										$count = mysql_fetch_array($query);
										$course=$count['Inst_id'];
											$id=$count['course_code'];
											?>
											
											<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
									<?php include('move_to_school_year.php'); ?>
										<thead>
										        <tr>
												<th>File Name</th>
												<th>Description</th>
												
												</tr>
												
										</thead>
										<tbody>
											<?php
											
										$query = mysql_query("select *from files where course_code = '$id'  and Inst_id='$course' ")or die(mysql_error());
										
                                      $count1 = mysql_fetch_array($query);
									  $id1=$count1['file_id'];
											$count1=$count1['fname'];
										
											?>
											<form action="copy_file.php" method="post">
											<tr id="del<?php echo $id1; ?>">
									<td><a data-placement="bottom" title="view" href="view_text.php?text=<?php echo $count1['fname']; ?>">
			                          <?php echo $count1['fname'];?> </td>
		
                                         <td><?php echo $count1['fdesc']; ?></td>                                            
                                         <td width="40">
										 <a  data-placement="bottom" title="Download" id="<?php echo $id1; ?>download" href="<?php echo $count1['floc']; ?>"><i class="icon-download icon-large"></i></a>
										 <?php include('delete_download_modal.php'); ?>
										 </td>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id1; ?>download').tooltip('show');
															$('#<?php echo $id1; ?>download').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id1; ?>remove').tooltip('show');
															$('#<?php echo $id1; ?>remove').tooltip('hide');
														});
														</script>
                               
                                </tr>
                         
						
						   
                              
										</tbody>
									</table>
									</form>
						
					
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
			url: "delete_file.php",
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
</div>
</div>
</div>
</div>
</div>
</div>

								
		<div class="container">
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
		
    </body>
</html>