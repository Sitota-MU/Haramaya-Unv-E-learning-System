   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Teacher</div>
								<div id="" class="muted pull-right"><a href="admin_index.php"><i class="icon-arrow-left"></i> Back</a></div>
                            </div>
							
						
								
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>
										
										
										 <div class="control-group">
											<label>Department:</label>
                                          <div class="controls">
                                            <select name="department"  class="" required>
                                             	<option></option>
											<?php
											$query = mysql_query("select * from department order by department_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['department_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
						
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text"required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('Name must be above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Firstname">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text"required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('Name must be above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Lastname">
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text"required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('Name must be above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "username">
                                          </div>
                                        </div>
                                          </div>
                                        </div>
									
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="instructor_id" id="focusedInput" type="number"required pattern="[a-zA-Z0-9/()]{2,15}" oninvalid="setCustomValidity('id must be above two number')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Teacher_Id">
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="email" placeholder = "Email">
                                          </div>
                                        </div>
										
									<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="password" id="focusedInput" type="password"required pattern="[a-zA-Z0-9/()]{2,15}" oninvalid="setCustomValidity('id must be above three numbers ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "password">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="confrmpassword" id="focusedInput" type="password"required pattern="[a-zA-Z0-9/()]{2,15}" oninvalid="setCustomValidity('id must be above three numbers ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "confrmpassword">
                                          </div>
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
                            if (isset($_POST['save'])) {
                           
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
								$username = $_POST['username'];
                                $department_id = $_POST['department'];
                                $instructor_id = $_POST['instructor_id'];
							    $email = $_POST['email'];
							    $password = $_POST['password'];
								
								$query = mysql_query("select * from instructor where f_name = '$firstname' and l_name = '$lastname'  and inst_id = '$instructor_id'")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{

                                mysql_query("insert into instructor (f_name,l_name,location,email,dep_id,inst_id,head_id,teacher_stat)
								values ('$firstname','$lastname','uploads/NO-IMAGE-AVAILABLE.jpg',$email,'$department_id','$instructor_id','$session_id','activated')         
								") or die(mysql_error());
								
mysql_query("insert into account (f_name,l_name,username,password,email,date) values('$firstname','$lastname','$username','$email',NOW())")or die(mysql_error());
	
							?>
								<script>
								alert('Teacher successfully added');
								</script>
		
								<script>
							 	window.location = "teachers.php"; 
								</script>
								<?php   }} ?>
						 
						 