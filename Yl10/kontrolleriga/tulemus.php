<?php require_once('head.html');?>

<?php if (isset($_SESSION['vote_for'] )){ ?>
	<h3>Vajuta "Tagasi valimiseks", kui tahad uut pilti valida</h3>
	<p>Sinu valik on järgmine: <br/>
	<img src="<?php echo $pildid[$_SESSION['vote_for']]['src'];?>" alt="valitud"/></p>
			 
<?php	} else{
	$_SESSION['vote_for'] = $_POST['pilt'];?>
	<p>Sinu valik on järgmine: <br/>
	<img src="<?php echo $pildid[$_SESSION['vote_for']]['src'];?>" alt="valitud"/></p>
<?php	} ?>
<?php if ($_SESSION['vote_for'] = $_POST['pilt']){ ?>
<form method="post" action="?page=tulemus">

	<input type="submit" name="delete" value="Muuda valik">	
</form>
<?php	} ?>

<?php if (isset($_POST['delete'] )){
	$_SESSION = array(); 
	
	echo '<a href="?page=vote">Tagasi valima</a>';
} ?> 

<?php require_once('footer.html');?>