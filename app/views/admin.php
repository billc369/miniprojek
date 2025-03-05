<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Savings</title>
    <link rel="stylesheet" href="/mini-projek-tabungan/public/css/style.css">
</head>
<body class="admin-page">
    <nav>
        <h1>Admin Dashboard - Savings</h1>
        <ul>
            <li><a href="index.php?url=home">Home</a></li>
            <li><a href="index.php?url=logout">Logout</a></li>
        </ul>
    </nav>

    <h2>All Savings</h2>
    <table class="save-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Amount Saved</th>
                <th>Message</th>
                <th>Saved At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $s): ?>
                <tr>
                    <td><?php echo htmlspecialchars($s['name']); ?></td>
                    <td>Rp<?php echo number_format($s['amount']); ?></td>
                    <td><?php echo htmlspecialchars($s['message']); ?></td>
                    <td><?php echo $s['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
