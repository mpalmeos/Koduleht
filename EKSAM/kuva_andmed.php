<?php

session_start();
require_once("kontroller.php");

if(!file_exists($kylastajate_arv)){
	$f=fopen($kylastajate_arv, "w");
	fwrite($f, "0");
	fclose($f);
}

$f=fopen($kylastajate_arv, "r");
$lugeja=fread($f, filesize($kylastajate_arv));
fclose($f);

if(!isset($_SESSION['kylastusi'])){
	$lugeja++;
	$f=fopen($kylastajate_arv, "w");
	fwrite($f, $lugeja);
	fclose($f);
}

require("pealeht.php");

?>