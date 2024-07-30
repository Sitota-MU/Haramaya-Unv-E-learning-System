            <?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('admin_sidebar.php'); ?>
                <!--/span-->
<?php

session_start();
$session('message')="";
if($_server[request_method]=='post'){
	if($_post["password"]=$_post["confirm password"]){
		$username=$mysql->real-escape-string($_post["username"]);
		$email=$mysql->real-escape-string($_post["email"]);
		$password=md5($_post["password"]);
				$image_path=$mysql->real-escape-string(['uploads/'.$_FILES["vatar"]["name"]);
?>
<link rel="stylesheet" herf="form.css" type="text/css"/>
<div class="body-content">
<div class='module'>
<h1> Create Account</h1>
<form  class="form" action="form.php" method="post" enctype="multiple/form-data" autocomplete="off">
<div class="alart alart-error><?=$session['message']?></div>
<input type='text' placeholder='fristname' name='f_name' required/>
<input type='text' placeholder='lastname' name='l_name' required/>
<input type='text' placeholder='username' name='username' required/>
<input type='email' placeholder='email' name='email' required/>
<input type='password' placeholder='password' autocomplete="new password" required/>
<input type='password' placeholder='confirm password' autocomplete="new password" required/>
<div class="vatar"><lable> select photo:</lable><input type="file" name='vatar' accept="image/*" required></div>
<input type="submit" value="register" class='btn btn-block btn-primary/>
</form>
</div>
</div>