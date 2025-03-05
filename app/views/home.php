<!-- Home Page, main menu -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Mini Saving</title>
    <link rel="stylesheet" href="/mini-projek-tabungan/public/css/style.css">
</head>
<body class="home-page">
    <!-- Navigation Bar -->
    <nav>
        <h1>Mini Saving</h1>
        <div>
            Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>
            <?php 
                if($isAdmin) {
                    echo "<a href='admin'>Admin</a>";
                } 
            ?>
            <a href="save">Save</a>
            <a href="logout">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <h2>Recent Savings</h2>
        <?php 
            $total_saving = 0;
            foreach($result as $s){
                $total_saving += $s['amount'];
            }
        ?>

        <h2>Total saving is Rp <?php echo number_format($total_saving); ?></h2>

        <?php if(!empty($result)): ?>
            <table class="save-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount (Rp)</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $s): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($s['name']); ?></td>
                            <td><?php echo number_format($s['amount']); ?></td>
                            <td><?php echo htmlspecialchars($s['message']); ?></td>
                            <td><?php echo $s['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No savings recorded yet.</p>
        <?php endif; ?>
    </main>
</body>
</html>
