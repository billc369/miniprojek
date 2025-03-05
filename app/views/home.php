<!-- Home Page, main menu -->

<!DOCTYPE html>

<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>

    <?php
        foreach ($result as $s) {
            echo "<p>{$s['name']} - {$s['amount']} - {$s['message']} - {$s['created_at']}</p>";
        }
    ?>

    <ul>
        <?php 
            if($isAdmin) {
                echo "<li><a href='admin'>Admin</a></li>";
            } 
        ?>
        <li><a href="save">Save</a></li>
        <li><a href="logout">Logout</a></li>
    </ul>
</body>
</html>