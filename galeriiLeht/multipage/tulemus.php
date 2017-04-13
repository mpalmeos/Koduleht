<?php require_once('head.html');?>

<div id="wrap">
	<h3>Valiku tulemus</h3>
	<?php if (empty($_GET)){
		echo '<p>Tee ikka valik ka!<p>';
	} else {
		echo "Pilt " . $_GET["pilt"] . " valitud!";
	}?>

</div>
<?php require_once('footer.html');?>