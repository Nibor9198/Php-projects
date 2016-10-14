<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 2016-10-03
 * Time: 17:03
 */
include 'config.php';

$mysqli = connect_db();

if(isset($_POST['sent'])){

    $result = createDescribe("Forelder", $mysqli);
    $stopped = false;

    $how = array();
    $values = array();
    $result->fetch_array();
    while($row = $result->fetch_array){
        if (isset($_POST[$row[0]])){
            $how->array_push($row[0]);
            $values->array_push($_POST[$row[0]]);
        }else{
            $stopped = true;
            break;
        }
    }
    if($stopped){
        echo "Du behöver fylla i alla fält";
    }else{
        $sql = createInsert("Forelder",$how,$values);
    }

}else {

    echo '
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Skapa Förälder</title>
    </head>
   <body>
   <div id="back"><a href=""><img src="img.png"></a></div>
<div id="block">
        <form action="CreateForelder.php?Id=' . $_GET['Id'] . '" method="post">';
    if (isset($_GET['Id'])) {
        echo "
                <table border='solid'>
                    <tr><td colspan='2'>Ny Föreädler</td></tr>";
        describeTable("Forelder", $mysqli);
        echo "<tr><td colspan='2'><input type='submit' value='Skicka' name='sent'></td></tr>";
        echo '</table>';
    } else {
        echo 'Elevens Id är felaktigt';
    }


    echo '
        </form>
        </div>
    </body>
</html>';
}
?>