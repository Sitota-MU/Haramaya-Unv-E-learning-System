<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_head.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('head_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
						<div class="pull-right">
						
							<a id="print" onclick="javascript:printDiv('printablediv')" class="btn btn-success"><i class="icon-print"></i> Print Student List</a>
						</div>
						<br>
						<br>
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right">
					
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
						
										
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
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