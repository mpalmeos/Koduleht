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
	<h3>Fotod</h3>
	<div id="gallery">
	    <?php foreach ($pildid as $pilt): ?>
		    <img src="<?php echo $pilt['src']; ?>" alt="<?php echo $pilt['alt'];?>"/>
		<?php endforeach;?>
	</div>
</div>
<?php require_once('footer.html');?>