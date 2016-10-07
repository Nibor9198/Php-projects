<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name']))) {
    header("location:index.php");
    //echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
}
include 'config.php';
$sql = "";
$mysqli = connect_db();

if(isset($_POST['title'])&& isset($_POST['content'])){
    //Adding the thread to the database
    $sql = "Insert into thread values (0,?,?,".$_SESSION['id'].");";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss",$_POST['title'],$_POST['content']);
    $stmt->execute();
    $res = $stmt->get_result();
    printf($res);

    //Getting the thread id
    $sql = "Select max(thread.Id) from thread,user where user.Id = ". $_SESSION['id'];
    $result = getResult($sql);
    $row = $result->fetch_array();
    $_SESSION['Thread'] = $row[0];

    header("location:NewThreadCat.php");

}else if(isset($_POST['title'])&& isset($_POST['content'])){

}



?>
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
    <tr><td><input type='text' name='content' padding='40px'></td></tr>
    <tr><td><input type='submit' value='Create Thread'></td></tr>
</table>

        </form>
        </div>
    </body>
</html>
