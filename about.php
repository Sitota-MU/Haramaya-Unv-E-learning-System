<?php
include('header1.php');?>
  <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                
<br>
<br>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">



                        
                        <li class="active"><a href="index.php"><i class="icon-home "></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li> 
							
                        <li><a href="sitemap.php" ><i class="icon-map-marker icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact.php"><i class="icon-comment-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
								
                                    <i class=" icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                      
                        <li><a  href="about.php" ><i class="icon-info-sign icon-large"></i>&nbsp;About us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
  
  <li><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"><i class="icon-building icon-large"></i>&nbsp;
    &nbsp;Faculty
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            
							
		</a></li>	
		<div id="collapseOne" class="accordion-body collapse">
   
		
   <!-- collapsib-->
   	<?php 
	$li=mysql_query("select * from faculty");
	while($k=mysql_fetch_array($li))
{	?>
	  <div class="accordion-group">
     
   <a class="accordion-toggle" data-toggle="collapse"  href="#collapseOne<?php echo $k['id'];?>">
	<?php
echo $k['name'];
}?>
	
    </a>
    </div>
	</div>
	</div>
                
                                                    <!-- Modal -->
   
	
	
		  
                        
                       


</ul>
</div>
<br>
<br>
<div class="alert alert-info">
                            <p><a href=""><i class="icon-facebook-sign"></i>&nbsp;Facebook</a></p>
                            <p><a href=""><i class="icon-twitter-sign"></i>&nbsp;Google</a></p>
                            <p><a href=""><i class="icon-google-plus-sign"></i>&nbsp;Twitter</a></p>
                          

                        </div>
			</div>
			
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                   &nbsp;Mission and Vision
                </div>

                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                   &nbsp;Vision
                </div>
 
<h6>Vision</h6>


Haramaya University strives to be one of the leading African Universities with international reputation by 2025.

<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                   &nbsp;Mission
                </div>
                    <h6>Mission</h6>           
The Mission of Haramaya University is to produce competent graduates in diverse fields of study, undertake rigorous, problem solving and cutting edge researches,disseminate knowledge and technologies, and provide demand-driven and transformative community services.
<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                   &nbsp;E-learning Mission
                </div>

				<h6>E-learning Mission</h6>
To provide a highly developed form of teaching through maximizing the use of technology which will somehow give an easier and efficient way of learning that will make them to be competitive and productive citizens of the society



                            
                <!-- end slider -->
            </div>

        

    </div>
	</div>
	</div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        
                       

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;Campuses

                        </div>
                        <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Main Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Gedege Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Stestion Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Harar Campus</a></p>
                        </div>
						 
                    </div>
                </div>
            </div>
        </div>



        <br>
        
        

        <?php include('footer.php'); ?>
    </div>

