<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="utf-8">
		<title>Koduleht</title>
	</head>
	
	<body>
		<div style="background: lightblue; text-align: justify;" id="pilt">
		<div class="must">
		<h1 id="Pealkiri">Welcome to my homepage!</h1>
		<img src="Kass.jpg" alt="Sorry, missed it" width="300" height="400"/> <br/>
		</div>
		
		<div class="must">
		<a href="/~mpalmeos/Harjutus1">Praktikum 1</a> <br/>
		<a href="/~mpalmeos/Harjutus2">Praktikum 2</a>
		</div>
		<br/>
		<br/>
		</div>
		
		<div class="must">
		<h1>2. Praktikumi ülesanded</h1>
		<br/>
		<iframe src="/~mpalmeos/Harjutus2/praktikum2.html" name="iraam" height="500" width="500">
		</iframe> <br/><br/>
		<ul id="loend">
		<li><a href="Harjutus2/harjutus1.html" target="iraam">Harjutus 1</a> </li>
		<li><a href="Harjutus2/harjutus2.html" target="iraam">Harjutus 2</a></li>
		<li><a href="Harjutus2/harjutus2-2.html" target="iraam">Harjutus 2, osa 2</a></li>
		<li><a href="Harjutus2/praktikum2.html" target="iraam">Galerii ülesanne</a></li>
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
	<div>
		<a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
		</a> <br/>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
		<img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
		</a>
	</div>
	</body>
</html>
