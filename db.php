<?php

class DB {

  // Link to database
  private $link;

  /**
   * Constructor
   */
  public function __construct() {

    // Connect to the database
    // host: rockit.ccyd2ljjwzet.us-east-1.rds.amazonaws.com
    // username: YOUR-TEAM-NAME
    // password: THE-SAME-OLE-ONE
    // database name: 

    $this->link = new mysqli('localhost', 'root', '', 'yoga');

    // If the connection had problem, output that now
    if ($this->link->connect_errno) {
        die('Connection Error: ' . $link->connect_error);
    } else {
      1;
      // echo "YOU CONNECTED TO AMAZON, YAY!";
    }

  }

  /**
   * Execute SQL Statement
   */
  public function execute($sql) {

    // Trim Whitespace
    $sql = trim($sql);
    
    // Execute Query
    $results = $this->link->query($sql);

    // Successful
    if ($results !== FALSE) {
      return $results;
    
    // Fail
    } else {
      exit('SQL Error: ' . $this->link->error . "<br><br>" . $sql);
    }

  }

  /**
   * INSERT
   */
  public function insert($table_name, $sql_values) {

    // Prepare values for SQL
    foreach ($sql_values as $field => $value) {
      $sql_values[$field] = "'" . trim($value) . "'";
    }

    // Create INSERT statement
    $sql =  "INSERT INTO `{$table_name}` (`" . implode('`, `', array_keys($sql_values)) . "`) VALUES (" . implode(', ', $sql_values) . ")";
    return $this->execute($sql);
  }


  /**
   * get the current insert_id after inserting
   */
  public function insert_id() {
    return $this->link->insert_id;
  }

}