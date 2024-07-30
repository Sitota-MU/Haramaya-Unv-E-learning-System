	
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<head>
	
			
		<link href="css/grade.css" rel="stylesheet" media="screen">		
			
	
</head>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
                <div class="span8" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
								$school_year_query_row = mysql_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								<li><a href="#"><b>Submit grade</b></a><span class="divider">/</span></li>
								<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
    

<?php
$query=mysql_query("select * from user where user_id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							$user_type=$row['user_type'];
							if($user_type	== 'department')
							{
							?>
 <?php
							$query=mysql_query("select * from account where id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							
if(isset($_POST["submit_assignment"])) {
	
			   $file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));
		                                $file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));
		                                $Juses = addslashes($_FILES['file_cv']['name']);
		                                $image_size = getimagesize($_FILES['file_cv']['tmp_name']);
										$type = explode('.', $Juses);
										$type = end($type);
		if($type != 'doc' && $type != 'pdf' && $type != 'ppt' && $type != 'docx' && $type != 'pptx' && $type != 'txt' && $type != 'csv' && $type != 'csv'  ){
			$message = "Invalid File Format Not Supported !";
			echo '<div class="alert alert-dismissable alert-danger">';
			echo '<button type="button" class="close" data-dismiss="alert">X</button>';
			echo '<strong>'.$message.'</strong>';
			echo '</div>';
			} 
		else{
			
			move_uploaded_file($_FILES["file_cv"]["tmp_name"], "student_assignment_files/" . $_FILES["file_cv"]["name"]);
			
			
			
	
			$code= $_POST['code'];
			$name= $_POST['name'];
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];	
			
				$id =$row['user_type'];
			mysql_query("insert into studentgrade (name,code,fname,lname,grade,user_type) values
		('$name','$code','$fname','$fname','$Juses','$id')")or die(mysql_error());
		echo '<div class="alert alert-dismissable alert-success">';
     echo "Assignment Successfulyy inserted !";
		echo '</div>';
	}
			
}
			
			?>
<?php
}

?>	
			
						       <!-- block -->
                 	
                            <div class="block-content collapse in">
                               
                         
	    <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
	
                            
	
                                       
                       
<div class="span11"><div class="pull-right">
   
			
	
				<div class="detailss">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspPlease Fill the form Properly</div>	
				<form  class="form-horizontal" id="formID"  name="formID"  action=""  method="POST"  onsubmit="return validateForm()"  enctype="multipart/form-data">
				<table  style="width:600px; margin-left:80px;">
			<tr >
                	<td style="width:200px;">Course Name</td>
          			<td>
                       <input class="input focused" name="name" id="focusedInput" type="text"required pattern="[a-zA-Z]{3,15}" oninvalid="setCustomValidity('Name must be a letter and above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Course Name">
				      </td>

            	</tr>		
<tr>
                	<td>Course Code</td>
                   <td>
                    <input class="input focused" name="code" id="focusedInput" type="text"required pattern="[a-zA-Z0-9/()]{2,15}" oninvalid="setCustomValidity('id must be above two numbers or letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "password">
                    </td>
            	</tr>
				
				
				
				
				 <tr>
               		<td>First Name</td>
                   	<td>
                       <input class="input focused" name="fname" id="focusedInput" type="text"required pattern="[a-zA-Z]{3,15}" oninvalid="setCustomValidity('Name must be a letter and above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "First Name">
						</td>

               </tr>
			   	 <tr>
               		<td>Last Name</td>
                    <td>
                    <input class="input focused" name="lname" id="focusedInput" type="text"required pattern="[a-zA-Z]{3,15}" oninvalid="setCustomValidity('Name must be a letter and above three letter ')" onchange="try{setCustomValidity('')}catch(e){}" placeholder = "Last Name">
					
</td>
               </tr>
				<tr>
                	<td>Upload Grade</td>
                    <td>
					<input type="file" size="1" name="file_cv" id="file_cv"  class="validate[required] text-input"  style="margin-left:20px; width:350px;" placeholder="Attaches(Upload) Pdf,Doc,PPt Assignment(Optional)" >
					</td>
            	</tr>
				
			   
			<tr>
				 <td></td>
            	<td >
		
                </td>
            </tr>
		
			
          	</table>
			<div class="group">
				<div class="control">
					<input type="submit" style="margin-left:150px;" name="submit_assignment" value="Submit Grade" class="btn" id="form_input_height_width"  />
</div>
</div>
    </form>	
	
	
							<br>	<br><br><br><br><br><br><br>	<br>	<br><br><br><br><br><br><br>	
				<!----------------------------------------------------------------------------->	
</div>		
</div>
</div>
</div>
</div>	
</div>		
</div>
</div>
</div>
</div>	
</div>
</div>
</div>
		<div class="container">

		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
	
					<body>
</html>			



											



					

