<!DOCTYPE html>
<?php
include "config.php";
$mysqli = connect_db();


$sql = "Describe Forelder;";
$result = prepareArray($sql,array(),array(),$mysqli);
$res = prepareArray($sql,array(),array(),$mysqli);

$mess = "";
//Om en uppdatering har skickats
if(isset($_POST['Sent'])){

    $sql = "Update Forelder set";
    $res->fetch_array();
    $count = true;
    $p = array();

    while($row = $res->fetch_array()){
        if(!$count){$sql = $sql . ",";}else{$count = false;}
        $i = $row[0];
        $sql= $sql . " $i = ?";
        array_push($p,$_POST[$i]);
        //array_push($t,"s");

    }


    $sql = $sql . " where id= " . $_GET['Id'] . ";" ;


    $result3 = $mysqli->prepare($sql);
    $result3->bind_param("sssss", $p[0],$p[1],$p[2],$p[3],$p[4]);
    $result3->execute();
    if ($result3->errno > 0){
        $mess = "Error";
    }else if($result3->affected_rows == 0){
        $mess = "Nothing was changed.";
    }else{
        $mess= "Sucsessfull!";
    }

}


//Få ut info om Föräldern
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
<div id="back"><a href="list_Foreldrar.php"><img src="img.png"></a></div>
<div id="block">
<form action="UpdateForelder.php?Id='. $_GET['Id'] . '" method="Post">
<h2>'. $name .'</h2>
<h4>'. $mess .'</h4>
    <table class="inline" border="solid">';
echo '<tr><td colspan="2"><b>Förälder</b></td></tr>';
makeUpdateTable($result,$row);
echo'<tr><td colspan="2"><input type="submit" value="Skicka" name="Sent"></td></tr></table>';
echo '
</form>
</div>
</body>
</html>';