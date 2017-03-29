<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title> PHP kodune töö </title>
<?php
	function teisiti1($text){
		$teisiti="";
		for($i=strlen($text)-1; $i>=0; $i=$i-1){
			$teisiti = $teisiti.$text[$i];
		}
		echo $teisiti;
	}
	
	function teisiti2($tekst) {
		$vastus="";
		for($i=strlen($tekst); $i>=0; $i=$i-1){
			$vastus=$vastus.substr($tekst, 0, $i-strlen($tekst));
		}
		echo $vastus;
	}
?>
</head>
<body>
	<a href="/~mpalmeos/index.php">Tagasi pealehele</a> <br/> 
    <?php echo teisiti1("sõnakas"); ?> <br/>
	<?php echo teisiti2("sõnasõda"); ?> <br/>
	
</body>	
</html>