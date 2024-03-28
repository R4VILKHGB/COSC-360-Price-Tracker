<?php
// Start the session to get the product data stored from search.php
session_start();
$productData = isset($_SESSION['productData']) ? $_SESSION['productData'] : null;
if (!$productData) {
    echo "No product information available.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($productData['product_title']); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_home.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="html_redacted/home.html"><img src = "images/camel_logo.png" title="Visit our homepage"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline my-2 my-lg-0" action="/search.php" method="post">
                <input class="form-control mr-sm-2" type="search" name="productUrl" placeholder="Find Amazon Products" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="html_redacted/home.html">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="html_redacted/popular_products.html">Popular Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="html_redacted/price_drop.html">Top Price Drops</a>
                </li>
            </ul>

            <div class="dropdown">
                <img src="images/user.png" alt="User Logo" class="user-logo">
                <div class="dropdown-content">
                    <a href="html_redacted/login.html">Sign In</a>
                    <a href="html_redacted/registration.html">Create Free Account</a>
                </div>
            </div>
        </div>
    </nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo htmlspecialchars($productData['product_photo']); ?>" alt="Product Image" class="img-fluid">
            <!-- Add carousel for multiple images if available -->
        </div>
        <div class="col-md-6">
            <h2><?php echo htmlspecialchars($productData['product_title']); ?></h2>
            <p><strong>Price:</strong> <?php echo htmlspecialchars($productData['product_price']); ?></p>
            <p><strong>Original Price:</strong> <?php echo htmlspecialchars($productData['product_original_price']); ?></p>
            <p><strong>Star Rating:</strong> <?php echo htmlspecialchars($productData['product_star_rating']); ?> / 5</p>
            <p><strong>Number of Ratings:</strong> <?php echo htmlspecialchars($productData['product_num_ratings']); ?></p>
            <p><strong>Availability:</strong> <?php echo htmlspecialchars($productData['product_availability']); ?></p>
            <p><a href="<?php echo htmlspecialchars($productData['product_url']); ?>" target="_blank" class="btn btn-primary">View on Amazon</a></p>
            <!-- Additional details and features can be listed here -->
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h3>About this product:</h3>
            <ul>
                <?php foreach ($productData['about_product'] as $bullet): ?>
                    <li><?php echo htmlspecialchars($bullet); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<footer class="footer">
    <!-- Footer content -->
</footer>
<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
