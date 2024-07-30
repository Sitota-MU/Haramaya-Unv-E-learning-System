   <!DOCTYPE html>
   <head>
   <body>
   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div  class="nav nav-pills-left">Create Account</div>
								<div id="" class="muted pull-right"><a href="admin_index.php"><i class="icon-arrow-left"></i> Back</a></div>
                            </div>
							
						
								
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" enctype="multipart/form-data">
								
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="image" id="fileInput" type="file" required>
                                          </div>
                                        </div>
										
									
									<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text"required pattern="[a-zA-Z]{3,15}" oninvalid="setCustomValidity('Name must be aletter and above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Firstname">
											 </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text"required pattern="[a-zA-Z]{3,15}" oninvalid="setCustomValidity('Name must be a letter and above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Lastname">
											 </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text"required pattern="[a-zA-Z]{3,15}" oninvalid="setCustomValidity('Name must be a letter and above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "username">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="inst_id" id="focusedInput" min="1" type="number" oninvalid="setCustomValidity('ID must be number ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Inst ID">
                                          </div>
                                        </div>
							
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="email" id="focusedInput" type="email" oninvalid="setCustomValidity('write xx@gamil.com domin ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Email">
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  class="input focused" name="phone"     id="focusedInput" type="phone" oninvalid="setCustomValidity('phone number must be less than 10 number  ')"  placeholder = "+251">
                                          </div>
                                        </div>
										<div class="control-group">
										<label>sex:</label>
                                          <div class="controls">
										    
                <input type="radio"  name="sex" value="male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female
              
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
						$_SESSION['message']='';
                            if (isset($_POST['save'])) {
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
								$username = $_POST['username'];
								$acc_id=$_POST['inst_id'];
								$sex=$_POST['sex'];
							    $email = $_POST['email'];
								$phone = $_POST['phone'];
							    $password = $_POST['password'];
								 $confrmpassword = $_POST['confrmpassword'];
							      if( $password==$confrmpassword){
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
								if($imageFileType != "PNG" &&$imageFileType != "GFT" && $imageFileType != "JPG")
								{
     
	
$image_path=$_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);

$query = mysql_query("select * from head where f_name='$firstname' and l_name='$lastname' and head_id = '$acc_id'")or die(mysql_error());
								$count = mysql_num_rows($query);
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}
								else
								{

                               $sql= mysql_query("insert into head(head_id,f_name,l_name,username,password,location,email,sex,phone,dep_head_status)
								values ('$acc_id','$firstname','$lastname','$username','$password','$location','$email','$sex','$phone','activated')         
								") or die(mysql_error());
							$query_inst = mysql_query("SELECT head_id  FROM head ")or die(mysql_error());
		$num_row_inst = mysql_num_rows($query_inst);
		$row_inst = mysql_fetch_array($query_inst);
        $user =$row_inst['head_id'];
		
		  $_SESSION['id']= $user;
		
		

							
mysql_query("insert into user (f_name,l_name,username,password,head_id,location,email,dep_name,date) values('$firstname','$lastname','$username','$password','$user','$location','$email','$department',NOW())")or die(mysql_error());

/*mysql_query("insert into account(user_id,f_name,l_name,username,password,location,email,date) values('$firstname','$lastname','$username','$password','$location','$email',NOW())")or die(mysql_error());
*/
							?>
								<script>
								alert('successfuly created');
								</script>
								<script>
							 	window.location = "dept_heads.php";
							
								</script>
								
								<?php
								}
								
								
								
								}
								else
								{
									?>
									
									<script>
								alert('Please only uploaded JPG PNG GIF');
								</script>
								<?php
								}
								
								  }
								  else
								  {
								
									?>
									<script>
								alert('The password is not matched');
								</script>
								<?php  
								  

								  }
							}
								
								
							
								?>
						   
						
							
								
							   
								
							
								
		</head>
</body>
</html>		
						 