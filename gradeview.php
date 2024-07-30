<?php


include("header.php");
?>
<?php $get_id = $_GET['id']; ?>
<?php
			$student_query=mysql_query("select * from instructors_course INNER JOIN course ON course.course_id = instructors_course.course_id")or die(mysql_error());
			while($row = mysql_fetch_array($student_query)){
			
			$term = $row['course_code'];
			$title = $row['title'];
			
			?>
			<div class="name">
			<div class="last">
					<span><strong><?php echo $row['title']; ?></strong></span> Quiz Mark
				<br></div>
				<div class="lastt">
				<?php  echo date("Y");       ?>
				</div>
				
			
				<span>The Course:<strong><?php echo $row['title']; ?></strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<span>Course Code:<strong><?php echo $row['course_code']; ?></strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
			<table cellpadding="0  cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr style="background:white;">
                                        <th style="background-color:white; color:black;" width="200">Student ID</th>
                                        <th style="background-color:white; color:black;">Quiz</th>                                 
                                   
                                           
									
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysql_query("select * from useransewr where sess_id = '$get_id' and your_answer = '$school_year' and semester = '$term' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									//$id=$row['grade_id'];
									$grade = $row['Grade'];
									$subject_id = $row['subject_id'];
									/* subject */
									$subject_query = mysql_query("select * from subject where subject_id = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>                                 
                                  