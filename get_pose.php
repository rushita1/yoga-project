
<?php

 error_reporting(E_ALL);
    ini_set('display_errors', 'on');
// include 'initialize.php';
// echo 1;

// Include Database Class
include 'db.php';
include 'payload.php';
// echo 2;

function get_poses(){

// Start Database Object
$db = new db();
	
// Write SQL Statement
$sql = "
  SELECT * FROM yoga_pose
  ";

  // echo $sql;
// Execute SQL Statement
$results = $db->execute($sql);

// Loop over results and make a $row variable for each result

  
$values = [];


while($row = $results->fetch_assoc()){
  
    // echo $row['pose_id'];
    $a = [];
    $a['name'] = $row['name'];
    $a['category'] = $row['category'];
    $a['description'] = $row['description'];
    $a['img'] = $row['img'];
    $a['id'] = $row['pose_id'];
    // print_r($a);
     array_push($values, $row);

     // echo json_encode($row);
     // echo "\n";
}   



// print_r($values);
 
$values_encoded = json_encode($values);

return $values_encoded;

}
