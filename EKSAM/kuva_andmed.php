<?php

session_start();
require_once("kontroller.php");

$kylastajate_arv = "kylastajate_arv.txt"; //Lahendusel kasutatud: https://hibbard.eu/how-to-make-a-simple-visitor-counter-using-php/
$viimane_aeg = "viimati_aeg.txt"; //Lahendusel kasutatud: https://hibbard.eu/how-to-make-a-simple-visitor-counter-using-php/

if(!file_exists($kylastajate_arv)){ 
	$f=fopen($kylastajate_arv, "w");
	fwrite($f,"0");
	fclose($f);
}

$f=fopen($kylastajate_arv, "r");
$lugeja=fread($f, "1");
fclose($f);

if(!isset($_SESSION['kylastusi'])){
	$lugeja++;
	$f=fopen($kylastajate_arv, "w");
	fwrite($f, $lugeja);
	fclose($f);
}

$file=fopen($viimane_aeg, "w");
fwrite($file, "".time()."");
fclose($file);

$file2=file_get_contents("$viimane_aeg");
$file2=(int)$file2;

require("pealeht.php");

?>