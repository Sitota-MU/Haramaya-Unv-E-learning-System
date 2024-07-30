   <?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('admin_sidebar.php'); ?>




<?php

$conn= mysql_connect("127.0.0.1","root","","e-learning");


$_SESSION['message']='';
if($_SERVER['REQUEST_METHOD']=="POST"){
		if($_POST["password"]==$_POST["confirmpassword"]){
		$fristname=mysql_real_escape_string($_POST['f_name']);
		$lastname=mysql_real_escape_string($_POST["l_name"]);
		$username=mysql_real_escape_string($_POST["username"]);
		$email=mysql_real_escape_string($_POST["email"]);
		$password=md5($_POST["password"]);
		$status=mysql_real_escape_string($_POST["status"]);
		$image=mysql_real_escape_string('image/'.$_FILES['avatar']['name']);
		if(preg_match("image!",$_FILES['avatar']['type'])){
		if(copy($_FILES['avatar']['tmp_name'],$image)){
			$_SESSION['username']=$username;
			$_SESSION['avatar']=$image;
			
			
			$sql="INSERT INTO account(f_name,l_name,username,email,status,password)"."VALUES('$fristname','$lastname','$username','$email','$status','$password')";
		     if(mysql_query($sql)===true)
			 {
				 $_SESSION['message']="sucessufuly  registere";
	
			 }

		}
		else
		{
		$_SESSION['message']="file is not upload";
		}	
		}
else
{

				 $_SESSION['message']="only support";
				 

}
}
else
{
	$_SESSION['message']='password not match';
}
}			
?>

<html>
<body>

					
<div style="width:420px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,1,0,0.4); margin-top:20px; color:black;">
<h1> Create Account</h1>
<form  class="form" action="account.php" method="post" enctype="multiple/form-data" autocomplete="off">
<input type='text' placeholder='fristname' name='f_name' required />
<input type='text' placeholder='lastname' name='l_name' required/>
<input type='text' placeholder='username' name='username' required/>
<input type='email' placeholder='email' name='email' required/>
<input type='text' placeholder='status' name='status' required/>
<input type='password' placeholder='password'  name='password' autocomplete="new password" required/>
<input type='password' placeholder='confirm password'name='confirmpassword' autocomplete="new password" required/>
<div><lable> select photo:</lable><input type="file"  name="avatar" accept="uploads/*" required/></div>
<input type="submit" value="register" name ='register'class='btn btn-block btn-primary'/>
</form>
</div>
</div>
</div>


</body>
</html		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>
