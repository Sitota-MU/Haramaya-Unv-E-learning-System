 <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                              <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add Quiz</h4></div>
                            </div>
								    <div class="block-content collapse in">
                                <div class="span12">
							<form class="" id="add_downloadble" method="post" enctype="multipart/form-data" name="upload" >
								    
											<label >Question</label>
											<div class="controls">
													<textarea name="question" id="ckeditor_full" required></textarea>
											</div>
										
					   
					   
					   <div class="form-group">
                <label class="sr-only" for="wrong_answer2">Enter answer 1</label>
                <input type="text" class="form-control" id="wrong_answer2" name="answer1" placeholder="Answer one" Required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer3"> Enter Answer 2</label>
                <input type="text" class="form-control" id="wrong_answer3" name="answer2" placeholder="Answer two" Required>
            </div>
			  <div class="form-group">
                <label class="sr-only" for="wrong_answer3"> Enter Answer 3</label>
                <input type="text" class="form-control" id="wrong_answer3" name="answer3" placeholder="Answer three" Required>
            </div>
					<div class="form-group">
                <label class="sr-only" for="wrong_answer3"> Enter Answer 4</label>
                <input type="text" class="form-control" id="wrong_answer3" name="answer4" placeholder="Answer four" Required>
            </div> 
			  <div class="form-group">
                <label class="sr-only" for="wrong_answer3"> Enter true answer</label>
                <input type="text" class="form-control" id="wrong_answer3" name="answer" placeholder="True Answer" Required>
            </div>
					   
					   
				<br>	   
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>
 
        </form>
       


                
			<!--	
				  <div class="block-content collapse in">
                                <div class="span12">

<form action="" method="post">
  <div class="form-group">
  <h2>Set New Timer</h2>
                <label for="minute" >Minutes</label>
                <input type="number" class="form-control input-group-lg reg_name" min="0" max="60" name="min" placeholder="Min" Required>
			</div>
  <div class="form-group">
                <label for="second" >Seconds</label>
                <input type="number" class="form-control input-group-lg reg_name" min="0" max="60" name="sec" placeholder="Sec" Required>
            </div><br>
			<button type="submit" class="btn btn-primary btn-large" value="submit" name="timesubmit">+Set Timer</button>
<form>
 </div>
              </div>-->
                        <!-- /block -->
                    </div>          <!-- /block -->
                    </div>


                </div>
				
				<div class="span4 row-fluid">
						       <!-- block -->
                     
                            <div class="block-content collapse in">
                                <div class="span12">
								
											
								
								
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


					<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_announcements.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Post is Successfully Deleted", { header: 'Data Delete' });
		
			}
			}); 
			
			return false;
		});				
	});

</script>
	 <?php 
	 
	 if(isset($_POST['submit'])){
$que = $_POST['question'];
$ans1 = $_POST['answer1'];
$ans2 = $_POST['answer2'];
$ans3 = $_POST['answer3'];
$ans4 = $_POST['answer4']; 
$answer = $_POST['answer']; 
$done=mysql_query("insert into quiz(course_code,que_desc,ans1,ans2,ans3,ans4,true_ans,date) values('$get_id','$que','$ans1','$ans2','$ans3','$ans4','$answer',NOW())")or die(mysql_error());



if($done==TRUE){
	?>
	<script>
	alert( 'Question and Answers Sumbmitted Succesfully');
	</script>
	<?php
}
else
{
	?>
	
	<script>
	alert("please enter correct fill");
	</script>
	<?php
	 }
	 }
?>

             
<?php
if(isset($_POST['timesubmit'])){
$min = $_POST['min'];
$sec = $_POST['sec'];
$timer = $min.':'.$sec;
$fetchqry3 = mysql_query ("UPDATE quiz SET timer='$timer' WHERE id =1") or die( mysql_error());
if($fetchqry3==TRUE){
	echo "The timer currently set to $timer";
}
}
?>
