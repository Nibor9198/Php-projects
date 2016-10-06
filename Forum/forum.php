<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {

    //echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
}
else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="NewThread.php">Skapa ny tråd</a>
<?php

echo "<h1>Välkommen " . $_SESSION['name']."</h1>";

?>
</body>
</html>

