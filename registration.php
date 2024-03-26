<!DOCTYPE html>
<html lang="en">

<head>
    <title>Price Tracker - Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_registration.css"> 
    <script type="text/javascript" src="scripts/confirmpwd.js"></script>
</head>

<body>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        include 'navbar.php';
    ?>

    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }       
        if(isset($_SESSION["currentUser"]) && $_SESSION["currentUser"] != null) {
            header('Location: home.php');
            exit();
        }
    ?>

    <div class="container">
        <h1>Sign Up</h1>
        <div id="registration-form">
            <form action = "signup_processing.php" method = "POST" id = "mainForm">
                <div id="login-error-msg-holder"> 
                    <?php
                        if (isset($_SESSION["Error_reg"]) && $_SESSION["Error_reg"] != null) {
                            echo "<p id=\"login-error-msg\">".$_SESSION["Error_reg"]."</p>";
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" name="username" class="form-control registration-form-field required" id="username">
                </div>    
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control registration-form-field required" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control registration-form-field required" id="password">
                </div>
                <div class="form-group">
                    <label for="confpassword">Confirm Password</label>
                    <input type="password" name="confpassword" class="form-control registration-form-field required" id="confpassword">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create my account" class="btn btn-primary btn-block"
                        id="registration-submit-button" onclick="javascript: checkPasswordMatch(event)">
                </div>
            </form>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>

</html>





