<?php

$servername = "sql.njit.edu";
$username = "yb83";
$password = "qwer1234";

try {
	
	$conn = new PDO("mysql:host=$servername;dbname=yb83",$username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "Connected successfully\n\n";
	echo '</br>';
	}

catch(PDOException $e)
	{

	echo "Connection failed: " . $e->getMessage();
        echo '</br>';
	}


function runQuery($query) {
	global $conn;
	 try {
		$q = $conn->prepare($query);
		$q->execute();
		$results=$q->fetchAll();
		$q->closeCursor();
		return $results;	
		}
	catch(PDOException $e) {
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
		}	  
}

?>
