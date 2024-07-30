<?php
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM user");
while ($row = mysqli_fetch_assoc($result)){
	if($row['user_status'] == 1 ){
		echo "<font color='#009900'>".$row['username']." (Online)"."</font><br>";
		}
		else {
				echo "<font color='#FF0000'>".$row['username']." (Offline)"."</font><br>";
			}
	}

?>