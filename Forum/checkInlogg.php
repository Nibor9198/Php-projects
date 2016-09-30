<?php
	session_start();
	if(isset($_POST['uname']) && isset($_POST['passw']) && $_POST['uname'] != "" && $_POST['passw'] != "") {
		$un = $_POST['uname'];
		$pw = $_POST['passw'];
		$sql = "select passwrd, name, uname, id from user where uname = ?";
		include "config.php";
		if($mysqli = connect_db()) {
				if($stmt = $mysqli->prepare($sql)) {
					$stmt->bind_param("s", $un);
					$stmt->execute();
					$stmt->bind_result($p, $name, $user, $id);

    				
				    if ($stmt->fetch()) {
				    	if(checkPasswd($pw, $p)) {
				    		$_SESSION['id'] = $id;
				    		$_SESSION['uname'] = $user;
				    		$_SESSION['name'] = $name;
				    		
				    		header("location:forum.php");
				    	}
				    	else {
				    		header("location:index.php?fel=2");
				    	}
				       	
				    }
				    else {
				    	header("location:index.php?fel=2");
				    }

				    
				    $stmt->close();
				}
		}
		else {
			header("location:index.php");
		}
	}
	else {
		header("location:index.php?fel=1");
	}
	
?>