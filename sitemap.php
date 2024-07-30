
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
                   &nbsp;Welcome to Haramaya University E-Learning Site.
                </div>



                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3103.19431878247!2d42.0333023946024!3d9.405862960234147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1631a5a8e441e64d%3A0xdafe11071687f9d!2sHaramaya+Univeristy!5e1!3m2!1sen!2set!4v1558420077142!5m2!1sen!2set" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>


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








</body>
</html>


