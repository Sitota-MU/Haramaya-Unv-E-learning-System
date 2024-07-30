

<?php
include  "../inc/nusoap.php";


function getInfo($stud_id , $fname,$lname,$code,$department_name,$Inst_id,$class_id,$email,$username){

 $link = mysqli_connect('localhost','root','','e-learning') or die("Could not connect");
  $result = mysqli_query($link,"INSERT INTO student values('$stud_id' ,'$fname','$lname','$department_name','$Inst_id','$code','$class_id') ")or die(mysql_error($link));
$qrese=mysqli_query($con, $result);

 
 
    if($qrese==1){
	
    return Successful;
}
}


$server = new soap_server();

#$server->register("getAmount");
$server->register("getInfo");

$server->service($HTTP_RAW_POST_DATA);
?>
