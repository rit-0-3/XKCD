<?php
$conn = new mysqli('localhost', 'root', '', 'xkcd');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>