<!DOCTYPE html>
<html>
<head>
    <title>User registration page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Login</h1>
    </div>

    <form method="post" action="session.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="Username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Are you a new member? <a href="index.php">Sign up</a>
        </p>
    </form>

</body>
</html>