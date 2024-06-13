<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to-do-list";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, date, time, priority FROM tasks ORDER BY priority";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " / Date: " . $row["date"]. " / Time: " . $row["time"]. " / Priority: " . $row["priority"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>