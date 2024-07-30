 <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add Assignment</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form class="" id="add_downloadble" method="post" enctype="multipart/form-data" name="upload" >
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Assignment File</label>
                            <div class="controls">
				
									
								<input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>
                            </div>
                        </div>
                        <div class="control-group">
                      
                            <div class="controls">
                                <input type="text" name="name" Placeholder="File Name"  class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controls">
                                <input type="date" name="date" Placeholder="Description"  class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button name="Upload" type="submit" value="Upload" class="btn btn-info" /><i class="icon-upload-alt"></i>&nbsp;Upload</button>
                            </div>
                        </div>
                    </form>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				
				<div class="span4 row-fluid">
						       <!-- block -->
                     
                            <div class="block-content collapse in">
                                <div class="span12">
								
											
							
								
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


					<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_announcements.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Post is Successfully Deleted", { header: 'Data Delete' });
		
			}
			}); 
			
			return false;
		});				
	});

</script>
<?php

	
                            if (isset($_POST['Upload'])) {

            $name=$_POST['name'];
			$date=$_POST['date'];
           $location = "Assignment/".$_FILES["uploaded_file"]["name"];
							
$FileType = pathinfo( $location,PATHINFO_EXTENSION);

if($FileType = "pdf" && $FileType  = "docx" && $FileType  = "txt" )
{
	if ($_FILES["uploaded_file"]["size"] < 50000000) {
		
		


$video_path=$_FILES['uploaded_file']['name'];
move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], "uploads/" . $_FILES["uploaded_file"]["name"]);


mysql_query("insert into assignment(name,course_code,file,datesub) values('$name','$get_id', '$video_path','$date')");

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
							?>

              