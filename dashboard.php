<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body style="font-family: Arial; text-align:center; margin-top:80px;">
  <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
  <p>Your system is running successfully!</p>
  <a href="logout.php">Logout</a>
</body>
</html>
