			
						
						<ul	 id="da-thumbs" class="da-thumbs">
										<?php $query = mysql_query("select * from course
									where Inst_id='$session_id '")or die(mysql_error());
										$count = mysql_num_rows($query);
										
										if ($count > 0){
										while($row = mysql_fetch_array($query)){
										$id = $row['course_code'];
				
										?>
									
											<li <?php $id=$row["course_code"] ?>">
												<a href="add_text.php?id=<?php echo $id;?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['title']; ?></p></span>
													</div>
												</a>
												
								
									
												<p class="class" color="white"><?php echo $row['title']; ?></p>
												
											</li>
										<?php } }else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> No Course Currently Added</div>
									<?php  } ?>
									</ul>