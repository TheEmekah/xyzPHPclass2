<!DOCTYPE html>
<html>
<head>
    <title>User registration page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Register</h1>
    </div>

    <form method="post" action="database.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="Username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Do you have an existin' Account? <a href="login.php">Sign in</a>
        </p>
    </form>

</body>
</html> 