 <?php
 include('admin/connect.php');
 include('session.php');
 
 
                            if (isset($_POST['change'])) {
                               
                             
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);
                          
                               
                          


							  /* $extensions= array("jpeg","jpg","png");

							   if(in_array($extensions)=== false){
								  $errors[]="please can't support your file extension.";
  }
 

								
							          }
                                      if($image_size > 500) {
										  $errors[]='please cannot support your size';
      }
                                      
			  if(empty($errors)===true) {*/
							   
							   move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								mysql_query("update  admin set location = '$location' where admin_id  = '$session_id' ")or die(mysql_error());
														 
								?>
								 
 
								<script>
								window.location = "admin_index.php";  
								</script>

                       <?php     }  ?>