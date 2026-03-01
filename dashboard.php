<?php

 session_start();

   if (!isset($_SESSION['user_name'])) {
      header('Location: login.php');
      exit;
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dasboard.css">
</head>
<body>

<div class="dashboard-container">

    <h1>Hello Mr, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
    
    <div class="role-box">
         
        <?php if ($_SESSION['role'] === 'administrator') echo "<p><strong>Admin Panel:</strong> Full system access granted.</p>"; ?>
         
        <?php if ($_SESSION['role'] === 'trainer') echo "<p><strong>Trainer Dashboard:</strong> Manage your courses here.</p>"; ?>

    </div>

    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html>