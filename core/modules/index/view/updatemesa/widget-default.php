<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thunder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE sell SET item_id=$_POST[item_id] WHERE id=$_POST[id]";

if ($conn->query($sql) === TRUE) {
	print "<script>window.location='index.php?view=monitor';</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>