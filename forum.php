<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">




	
<?php include('header.php'); ?>
<?php include('session.php'); ?>
</head>
    <body id="login">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
				


               <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
						
                        <!-- block -->
                       
                            
							
					




<?php if( isset($_GET['logout_successfully'])){ ?><?php echo $_GET['logout_successfully']; ?>
<?php } ?>



							
                            <div class="block-content collapse in">
                               
                          <div class="span6">     
	    <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
	
                            
	
                                       
                       
<div class="span11"><div class="pull-right">
<form class="form-signin" method="post" action="process.php">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Login To Group Disscusion</h3>
						<input type="text" class="input-block-level" id="username" name="email"  placeholder="Email" required>
						<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
						<button data-placement="right" title="Click Here to Sign In" id="signin" name="loginbtn" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i>Login</button>
							</div></div></div>	</div></div>	</div>
 
        </div>
		   </div>
                    </div>
                
                
                 
                 
                </div>

				
            
			 <div class="container">
		<?php include('footer.php'); ?>
      </div>
		<?php include('script.php'); ?>