<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h3 id="myModalLabel">Change Profile</h3>
	</div>
		<div class="modal-body">
					<form method="post" action="admin_avatar_index.php" enctype="multipart/form-data">
							<center>	
								<div class="control-group">
								<div class="controls">
									<input name="image" class="input-file uniform_on" id="fileInput"  name="MAX_FILE_SIZE"  type="file" required>
								</div>
								</div>
							</center>			
					
		</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> close</button>
						<button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> change</button>
					</div>
					</form>
</div>
<!-- end  Modal -->