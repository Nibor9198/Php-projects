<!DOCTYPE html>
<?php
include "config.php";
$mysqli = connect_db();

$sql = "Describe Amne;";
$result = prepareArray($sql,array(),array(),$mysqli);

//Sql Få ut info om eleven
$sql = "Select * from Amne WHERE ID=?";
$result2 = prepareArray($sql, array($_GET['Id']), array("i"),$mysqli);
$row = $result2->fetch_array();
$name = getName($_GET['Id'],"i","Amne",$mysqli);
echo'
<html>
<head>
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>' . $name . '</title>
</head>
<body>
<div id="back"><a href="list_Amnen.php"><img src="img.png"></a></div>
<div id="block">
<form action="UpdateAmne.php?Id='. $_GET['Id'] . '" method="Post">
<h2>'. $name .'</h2>
    <table class="inline" border="solid">';
echo '<tr><td colspan="2"><b>Ämnen</b></td></tr>';
makeUpdateTable($result,$row);
echo'<tr><td colspan="2"><input type="submit" value="Skicka" name="Sent"></td></tr></table>';
echo '
</form>
</div>
</body>
</html>';