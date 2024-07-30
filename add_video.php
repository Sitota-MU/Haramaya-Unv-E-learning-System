   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Video</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
		<?php
                            if (isset($_POST['upd'])) {


           $location = "videos/".$_FILES["fileToUpload"]["name"];
							
$imageFileType = pathinfo( $location,PATHINFO_EXTENSION);

if($imageFileType = "mp4" && $imageFileType = "avi" && $imageFileType = "mov" && $imageFileType = "3gp" && $imageFileType = "mpeg")
{
	if ($_FILES["fileToUpload"]["size"] < 50000000) {
		
		


$video_path=$_FILES['fileToUpload']['name'];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "videos/" . $_FILES["fileToUpload"]["name"]);


mysql_query("insert into videos(name,course_code) values(' $video_path','$get_id')");

echo "video uploaded successfully";



}
else
{
	echo "Sorry, your file is too large.";
}
}
else
{
	 echo "File Format Not Suppoted";
}
							}
							
	

	

//display all uploaded video

  if (isset($_POST['disp'])) 


{


			$query = mysql_query("SELECT * FROM videos where course_code='$get_id'") or die( mysql_error());
			while($row = mysql_fetch_array($query))
			


	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>
	 
	
	
	
<form method="post" enctype="multipart/form-data">
								
								<div class="control-group">
                                          <div class="controls">
                                            <input type="file" name="fileToUpload"   required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                           <input type="submit" value="Uplaod Video" name="upd" required>
                                          </div>
                                        </div>
								
								
									</form>	
									


								
        
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
		