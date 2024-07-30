
 <?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('student_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
				

 <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
						
								<div class="navbar navbar-inner block-header">
									<div id="count_class" class="muted pull-right"></div>
									
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
								$school_year_query_row = mysql_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								
								<li><a href="#"><b>my course</b></a><span class="divider">/</span></li>
								<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul></div>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="count_class" class="muted pull-right"></div>
									</div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php include('tutor_course.php'); ?>
                                </div>
                            </div>
							
                        </div>     </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
				
				
            
	<div class="container">
		<?php include('footer.php'); ?>
      </div>
		<?php include('script.php'); ?>
    </body>

</html>