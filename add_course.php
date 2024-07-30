 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Course</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="d" type="text" placeholder = "Course Name">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="pi" type="text" placeholder = "Course  Code">
                                          </div>
                                        </div>
												
	                                <div class="control-group">
											<label>class</label>
                                          <div class="controls">
                                            <select name="class_id"  class="chzn-select" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from class");
											while($row = mysql_fetch_array($query)){
											
											?>
											
											<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?>  </option>
											
											<?php } ?>
                                            </select>
							
                                          </div>
                                        </div>
											
	                                <div class="control-group">
											<label>Instructor Id</label>
                                          <div class="controls">
                                            <select name="Inst_id"  class="chzn-select" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from instructor");
											while($row = mysql_fetch_array($query)){
											
											?>
											
											<option value="<?php echo $row['Inst_id']; ?>"><?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?> </option>
											
											<?php } ?>
                                            </select>
							
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

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
$pi = $_POST['pi'];
$d = $_POST['d'];
$dd = $_POST['Inst_id'];
$class = $_POST['class_id'];



$query = mysql_query("select * from course where  title= '$d' and course_code = '$pi' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into course (course_code,title,Inst_id,class_id,thumbnails) values('$pi','$d','$dd','$class','uploads/thumbnails.jpg')")or die(mysql_error());


?>
<script>
window.location = "course_offer.php";
</script>
<?php
}
}
?>