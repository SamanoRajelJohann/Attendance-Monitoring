<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/addstudent.css">
    <title>Update</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="home.html">HOME</a>
            <a href="addstudent.php">ADD Student</a>
            <a href="addteacher.php">ADD Teacher</a>
            <a href="studentdata.php">View Students Data</a>
            <a href="teacherdata.php">View Teachers Data</a>
        </nav>
    </header>
    <div class="card">
       
        <h2>UPDATE</h2>
        <form method = "post" id="studentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="ID">Previous ID:</label>
            <input type="text" name="ID" id="ID" required>

            <label for="ID">New ID:</label>
            <input type="text" name="newID" id="newID" required>

            <label for="teacherFirstName">Teacher First Name:</label>
            <input type="text" name="First_Name" id="First_Name" required>

            <label for="teacherMiddleName">Teacher Middle Name:</label>
            <input type="text" name="Middle_Name" id="Middle_Name" required>

            <label for="teacherLastName">Teacher Last Name:</label>
            <input type="text" name="Last_Name" id="Last_Name" required>

            <label for="Job_Description">Job Description:</label>
            <select name="Job_Description" id="Job_Description">
                 <option value="Full Time">Full Time</option>
                 <option value="Part Time">Part Time</option>
                 <option value="Faculty">Faculty</option>
             </select>
            <br>
            <input type="hidden" name="action" value="update">
            <button type="submit" value="submit">Update</button>
        </form>
    </div>
    <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    // Handle form submissions
    handleFormSubmissionteacher($conn);

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>