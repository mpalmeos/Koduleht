<?php
session_start();

require_once("head.html");

$pildid = array(
    1=>array('src'=>"pildid/nameless1.jpg", 'alt'=>"nimetu 1"),
	2=>array('src'=>"pildid/nameless2.jpg", 'alt'=>"nimetu 2"),
	3=>array('src'=>"pildid/nameless3.jpg", 'alt'=>"nimetu 3"),
	4=>array('src'=>"pildid/nameless4.jpg", 'alt'=>"nimetu 4"),
	5=>array('src'=>"pildid/nameless5.jpg", 'alt'=>"nimetu 5"),
	6=>array('src'=>"pildid/nameless6.jpg", 'alt'=>"nimetu 6"),
	);

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page = htmlspecialchars($GET_['page']);
}

switch ($page) {
	case "galerii":
	        include("galerii.php");
		break;
	case "vote":
	        include("vote.php");
		break;
	case "tulemus":
	        $id=false;
			if(isset($_POST['pilt']) && isset($pildid[$_POST['pilt']]))
				$id=htmlspecialchars($_POST['pilt']);
	        include("tulemus.php");
		break;
	default:
	    include('pealeht.php');
		break;
}
require_once("footer.html");
?>