<?php
session_start();

include "config/database.php";

$count_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM students");
$count_data = mysqli_fetch_assoc($count_query);

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="sidebar">
        <h2>SRMS</h2>

        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="add_student.php">Add Student</a></li>
            <li><a href="view_students.php">View Students</a></li>
            <li><a href="search_student.php">Search Student</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">

        <div class="header">
            <h1>Student Record Management System</h1>
            <p>Welcome, <?php echo $_SESSION['admin']; ?></p>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Total Students</h3>
                <p><?php echo $count_data['total']; ?></p>
            </div>

            <div class="card">
                <h3>Search Records</h3>
                <p>Quick Access</p>
            </div>

            <div class="card">
                <h3>Manage Students</h3>
                <p>CRUD Operations</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>