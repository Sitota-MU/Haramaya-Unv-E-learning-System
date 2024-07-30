   <div class="row-fluid">
    <a href="dept_heads.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Instructor</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Head</div>
                            </div>
							<?php 
							$query = mysql_query("select * from head where head_id = '$get_id'")or die(mysql_error());
							$row = mysql_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								<form method="post" enctype="multipart/form-data">
								
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on"  value="<?php echo $row['location']; ?>"name="image" id="fileInput" type="file" required="photo">
                                          </div>
                                        </div>
<div class="control-group">
											<label>Department:</label>
                                          <div class="controls">
                                            <select name="department"  class="chzn-select"required>
											
											<?php
											$department = mysql_query("select * from department order by department_name");
											while($department_row = mysql_fetch_array($department)){
											
											?>
											<option value="<?php echo $department_row['id']; ?>"><?php echo $department_row['department_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['f_name']; ?>" id="focusedInput" name="fname" type="text" required pattern="[a-zA-Z ]{2,20}" oninvalid="setCustomValidity('Faculty Name must be letter ')" onchange="try{setCustomValidity('')}catch(e){}"placeholder = "fristname">
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['l_name']; ?>" id="focusedInput" name="lname" type="text" required pattern="[a-zA-Z ]{2,20}" oninvalid="setCustomValidity('Faculty Name must be letter ')" onchange="try{setCustomValidity('')}catch(e){}"placeholder = "lastname">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>" id="focusedInput" name="usename" type="text"  onchange="try{setCustomValidity('')}catch(e){}"placeholder = "username">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['head_id']; ?>" id="focusedInput" name="id" type="number"  onchange="try{setCustomValidity('')}catch(e){}" placeholder = "ID">
                                          </div>
                                        </div>
				
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['email']; ?>" id="focusedInput" name="email" type="email"  onchange="try{setCustomValidity('')}catch(e){}"placeholder = "email">
                                          </div>
                                        </div>
				
							
										
								
										
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  class="input focused" name="phone" value="<?php echo $row['phone']; ?>"   min="0" size='10'  id="focusedInput" type="phone" oninvalid="setCustomValidity('size is not much ')"  placeholder = "+251">
                                          </div>
                                        </div>
										<div class="control-group">
										<label>sex:</label>
                                          <div class="controls">
										    
                <input type="radio"  name="sex" value="male " title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female
              
			  </div>
                                        </div>
				<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['password']; ?>"name="password" id="focusedInput" type="password"required pattern="[a-zA-Z0-9/()]{2,15}" oninvalid="setCustomValidity('id must be above three numbers ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "password">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="confrmpassword" id="focusedInput" type="password"required pattern="[a-zA-Z0-9/()]{2,15}" oninvalid="setCustomValidity('id must be above three numbers ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "confrmpassword">
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
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $username = $_POST['username'];
 $acc_id=$_POST['head_id'];
 $sex=$_POST['sex'];
 $department = $_POST['dep'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $password = $_POST['password'];
 $confrmpassword = $_POST['confrmpassword'];
 if( $password==$confrmpassword){
	 $location = "uploads/" . $_FILES["image"]["name"];
	 $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
	 if($imageFileType != "PNG" &&$imageFileType != "GFT" && $imageFileType != "JPG")	{
		 $image_path=$_FILES['image']['name'];
		 move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);

 mysql_query("update head set location = '$location',f_name='$fname',l_name='$lname',phone='$phone',username='$usename' ,email='$email' ,dep_name='$dep', password='$password'where Inst_id = '$get_id' ")or die(mysql_error());
 ?>
 		<script>
alert('Update instructor successussfull');
</script>
 <script>
 window.location='instructor.php'; 
 </script>
 <?php 
 }
 else
 {
	 ?>
	 		<script>
alert('please only file format support ,jpg,png,gif');
</script>
 
<?php
 }
 }
 else
 {
	 ?>
		 		<script>
alert('The Password Is NO Matched');
</script> 
<?php
 }
 }
 ?>
 