<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

include "config/database.php";

$query = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">

    <div class="sidebar">
        <h2>Management System</h2>

        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="add_student.php">Add Student</a></li>
            <li><a href="view_students.php">View Students</a></li>
            <li><a href="search_student.php">Search Student</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">

        <div class="header">
            <h1>Student Records</h1>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Matric No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Level</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>

            <?php while($row = mysqli_fetch_assoc($query)){ ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['matric_no']; ?></td>
                <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['level']; ?></td>
                <td><?php echo $row['phone']; ?></td>

                <td>
                   <div class="action-buttons">
                       <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="edit-btn">Edit</a>

                         <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="delete-btn"
                           onclick="return confirm('Are you sure you want to delete this student?')">
                           Delete
                       </a>
                   </div>
                </td>
            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>