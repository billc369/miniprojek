<!-- Login Page -->

<!DOCTYPE html>

<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form method="POST" action="index.php?url=home">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>

    <ul>
        <li><a href="index.php?url=register">Register</a></li>
    </ul>
</body>
</html>
