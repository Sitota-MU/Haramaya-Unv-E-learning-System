<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_faculty.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Faculty List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_Faculty.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#faculty_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete_fac.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>ID</th>
												<th>Faculty Name</th>
												<th>Dean Name</th>
												<th>Date</th>
											
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from faculty")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['faculty_id'];
													?>
									
													<tr><td width="30">
														<input id="optionCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['faculty_id']; ?></td>
														<td><?php echo $row['name']; ?></td>
														
														<td><?php echo $row['dean_name']; ?></td>
														<td><?php echo $row['date']; ?></td>
												
														<td width="30"><a href="edit_faculty.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>

                               
													</tr>
													
													
												<?php } ?>
												
										</tbody>
									
										
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