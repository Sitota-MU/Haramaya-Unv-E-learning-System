  
<br>
<br>

<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>">

	
    
  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
  <li class="active"> <a href="inst_index.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Home</a> </li><li>
  <li class=""><a href="inst_displaynotice.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;view announcement</a></li>
  <?php
			$message_query = mysql_query("select * from message where reciever_id = '$session_id' and message_status != 'read' ")or die(mysql_error());
			$count_message = mysql_num_rows($message_query);
			?>
			<li class="">
			<a href="inst_message.php"><i class="icon-chevron-right"></i><i class="icon-envelope-alt"></i>&nbsp;Message
				<?php if($count_message == '0'){
				}else{ ?>
					<span class="badge badge-important"><?php echo $count_message; ?></span>
				<?php } ?>
				<?php
				$result = mysql_query("update message set message_status = 'read' where reciever_id = '$session_id'");
				?>
			</a></li>
  <li class=""><a href="lecture.php"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Lecture</a></li>
  <li class=""><a href="inst_annonce.php"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Add announcement</a></li>
 
                       
                            
							
		<!--</a></li>		<div id="collapseOne" class="accordion-body collapse">
    <div class="accordion-inner">
	 <li class=""><a href="quiz.php"><i class="icon-chevron-right"></i><i class="icon-key"></i>&nbsp;Add Quiz</a></li>
	 <li class=""><a href="assignment.php"><i class="icon-chevron-right"></i><i class="icon-key"></i>&nbsp;Assignment</a></li>
	  <li class=""><a href="submit_grade.php"><i class="icon-chevron-right"></i><i class="icon-key"></i>&nbsp;Submit Grade</a></li>

	  </div></div>-->
   


  <li class=""><a href="view_students.php"><i class="icon-chevron-right"></i><i class="icon-user icon-large"></i>&nbsp;view students </a></li> 
  <li class=""><a href="teacher_backack.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Backup</a></li>
  <li class=""><a href="calendar_of_events.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;Events</a>
   <li class=""><a href="forum.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;Forum</a>
  </li></ul>
        
</div>



