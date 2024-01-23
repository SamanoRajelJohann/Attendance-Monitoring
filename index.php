<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/login.css">
    <title>LOGIN</title>
    <script>
    </script>
</head>
<body>
    <div class="container">
        <div class="form-container" id="login-form">
          <h1>Login</h1>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username</label>
            <input type="text" id="UserName" name="UserName" required>
            
            <label for="password">Password</label>
            <input type="password" id="Password" name="Password" required>
            
            <button type="submit">Login</button>
          </form>
          <p>Don't have an account? <a href="signup.php" id="signup-link">Sign up</a></p>
        </div>
    </div>
    <?php
    include 'common.php';
    $conn = connectToDatabase();

    // Handle form submissions
    loginuser($conn);
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
