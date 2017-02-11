<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet type="text/css" href="style.css" media="screen" />
		<meta charset="utf-8">
		<title>Koduleht</title>
	</head>
	
	<body>
		<h1>Harder than it looks</h1>
		<img src="Maie.jpg" alt="Sorry, missed it">
		
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
