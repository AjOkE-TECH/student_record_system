<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <form action="index.php" method="POST">

        <input type="text"
               name="username"
               placeholder="Username"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit" name="login">
            Login
        </button>

    </form>
</div>

</body>
</html>