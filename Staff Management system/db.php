<?php

$user='******';
$pass='******';
$db="SSID";


$con=OCILogon($user, $pass,$db);
if(!$con){
	echo "an error occured in connecting";
	exit;
	}


?>