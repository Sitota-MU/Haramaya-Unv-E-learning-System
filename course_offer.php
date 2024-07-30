<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_head.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('head_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_course.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">course List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_course.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<a data-toggle="modal" href="#course_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>
											    <th></th>
												<th>Course Name</th>
												<th>Course Code</th>
												<th>INST ID</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
							<?php
													$user_query = mysql_query("select * from course")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['course_code'];
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['title']; ?></td>
														<td><?php echo $row['course_code']; ?></td>
														<td><?php echo $row['Inst_id']; ?></td>
														
												
														<td width="30"><a href="edit_course.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>

                               
													</tr>
												<?php } ?>					</tbody>
										</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
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