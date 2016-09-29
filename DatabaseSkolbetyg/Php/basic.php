<?php
include 'config.php';
$sql = 'SELECT * from Elev ORDER by Efternamn';
$mysqli = connect_db();

echo '
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
   <body>
   <div id="back"><a href=""><img src="img.png"></a></div>
<div id="block">
        <form>';



echo'
        </form>
        </div>
    </body>
</html>';
?>