<?php
// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "message_db3";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT * FROM complaints";
$result = $conn->query($sql);

// Display data on web page
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Address: " . $row["address"]. " - Phone : " . $row["phone"].
        " - Message : " . $row["message"]  ."<br>";
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
