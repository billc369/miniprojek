<!-- Form to add Savings -->

<!DOCTYPE html>

<head>
    <title>Save Page</title>
</head>
<body>
    <h1>Save Page</h1>

    <form method="POST">
        <label>Amount:</label>
        <input type="number" name="amount" required>
        <br>
        <label>Message:</label>
        <input type="text" name="message" required>
        <br>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']?>">
        <br>
        <button type="submit">Save</button>
    </form>

    <ul>
        <li><a href="index.php?url=home">Home</a></li>
        <li><a href="index.php?url=logout">Logout</a></li>
    </ul>
</body>
</html>
