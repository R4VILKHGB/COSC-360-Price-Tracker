<!DOCTYPE html>
<html lang="en">

<head>
  <title>Price Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles_home.css">

</head>

<body>
    <?php
        include 'navbar.php';
    ?>

    
    <div class="content">
    <h3 class = "menu-text">Welcome to <span class="c1">camel</span><span class="c2">camel</span><span class="c3">camel</span>, a free Amazon price tracker!</h3>
    <p>Our free Amazon price tracker monitors millions of products and alerts you when prices drop, helping you decide when to buy.</p>
    </div>
    <div class = "content">
        <table class = "position-table">
            <tr>
                <td><h3 class="menu-text" id = "offset-center">We help <span class="green">you save money</span>.</h3></td>
                <td width = 40%></td>
                <?php
                if (empty($_SESSION["currentUser"])) {
                    echo "<td><a id=\"signupbtn\" href=\"registration.php\">Create Free Account</a></td>";
                }
                ?>
            </tr>
        </table>
        
        
    </div>
    <div class = "content">
        <h4>Supported Amazon Countries</h4>
        <p>Don't shop at Amazon United States? Choose your preferred country here.</p>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html> 
