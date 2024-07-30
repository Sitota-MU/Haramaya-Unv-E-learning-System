<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">users account</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>

												
												<th>User</th>
												<th>username</th>
									            <th>email</th>
												<th>password</th>
												<th>Date</th>
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * from  account")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
									?>
							

					
                              
										<tr>

                                         <td><?php  echo $row['f_name'].$row['l_name']; ?></td>
                                         <td><?php echo $row['username']; ?></td>
                                         <td><?php echo $row['email']; ?></td>
										 <td><?php echo $row['password']; ?></td>
										 <td><?php  echo $row['date']; ?></td>

                                  
                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
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