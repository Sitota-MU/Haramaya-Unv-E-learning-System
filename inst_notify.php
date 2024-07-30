<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
						$school_year_query_row = mysql_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
						
  					<form action="read.php" method="post">
						<?php if($not_read == '0'){
								}else{ ?>
							<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
													<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
	
								<?php } ?>
				
					<?php $query = mysql_query("select * from instructor
					LEFT JOIN head ON head.head_id = instructor.head_id 
					JOIN  inst_notification On  inst_notification.head_id = instructor.head_id 	
					where instructor.Inst_id = '$session_id' order by inst_notification.date DESC
					")or die(mysql_error());
					$count = mysql_num_rows($query);
						if ($count  > 0){
					while($row = mysql_fetch_array($query)){
					$get_id = $row['head_id'];
					$id = $row['notfication_id'];
					
					
					$query_yes_read = mysql_query("select * from inst_notification_read where notification_id = '$id' and Inst_id = '$session_id'")or die(mysql_error());
					$read_row = mysql_fetch_array($query_yes_read);
					
				
					?>
									<div class="post"  id="del<?php echo $id; ?>">
										<?php if ($yes == 'yes'){
										}else{
										?>
										<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php } ?>	
											<strong><?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
											<?php echo $row['notification']; ?> In 
											<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
										
									 
											</a>
										<hr>
										<div class="pull-right">
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										</div>
																	
											</div>
					<?php
					} }else{
					?>
					<div class="alert alert-info"><strong><i class="icon-info-sign"></i> No Notifications Found</strong></div>
					<?php
					}
					?>
					
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