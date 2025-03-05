<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Page - Mini Saving</title>
    <link rel="stylesheet" href="/mini-projek-tabungan/public/css/style.css">
</head>
<body class="save-page">
    <nav>
    <h1>Mini Saving</h1>
    <ul class="nav-links">
        <li><a href="index.php?url=home">Home</a></li>
        <li><a href="index.php?url=logout">Logout</a></li>
    </ul>
</nav>
    <main>
        <h2>Save Your Money</h2>
        <form method="POST" action="index.php?url=save" class="save-form">
            <div>
                <label for="amount">Amount (Rp):</label>
                <input type="number" id="amount" name="amount" min="1" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Add a note..." required></textarea>
            </div>
            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION['user_id'] ?? ''); ?>">
            <button type="submit">Save</button>
        </form>
    </main>
</body>
</html>
