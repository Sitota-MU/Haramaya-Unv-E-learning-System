   <div class="row-fluid">
    <a href="class.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add class</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Class</div>
                            </div>
							<?php 
							$query = mysql_query("select * from class where class_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								  <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['class_id']; ?>" id="focusedInput" name="id" type="number" min='0' onchange="try{setCustomValidity('')}catch(e){}" placeholder = "class name">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['class_name']; ?>" id="focusedInput" name="dn" type="text"required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('Name must be above four letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "class name">
                                          </div>
                                        </div>
										
								<div class="control-group">
											<label>Department Name:</label>
                                          <div class="controls">
											<input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                                            <select name="faculty"  class="" required >
                                             	<option></option>
											<?php
											$query = mysql_query("select * from department order by department_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['department_name']; ?>"><?php echo $row['department_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
		
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-plus-sign icon-large"></i></button>

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
 


 $d = $_POST['dn'];
$lname = $_POST['lname'];
$faculty= $_POST['faculty'];


 
 mysql_query("update class set class_id=$id class_name=  '$d'  ,department_name  = '$faculty' ")or die(mysql_error());
 ?>
 
<script>
alert('update class succssessfull');
</script>
 <script>
 window.location='class.php'; 
 </script>
 <?php 
 }
 ?>
 