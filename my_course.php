<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

        <body id="class_div">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
				<div class="span7" id="adduser">
				<div class="row-fluid">
						<div class="pull-right">
							<a href="assignment.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Assignment</a>
							<a href="my_course.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Video</a>
							
							<a href="add_quiz.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Add Quiz</a>
						</div>
						</div>
					
				<?php include('add_video.php'); ?>		   			
				</div>

                <div class="span4" id="">
                     <div class="row-fluid">
					 
					
                        <!-- block --><div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Video List</div>
                            </div>


	
  								<form method="post">
									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">

										<thead>
										        <tr>
												<th>File Name</th>
												
												</tr>
												
										</thead>
										<tbody>
										
    <div id='box'>
		<?php
			$query = mysql_query("SELECT * FROM videos where course_code='$get_id'") or die( mysql_error());
			while($row = mysql_fetch_array($query)){
			
		?>
		<tr>
        <div id='url'>
		<td><a data-placement="bottom" title="play" href="view_video.php?video=<?php echo $row['name']; ?>&id=<?php echo $get_id; ?>">
			<?php echo $row['name'];?> </td>
			<td width="30"><a href="<?php echo $row['name']; ?>"></i></a></td> 
		</div>
        <a/>
		<?php
		}
	
		?>
    </div>
	
								
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            
			</tr>
	</tbody>
		</table>
		</form>
		    </div>
                        <!-- /block -->
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