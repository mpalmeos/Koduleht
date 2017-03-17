<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Style.css">
		<title>Koduleht</title>
	</head>
	<body>
	<div id="menu">
	<ul>
		<li><a href="bullseye.html">Märklaua harjutus</a> </li>
		<li><a href="abakus.html">Abakuse harjutus</a></li>
		<li><a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
		</a></li>
		<li><a href="http://jigsaw.w3.org/css-validator/check/referer">
		<img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
		</a></li>
	</ul>
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