<?php

$user='srnagire';
$pass='sri.VEERA9';
$db="SSID";


$con=OCILogon($user, $pass,$db);
if(!$con){
	echo "an error occured in connecting";
	exit;
	}


?>