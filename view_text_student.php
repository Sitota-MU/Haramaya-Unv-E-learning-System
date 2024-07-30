<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

        <body id="class_div">
		<?php include('student_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>

                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
						<div class="pull-right">
							<a href="view_video.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>View video</a>
							<a href="submit_assignment.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Submit Assignmet</a>
							<a href="take_quiz.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Take Quiz</a>
						</div>
						</div>
						<?php 
											$query = mysql_query("select Inst_id,course_code from student where stud_id = '$session_id'   ")or die(mysql_error());
										$count = mysql_fetch_array($query);
										$Inst_id=$count['Inst_id'];
										$course=$count['course_code'];
										?>
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
									$query = mysql_query("select *from files where course_code = '$course'  and Inst_id='$Inst_id' ")or die(mysql_error());
                                      $row = mysql_fetch_array($query);
										if ($row == '0'){ ?>
											<div class="alert alert-info"><i class="icon-info-sign"></i> Currently you did not upload any text tutorials</div>
						
									<?php	}else{
									?>  
  								<form  method="post">
								
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
											
										$query = mysql_query("select *from files where course_code = '$course'  and Inst_id='$Inst_id' ")or die(mysql_error());
										
                                      while($row = mysql_fetch_array($query)){
										$id  = $row['file_id'];
									?>                              
										<tr id="del<?php echo $id; ?>">
									<td><a data-placement="bottom" title="view" href="view_text.php?text=<?php echo $row['fname']; ?>">
			                  <?php echo $row['fname'];?> </td>
		
                                         <td><?php echo $row['fdesc']; ?></td>                                            
                                         <td width="40">
										 <a  data-placement="bottom" title="Download" id="<?php echo $id; ?>download" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
										
										 </td>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>download').tooltip('show');
															$('#<?php echo $id; ?>download').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>remove').tooltip('show');
															$('#<?php echo $id; ?>remove').tooltip('hide');
														});
														</script>
                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
									</form>
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
		
								
		<div class="container">
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
		
    </body>
</html>