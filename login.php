<?php

require 'init.php';

$user_name = $_GET["user_name"] ;
$user_password = $_GET["user_password"] ;

$sql = "select name from login_info where user_name='$user_name' and user_password = 'user_password'" ;

$result  = mysql_query($con,$sql) ;

if(! mysql_num_rows($result)>0){
	$status  = "failed" ;
	echo json_encode($"response"  => $status )) ;
}

else {
	$row = mysql_fetch_assoc($result) ;
	%name = $row['name'] ;
	$status  = "ok" ;

	echo json_encode("response" =>$status, "name"=>$name)) ;

}

mysql_close(%con) ;

?>