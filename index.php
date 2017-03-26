<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="applications.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/Style.css"/>
		<title>Koduleht</title>
	</head>
	<body>
	
	<div id="title_banner"> 
	    <img src="http://gdurl.com/7Itq" alt="bites" width="1000" height="50">
	    <div id="title_text">BEAD BYTE SHOP</div>
	</div>
	
	<div id="menu">
	<ul>
		<li><a href="HTML/bullseye.html">Märklaua harjutus</a> </li>
		<li><a href="HTML/abakus.html">Abakuse harjutus</a></li>
		<li><a href="HTML/jquery.html">jQuery harjutus</a></li>
	</ul>
	</div>	
	
	<div id="HTML">
		<a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
		</a>
	</div>
	<div id="CSS">
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
		<img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" height="31" width="88" />
		</a>
	</div>
		
	<?php 
		echo phpversion(); 
		$host = "localhost";
		$user = "test";
		$pass = "t3st3r123";
		$db = "test";

		$l = mysqli_connect($host, $user, $pass, $db);
		mysqli_query($l, "SET CHARACTER SET UTF8") or
        	die("Error, ei saa andmebaasi charsetti seatud");
    	mysqli_close($l);			
	?>
	</body>
</html>