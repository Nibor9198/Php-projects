<!DOCTYPE html>
<?php
include "config.php";
$mysqli = connect_db();

$sql = "Describe Amne;";
$result = prepareArray($sql,array(),array(),$mysqli);
$res = prepareArray($sql,array(),array(),$mysqli);
//Om en uppdatering har skickats
if(isset($_POST['Sent'])){

//Förbereder uppdatering av Ämnets namn
    $res->fetch_array();
    $count = true;
    $p = array();

    if($row = $res->fetch_array()){
        $i = $row[0];
        $sql = "Update Amne set  $i = ?  where id= ?";
    }

    $res = getResult("Select count(id) from Elev;");
    $temp = $res->fetch_array();
    for($i = 0; $i < $temp[0]; $i++){
        if(isset($_POST["c$i"])){



            //Här lämnade jag :)//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            //$sql = createInsert("ElevAmne","")
        }
    }




    $result3 = $mysqli->prepare($sql);
    $result3->bind_param("si", $_POST[$i], $_GET['Id']);
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
echo '<tr><td colspan="2"><b>Ämnet</b></td></tr>';
makeUpdateTable($result,$row);
echo'<tr><td colspan="2"><input type="submit" value="Skicka" name="Sent"></td></tr></table>
<table border="solid"><tr><td>Namn</td><td>Efternamn</td><td>Betyg</td><td>Går kursen</td></tr>';

$sql = "Select Id,Namn,Efternamn from Elev";
$result = getResult($sql);

while($row = $result->fetch_array()){
    echo '<tr>';
    for($i=1; $i < count($row)/2; $i++){
        echo "<td>$row[$i]</td>";
    }
    $sql = "Select betyg,idElev from ElevAmne where idElev = $row[0] and idAmne = ?;";
    $result2 = prepareArray($sql, array($_GET['Id']),array("i"),$mysqli);
    if($row2 = $result2->fetch_array()){
        echo "
            <td><input type='text' name='$row[0]' value='$row2[0]'></td>
            <td>Yes</td>
        ";
    }else{
        echo "
            <td><input type='text' name='b$row[0]'></td>
            <td><input type='checkbox' name='c$row[0]'></td>
        ";
    }




    echo '</tr>';
}


echo '
</table>
</form>
</div>
</body>
</html>';