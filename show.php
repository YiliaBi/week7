<?php

require 'pdo.php';
//$sql = "select id,email,fname,lname,phone,birthday,gender,password from accounts  ";
$sql = "select * from accounts ";

$results = runQuery($sql);
if(count($results) > 0)
{
	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First
	Name</th><th>Last Name</th><th>Phone</th><th>Birthday</th><th>Gender</th><th>Pass</th></tr>";
		$i=0;
		foreach ($results as $row) {
		if($row["id"]<6){
		$i=$i+1;
			echo"<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";
		}}
		echo "$i results were found!";
		echo '</br>';
		
}else{
	echo "0 results";
}

?>
