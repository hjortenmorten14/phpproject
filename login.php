<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="menu">
        <a href="">Home</a>
        <a href="login.php">log in</a>
        <a href="">Users</a>

    </div>
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