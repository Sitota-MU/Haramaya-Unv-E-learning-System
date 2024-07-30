</br></br></br>
<div class="span3" id="sidebar">
		<body>


    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
			<li class="active"><a href="index.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Home</a></li>
			<li class="">
				<a href="tutorial.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Tutorial
				</a>
			</li>
			
	
			 <li class=""><a href="about_us.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;About Us</a></li>
		
		<li class=""><a href="contact_us.php"><i class="icon-chevron-right"></i><i class="icon-suitcase"></i>&nbsp;Contact Us</a></li>
		</ul>
					<?php /* include('search_other_class.php');  */?>	
</div>


        </div>

       
    </div>

</div>
</div>
</body>
</html>

