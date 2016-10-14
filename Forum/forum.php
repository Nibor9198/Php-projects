<?php
session_start();
include 'config.php';
$_SESSION['Thread']= null;
if(isset($_SESSION['id']) && isset($_SESSION['uname']) && isset($_SESSION['name'])) {

    echo "<p><a href='loggaUt.php'>Logga ut</a></p>";
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
$_SESSION['Thread'] = null;
echo "<h1>Välkommen " . $_SESSION['name']."</h1>";
?>
<table border='solid'>
    <tr><td colspan="3">Threads</td></tr>
    <tr><h2><td>Title</td><td>Content</td><td>Responses</td><td>Author</td></h2></tr>

    <?php
        $sql = "Select * from thread";
        $res = getResult($sql);


        while ($row = $res->fetch_array()){
            $sql = "Select count(id) from post where thid=$row[0];";
            $res2 = getResult($sql);
            $row2 = $res2->fetch_array();

            $sql = "Select user.name from user,thread where  user.id = thread.uid and thread.id =$row[0];";
            $res2 = getResult($sql);
            $row3 = $res2->fetch_array();

            $sql = "Select category.name,category.descr from category,bcategory where  .id =$row[0];";
            $res2 = getResult($sql);
            $row3 = $res2->fetch_array();
            echo "<tr><td><h4><a href='Thread.php?Id=". $row[0] ."'>$row[1]</a></h4></td><td>$row[2]</td><td>$row2[0]</td><td>$row3[0]</td></tr>";

            //echo "<tr padding='20px';> </td>";
        }


    ?>

</table>



</body>
</html>

