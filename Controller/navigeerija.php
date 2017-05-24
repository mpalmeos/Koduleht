<?php
require_once('kontrollija.php');
//session_start();
//connect_db();

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}

include_once('View/pealdis.html');

switch($page){
	case "galerii":
		include_once('View/galerii.html');
	break;
	case "message":
		lisa_kommentaar();
	break;
	default:
		include_once('View/avaleht.html');
	break;
}

include_once('View/jalats.html');

?>