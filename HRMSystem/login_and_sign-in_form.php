
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
</head>

<body>
    
    <!-- <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Request Account</h1>
                <span>This will notify the admin to create your account.</span>
                <input type="text" placeholder="Full Name" />
                <input type="email" placeholder="Username" />
                <input type="password" placeholder="Password" />
                
                <button>Sign Up</button>
            </form>
        </div> -->
        <!-- <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <input type="email" placeholder="Username" />
                <input type="password" placeholder="Password" />

                <button>Sign In</button>
                
            </form>
        </div> -->


        <!-- TRY LANGGGGGGGGGGGGGGGGGGGGG -->

        <div class="container">

        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>Sign in</h1>
                <input type="text" name="login_username" placeholder="Username" required />
                <input type="password" name="login_password" placeholder="Password" required />
                <button type="submit">Sign In</button>
            </form>
        </div>
    
    <script src="assets/JS/main.js"></script>
</body>

</html>