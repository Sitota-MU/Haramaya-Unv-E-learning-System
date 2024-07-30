  
<html>
<head>
<?php
include("config.php");
?>
<style>

input[type="submit"]{
	width:110px;
	height:40px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
  margin-bottom:50px;
}
input[type="file"]{
	 border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
}

</style>
</head>
<body> 
	  
	  <div class="x_content">

                                  
										<?php include("validation/header.php"); ?>
			
                  
						
			
	  


<?php
include("config.php");
?>
<style>

input[type="submit"]{
	width:120px;
	height:40px;
	  border:1px solid #ccc;
  border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
  background:#32CD32;
  margin-bottom:30px;
}
input[type="file"]{
	 border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
 
}
select[type="text"]{
	margin-left:50px;
	margin-bottom:10px;
	 border-top-left-radius:7px;
  border-top-right-radius:7px;
  border-bottom-right-radius:7px;
  border-bottom-left-radius:7px;
 
}

</style>
</head>
<body> 
	  
	  <div class="x_content">


                                    <p>Click on Browse to select your photos.</p>
										<?php include("validation/header.php"); ?>
			
                                    <form method="post" id="formID"  name="formID" class="dropzone" style="border: 1px solid #e5e5e5; height: 700px; width: 700px;  "enctype="multipart/form-data" onsubmit="return validateForm()">
									<center><input type="file" class="validate[required] text-input"  name="image" id="image" style="margin-top:5%;"/></center>
									<center><input type="file" class="validate[required] text-input" name="image1" id="image1" style="margin-top:5%;"/></center>
								  <center><input type="file" class="validate[required] text-input" name="image2" id="image2" style="margin-top:5%;"/></center>
									<center><input type="file" class="validate[required] text-input" name="image3" id="image3" style="margin-top:5%;"/></center>
									
									
									
									<h2>UPDATE NEWS:</h2>
										<?php

				  $query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							
							$query=mysql_query("select * from upload where user_type ='$user_id'") or die( mysql_error());
							while($rowss=mysql_fetch_array($query))
							{
							$news=$rowss['news'];
					
							}
?>	


				<textarea  type="text" cols="100" rows="20" id="post_content"  name="post_content" style="margin-left:40px;" value="<?php echo $news;?>"  class="validate[required] text-input" ></textarea>
						 
						 
						<input type="submit" name="submit" value="Upload News"style="margin-top:10%;margin-left:82%;"/>
									</form>
							
									
<?php
	$error = 0;
	if(isset($_POST['submit'])){
		
		$post_content=$_POST['post_content'];
		
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
											
											
											  $query=mysql_query("select * from account where id ='$session_id'") or die( mysql_error());
							while($rows=mysql_fetch_array($query))
							{
							$user_id=$rows['user_id'];
							}
							$query=mysql_query("select * from upload where user_type ='$user_id'") or die( mysql_error());
							while($rowss=mysql_fetch_array($query))
							{
							$news=$rowss['news'];
							
							}
											
                                           include("config.php");
							
								           mysql_query("delete from upload")or die(mysql_error());
											mysql_query("insert into upload (news,image1,image2,image3,image4,user_type) values ('$post_content','"."$image_name"."','"."$image_name1"."','"."$image_name2"."','"."$image_name3"."','$user_id')")or die(mysql_error() );
										
											move_uploaded_file($image,"profile/".$image_name);
												move_uploaded_file($image1,"profile/".$image_name1);
												move_uploaded_file($image2,"profile/".$image_name2);
													move_uploaded_file($image3,"profile/".$image_name3);
												
											
											
											echo '<div class="alert alert-dismissable alert-success error">';
												echo '<strong>'.'<center>'."upload your profile successfully!!!".'</center>'.'<strong>';
											echo '</div>';
											
										}
										
	}
	
	
	?>        <br />
                                    <br />
                                    <br />
                                    <br />
                                </div>
								
								
								
								</body>
								</html>