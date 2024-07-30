
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

        <body id="class_div">
		<?php include('student_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
				
                <div class="span6" id="">
					 
					<div class="row-fluid">
					    <!-- breadcrumb -->
						<div class="pull-right">
							<a href="view_text_student.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>View Resource </a>
							<a href="submit_assignment.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Submit Assignmet</a>
							<a href="take_quiz.php<?php echo '?id='.$get_id; ?>" class="btn btn-info"><i class="icon-plus-sign"></i>Take Quiz</a>
						</div>
						</div>
                        <!-- block --><div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Video List</div>
                            </div>
			

	
										<?php 
											$query = mysql_query("select course_code from student where stud_id = '$session_id'   ")or die(mysql_error());
										$count = mysql_fetch_array($query);
										$course=$count['course_code'];
										?>
										
    <div id='box'>
		<?php
			$query = mysql_query("select *from videos where course_code = '$course' ")or die(mysql_error());
            $row = mysql_fetch_array($query);
				if ($row == '0'){ ?>
											<div class="alert alert-info"><i class="icon-info-sign"></i> Currently you did not upload  video</div>
						
				<?php	}else{
									?>  
			                       <form method="post">
									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">

										<thead>
										        <tr>
												<th>File Name</th>
												
												</tr>
												
										</thead>
										<tbody>
							<?php
							$query = mysql_query("select *from videos where course_code = '$course' ")or die(mysql_error());
                            $row = mysql_fetch_array($query);
							$id=$row['id'];
							$video=$row['name'];
							?>
			
		
		<tr>
        <div id='url'>
		<td><a data-placement="bottom" title="play" href="view_video_stud.php?video=<?php echo $row['name']; ?>">
			<?php echo $row['name'];?> </td>
			<td width="30"><a href="<?php echo $row['name']; ?>"></i></a></td> 
		</div>
        <a/>
		<?php
		}

		?>
    </div>
	</tr>
	</tbody>
		</table>
		</form>
		</div>
		</div>
		</div>
		</div>
			</div>
				</div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
		
    </body>
</html>