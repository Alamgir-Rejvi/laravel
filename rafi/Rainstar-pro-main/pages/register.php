<?php
include('../includes/dbconnection.php');

if (isset($_POST['register'])) {
  $login_id = $_POST['login_id'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $role = $_POST['role'];

  $query = "INSERT INTO users (login_id, password, role) VALUES ('$login_id', '$password', '$role')";
  if (mysqli_query($con, $query)) {
    echo "<script>alert('Registration Successful!'); window.location.href='loginform.php';</script>";
  } else {
    echo "<script>alert('Error: Could not register');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - RainStar Pharma</title>
  <style>
    body {
      background: linear-gradient(135deg, #0d1117, #1a1f2b);
      color: white;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 10px;
      width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: none;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #4facfe;
      border: none;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    button:hover {
      background: #00f2fe;
    }
    a {
      color: #4facfe;
      text-decoration: none;
      display: block;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Register</h2>
    <form method="POST">
      <input type="text" name="login_id" placeholder="Login ID" required>
      <input type="password" name="password" placeholder="Password" required>
      <select name="role" required>
        <option value="">Select Role</option>
        <option value="pharmacist">Pharmacist</option>
      </select>
      <button type="submit" name="register">Register</button>
    </form>
    <a href="loginform.php">Already have an account? Login</a>
  </div>
</body>
</html>
