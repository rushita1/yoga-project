<?php

error_reporting(E_ALL);
 ini_set('display_errors', 'on');

//include ('yoga.php');
include('db.php');

$db = new DB();

$routine_id = $_GET['routine_id'];


$sql = "SELECT * FROM routine 
		WHERE routine_id = $routine_id";

$results = $db->execute($sql);

$row = $results->fetch_assoc();

$routine_name = $row['routine_name'];





$sql = "SELECT * FROM routine_items, yoga_pose
		WHERE routine_items.pose_id = yoga_pose.pose_id AND 
		routine_id = '$routine_id'";

$results = $db->execute($sql);

$pose_list = "";


while ($row = $results->fetch_assoc()) {
	// print_r($row);

	$pose_list .= "<div class=\"main-content\">
			<h3><a href=\"\" id=\"pose_id\" class=\"topopup\">{$row['name']}</a></h3>
		
		<div class=\"Products\">
			<input type=\"hidden\" class=\"pose_id\">
			<img src={$row['img']}>
			<div class=\"Contents\"></div>
			<h4>{$row['category']}</h4>

		</div>
		</div>";
	
}
		

?>

<!doctype html>
<html>
<head>
    
 <meta charset="UTF-8">
 <link rel="stylesheet" href="showroutine.css">

 <body>
	 
	<main class="main">

		<div><?php echo $routine_name ?></div>

		

		 <?php echo $pose_list ?>
	</main>

 </body>

 </head>
 </html>