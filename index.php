<!DOCTYPE html>
<html>
<head>
  <title>Login - Backup Demo</title>
  <style>
    body { font-family: Arial; background: #f2f2f2; text-align: center; margin-top: 80px; }
    form { background: white; display: inline-block; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px gray; }
    input { padding: 10px; margin: 10px; width: 200px; }
    button { padding: 10px 20px; background: #007BFF; color: white; border: none; border-radius: 5px; }
  </style>
</head>
<body>
  <h2>System Login</h2>
  <form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
