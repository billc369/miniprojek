<!-- Register Page -->

//TODO: Created_at changed to backend
// TODO: Check if email is unique because email == user_id

<!DOCTYPE html>

<head>
    <title>Registry Page</title>
</head>
<body>
    <h1>Registry Page</h1>

    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="text" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>

    <ul>
        <li><a href="index.php?url=login">Login</a></li>
    </ul>
</body>
</html>

