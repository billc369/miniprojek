<!-- Logout -->

<?php
session_start();
session_destroy();
header("Location: index.php?url=login");
exit();
?>