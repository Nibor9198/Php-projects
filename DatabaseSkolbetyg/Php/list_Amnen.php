

<?php
include 'config.php';
$sql = 'SELECT * from Amne ORDER by namn';

if($mysqli = connect_db()){
    $result = $mysqli->query($sql);
    print_r($mysqli->error);
}

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Ämnen</title>
</head>
<body>
<div id="back"><a href="index.php"><img src="img.png"></a></div>
<div id="block">
    <form>
        <table border='solid'>

            <?php
            echo '<h2>Ämnen</h2>';

            while($row = $result->fetch_array()) {
                echo "
                    <tr>
                        <td> ". $row['Namn'] . "</td>
                        <td><a href='UpdateAmne.php?Id=".$row['ID'] . "' class='Btn green'>Redigera</a></td>
                    </tr>";
            }

            ?>
        </table>
    </form>
</div>
</body>
</html>