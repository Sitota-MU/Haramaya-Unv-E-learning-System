<?php
include('admin/connect.php');
include('session.php');
$teacher_id = $_POST['Inst_id'];
$my_message = $_POST['my_message'];


$query = mysql_query("select * from head where  head_id= '$session_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$name1 = $row['f_name']." ".$row['l_name'];


$query = mysql_query("select * from instructor where Inst_id = '$teacher_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$name = $row['f_name']." ".$row['l_name'];

mysql_query("insert into message (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$teacher_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysql_error());
mysql_query("insert into message_sent(reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$teacher_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysql_error());
?>