   <div class="row-fluid">
    <a href="department.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Department</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Department</div>
                            </div>
							<?php 
							$query = mysql_query("select * from department where department_name = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['department_name']; ?>" id="focusedInput" name="dn" type="text"required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('Name must be above four letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Deparment">
                                          </div>
                                        </div>
										
									
                                        
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['head_id']; ?>" id="focusedInput" name="id" type="text"required pattern="[a-zA-Z0-9/}" oninvalid="setCustomValidity('id must be above four numbers,letters  ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "head_id">
                                          </div>
                                        </div>
										
										
								<div class="control-group">
											<label>Faculty Name:</label>
                                          <div class="controls">
											<input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                                            <select name="faculty"  class="" required >
                                             	<option></option>
											<?php
											$query = mysql_query("select * from faculty order by name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
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
 

 $dn = $_POST['d'];
 $d = $_POST['dn'];
$lname = $_POST['lname'];
$faculty= $_POST['faculty'];
$head=$_POST['ID'];

 
 mysql_query("update department set  department_name=  $dn' , f_name  = '$d',lname  = '$lname', ,faculty  = '$faculty' head_id='$head' ")or die(mysql_error());
 ?>
 
<script>
alert('update department succssessfull');
</script>
 <script>
 window.location='department.php'; 
 </script>
 <?php 
 }
 ?>
 