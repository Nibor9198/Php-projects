<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {
    echo "<p><a href='forum.php'>Tillbaks</a></p>";
    echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
}
else {
    header("location:index.php");
}
include 'config.php';
$mysqli = connect_db();
if(isset($_POST['post'])){
    $sql = createInsert("post",array(0,"?", $_SESSION['id'] ,"?"));
    $query = $mysqli->prepare($sql);
    $query->bind_param("si",$_POST['post'],$_GET['Id']);
    $query->execute();
    header("location:Thread.php?Id=". $_GET['Id']);
}



$sql = "Select * from thread where id=?";

$res = prepareSql($sql,$_GET['Id'],"i");


$row = $res->fetch_array();

echo "
<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='style.css'>
        <title></title>
    </head>
   <body>
<div id='block'>
<form action='Thread.php?Id=". $_GET['Id'] ."' method='post'>
        <table border='solid' ><tr><td><h1>$row[1]</h1></td></tr><tr><td>$row[2]</td></tr>
                <tr><td>Make a comment:<br><input type='textarea' name='post' class='text'></td></tr><table border='solid'>
        <br>";



    $sql = "select uid,content from post where thid =?";
    $res = prepareSql($sql,$_GET['Id'],"i");
    while($row2 = $res->fetch_array()){

        $sql = "select name from user where id = $row2[0]";
        $res2 = getResult($sql);
        $name = $res2->fetch_array();
        echo "<tr>
              <td colspan='3'>$name[0]</td> 
              <td colspan='3'>$row2[1]</td>";
           // if($row2[0] == $_SESSION['id']){
           //     echo "<td><a>Delete</a><br><a>edit</a></td>";
           // }
            echo "</tr>";





    }



echo'
        </table>
        </form>
        </div>
    </body>
</html>';