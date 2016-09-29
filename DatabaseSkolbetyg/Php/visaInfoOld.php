<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <table border ='solid'>
        <form>
            <?php
           include 'config.php';
           if(isset($_GET['ElevId'])){
           $sql = 'SELECT * from Elev WHERE ID='. $_GET['ElevId'];
           $sql2 = 'DESCRIBE Elev';


           if($mysqli = connect_db()){
               $result = $mysqli->query($sql);
               $result2 = $mysqli->query($sql2);
               print_r($mysqli->error);
           }
                echo '<tr>';

               while($row2 = mysqli_fetch_array($result2)) {
                   echo '<td>' . $row2[0] . '</td>';

               }
                echo '</tr><tr>';
               if($row = $result->fetch_array()){
                   for($i = 0; $i < count($row)/2; $i++){
                       echo '
                              <td>' . $row[$i] . '</td>
                          ';

                   }
                   echo '</tr>';
               }
           }



    echo'  
    </table>';

    echo '<table>';

            
        if(isset($_GET['ElevId'])){
            $sql3 = 'DESCRIBE Forelder';
            $sql4 = 'SELECT * from forelder where ID=(SELECT idForelder from elevforelder where idElev='. $_GET['ElevId'] .')';
            if($mysqli = connect_db()){

            }
            echo '<tr>';


        }



    echo'</table><table>';



    echo '</table>';
?>
        </form>
    </body>
</html>