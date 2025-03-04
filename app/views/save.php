<!-- Form to add Savings -->

//TODO: Get username from session
//TODO: Created_at Javascript

<!DOCTYPE html>

<head>
    <title>Save Page</title>
</head>
<body>
    <h1>Save Page</h1>

    <form method="POST" action="index.php?url=home">
        <label>Amount:</label>
        <input type="number" name="amount" required>
        <br>
        <label>Message:</label>
        <input type="text" name="message" required>
        <br>
        <input type="hidden" name="user_id" value="user_id">
        <input type="hidden" name="created_at" value="created_at">
        <br>
        <button type="submit">Login</button>
    </form>

    <ul>
        <li><a href="index.php?url=home">Home</a></li>
        <li><a href="index.php?url=logout">Logout</a></li>
    </ul>
</body>
</html>
