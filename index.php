<?php
session_start();
include "config/database.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
    $conn,
    "SELECT * FROM admins
     WHERE username='$username'"
);

if(mysqli_num_rows($query) > 0){

    $admin = mysqli_fetch_assoc($query);

    if(password_verify($password, $admin['password'])){

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Invalid Password";
    }

}else{
    echo "User not found";
}

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Invalid Username or Password";
    }
?>