<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'db.php'; // Include your database connection file

session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$otp = rand(100000, 999999); // Generate a random 6-digit OTP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
        exit();
    }

    // Check if the user exists in the database
    $stmt = $conn->prepare("SELECT id, username FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Send OTP to user's email
        sendOtpEmail($email, $otp);

        // Store OTP in session for verification later
        $_SESSION['otp'] = $otp;

        header("Location: verify_otp.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}