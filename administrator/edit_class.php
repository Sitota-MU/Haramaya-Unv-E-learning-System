<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_class_form.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">class List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_department.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#department_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>ID</th>
												<th>class name</th>
												<th>Department</th>
												
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from class ")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['class_id'];
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['class_id']; ?></td>
														
														<td><?php echo $row['class_name']; ?></td>
														<td><?php echo $row['department_name']; ?></td>
													   
												
														<td width="30"><a href="edit_class.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>

                               
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
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>