<?php
$servername = "localhost";
$username = "id7309444_himahansi26";
$password = "123@intel";
$db="id7309444_hhp_tours";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

?>