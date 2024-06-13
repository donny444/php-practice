<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do-list";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tasks (name, date, time, priority)
VALUES ('learn go', '2024-06-14', '10:00:00', 1)";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Add new task successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
