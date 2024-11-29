<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="../css/project-css-styles.css" />
  <link rel="icon" href="../assets/images/AkanNation_logo.jpg" type="image/x-icon" />
</head>

<body>
  <div class="page-container">
    <div class="auth-card">
      <div class="login-container">
        <div class="logo">
          <img src="../assets/images/AkanNation logo.jpg" alt="AKAN Nation" />
        </div>
        <h1>Sign Up</h1>

        <form method="post">
          <div class="input-group">
            <input type="text" id="userName" name="userName" placeholder="User name" />
            <span class="fieldErr" id="usernameErr"></span>
          </div>
          <div class="input-group">
            <input type="email" id="emailAddress" name="emailAddress" placeholder="Email address" />
            <span class="fieldErr" id="emailErr"></span>
          </div>
          <div class="input-group">
            <input type="password" id="password" name="password" placeholder="Password" />
            <span class="fieldErr" id="passErr"></span>
          </div>
          <div class="input-group">
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" />
            <span class="fieldErr" id="confirmPassErr"></span>
          </div>
          <div class="input-group">
            <input type="checkbox" id="terms" name="terms" required />
            <label for="terms">I agree to the Terms and Conditions</label>
          </div>
          <div class="button-group">
            <button type="button" class="button" name="signUpButton" id="signUpButton">
              Sign Up
            </button>
          </div>

          <div class="input-group">
            Already a user? <a href="login.php">Sign in</a> now!
          </div>

        </form>
      </div>

      <div class="signin-container">
        <h2>Already a user?</h2>
        <a href="login.php" class="signup-btn">Sign in</a>
      </div>
    </div>
  </div>

  <script type="module" src="../js/register.js"></script>

</body>

</html>