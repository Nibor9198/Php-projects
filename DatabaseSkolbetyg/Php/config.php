<?php


function connect_db() {
    $mysqli = new mysqli('localhost','root', '' ,'Betyg');

    if (!$mysqli->set_charset("utf8")) {
        echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
    } else {
    }

    if ($mysqli->connect_errno) {
        echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;
}

function getResult($sql){
    if($mysqli = connect_db()){
         $result = $mysqli->query($sql);
        print_r($mysqli->error);
        return $result;
    }
}

function makeTableFromArray($result, $start)
{
    while ($row = $result->fetch_array()) {
        //var_dump($row2);
        echo '<tr>';

        for($i=$start; $i < count($row)/2; $i++){
            echo '<td>' . $row[$i] . '</td>';
        }

        echo '</tr>';
    }
}

function prepareArray ($sql, $params, $paramTypes, $mysqli)
{

    if ($stmt = $mysqli->prepare($sql)) {

        for($i = 0; $i < count($params); $i++){
            $stmt->bind_param( $paramTypes[$i], $params[$i]);
        }

        $stmt->execute();

        return $stmt->get_result();
    }

}

//Gör färdigt!
function prepareUpdate ($sql, $params, $paramTypes, $mysqli)
{

    if ($stmt = $mysqli->prepare($sql)) {
        if(isset($params)) {
            $s ="";
            for ($i = 0; $i < count($paramTypes); $i++) {
                $s = $s . $s;
            }
            $stmt->bind_param($paramTypes[$i], $params[$i]);
        }
        $stmt->execute();

        return $stmt->get_result();
    }

}
function getName($id, $idType, $table, $mysqli){
    $sql = "Select namn from $table where Id=?;";
    $result = prepareArray($sql,array($id),array($idType),$mysqli);
    if($result != null) {
        $row = $result->fetch_array();
        return $row[0];
    }else{
        return "Missing";
    }
}
function makeUpdateTable($result1,$row2){
    $result1->fetch_array();
    for($i = 1; $i < count($row2)/2; $i++){
        $row1 = $result1->fetch_array();
            echo '<tr><td>' . $row1[0] . '</td><td><input type="text" name="' . $row1[0] . '" value="' . $row2[$i] . '"></td></tr>';
    }
}
