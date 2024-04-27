<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login form">
        <header>Login</header>
        <form action="check.php" method="POST" id = 'logform'>
            <input type="text" name = 'login' placeholder="Enter your username" required>
            <input type="password" name='parol' placeholder="Enter your password" required>
            <button type="submit">Kirish</button>
        </form>
        <div class="signup">
            <span class="signup">Don't have an account?
                <a href="register.php">Signup</a>
            </span>
        </div>
        </div>
    </div>
</body>
</html>