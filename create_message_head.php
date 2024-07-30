<div class="span3" id="">
	<div class="row-fluid">
	
				      <!-- block -->
                        <div class="block">
							 <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-pencil"></i> Create Message</h4></div>
                            </div>
					
                            <div class="block-content collapse in">
                                <div class="span12">
									<ul class="nav nav-tabs">
										<li class= "active"><a href="#">For Instructor</a>
										</li>
		
									</ul>
									
								


								<form method="post" id="send_message">
									<div class="control-group">
											<label>To:</label>
                                          <div class="controls">
                                            <select name="teacher_id"  class="chzn-select" required>
                                             	<option></option>
												<?php
												
		$query_inst = mysql_query("SELECT username from head")or die(mysql_error());
		$num_row_inst = mysql_num_rows($query_inst);
		$row_inst = mysql_fetch_array($query_inst);
        $user =$row_inst['username'];
		
		  
		$_SESSION['user']=$user;
		
	
	 ?>
											
											
											<?php
											$_SESSION['user']=$user;
	$result=mysql_query("select head_id from head where username='$user'") or die( mysql_error());
	$row = mysql_fetch_array($result);
	$head_id=$row['head_id'];
	?>
	<?php
	
	$result=mysql_query("select *from instructor where head_id='$head_id' order by Inst_id DESC ") or die( mysql_error());

		 $array = array();					
		 
	while($row = mysql_fetch_array($result)){
		 $array[] = $row;
		$string=$row["f_name"];
		$id=$row['Inst_id'];
		$last= $row['l_name'];
		
		
											
											?>
											
											<option ><?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?> </option>
											
											<?php } ?>
                                            </select>
							
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>Content:</label>
                                          <div class="controls">
											<textarea name="my_message" class="my_message" required></textarea>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
												<button  class="btn btn-info"><i class="icon-envelope-alt"></i> Send </button>

                                          </div>
                                        </div>
                                </form>

						
								
							
								
								
										<script>
			jQuery(document).ready(function(){
			jQuery("#send_message").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "send_message.php",
						data: formData,
						success: function(html){
						
						$.jGrowl("Message Successfully Sended", { header: 'Message Sent' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'teacher_message.php'  }, delay);  
						
						
						}
						
					});
					return false;
				});
			});
			</script>
			
			
								
								
								
								</div>
                            </div>
                        </div>
						</div>
                        <!-- /block -->
						

	</div>
</div>