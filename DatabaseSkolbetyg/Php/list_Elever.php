

<?php
include 'config.php';
$sql = 'SELECT * from Elev ORDER by Efternamn';

if($mysqli = connect_db()){
    $result = $mysqli->query($sql);
    print_r($mysqli->error);
}

?>




<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Elever</title>
    </head>
    <body>
    <div id="back"><a href="index.php"><img src="img.png"></a></div>
    <div id="block">
    <form>
        <table border='solid'>

            <?php
            echo "<h2>Elever</h2> <tr><td>Namn</td><td colspan='2'><a class='Btn green'>Ny Elev</a></td></tr>";
                while($row = $result->fetch_array()) {
                    echo "
                    <tr>
                        <td> ". $row['Efternamn'] ." ". $row['Namn'] . "</td>
                        <td> <a href=Elev.php?ElevId=".$row['ID'] . " class='Btn green'>Mer info</a></td>
                        <td><a href='UpdateElev.php?ElevId=".$row['ID'] . "' class='Btn green'>Redigera</a></td>
                    </tr>";
                }

            ?>
        </table>
    </form>
    </div>
    </body>
</html>