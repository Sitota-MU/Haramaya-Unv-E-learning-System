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
                                            <select name="Inst_id"  class="chzn-select" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from instructor order by f_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											
											<option value="<?php echo $row['Inst_id']; ?>"><?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?> </option>
											
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
							setTimeout(function(){ window.location = 'head_message.php'  }, delay);  
						
						
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