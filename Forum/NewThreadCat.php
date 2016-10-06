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

if (isset($_Get['NewCat'])){



}else {

    echo "<table class = 'inline' border='solid'>
        <tr><td colspan='3'>Categorys</td></tr>
        <tr><td></td><td>Name</td><td>Description</td></tr>
        ";
    $sql = "Select * from category";
    $result = getResult($sql);
    while ($row = $result->fetch_array()) {
        echo "<tr><td><input type='checkbox' name='$row[0]'></td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "<tr><td colspan='3'><a href='NewThreadCat.php?NewCat=true'>New Category</a></td></tr>";


    echo '</table>';
}