<?php require_once('View/pealdis.html');?>
<?php require_once('View/valik_menuu.html');?>

<div id="content">
    <h1> Tere tulemast minu poodi! </h1>
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

<?php require_once('View/jalats.html');?>
