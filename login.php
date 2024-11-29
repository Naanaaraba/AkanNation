<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login to Your Account</title>
  <link rel="stylesheet" href="../css/project-css-styles.css" />
  <link rel="icon" href="../assets/images/AkanNation_logo.jpg" type="image/x-icon" />
</head>

<body>
  <div class="page-container">
    <div class="auth-card">
      <div class="login-container">
        <div class="logo">
          <img src="../assets/images/AkanNation_logo.jpg" alt="AkanNation Logo" />
        </div>
        <h1>LOGIN</h1>

        <form>
          <div class="input-group">
            <input type="email" id="emailAddress" name="emailAddress" placeholder="Email address" />
            <span class="fieldErr" id="emailErr"></span>
          </div>
          <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Password" />
            <span class="fieldErr" id="passErr"></span>
          </div>
          <div class="input-group">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Remember me</label>
          </div>
          <div class="button-group">
            <button type="button" name="loginButton" id="loginButton">Sign In</button>
          </div>

          <div class="input-group">
            New here? <a href="signUp.php">Sign up</a> now!
          </div>
        </form>
      </div>

      <div class="signin-container">
        <h2>New Here?</h2>
        <p>Sign up,and you too can experience your Weather for TWO!</p>
        <a href="signUp.php" class="signup-btn">Sign Up</a>
      </div>
    </div>

    <script type="module" src="../js/login.js"></script>

</body>

</html>