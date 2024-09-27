<?php 
$servername = "db";
$username = "root";
$password = "admin";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT now()"; 
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "Connected successfully at: " . $row["now()"];
}

$conn->close();

?>
