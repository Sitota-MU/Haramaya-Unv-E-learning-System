<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('inst_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
								$school_year_query_row = mysql_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								<li><a href="#">Message</a><span class="divider">/</span></li>
								<li><a href="#"><b>Inbox</b></a><span class="divider">/</span></li>
								<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
							<?php
								 $query_announcement = mysql_query("select * from message
																	LEFT JOIN student ON ins.stud_id = message.sender_id
																	where  message.reciever_id = '$session_id' order by date_sended DESC
																	")or die(mysql_error());
								$count_my_message = mysql_num_rows($query_announcement);	
								if ($count_my_message != '0'){
								 while($row = mysql_fetch_array($query_announcement)){
								 $id = $row['message_id'];
								 $sender_id = $row['sender_id'];
								 $sender_name = $row['sender_name'];
								 $reciever_name = $row['reciever_name'];
								 ?>
											<div class="post"  id="del<?php echo $id; ?>">
										
											<div class="message_content">
											<?php echo $row['content']; ?>
											</div>

                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								
										<ul class="nav nav-pills">
										<li class="active">
										<a href="teacher_message.php"><i class="icon-envelope-alt"></i>inbox</a>
										</li>
										<li class="">
										<a href="sent_message.php"><i class="icon-envelope-alt"></i>Sent messages</a>
										</li>
										</ul>
									
										
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
			url: "remove_inbox_message.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
			$('#'+id).modal('hide');
			$.jGrowl("Your Sent message is Successfully Deleted", { header: 'Data Delete' });	
			}
			}); 		
			return false;
		});				
	});
</script>
	

                </div>
				<?php include('create_message.php') ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>