<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: robin.boregrim
 * Date: 2016-10-06
 * Time: 12:10
 */

session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name']))) {
    header("location:index.php");
    //echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
}
include 'config.php';
$sql = "";
$mysqli = connect_db();

 if(isset($_GET['CCat']) && isset($_POST['Name']) && isset($_POST['Desc'])){

        //$sql = createInsert("category",array(0,$_POST['Name']),$_POST['Desc']);
     $sql = createInsert("category", array(0,"?","?"));
     $query = $mysqli->prepare($sql);
     $query->bind_param("ss",$_POST['Name'],$_POST['Desc']);
     $query->execute();


     //$res = getResult($sql);
        header("location:NewThreadCat.php");

}else if (isset($_GET['NewCat']) || isset($_Get['CCat'])){
    echo "<table class = 'inline' border='solid'>
        <tr><td colspan='3'>Create category</td></tr>
        <tr><td>Name</td><td>Description</td></tr>
        ";
    echo "<form method='post' action='NewThreadCat.php?CCat=true'><tr><td><input type='text' name='Name'></td><td><input type='text' name='Desc'></td></tr><tr><td colspan='2'><input type='submit'></td></tr></form>";


    echo '</table>';

}else if(isset($_POST['Sent'])){
    $sql = "Select * from category;";

    $result = getResult($sql);
    while($row = $result->fetch_array()){
        if(isset($_POST[$row[0]])){
            $sql = createInsert("bcategory",array($row[0], $_SESSION['Thread']));
            getResult($sql);
        }

    }
    $_SESSION['Thread']= null;
    header("location:forum.php");
}else {


    //echo "<form method='post' action='NewThreadCat.php'><table class = 'inline' border='solid'>
    //    <tr><td colspan='3'>Categorys</td></tr>";

    echo "<table class = 'inline' border='solid'><form action='NewThreadCat.php' method='post'>
        <tr><td colspan='3'>Choose one or more Categorys</td></tr>
        <tr><td></td><td>Name</td><td>Description</td></tr>
        ";
    $sql = "Select * from category";
    $result = getResult($sql);
    while ($row = $result->fetch_array()) {
        echo "<tr><td><input type='checkbox' name='$row[0]'></td><td>$row[1]</td><td>$row[2]</td></tr>";
    }

    echo "<tr><td colspan='3'><a href='NewThreadCat.php?NewCat=true'>New Category</a></td></tr>";
    echo "<tr><td colspan='3'><input type='submit' name='Sent' value='Done'></td></tr>";



    echo '</table></form>';
}
?>

</body>
</html>
