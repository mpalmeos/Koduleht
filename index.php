<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet type="text/css" href="style.css" media="screen" />
		<meta charset="utf-8">
		<title>Koduleht</title>
	</head>
	
	<body>
		<h1>Welcome to my homepage!</h1>
		<img src="Kass.jpg" alt="Sorry, missed it" width="300" height="400"/>
		<div>
		<a href="/~mpalmeos/Harjutus1">Praktikum 1</a> <br/>
		<a href="/~mpalmeos/Harjutus2">Praktikum 2</a>
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
