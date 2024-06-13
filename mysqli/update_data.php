<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do-list";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE tasks SET date='2024-06-15' WHERE id=39";

if ($conn->query($sql) === TRUE) {
  echo "Task updated successfully";
} else {
  echo "Error updating task: " . $conn->error;
}

$conn->close();
?>