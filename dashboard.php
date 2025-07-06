<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar">
    <div class="logo">StudentSys</div>
    <ul class="nav-links">
      <li><a href="index.html">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <div class="dashboard-container">
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <p>This is your secure dashboard.</p>
  </div>
</body>
</html>
