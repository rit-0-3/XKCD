<?php
require 'db_conn.php';
$res = $conn->query("SELECT email FROM subscribers WHERE verified = TRUE AND subscribed = TRUE");
while ($row = $res->fetch_assoc()) {
    $email = $row['email'];
    // Mock sending comic
    echo "Sent XKCD comic to: $email<br>";
}
?>