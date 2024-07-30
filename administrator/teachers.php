<?php include('header.php'); ?>
<?php include('session.php'); ?>
        <body id="class_div">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_instructor.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Instructor List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<form action="delete_instructor.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#teacher_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete_tea.php'); ?>
										<thead>
										    <tr>
                                    <th></th>
                                    <th>Photo</th>
									<th>ID</th>
                                    <th>Name</th>
                                    <th>USERNAME</th>
                                </tr>
										</thead>
										<tbody>
										<?php
													$user_query = mysql_query("select * from instructor ")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['inst_id'];				
                                               $inst_status = $row['inst_status'];
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														
															
														<td><?php echo $row['f_name'] . " " . $row['l_name']; ?></td> 
														<td><?php echo $row['department']; ?></td>
												
													    <td><?php echo $row['inst_id']; ?></td>
												
														<td width="30"><a href="edit_instructor.php<?php echo '?inst_id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>

                                          <?php if ($inst_status == 'activated' ){ ?>
									     <td width="120"><a href="de_activate_inst.php<?php echo '?inst_id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i>Deactivate</a></td>
									<?php }else{ ?>
									<td width="120"><a href="activate_inst.php<?php echo '?inst_id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activate</a></td>				
									<?php } ?> 
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