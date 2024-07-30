

<?php include('header.php'); ?>
<?php include('session.php'); ?>

        <body id="class_div">
		<?php include('student_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

								<?php 
											$query = mysql_query("select course_code from student where stud_id = '$session_id'   ")or die(mysql_error());
										$count = mysql_fetch_array($query);
										$course=$count['course_code'];
										?>


	<div id='box'>
    	<?php
							$query = mysql_query("select *from videos where course_code = '$course' ")or die(mysql_error());
                            $row = mysql_fetch_array($query);
							$id=$row['id'];
							$video=$row['name'];
							?>
        <video id="my_video_1" class="video-js vjs-default-skin" controls data-setup="{}" preload="auto" width="100%" height="450" >
        
 <source src="videos/<?php echo $video; ?>" type='video/mp4'>
 </video>

		<script type="text/javascript">
          function myScript() {
            console.log;
          }
        </script>
        
	</div>
<?php
?>
    </div>
							
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>