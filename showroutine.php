<?php

error_reporting(E_ALL);
 ini_set('display_errors', 'on');

//include ('yoga.php');
include('db.php');

$db = new DB();

$routine_id = 41;

$sql = "
		SELECT *FROM routine_items
		WHERE routine_id = '$routine_id'

		";

$results = $db->execute($sql);

while ($row = $results->fetch_assoc()) {
	
	print_r($row);
}
		

?>

<!doctype html>
<html>
<head>
    
 <meta charset="UTF-8">
 <link rel="stylesheet" href="showroutine.css">

 </head>
 </html>