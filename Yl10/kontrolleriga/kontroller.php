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
	$page = htmlspecialchars($_GET['page']);
}

switch($page){
	case "galerii":
		include("galerii.php");
	break;
    case "vote":
        if(!isset($_SESSION['voted_for'])){
            include ("vote.php");
        } else {
            include ("tulemus.html");
        }
        break;
    case "endSession":
        $_SESSION = array();
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-42000, '/');
        }
        session_destroy();
        include ("pealeht.php");
	case "tulemus":
		$id=false;
		if (isset($_POST['pilt']) && isset($pildid[$_POST['pilt']]))
			$id=htmlspecialchars($_POST['pilt']);
		include("tulemus.html");
	break;
	default:
	include('pealeht.php');
}

require_once("footer.html");
?>