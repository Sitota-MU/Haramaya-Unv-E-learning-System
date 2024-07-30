<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['Inst_id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_instructor_form.php'); ?>		   			
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
									<?php include('modal_delete.php'); ?>
										<thead>
										    <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th>Name</th>
									 <th>Username</th>
									  
                                    <th>ID</th>
									 <th>password</th>

                                    <th></th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $teacher_query = mysql_query("select * from instructor ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($teacher_query)) {
                                    $id = $row['Inst_id'];
                                        ?>
									
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
                                    <td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
                                    <td><?php echo $row['f_name'] . " " . $row['l_name']; ?></td> 
									<td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['Inst_id']; ?></td> 
									 <td><?php echo $row['password']; ?></td> 
                               
									<td width="30"><a href="edit_instructor.php<?php echo '?Inst_id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i></a></td>
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