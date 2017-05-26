<?php
require_once('kontrollija.php');
session_start();
connect_db();

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}
if(!empty($_SESSION["user"])){
    include_once('View/pealdis1.html');
} else {
	include_once('View/pealdis2.html');
}


switch($page){
	case "rega":
		register();
	break;
	case "login":
		login();
	break;
	case "logout":
		logout();
	break;
	case "lisa":
		lisa();
	break;
	case "message":
		naita();
	break;
	default:
		include_once('View/avaleht.html');
	break;
}

include_once('View/jalats.html');

?>