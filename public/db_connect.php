<?php
$servername = "204.13.238.115";
$username = "jaannetw_trident";
$password = "4QQBG7PWCFcrGTaFnMXr";
$dbname = "jaannetw_trident";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
