<!DOCTYPE html>
<?php
include "config.php";
$mysqli = connect_db();

$sql = "Describe Forelder;";
$result = prepareArray($sql,array(),array(),$mysqli);

//Sql Få ut info om Föreldern
$sql = "Select * from Forelder WHERE ID=?";
$result2 = prepareArray($sql, array($_GET['Id']), array("i"),$mysqli);
$row = $result2->fetch_array();

$name = getName($_GET['Id'],"i","Forelder",$mysqli);
echo'
<html>
<head>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>' . $name . '</title>
</head>
<body>
<div id="back"><a href="list_Foreldrar"><img src="img.png"></a></div>
<div id="block">
<form action="UpdateForelder.php?Id='. $_GET['Id'] . '" method="Post">
<h2>'. $name .'</h2>
    <table class="inline" border="solid">';
echo '<tr><td colspan="2"><b>Förelder</b></td></tr>';
makeUpdateTable($result,$row);
echo'<tr><td colspan="2"><input type="submit" value="Skicka" name="Sent"></td></tr></table>';
echo '
</form>
</div>
</body>
</html>';