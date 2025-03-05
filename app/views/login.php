<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/mini-projek-tabungan/public/css/style.css">
</head>
<body class="login-page">
    <nav>
        <h1>Mini Saving</h1>
        <a href="index.php">Home</a>
    </nav>

    <main>
        <h2>Login</h2>
        <form method="POST" action="index.php?url=login">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="index.php?url=register">Register</a></p>
    </main>
</body>
</html>
