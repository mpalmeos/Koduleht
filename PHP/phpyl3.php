<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Ehted</title>
</head>
<body>
<?php

$helmed=array(
    array("nimi"=>"punane ämblik", "pilt"=>"http://gdurl.com/vruC", "asi"="pross", "kandes"=>"hirmus"),
	array("nimi"=>"orhidee", "pilt"=>"http://gdurl.com/nfxU", "asi"="pross", "kandes"=>"ametlik"),
	array("nimi"=>"draakon", "pilt"=>"http://gdurl.com/mnaq", "asi"="kujuke", "kandes"=>", et kukub maha"),
);

foreach($helmed as $ehe){
	include "ehted.html";
};
?>
</body>
</html>