<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do-list";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO tasks (name, date, time, priority) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $date, $time, $priority);

$name = "learn jquery";
$date = "2024-06-14";
$time = "00:00:00";
$priority = 1;
$stmt->execute();

$name = "learn xml";
$date = "2024-06-14";
$time = "00:00:00";
$priority = 1;
$stmt->execute();

$name = "learn typescript";
$date = "2024-06-14";
$time = "00:00:00";
$priority = 1;
$stmt->execute();

echo "New tasks created successfully";

$stmt->close();
$conn->close();
?>
