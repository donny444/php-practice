<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do-list";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM tasks WHERE id=34";

if ($conn->query($sql) === TRUE) {
  echo "Task deleted successfully";
} else {
  echo "Error deleting task: " . $conn->error;
}

$conn->close();
?>