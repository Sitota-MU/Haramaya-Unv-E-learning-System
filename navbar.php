  <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">Wellcome to E-learning Instructor Panel</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
						<?php $query= mysql_query("select * from instructor where Inst_id = '$session_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
						?>
                            <li class="dropdown">
													<a href="" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['f_name']." ".$row['l_name'];  ?> <i class="caret"></i></a>
															<ul class="dropdown-menu">
																<li>
															
																		<a tabindex="-1" href="#myModal" data-toggle="modal"><i class="icon-picture"></i> Change Profile</a>
																
																</li>
																<li class="divider"></li>
																<li><a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a></li>
															</ul>
												</li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
		
<?php include('profile_modal_admin.php'); ?>		