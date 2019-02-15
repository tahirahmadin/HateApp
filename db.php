<?php
$servername = "amuconnect.com";
$username = "amuconn1_admin";
$password = ".tdgjmptA2";
$dbname = "amuconn1_hate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo 'connected';
}


?>