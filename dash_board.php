<?
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Your Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="settings.php">Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section id="welcome">
                <h2>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                <p>This is your dashboard where you can manage your account.</p>
            </section>

            <section id="stats">
                <h2>Your Statistics</h2>
                <!-- Statistics content will go here -->
            </section>

            <section id="notifications">
                <h2>Notifications</h2>
                <!-- Notifications content will go here -->
            </section>
        </main>

        <footer>
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </footer>
    </div>
    <script>
        $(document).ready(function() {
            // Add any JavaScript functionality here
            console.log("Dashboard loaded successfully.");
        });
    </script>
</body>
</html>
<?php