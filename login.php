<?php
session_start();
require_once 'core/dbConfig.php';

if (isset($_POST['loginBtn'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query to validate user
  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
  $stmt->execute([$username, md5($password)]);
  $user = $stmt->fetch();

  if ($user) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: index.php');
    exit();
  } else {
    $error = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/components.css">
</head>

<body>
  <h1>Login</h1>
  <form method="POST" action="">
    <label for="username">Username</label>
    <input type="text" name="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <?php if (isset($error)): ?>
      <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <p>
      <button type="submit" name="loginBtn">Login</button>
    </p>
    <p>Don't have an account?
      <a href="register.php">Register</a>
    </p>

  </form>
</body>

</html>