

<?php
include 'config.php';
$sql = 'SELECT * from Forelder ORDER by Efternamn';

if($mysqli = connect_db()){
    $result = $mysqli->query($sql);
    print_r($mysqli->error);
}

?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Föreldrar</title>
</head>
<body>
<div id="back"><a href="index.php"><img src="img.png"></a></div>
<div id="block">
<form>
    <table border='solid'>

        <?php
        echo '<h2>Föreldrar</h2>';
        while($row = $result->fetch_array()) {
            echo "
                    <tr>
                        <td> ". $row['Efternamn'] ." ". $row['Namn'] . "</td>
                        <td><a href='UpdateForelder.php?Id=".$row['ID'] . "' class='Btn green'>Redigera</a></td>
                    </tr>";
        }

        ?>
    </table>
</form>
</div>
</body>
</html>