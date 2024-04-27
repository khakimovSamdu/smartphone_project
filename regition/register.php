<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="registration form">
      <header>Signup</header>
      <form action="./homepage/home.php">
        <input type="text" placeholder="Enter your fullname" required>
        <input type="email" placeholder="Enter your email" required>
        <input type="password" placeholder="Create a password" required>
        <input type="password" placeholder="Confirm your password" required>
        <input type="button" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
    <div class="login form">
      <header>Login</header>
      <form action="./homepage/home.php#">
        <input type="text" placeholder="Enter your email" required>
        <input type="password" placeholder="Enter your password" required>
        <a href="#">Forgot password?</a>
        <input type="button" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    
  </div>
</body>
</html>