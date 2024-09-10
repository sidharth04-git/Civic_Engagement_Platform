<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "message_db3";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $conn->real_escape_string($_POST['Name']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['Phone_Number']);
    $message = $conn->real_escape_string($_POST['message']);
    $type = $conn->real_escape_string($_POST['type']);

    $terms = isset($_POST['terms']) ? 1 : 0;

    $sql = "INSERT INTO complaints (name, address, phone, message, type, agree_terms)
            VALUES ('$name', '$address', '$phone', '$message', '$type', '$terms')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
