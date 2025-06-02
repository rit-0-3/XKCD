<?php
require 'db_conn.php';
?>
<!DOCTYPE html>
<html>
<head><title>XKCD Subscribe</title></head>
<body>
<h2>Subscribe to Daily XKCD Comics</h2>
<form action="verify.php" method="POST">
  <input type="email" name="email" placeholder="Enter your email" required>
  <button type="submit">Subscribe</button>
</form>
</body>
</html>