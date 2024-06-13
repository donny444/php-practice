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
VALUES ('learn go', '2024-06-14', '10:00:00', 1);";
$sql .= "INSERT INTO tasks (name, date, time, priority)
VALUES ('watch movies', '2024-06-14', '22:00:00', 2);";
$sql .= "INSERT INTO tasks (name, date, time, priority)
VALUES ('read book', '2024-06-15', '00:00:00', 3);";

if ($conn->multi_query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "Add new tasks successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();