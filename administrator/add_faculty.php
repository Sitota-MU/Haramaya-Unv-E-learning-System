   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div height='20px' width='30px' class="muted pull-left">Please  Enter Faculty</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
					<form action="" method="post" name="myForm " onsubmit ="return (validate());">
       
								<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="faculty" type="text"required pattern="[a-zA-Z ]{2,20}" oninvalid="setCustomValidity('department Name must be above two letter ')" onchange="try{setCustomValidity('')}catch(e){}"  placeholder = "Faculty">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="dean" type="text"required pattern="[a-zA-Z]{4,15}" oninvalid="setCustomValidity('first Name must be above two letter')" onchange="try{setCustomValidity('')}catch(e){}"  placeholder = "College Dean Name">
                                          </div>
                                        </div>
										
									
			<input type="submit" name="add" value="Add faculty" class="btn btn-primary"/>
		
			<?php
			if(isset($_POST['add']))
			{
				$d_name=$_POST['dean'];
				$cname=$_POST['faculty'];
				$chk=mysql_query("select * from faculty where name='$cname'");
				$nack=mysql_num_rows($chk);
				if($nack>=1)
				{?>
						<script>
alert(' Faculty Alerady Exist');
</script>
	<?php
				}
				else{
					if(mysql_query("insert into faculty(dean_name,name,date) values('$d_name','$cname',NOW())"))

				
			/*	mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add faculty $cname')")or die(mysql_error());
			
			*/echo"Faculty Add Successfuly";

			
			}}
			?>
			</div>
			</div>
			</div>
			</div>
			</table>
		</form>
		