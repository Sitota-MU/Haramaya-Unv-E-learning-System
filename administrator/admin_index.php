<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
     <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
		 <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    
					<div class="date">		
    	
     
							<script src="admin/css/time.js" language="javascript" type="text/javascript"></script>
							<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
					       <form name="the_clock">
						 
						 
							 System Time:&nbsp;&nbsp;<input type="textt" name="the_time" size="20" style="padding-bottom:5px;"  color="red;"  align = "top">
							<body>
	                    
	                 </form>  

        
      </div>
					</div>
					</div>
					</div>
					</div>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
				
 

               <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
					
					
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Numbers</div>
                            </div>
							
                            <div class="block-content collapse in">
							        <div class="span12">
						
								<div class="navbar navbar-inner block-header">
								<?php 
								$query_inst = mysql_query("select * from instructor")or die(mysql_error());
								$count_inst = mysql_num_rows($query_inst);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_inst; ?>"><?php echo $count_inst ?></div>
                                    <div class="chart-bottom-heading"><strong>Instructors</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_head = mysql_query("select * from head")or die(mysql_error());
								$count_head = mysql_num_rows($query_head);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_head	 ?>"><?php echo $count_head ?></div>
                                    <div class="chart-bottom-heading"><strong>Department Heads</strong>

                                    </div>
                                </div>
								
								
								
								
							
								
									<?php 
								$query_fac = mysql_query("select * from faculty")or die(mysql_error());
								$count_fac = mysql_num_rows($query_fac);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_fac; ?>"><?php echo $count_fac; ?></div>
                                    <div class="chart-bottom-heading"><strong>Faculty</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_dept = mysql_query("select * from department")or die(mysql_error());
								$count_dept = mysql_num_rows($query_dept);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_dept; ?>"><?php echo $count_dept; ?></div>
                                    <div class="chart-bottom-heading"><strong>Department</strong>

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
			
                    
	 </div>
	 

            
			 <div class="container">
		<?php include('footer.php'); ?>
      </div>
		<?php include('script.php'); ?>
    </body>

</html>