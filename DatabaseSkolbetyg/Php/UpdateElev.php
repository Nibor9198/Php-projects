<!DOCTYPE html>
<?php
include "config.php";
$mysqli = connect_db();
$mess = "";
//Sql Describe Elev
$sql = "Describe Elev;";
$result = prepareArray($sql,array(),array(),$mysqli);
$res = prepareArray($sql,array(),array(),$mysqli);

//Om den har skickat saker att uppdatera
if(isset($_POST['Sent'])){

    $sql = "Update Elev set";
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


    $sql = $sql . " where id= " . $_GET['ElevId'] . ";" ;

    $result3 = $mysqli->prepare($sql);
    $result3->bind_param("sss", $p[0],$p[1],$p[2]);
    $result3->execute();
    if ($result3->errno > 0){
        $mess = "Error";
    }else if($result3->affected_rows == 0){
        $mess = "Nothing was changed.";
    }else{
        $mess= "Sucsessfull!";
    }

}


//Sql Få ut info om eleven
$sql = "Select * from Elev WHERE ID=?";
$result2 = prepareArray($sql, array($_GET['ElevId']), array("i"),$mysqli);
$row = $result2->fetch_array();

//$sql = "Describe Forelder";
//$resF = prepareArray($sql,array(),array(),$mysqli);
$sql = "Select forelder.id,forelder.namn,forelder.efternamn from forelder,elev,elevforelder where idElev = elev.id and idForelder = forelder.id and elev.id = ?; ";
$resF = prepareArray($sql,array($_GET['ElevId']),array("i"),$mysqli);

$sql = "SELECT amne.id,amne.namn from Amne,Elev,ElevEmne where Elev.id = idElev and anme.id = idAmne and Elev.id =?";
$resA = prepareArray($sql, array($_GET['ElevId']),array("i"), $mysqli);
$name = getName($_GET['ElevId'],"i","Elev",$mysqli);





echo'
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>' . $name . '</title>
</head>
<body>
<div id="back"><a href="list_Elever.php"><img src="img.png"></a></div>
<div id="block">
<form action="UpdateElev.php?ElevId='. $_GET['ElevId'] . '" method="Post">
<h2>'. $name .'</h2>
<h4>'. $mess .'</h4>
    <table class="inline" border="solid">';
        //while($row1 = $result1->fetch_array()){
echo '<tr><td colspan="2"><a href="list_Foreldrar.php"><b>Elev</b></a></td></tr>';
        makeUpdateTable($result,$row);
echo'<tr><td colspan="2"><input type="submit" value="Skicka" name="Sent"></td></tr></table>';
echo'<table class="inline" border="solid"><tr><td colspan="2"><a href="list_Foreldrar.php"><b>Föräldrar</b></a></td></tr>';

while($row = $resF->fetch_array()){
    echo '<tr><td><a href="UpdateForelder.php?Id='. $row[0] .'">'. $row[1] . ' ' . $row[2] .'</a></td></tr>';
}
echo '<tr><td><a class="Btn green" href="CreateForelder.php?Id= ' . $_GET['ElevId'] .'" >Ny Förälder</a></td></tr>';
echo'</table>';

echo'<table class="inline" border="solid"><tr><td colspan="2"><a href="list_Amnen.php"><b>Ämnen</b></a></td></tr>';
if(isset($resA)) {
    while ($row = $resA->fetch_array()) {
        echo '<tr><td><a href="UpdateAmne.php?Id=' . $row[0] . '">' . $row[1] . '</a></td></tr>';
    }
}else{
    echo '<tr><td>'. $name .' går inga ämnen</td></tr>';
}
echo'</table>';


echo '
</form>
</div>
</body>
</html>';






?>