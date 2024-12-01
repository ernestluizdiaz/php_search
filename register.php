<?php
require_once 'core/dbConfig.php';

if (isset($_POST['registerBtn'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  // Check if the username is already taken
  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->execute([$username]);

  if ($stmt->rowCount() > 0) {
    $error = "Username already exists.";
  } else {
    // Insert new user
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);
    header('Location: login.php');
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/components.css">
</head>

<body>
  <h1>Register</h1>
  <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="POST" action="">
    <label for="username">Username</label>
    <input type="text" name="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="registerBtn">Register</button>
    <p>Already have an account?
      <a href="login.php">Login</a>
    </p>
  </form>
</body>

</html>