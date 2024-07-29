<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "developers_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO developers_db, country, city, number, designation, stack FROM developers WHERE country = 'Pakistan'";
$result = $conn->query($sql);

$developers = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $developers[] = $row;
    }
}

echo json_encode($developers);

$conn->close();
?>
