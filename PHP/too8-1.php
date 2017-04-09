<?php
$bg_col="green";
if (isset($_POST['bgcolor']) && $_POST['bgcolor']!="") {
    $bg_col=htmlspecialchars($_POST['bgcolor']);
}
$text= "";
if (isset($_POST['text']) && $_POST['text']!="") {
    $text=htmlspecialchars($_POST['text']);
}
$text_col="red";
if (isset($_POST['textcolor']) && $_POST['textcolor']!="") {
    $text_col=htmlspecialchars($_POST['textcolor']);
}
$li_col="blue";
if (isset($_POST['linecolor']) && $_POST['linecolor']!="") {
    $li_col=htmlspecialchars($_POST['linecolor']);
}
$li_width="5";
if (isset($_POST['linewidth']) && $_POST['linewidth']!="") {
    $li_width=htmlspecialchars($_POST['linewidth']);
}
$li_style="Solid";
if (isset($_POST['linestyle']) && $_POST['linestyle']!="") {
    $li_style=htmlspecialchars($_POST['linestyle']);
}
$li_rad="10";
if (isset($_POST['lineradius']) && $_POST['lineradius']!="") {
    $li_rad=htmlspecialchars($_POST['lineradius']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vali oma kiri</title>
    <style type="text/css">
        #joon {
            border: solid 2px green;
            border-radius: 5px;
            padding: 5px;
            width: 29%;
            margin:1%;
            alignment: left;
        }
        #text {
            height: 100px;
            width: 29%;
            background-color: <?php echo $bg_col; ?>;
            color: <?php echo $text_col; ?>;
            border-color: <?php echo $li_col;?>;
            border-width: <?php echo $li_width;?>px;
            border-style: <?php echo $li_style;?>;
            border-radius: <?php echo $li_rad;?>px;
        }
        p {
            text-align: left;
            margin: 1%;
        }
    </style>
</head>
<body>

<div id="text">
    <p><?php echo $text;?><p/>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p><textarea rows ="2" cols="25" name="text" placeholder="Mida Sa tahad öelda?"><?php echo $text;?></textarea></p>
    <p><input type="color" name="bgcolor" value="<?php echo $bg_col;?>">Taustavärv</p>
    <p><input type="color" name="textcolor" value="<?php echo $text_col;?>">Teksti värv</p>
    <div id="joon">Piirjoon
        <p><input type="color" name="linecolor" value="<?php echo $li_col;?>">Piirjoone värvus</p>
        <p><select name="linestyle">
            <option value="solid">Solid</option>
            <option value="double">Double</option>
        </select></p>
        <p><input type="number" name="linewidth" min="0" max="20" value="<?php echo $li_width;?>">Piirjoone laius 0-20px</p>
        <p><input type="number" name="lineradius" min="0" max="100" value="<?php echo $li_rad;?>">Piirjoone nurga raadius 0-100px</p>
    </div>
<p>
<button type="submit">Esita</button></p>
</form>
</body>
</html>