<?php 
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="home.php"><img src = "images/camel_logo.png" title="Visit our homepage"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarNav"> 
            <form class="form-inline my-2 my-lg-0"> 
                <input class="form-control mr-sm-2" type="search" placeholder="Find Amazon Products" aria-label="Search"> 
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
            </form> 
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> 
                <li class="nav-item active"> 
                    <a class="nav-link" href="home.php">Home 
                        <span class="sr-only">(current)</span>
                    </a> 
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link" href="popular_products.php">Popular Products</a> 
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="price_drop.php">Top Price Drops</a>
                </li>  
            </ul> 
            
            <?php echo $_SESSION["currentUser"];?>
            <div class="dropdown">
                <img src="images/user.png" alt="User Logo" class="user-logo">
                <div class="dropdown-content">
                    <?php
                        if($_SESSION["currentUser"] != null) {
                            echo "<a href=\"logout.php\">Log out</a>";
                        } else {
                            echo "<a href=\"login.php\">Sign In</a>";
                            echo "<a href=\"registration.php\">Create Free Account</a>";
                        }
                    ?>
                </div>
            </div>

        </div> 
    </nav>