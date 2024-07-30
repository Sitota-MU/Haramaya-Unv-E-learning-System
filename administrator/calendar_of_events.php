<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('admin_sidebar.php'); ?>
                
                <!--/span-->
                <div class="span9" id="content">
								        <div id="block_bg" class="block">
                
								<div class="block-content collapse in">
										<div class="span8">
							<!-- block -->
										<div class="navbar navbar-inner block-header">
											<div class="muted pull-left">Calendar</div>
										</div>
															<div id='calendar'></div>	
<script>
        $(function() {
            // Easy pie charts
            var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
     
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped
            
                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);
                
                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                
                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
                
            },
			editable: true,
			// US Holidays
				 events:
		[
		<?php $event_query = mysql_query("select * from event where teacher_class_id = '' ")or die(mysql_error());
			  while($event_row = mysql_fetch_array($event_query)){
		?>
        {
            title  : '<?php echo $event_row['event_title']; ?> ',
            start  : '<?php echo $event_row['date_start']; ?>',
            end  : '<?php echo $event_row['date_end']; ?>'
        },
		<?php } ?>
		]
			
			});
        });


        </script>
																			
										</div>
										
										<div class="span4">
												<?php include('add_class_event.php'); ?>
										</div>	
							<!-- block -->
						
										</div>
                                </div>		
                </div>
            </div>
			</div>
						 <div class="container">
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
	
    </body>

</html>