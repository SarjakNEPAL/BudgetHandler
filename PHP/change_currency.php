<?php
    include('../PHP/globvar.php');
    include('../PHP/seschk.php');
    include('../PHP/conn.php');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Assume you are checking for a specific username
$sql = "SELECT * FROM settings WHERE username='" . $_SESSION['user'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $sql = "UPDATE settings SET Currency='" . $_POST['currency'] . "' WHERE username='" . $_SESSION['user'] . "'";
  }
} else {
  $sql = "INSERT INTO settings
  VALUES ('" . $_SESSION['user'] . "', '" . $_POST['currency'] . "')";
}
  if ($conn->query($sql) === TRUE){ 
    echo "<script>alert('Currency changed successfully');</script>";
  } else {
    echo "<script>alert('Server Timed out');</script>";
  }
$conn->close();
echo "<script>alert('PLEASE LOGIN AGAIN');</script>";
include("../PHP/logout.php");
include("../HTML/HOME.php");
?>
