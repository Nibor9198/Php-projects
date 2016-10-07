<?php
session_start();
include 'config.php';
$_SESSION['Thread']= null;
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
<table border='solid'>
    <tr><td>Threads</td></tr>
    <tr><td></td></tr>

    <?php
        $sql = "Select * from thread";
        $res = getResult($sql);

        while ($row = $res->fetch_array()){
            echo "<tr><td>Title</td><td>$row[1]</td>";
            echo "<tr><td>Description</td><td>$row[2]</td>";
            echo "<tr padding='20px';></td>";
        }


    ?>

</table>



</body>
</html>

