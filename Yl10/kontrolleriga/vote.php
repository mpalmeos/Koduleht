<?php require_once('head.html');
$pildid = array(
    "pildid/nameless1",
	"pildid/nameless2",
	"pildid/nameless3",
	"pildid/nameless4",
	"pildid/nameless5",
	"pildid/nameless6",);
?>

<?php
if (isset($_SESSION['vote_for'])){


	 include("tulemus.php");
	 
 } else {?>

<h3>Vali oma lemmik!</h3>
<form action="?page=tulemus" method="POST">
	<?php foreach($pildid as $id=>$pilt):?>
		<p>
			<label for="p<?php echo $id;?>">
				<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>" height="100" />
			</label>
			<input type="radio" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="pilt"/>
		</p>
	<?php endforeach; ?>
	<br/>
	<input type="submit" value="Valin!"/>
</form>
<?php }; ?>
<?php require_once('footer.html');?>