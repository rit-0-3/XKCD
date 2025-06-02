<?php
$conn = new mysqli("localhost", "root", "", "xkcd");

// Check if email and token are set
if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    $stmt = $conn->prepare("UPDATE subscribers SET verified = 1 WHERE email = ? AND token = ?");
    $stmt->bind_param("ss", $email, $token);

    if ($stmt->execute()) {
        echo "✅ Email verified successfully!";
    } else {
        echo "❌ Verification failed.";
    }

    $stmt->close();
} else {
    echo "❗ Invalid verification link.";
}

$conn->close();
?>
