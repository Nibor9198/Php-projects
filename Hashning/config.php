<?php


function connect_db() {
    $mysqli = new mysqli('localhost','root', '' ,'Hashning');

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

function prepareSql ($sql, $param, $paramType, $mysqli)
{

    if ($stmt = $mysqli->prepare($sql)) {

        if(isset($param)){
            $stmt->bind_param( $paramType, $param);
        }

        $stmt->execute();

        return $stmt->get_result();
    }

}

function hash($str){
    $hash = password_hash($str, PASSWORD_DEFAULT);
    return $hash;
}

function checkPassword($userPassword, $databasehash){
    return password_verify($userPassword, $databasehash);
}
