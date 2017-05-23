<?php
$bgVarv="#abc";
$textVarv= "#000";
$borderVarv="#000";
$borderStiil="solid";
$borderLai=1;
$borderRadius=0;

if (isset($_POST['bgVarv']) && $_POST['bgVarv']!="") { 
    $bgVarv=htmlspecialchars($_POST['bgVarv']);
}
if (isset($_POST['textVarv']) && $_POST['textVarv']!="") {
    $textVarv=htmlspecialchars($_POST['textVarv']);
}
if (isset($_POST['borderVarv']) && $_POST['borderVarv']!="") {
    $borderVarv=htmlspecialchars($_POST['borderVarv']);
}
if (isset($_POST['borderLai']) && $_POST['borderLai']!="") {
    $borderLai=htmlspecialchars($_POST['borderLai']);
}
if (isset($_POST['borderStiil']) && $_POST['borderStiil']!="") {
    $borderStiil=htmlspecialchars($_POST['borderStiil']);
}
if (isset($_POST['borderRadius']) && $_POST['borderRadius']!="") {
    $borderRadius=htmlspecialchars($_POST['borderRadius']);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vali oma kiri</title>
    <style>
    #textArea {
        background-color: <?php echo $bgVarv;?>;
        color: <?php echo $textVarv;?>;
        border-style: <?php echo $borderStiil;?>;
        border-width: <?php echo $borderLai;?>px;
        border-color: <?php echo $borderVarv;?>;
        border-radius: <?php echo $borderRadius;?>px;
        display: inline-block;
        min-width: 400px;
        min-height: 200px;
		margin-bottom: 10px;
		}
    #text {
        min-width: 200px;
        min-height: 100px;
        margin-bottom: 20px;	
        }
    #border {
        border-style: solid;
        border-width: 1px;
        max-width: 400px;
        padding: 2px;
        margin-top: 2px;
        }
    </style>
</head>
<body>
<div id="textArea">
    <?php 
	    if(!empty($_POST['inputText'])){
			echo "{$_POST['inputText']}";
		}
	?>
</div>
<form action="tekstiasi.php" method="POST">
    <textarea id="text" name="inputText" placeholder="Kirjuta siia midagi..." ><?php if(!empty($_POST["inputText"]))
        echo htmlspecialchars($_POST["inputText"]);?></textarea><br>
    <input type="color" name="bgVarv" value="<?php if(!empty($_POST["bgVarv"]))
        echo htmlspecialchars($_POST["bgVarv"]);?>"> Tausta värvus <br>
    <input type="color" name="textVarv" value="<?php if(!empty($_POST["textVarv"]))
        echo htmlspecialchars($_POST["textVarv"]);?>"> Teksti värvus <br>
    
    <p id="border">
    <input type="number" name="borderLai" value="<?php if(!empty($_POST["borderLai"]))
        echo htmlspecialchars($_POST["borderLai"]);?>" min="0" max="10"> Borderi laius (0-10px) <br>
    <input type="number" name="borderRadius" value="<?php if(!empty($_POST["borderRadius"]))
        echo htmlspecialchars($_POST["borderRadius"]);?>" min="0" max="20"> Borderi raadius (0-20px) <br>
    <select name="borderStiil">
        <option value="solid" <?php if(!empty($_POST["borderStiil"]) && $_POST["borderStiil"] == "solid") echo "selected"; ?>>solid</option>
        <option value="dashed" <?php if(!empty($_POST["borderStiil"]) && $_POST["borderStiil"] == "dashed") echo "selected"; ?>>dashed</option>
        <option value="double" <?php if(!empty($_POST["borderStiil"]) && $_POST["borderStiil"] == "double") echo "selected"; ?>>double</option>
        <option value="outset" <?php if(!empty($_POST["borderStiil"]) && $_POST["borderStiil"] == "outset") echo "selected"; ?>>outset</option>
    </select> Raami stiil <br>
    <input type="color" name="borderVarv" value="<?php if(!empty($_POST["borderVarv"]))
        echo htmlspecialchars($_POST["borderVarv"]);?>"> Borderi värvus <br>
    </p>
    <br>
    <input type="submit" value="Saada">
    </form>
  </body>
</html>