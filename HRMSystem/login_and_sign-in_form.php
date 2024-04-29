<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/CSS/login-signin_styling.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="login_username" required="" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="login_password" required="" placeholder="Password" />
            </div>
            <button type="submit" class="btn solid login-button" >Login</button>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Welcome to Palinis po!</h3>
            <p>
              Enter your details and start your journey with us!
            </p>
          </div>
          <img src="assets\images\media\logo.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/JS/main.js"></script>
</body>

</html>