<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_stud.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN groupe ON groupe.group_id = teacher_class.group_id
										LEFT JOIN groupe2 ON groupe2.group_id = teacher_class.group_id
									where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										$class_id = $class_row['class_id'];
										$school_year = $class_row['school_year'];
										?>
				
					     <ul class="breadcrumb">
							
							<li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Assignment</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 	$query = mysql_query("select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysql_error());
									$count = mysql_num_rows($query);
							?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
								<?php
									$query = mysql_query("select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysql_error());
									$count = mysql_num_rows($query);	
								if ($count == '0'){ ?>
								<div class="alert alert-info"><i class="icon-info-sign"></i> No project material currently uploaded.</div>
								<?php
								}else{
								?>
								
									<form action="copy_file_student.php" method="post">
								
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-info" name=""><i class="icon-copy"></i> Copy Check item to backup</a>
									
									<?php include('copy_to_backpack_modal.php'); ?>
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
						
										<thead>
										        <tr>
												<th></th>
												<th>Date Upload</th>
												<th>File Name</th>
												<th>Description</th>
												<th>Uploaded by</th>
												<th></th>
												
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
										$id  = $row['file_id'];
									?>                              
										<tr>
										<td width="30">
											<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                             
										 <td><?php echo $row['fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                      
                                         <td><?php echo $row['uploaded_by']; ?></td>                                      
                                         <td width="30">
										 <a  data-placement="bottom" title="Download" id="<?php echo $id; ?>Download" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
										 </td>            
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>Download').tooltip('show');
															$('#<?php echo $id; ?>Download').tooltip('hide');
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
                </div>
				<?php include('downloadable_sidebar_student.php'); ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>