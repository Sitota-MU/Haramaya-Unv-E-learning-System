   <div class="row-fluid">
    <a href="faculty.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Faculty</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Faculty</div>
                            </div>
							<?php 
							$query = mysql_query("select * from faculty where faculty_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['name']; ?>" id="focusedInput" name="dn" type="text" required pattern="[a-zA-Z ]{2,20}" oninvalid="setCustomValidity('Faculty Name must be letter ')" onchange="try{setCustomValidity('')}catch(e){}"placeholder = "Faculty">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['dean_name']; ?>" id="focusedInput" name="dnn" type="text" required pattern="[a-zA-Z ]{2,20}" oninvalid="setCustomValidity('Faculty Name must be letter ')" onchange="try{setCustomValidity('')}catch(e){}"placeholder = "Faculty">
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
 <?php
 if (isset($_POST['update'])){
 

 $dn = $_POST['dn'];
 
 $dnn = $_POST['dnn'];
 
 mysql_query("update faculty set name  = '$dn' ,dean_name = '$dnn'where faculty_id = '$get_id' ")or die(mysql_error());
 ?>
 		<script>
alert('Update Faculty successussfull');
</script>
 <script>
 window.location='faculty.php'; 
 </script>
 <?php 
 }
 ?>
 