<?php 
 error_reporting(E_ALL);
 ini_set('display_errors', 'on');

//include ('yoga.php');
include('db.php');

$db = new DB();


// print_r($db);

// exit();


$sql = "
		INSERT INTO routine (user_id, routine_name)
		VALUES({$_POST['user_id']}, '{$_POST['routine_name']}')
		";

$results = $db->execute($sql);
$routine_id = $db->insert_id();

//TODO:
// - json decode the pose_id parameter. this will create an array of pose-id's
// - for each pose id, insert one record into the routine_item database table

// $response = [
// 	"results"=> []
// ];

// print_r($_POST);

$pose_ids = json_decode($_POST['pose_id']);

 // print_r($pose_ids);

foreach($pose_ids as $pose_id){


	$sql = "
			INSERT INTO routine_items(routine_id,pose_id)
			VALUES($routine_id, $pose_id)
			";

	// echo $sql;
			
	 $results = $db->execute($sql);
	
}
	

echo json_encode($results);



// echo $sql;
// exit();
// Execute SQL Statement
// if ($db->execute($sql)) {
// 	header('rushita.com/yoga-project/save.php');
	//echo 12;
    //exit();
//}


 ?>