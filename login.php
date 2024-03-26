<!DOCTYPE html>
<html lang="en">

<head>
  <title>Price Tracker - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles_login.css">
  <script defer src="scripts/login.js"></script>

</head>

<body>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        include 'navbar.php';
    ?>
    <div class="container">
        <h1>Log In to Your Account</h1>
        <div id="login-error-msg-holder"> 
        <?php
            if (isset($_SESSION["Error_login"])) {
                echo "<p id=\"login-error-msg\">" . $_SESSION["Error_login"] . "</p>";
            }
        ?>
        </div>
        <div id="login-form">
            <form action = "login_processing.php" method = "POST">
                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" name="username" class="form-control login-form-field" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control login-form-field" id="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-primary btn-block" id="login-submit-button">
                </div>
            </form>
        </div>
        <div class="button-container">
            <a href="registration.php" class="btn btn-success btn-block" id="signupbtn">Create Free Account</a>
        </div>
    </div>
    
    <?php
        include 'footer.php';
    ?>
    
</body>

</html>
