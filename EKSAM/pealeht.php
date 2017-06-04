<!doctype html>

<html>
    <head>
	<meta charset="utf-8"/>
	<title>Külastuste loendur</title>
	</head>
	<body>
<?php //Lahendusel kasutatud: https://stackoverflow.com/questions/7958930/cookie-page-counter-in-php
    if(!isset($_COOKIE['kylastusi']))
	{ ?>
    <h1>Külastad lehte esimest korda - Tere!</h1>

	<?php
	    $cookie = 1;
		setcookie('kylastusi', $cookie);
	}
	else {
		$cookie=++$_COOKIE['kylastusi'];
		setcookie('kylastusi', $cookie);
	?>

<h1> Oled lehte külastanud nii mitu korda: <?= $_COOKIE['kylastusi'] ?> </h1>
	<?php } ?>
	<h1>Viimati külastati lehte:</h1>
	</body>
</html>