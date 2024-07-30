<?php include('header.php'); ?>
<?php include('session.php'); ?>
        <body id="class_div">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_dep_head.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Department Head List</div>
                               <div id="" class="muted pull-right"><a href="admin_index.php"><i class="icon-arrow-left"></i> Back</a></div>
							</div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<form action="delete_dept_head.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#dept_head_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete_head.php'); ?>
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
                                    $inst_query = mysql_query("select * from department head where department name = '$session_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($inst_query)) {
                                    $id = $row['dep_head_id'];
                                    $head_status = $row['dept_head_status'];
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                    <td width="40"><img class="img-circle" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
                                    <td><?php echo $row['f_name'] . " " . $row['l_name']; ?></td> 
                                    <td><?php echo $row['dep_head_id']; ?></td> 
									     <td><?php echo $row['username']; ?></td> 
                               
									<td width="50"><a href="edit_head.php<?php echo '?dep_head_id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i></a></td>
									<?php if ($head_status == 'activated' ){ ?>
									<td width="120"><a href="de_activate.php<?php echo '?dep_head_id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i>Deactivate</a></td>
									<?php }else{ ?>
									<td width="120"><a href="activate.php<?php echo '?dep_head_id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activate</a></td>				
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