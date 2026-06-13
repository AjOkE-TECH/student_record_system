<?php
session_start();
include "config/database.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM admins
         WHERE username='$username'
         AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Invalid Username or Password";
    }
}
?>