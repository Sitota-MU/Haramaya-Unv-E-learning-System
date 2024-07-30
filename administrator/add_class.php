   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div height='20px' width='30px' color="black"class="muted pull-left">Add class</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
					<form action="add_department.php" method="post" enctype="multipart/form-data" name="myForm " onsubmit ="return (validate());">
                                    	<div class="control-group">
                                           <div class="controls">
                                            <input class="input focused" id="focusedInput" name="id" type="number" min='0' onchange="try{setCustomValidity('')}catch(e){}"  placeholder = "class id">
                                          </div>
                                        </div>
								
								<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="pi" type="text"required pattern="[a-zA-Z ]{2,20}" oninvalid="setCustomValidity('department Name must be letter and above two letter ')" onchange="try{setCustomValidity('')}catch(e){}"  placeholder = "class name">
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
                                            </select>              </div>
                                        </div>
		
                                          				
							
				                          <div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					<?php
if (isset($_POST['save'])){
$id=$_POST['id'];
$pi = $_POST['pi'];
$faculty= $_POST['faculty'];


									
$query = mysql_query("select * from class where class_name = '$pi' ")or die(mysql_error());
$count = mysql_num_rows($query);
if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into class(class_name,department_name) values('$pi','$faculty')")or die(mysql_error());
mysql_query("insert into instructor_class(Inst_id,class_id) values('$pi','$id')")or die(mysql_error());

/*mysql_query("insert into activity_log (date,username,action) values(NOW(),'$username','Add department $pi')")or die(mysql_error());
*/?>
<script>
alert('insert class succssessfull');
</script>
<script>
window.location = "class.php";
</script>
<?php
}}
?>