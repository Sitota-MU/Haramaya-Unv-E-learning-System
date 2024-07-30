<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_department.php'); ?>		   			
				</div>
				
               <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Department List</div>
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
												<th>Department Name</th>
												<th>Department Head Name</th>
												<th>Faculty</th>
												<th>Faculty Id</th>
												
											
												<th></th>
										   </tr>
										<tbody>
											<?php
													$user_query = mysql_query("select * from department join head on department.head_id=head.head_id")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['department_name'];				
                                               $dept_stat = $row['dept_status'];
													?>
									
													<tr><td width="30">
														<input id="optionCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
													
												
														<td><?php echo $row['department_name']; ?></td>
													<td><?php echo $row['f_name']."".$row['l_name']; ?></td>
														<td><?php echo $row['head_id']; ?></td>
														<td><?php echo $row['faculty']; ?></td>
														
															
													
												
														<td width="30"><a href="edit_department.php<?php echo '?department_name='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>
												
																						<?php if ($dept_stat == 'activated' ){ ?>
									     <td width="120"><a href="de_activateh.php<?php echo '?department_name='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i>Deactivate</a></td>
									<?php }else{ ?>
									<td width="120"><a href="activateh.php<?php echo '?department_name='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activate</a></td>				
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