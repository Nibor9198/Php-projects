<!DOCTYPE html>

<html>
<?php
include 'config.php';
$mysqli = connect_db();
echo '
<head>
<link rel="stylesheet" href="style.css">
    <title>' . $_GET['ElevId'] . '</title>
</head>
<body>
<div id="back"><a href=""><img src="img.png"></a></div>
<div id="block">';


//$mysqli = connect_db();
if (isset ($_GET['ElevId'])){
    $sql = 'SELECT * from Elev where ID='. $_GET['ElevId'];
    $result = getResult($sql);
    if ( $row = $result->fetch_array()){
        echo '<h2>'. $row[1]. ' '. $row[2] . '</h2>';
    }

    if (isset($_GET['Forelder'])) {

        if($mysqli = connect_db()){
                if($stmt = $mysqli->prepare('SELECT Namn,Efternamn from Forelder where ID=(SELECT idForelder from elevforelder where idElev=?)')){
                    $stmt->bind_param("i",$id);
                    $id = $_GET['ElevId'];

                    $stmt->execute();

                    $stmt->bind_result($col1, $col2);


                }
        }
        echo "
<table>
    <tr>
    <td><h3>Förelder</h3></td>
    </tr>";
        //För varje förelder skriv ut Namn och efternamn (row 1 och row 2)
        while($stmt->fetch()){
            printf ('<tr><td> %s </td><td> %s</td></tr>', $col1, $col2);
        }


        echo "</td></tr>
</table>";

    }
    if(isset($_GET['KontUpp'])){






        if($mysqli = connect_db()) {
            $sql = 'DESCRIBE Forelder';
            if ($stmt = $mysqli-> prepare($sql)){
                $stmt->execute();
                $result = $stmt->get_result();            }
            $sql = "SELECT * from Forelder where ID=(SELECT idForelder from elevforelder where idElev=?)";
            $result2 = prepareArray($sql,array($_GET['ElevId']),array("i"),$mysqli);


            echo '<h3>Kontakt uppgifer</h3><br><table>';
            echo '<table border="solid"><tr>';
            $row = $result->fetch_array();
            while($row = $result->fetch_array()){

                echo '<td>' . $row[0] . '  </td>';

            }
            echo '</tr>';
            makeTableFromArray($result2, 1);

            echo'</table>';
        }

    }


    if(isset($_GET['Omdomme'])){
        echo '<h3>Omdömme</h3><br><table border="solid">';
        $sql = 'Select elevamne.betyg,amne.namn from amne,elevamne where id = idAmne and idElev=?;';
        $result = prepareArray($sql,array($_GET['ElevId']), array("i"),$mysqli);
        makeTableFromArray($result,0);

        echo '</table>';

    }

}



?>
</div>
</body>
</html>