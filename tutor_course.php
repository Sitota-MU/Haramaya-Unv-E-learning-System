
		
						
                      
						<ul	 id="da-thumbs" class="da-thumbs">
						
										<?php $query = mysql_query("select * from student
										LEFT JOIN  course ON  course.course_code=student.course_code
										where stud_id= '$session_id '")or die(mysql_error());;
										$count = mysql_num_rows($query);
										
										if ($count > 0){
										while($row = mysql_fetch_array($query)){
										$id = $row['stud_id'];
				
										?>
											<li id="del<?php echo $id; ?>">
												<a href="view_text_student.php?id=<?php echo $id;?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="150" height="150" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['title']; ?></p></span>
													</div>
												</a>
												<p class="class"><?php echo $row['title']; ?></p>
													
											</li>
										<?php } }else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> No Course Currently Added</div>
									<?php  } ?>
									</ul>
									</div></div>
									</div></div>