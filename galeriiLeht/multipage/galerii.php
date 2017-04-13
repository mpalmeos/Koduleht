<?php require_once('head.html');?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
	    <?php foreach ($pildid as $pilt): ?>
		    <img src="<?php echo $pilt['src']; ?>" alt="<?php echo $pilt['alt'];?>"/>
		<?php endforeach;?>
	</div>
</div>
<?php require_once('footer.html');?>