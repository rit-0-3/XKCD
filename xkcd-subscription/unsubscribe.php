<?php
require 'db_conn.php';
$email = $_GET['email'];
$stmt = $conn->prepare("UPDATE subscribers SET subscribed = FALSE WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
echo "You have been unsubscribed.";
?>