<?php
include "database.php";
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE username ='" . $username . "' AND password ='" . $password . "' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  session_start();
  $_SESSION["loggedin"] = true;
  header("Location: index.php");
} else {
  echo "login failed";
}
$conn->close();
