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

$sql = "UPDATE operation SET sell_id=$_POST[id] WHERE sell_id=$_POST[sell_id]";

if ($conn->query($sql) === TRUE) {
	print "<script>window.location='index.php?view=monitor';</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>