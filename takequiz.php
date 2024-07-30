
<?php include('header.php'); ?>
<?php include('session.php'); ?>

		<?php include('student_navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span5" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
				 <div id="block_bg" class="block">
					     <ul class="breadcrumb">
		
						
<body onload="hidder();">
<center>
<div class="time" id="navbar">Time left :<span id="timer"></span></div>
<button class="button" id="mybut" onclick="myFunction()">START QUIZ</button>
</center>
<div id="myDIV" style="padding: 10px 30px;">
<form action="result.php" method="post" id="form">  				
<table><?php   $fetchqry = mysql_query("SELECT * FROM quiz") or die(mysql_error());
				$num=mysql_num_rows( $fetchqry);
				
			   while($row = mysql_fetch_array($fetchqry,MYSQLI_ASSOC)){
		  ?>
  <tr><td><h3><br><?php echo @$snr +=1;?>&nbsp;-&nbsp;<?php echo @$row['que'];?></h3></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option_1']; ?><br>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option_2'];?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;c )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option_3']; ?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;d )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option_4']; ?><br><br><br></td></tr>
			    <?php  }
																	?> 
		<tr><td align="center"><button class="button3" name="click" >Submit Quiz</button></td></tr>
	</table>
  <form>
</div>
<script>
function myFunction() {
	var x = document.getElementById("myDIV");
    var b = document.getElementById("mybut");
    var x = document.getElementById("myDIV");
	if (x.style.display === "none") { 
	b.style.visibility = 'hidden';
	x.style.display = "block";
	startTimer();
}
}
window.onload = function() {
  document.getElementById('myDIV').x.style.display ;
};
</script>
<?php			$fetchtime = mysql_query("SELECT timer FROM quiz WHERE id=1") or die(mysql_error());
				
				$time = mysql_fetch_array($fetchtime);
				$settime = $time['timer'];		
						?>
 <script type="text/javascript">
 
document.getElementById('timer').innerHTML = '<?php echo $time['timer']; ?>';
  //03 + ":" + 00 ;
 
 
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0){document.getElementById("form").submit();}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}
 
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>
 

</body>
</html>

