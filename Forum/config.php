<?php 

	// Definera en funktion som sköter uppkoppling till databasen
function connect_db() { 

		// Här ska du lägga in anslutningsinformation för att kunna ansluta dig mot din databas:
		// DittAnvändarID, DittLösen och den databas du har skapat tabellerna i.

	$mysqli = new mysqli('localhost', 'root', '', 'forum');

		//Kontrollerar teckentabell
	if (!$mysqli->set_charset("utf8")) {
		echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
	} else {
 		//echo "Nuvarande teckenkodningstabell: %s\n". $mysqli->character_set_name();
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
function createInsert($table, $values){
    $sql = "Insert into $table";
    //foreach($how as $o){
    //    if($how[0] !== $o){$sql .= ",";}
    //    $sql .= " $o";
    //}
    $sql .= ") values (";
    foreach($values as $o){
        if($values[0] != $o){$sql .= ",";}
        $sql .= " $o";
    }
    $sql .= ");";
    return $sql;
}

function hasha($str) {
	$hash = password_hash($str, PASSWORD_DEFAULT);
	return $hash;
}

function checkPasswd($pw,$p) {
	return password_verify($pw, $p);
}

?>