 <?php
 include('admin/connect.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               
                             
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
                          
                             
							   
					
                                $location = "uploads/" . $_FILES["image"]["name"];
								$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
								if($imageFileType != "PNG" &&$imageFileType != "GFT" && $imageFileType != "JPG")
								{
									$image_path=$_FILES['image']['name'];
								 move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
								mysql_query("update  instructor set location = '$location' where Inst_id  = '$session_id' ")or die(mysql_error());
														 
								?>
								 
 
								<script>
								window.location = "inst_index.php";  
								</script>

                       <?php     }  
					  
                               else
							   {
								  	?>
									<script>
								alert('support only format JPG,PNG,GIF');
								</script>
<?PHP
							   }
							}
							   ?>
								   