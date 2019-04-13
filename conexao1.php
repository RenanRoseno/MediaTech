<?php

$host = "localhost";
$user = "root";
$pass = "";
$bdname = "mediaTech";

	$conn = mysqli_connect($host, $user, $pass, $bdname);
	if(!$conn){
		die("<font color='#00a845'>Falha na conexão: " . mysqli_connect_error()."</font>");

	}else{

		
	}
?>