<?php
 $server="localhost";
$username="root";
$password="";
$dbname = "user_info";

    // Create connection
    $conn = mysqli_connect($server, $username, $password, $dbname);
    
        // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

?>