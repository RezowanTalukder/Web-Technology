<?php

require 'init.php';
$name = $_GET["name"] ;
$user_name = $_GET["user_name"] ;
$user_password = $_GET["user_password"] ;

$sql = "select * from login_info where user_name = 'user_name'" ;

$result = mysql_query($con,$sql) ;

if (mysql_num_rows($result)>0) {
	$status = "exists" ;
}
else {
	$sql = "insert into login_info(name, user_name, user_password) values('$name','user_name','user_password');" ;

	if(sql_query($con, $sql)){
		$status = "ok" ;
	}

	else {
		status = "error" ;
	}
}

mysql_close(%con) ;

?>