  

<?php include('header.php'); ?>
<?php include('session.php'); ?>

		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>
                <div class="span5" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
				
						        
   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div  class="nav nav-pills-left">Update The Slied</div>
								
                            </div>
							
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" enctype="multipart/form-data">
								
										<label>Image 1:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="image" id="fileInput" type="file" required>
                                          </div>
                                        </div>


						<label>Image 2:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="image1" id="fileInput" type="file" required>
                                          </div>
                                        </div>
										<label>Image 3:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="image2" id="fileInput" type="file" required>
                                          </div>
                                        </div>
										<label>Image 4:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" name="image3" id="fileInput" type="file" required>
                                          </div>
                                        </div>
                                   
									
									<input type="submit" name="submit" value="Upload "style="margin-top:10%;margin-left:82%;"/>
									</form>
<?php
	$error = 0;
	if(isset($_POST['submit'])){
		
		
		
		                            $image = $_FILES['image']['tmp_name'];
										$image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_size = getimagesize($_FILES['image']['tmp_name']);
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
										
										
										 $image1 = $_FILES['image1']['tmp_name'];
										$image1 = $_FILES['image1']['tmp_name'];
										$image_name1 = $_FILES['image1']['name'];
										$image_size = getimagesize($_FILES['image1']['tmp_name']);
										$image_type = $_FILES['image1']['type'];
										$image_error = $_FILES['image1']['error'];
										
										
										
										
										 $image2 = $_FILES['image2']['tmp_name'];
										$image2 = $_FILES['image2']['tmp_name'];
										$image_name2 = $_FILES['image2']['name'];
										$image_size = getimagesize($_FILES['image2']['tmp_name']);
										$image_type = $_FILES['image2']['type'];
										$image_error = $_FILES['image2']['error'];
										
										
										
										
										 $image3 = $_FILES['image3']['tmp_name'];
										$image3 = $_FILES['image3']['tmp_name'];
										$image_name3 = $_FILES['image3']['name'];
										$image_size = getimagesize($_FILES['image3']['tmp_name']);
										$image_type = $_FILES['image3']['type'];
										$image_error = $_FILES['image3']['error'];
										if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."That is not an image!".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
										else if($error == 0){
											
											
											  $query=mysql_query("select * from user where user_id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							
											
                                           include("admin/connect.php");
							
								           mysql_query("delete from upload")or die(mysql_error());
											mysql_query("insert into upload (image1,image2,image3,image4) values ('$image_name','$image_name1','$image_name2','$image_name3')")or die(mysql_error() );
										
											move_uploaded_file($image,"profile/".$image_name);
												move_uploaded_file($image1,"profile/".$image_name1);
												move_uploaded_file($image2,"profile/".$image_name2);
													move_uploaded_file($image3,"profile/".$image_name3);
												
											
											
											echo '<div class="alert alert-dismissable alert-success error">';
												echo '<strong>'.'<center>'."upload your profile successfully!!!".'</center>'.'<strong>';
											echo '</div>';
											
										}
										
	}
	
	
	?> 
									
									


								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								
											<div class="container">
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>	
								
								</body>
								</html>