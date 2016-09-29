<!DOCTYPE html>
<?php
include 'config.php';
$mysqli = connect_db();
if(isset($_GET['ElevId'])){

    echo '
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <title>'. getName($_GET['ElevId'],"i","Elev",$mysqli) .'</title>
    </head>
    <body>
    <div id="back"><a href=""><img src="img.png"></a></div>
    <div id="block">
        <form action="visaInfo.php" method="GET">
            <input type="checkbox" name="Forelder"> Förelder <br>
            <input type="checkbox" name="KontUpp"> Kontakt Uppgifter Förelder<br>
            <input type="checkbox" name="Omdomme"> Omdömme<br><br>
            <input type="hidden" name="ElevId" checked value="'. $_GET['ElevId'] .'"> 
            <input type="SUBMIT" value="Valt">
            
        </form>
    
    </div>
    </body>
</html>';
}else {
    echo '<h1>Error</h1>';
}

?>
