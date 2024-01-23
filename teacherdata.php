<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/teacherdata.css">
    <title>Teacher Attendance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(244, 238, 230);
            margin: 0;
        }
        
        header {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            z-index: 99;
            background-color: rgb(174, 161, 146);
        }
        
        .nav a {
            text-decoration: none;
            color: #fff;
            margin-left: 20px;
            font-weight: bold;
            transition: color 0.3s;
        }
        
        .nav a:hover {
            color: rgb(160, 143, 120); 
        }
        
        .container {
            max-width: 1500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        
        /* Table Styles */
        table {
            width: 120%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        thead th {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: left;
        }
        
        tbody td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        
        /* Checkbox Styles */
        .checkbox-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        input[type="checkbox"] {
            margin-bottom: 5px;
        }
        
        /* Button Styles */
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #0056b3;
        }
    </style>
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
    <div class="container">
        <h2>Teacher Attendance</h2>
        <table>
            <thead>
            <?php
    // Include common functions and connect to the database
    include 'common.php';
    $conn = connectToDatabase();

    displayTeacherData($conn);

    // Handle form submissions
    handleFormSubmissionteacher($conn);

    // Close the database connection
    $conn->close();
    ?>
            </thead>
            <tbody>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
