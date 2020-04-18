<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "beyondsight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$q = intval($_REQUEST["q"]);
$sql = "DELETE FROM tests WHERE idTest = ".$q;
$result = $conn->query($sql);
?>