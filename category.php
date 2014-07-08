<?php

 error_reporting(E_ALL);
    ini_set('display_errors', 'on');
// include 'initialize.php';
// echo 1;

// Include Database Class
include 'db.php';



  $db = new db();
  // Start Database Object


  $category = $_POST['category'];



  if($category=="All"){
    $cat="%";
  }else{
    $cat=$category;
  }

  // Write SQL Statement
  $sql = "SELECT * FROM yoga_pose WHERE category LIKE \"$cat\"";
    

  //echo $sql;

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
       array_push($values, $a);

       // echo json_encode($row);
       // echo "\n";
  }   



   
  $values_encoded = json_encode($values);



  echo $values_encoded;
