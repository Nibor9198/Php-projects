<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name']))) {
    header("location:index.php");
    //echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
}
include 'config.php';
$sql = "";
$mysqli = connect_db();

echo "
<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='style.css'>
        <title>New Thread</title>
    </head>
   <body>
<div id='block'>
        <form action='NewThread.php' method='POST'>
<table>
    <tr><td>Title</td></tr>
    <tr><td><input type='text' name='title' ></td></tr>   
    <tr><td>Content</td></tr>
    <tr><td><input type='text' name='content' padding='20px 10px'></td></tr>
    <tr><td><input type='submit'></td></tr>
</table>
<table class = 'inline' border='solid'>
        <tr><td colspan='3'>Categorys</td></tr>
        <tr><td></td><td>Name</td><td>Description</td></tr>
        ";
        $sql = "Select * from category";
        $result = getResult($sql);
        while($row = $result->fetch_array()){
            echo "<tr><td><input type='checkbox' name='$row[0]'></td><td>$row[1]</td><td>$row[2]</td></tr>";
        }


echo'</table>
        </form>
        </div>
    </body>
</html>';
