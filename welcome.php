<?php
include "database.php";
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE username ='" . $username . "' AND password ='" . $password . "' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo $row["id"] . "<br>";
    echo $row["username"] . "<br>";
    echo "hello " . $row["nickname"];
  }
} else {
  echo "login failed";
}
$conn->close();

?>
<html>

<body>
  <div class="login-box">
    <h1>Log in</h1>
    <form class="username" action="./welcome.php" method="post">
      Name: <input type="text" name="username"><br>
      password: <input type="password" name="password"><br>
      <input type="submit" value="Log in" class="login-button">
    </form>
  </div>
</body>

</html>