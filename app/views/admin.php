<!-- Admin's Page to see Every User's Savings-->

<!DOCTYPE html>

<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>
    <?php
        foreach ($result as $s) {
            echo "<p>{$s['name']} - {$s['amount']} - {$s['message']} - {$s['created_at']}</p>";
        }
    ?>

    <ul>
        <li><a href="index.php?url=home">Home</a></li>
        <li><a href="index.php?url=logout">Logout</a></li>
    </ul>
</body>
</html>