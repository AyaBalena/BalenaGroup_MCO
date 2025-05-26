<?php
if (isset($_POST['verify'])) {
    session_start();
    require 'db.php'; // Include your database connection file

    $otp = $_POST['otp'] ?? '';
    $userOtp = $_SESSION['otp'] ?? '';

    if ($otp === $userOtp) {
        // OTP is correct, proceed with login or registration
        echo "OTP verified successfully!";
        // You can redirect to a welcome page or dashboard here
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
