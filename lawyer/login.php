<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel = "stylesheet" href = "syle.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class="signin-form">
          <h2>Sign In</h2>
          <div class="form-group">
            <label for="username">Username or Email</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit">LOGIN</button>
          <p>Don't have an account? <a href="register.php">Register here</a></p>
        </form>
      </div>

</body>
</html>

