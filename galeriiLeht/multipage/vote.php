<?php require_once('head.html');
$pildid = array(
    "pildid/nameless1",
	"pildid/nameless2",
	"pildid/nameless3",
	"pildid/nameless4",
	"pildid/nameless5",
	"pildid/nameless6",);
?>

<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="?mode=tulemus.php" method="POST">
	    <?php foreach ($pildid as $pilt):?>
		<p>
			<label for="<?php echo $pilt["id"]; ?>">
				<img src="<?php echo $pilt["src"]; ?>" alt="<?php echo $pilt["alt"];?>" height="100" />
			</label>
			<input type="radio" value="<?php echo $pilt["id"];?>" id="p1" name="pilt"/>
		</p>
		
		<?php endforeach;?>
		
		<br/>
		<input type="submit" value="Valin!"/>
	</form>

</div>
<?php require_once('footer.html');?>