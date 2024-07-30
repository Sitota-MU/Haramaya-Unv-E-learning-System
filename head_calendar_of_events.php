<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body id="class_div">
	
	
		<?php include('navbar_head.php'); ?>
		
				<?php include('head_sidebar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
		        <div class="span4" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
							
                            <div class="block-content collapse in">
                                <div class="span4">

                             
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
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>