<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/signup.css">
    <title>SIGNUP</title>
</head>

<body>
    <div class="container">
        <div class="form-container" id="signup-form">
            <h1>Sign Up</h1>
            <form method = "post" id="studentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="new-username">Username</label>
                <input type="text" id="UserName" name="UserName" required>
                <label for="new-email">Email</label>
                <input type="text" id="Email" name="Email" required>
                <label for="new-password">Password</label>
                <input type="password" id="Password" name="Password" required>
                <input type="hidden" name="action" value="insert">
                <button type="submit" value="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="index.php" id="login-link">Login</a></p>
        </div>
        <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    // Handle form submissions
    login($conn);

    // Close the database connection
    $conn->close();
    ?>
    </div>
</body>
    
</html>
