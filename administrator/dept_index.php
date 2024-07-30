<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('dept_navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('dept_sidebar.php'); ?>
					
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
						
									<?php 
								$query_reg_teacher = mysql_query("select * from teacher where teacher_status = 'Registered' ")or die(mysql_error());
								$count_reg_teacher = mysql_num_rows($query_reg_teacher);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_teacher; ?>"><?php echo $count_reg_teacher; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Teacher</strong>

                                    </div>
                                </div>
								</div>
								</div>
								</div>
                <!--/span-->
				</div>
				</div>
				</div>
               
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>