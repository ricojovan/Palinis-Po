
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login HRM - Signin/Signup</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/login-signin_styling.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
<div class="flex justify-center"> 
<div class="login-card-1">
  <div class="card-header-1">
    <h1>Login</h1>
  </div>
  <div class="card-body-1">
    <form action="login.php" method="post">
      <div class="form-group-1">
        <label for="username">Username</label>
        <input type="text" name="login_username" required="">
      </div>
      <div class="form-group-1">
        <label for="password">Password</label>
        <input type="password" name="login_password" required="">
      </div>
      <div class="form-group-1">
        <button type="submit" class="login-button">Login</button>
      </div>
    </form>
  </div>
</div>
</div>
        <!-- TRY LANGGGGGGGGGGGGGGGGGGGGG -->

        <!-- <div class="container">

        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>Sign in</h1>
                <input type="text" name="login_username" placeholder="Username" required />
                <input type="password" name="login_password" placeholder="Password" required />
                <button type="submit">Sign In</button>
            </form>
        </div> -->
    
    <script src="assets/JS/main.js"></script>
</body>

</html>