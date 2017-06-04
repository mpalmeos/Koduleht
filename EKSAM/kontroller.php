<?php

function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust andmebaasiga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("UTF-8 ei ole määratud - ".mysqli_error($connection));
}

function


?>