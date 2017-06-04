<!doctype html>
<html>
    <head>
	<meta charset="utf-8"/>
	<title>Külastuste loendur</title>
	</head>
	<body>
<?php       //Lahendusel kasutatud: https://stackoverflow.com/questions/7958930/cookie-page-counter-in-php
    if(!isset($_COOKIE['kylastusi']))
	{ ?>
    <h2>Külastad lehte esimest korda - Tere!</h2>

	<?php
	    $cookie = 1;
		setcookie('kylastusi', $cookie);
	}
	else {
		$cookie=++$_COOKIE['kylastusi'];
		setcookie('kylastusi', $cookie);
	?>

<h2> Oled lehte külastanud nii mitu korda: <?= $_COOKIE['kylastusi'] ?> </h2>
	<?php } ?>
	
<?php //Lahendusel kasutatud: http://krazytech.com/programs/a-php-progarm-to-store-current-date-time-in-a-cookie-and-display-the-last-visited-on-date-time-on-the-web-page-upon-reopening-of-the-same-page
$aegub = 60*60*24*60 + time(); //Küpsis aegub 2 kuu pärast
setcookie('viimati', date("G:i - m/d/y"), $aegub);
if(isset($_COOKIE['viimati'])){
	$aeg=$_COOKIE['viimati'];
	
	echo "<h1>Viimati külastasid lehte: ". $aeg . "</h1>"; 
}

	echo "Oled külastaja nr " . $lugeja ."<br/>";
	
	echo "Ajavahe, millal lehte viimati külastati (sekundites):"; 
	echo  $file3 - time();
?>
	</body>
</html>