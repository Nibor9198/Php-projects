<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {

    //echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
}
else {
    header("location:index.php");
}
include 'config.php';
$sql = "";
$mysqli = connect_db();

echo '
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
   <body>
<div id="block">
        <form>';



echo'
        </form>
        </div>
    </body>
</html>';