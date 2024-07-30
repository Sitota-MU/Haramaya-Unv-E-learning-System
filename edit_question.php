<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
                <div class="span5" id="content">
				
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
										
				
					     <ul class="breadcrumb">
							
							<li><a href="#"><b>Announcements</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
						
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<a href="add_quiz.php<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left icon-large"></i> Back</a>
								<br>
								<br>
								<form method="post">
									 <?php
								 $query_announcement = mysql_query("select * from quiz where course_code='$get_id'")or die(mysql_error());
								$row = mysql_fetch_array($query_announcement);
								 $id = $row['id'];
								 ?>
					
								<textarea name="content" id="ckeditor_full">
								<?php echo $row['question']; ?>
								</textarea>
									   <div class="form-group">
                                     <label class="sr-only" for="wrong_answer2">Enter answer 1</label>
								<input type="text" class="form-control" id="wrong_answer2" name="answer1"
									value="<?php echo $row['option_1']; ?>" ></div>
									<div class="form-group">
                                    <label class="sr-only" for="wrong_answer3"> Enter Answer 2</label>
									<input type="text" class="form-control" id="wrong_answer2" name="answer2"
									value="<?php echo $row['option_2']; ?>"></div>
									<div class="form-group">
									<label class="sr-only" for="wrong_answer3"> Enter Answer 3</label>
										<input type="text" class="form-control" id="wrong_answer2" name="answer3"
									value="<?php echo $row['option_3']; ?>"></div>
										<div class="form-group">
									<label class="sr-only" for="wrong_answer3"> Enter Answer 4</label>
										<input type="text" class="form-control" id="wrong_answer2" name="answer4"
									value="<?php echo $row['option_4']; ?>"></div>
										<div class="form-group">
									<label class="sr-only" for="wrong_answer3"> Enter true answer</label>
									 <input type="text" class="form-control" id="wrong_answer3" name="answer" 
									 	value="<?php echo $row['answer']; ?>"></div>
								<br>
				                 <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>
								</form>
                                </div>
								
								<?php
									if (isset($_POST['submit'])){
									$content = $_POST['content'];
									$answer1 = $_POST['answer1'];
									$answer2 = $_POST['answer2'];
									$answer3 = $_POST['answer3'];
								    $answer4 = $_POST['answer4'];
									 $answer = $_POST['answer'];
									
									mysql_query("update quiz set question = '$content' ,option_1='$answer1' ,option_2='$answer2',option_3='$answer3', option_4='$answer4',answer='$answer' where id = '$id' ")or die(mysql_error());
									?>
									<script>
									 window.location = 'add_quiz.php<?php echo '?id='.$get_id; ?>'; 
									</script>
									<?php
									}
								?>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				
			


					<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_question.php",
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
					
                </div>
				
			
            </div>
			
		
		
		</div>
			<div class="container">
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>