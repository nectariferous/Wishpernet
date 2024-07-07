<?php
include 'config.php';
// Establish a connection to the database
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Token Mining App</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?></h1>
    <div id="tokenMined">
        <div id="loadingBar">0%</div>
    </div>
    <div id="footer">
        <button class="button" id="mineButton">Mine Tokens</button>
        <button class="button" onclick="window.location.href='leaderboard.php'">Leaderboard</button>
        <button class="button" onclick="window.location.href='refer.php'">Refer a Friend</button>
    </div>
</body>
</html>
