<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body id="class_div">
	
	
		<?php include('student_navbar.php'); ?>
		
				<?php include('student_sidebar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
		        <div class="span4" id="content">
                     <div class="row-fluid">
                        <!-- block -->
						  <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                        <div class="block">
							
                           <div id="block_bg" >
	                 <div class="block-content collapse in">
                                <div class="span12">

                             
									<?php $event_query = mysql_query("select * from event ")or die(mysql_error());
										while($event_row = mysql_fetch_array($event_query)){
										$id  = $event_row['event_id'];
									?>                              
										<tr id="del<?php echo $id; ?>">
									
										 <td><?php echo $event_row['event_title']; ?> </td>
                                         <td><?php  echo $event_row['date_start']; ?>
											<br>To
											 <?php  echo $event_row['date_end']; ?>
										 </td>                 
                               										 
                                         

                               
                                </tr>
                         
						 <?php } ?>
								<hr>

                                </div>
								</div>
								</div>
                            </div>
                        </div>
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