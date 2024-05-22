<?php

// Connect to the database and return the database object
function connect() {
    // Set the hostname for CodeCademy's platform
    $hostname = '/tmp';

    // Set the database name
    $dbname = 'ccuser';

    // Set the username and password with permissions to the database
    $username = 'ccuser';
    $password = 'pass';
    
    // Create the DSN (data source name) by combining the database type, hostname and dbname
    $dsn = "pgsql:hostname=$hostname;dbname=$dbname";

    // Create the try/catch blocks here
    try{
      $db = new PDO($dsn, $username, $password);
      $tiersQuery = $db->query("SELECT * FROM tiers");  
      $tiers = $tiersQuery->fetchAll(PDO::FETCH_ASSOC);
      return $tiers;
      return $db;}
       catch (PDOException $e) {
        echo "Error messsage: " . $e->getMessage();
    }

}

// Get a list of all tiers in the database
function getTiers() {
    try {
        // Get the database object
        $db = connect();

        // Create a query to get all fields for all tiers

        // Return all records
        
    } catch (Exception $e) {
        // If an error occurs echo the error
        echo $e->getMessage();
    }
}