<?php
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
<?php
include 'navbar.php';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo htmlspecialchars($productData['product_photo']); ?>" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2><?php echo htmlspecialchars($productData['product_title']); ?></h2>
            <p><strong>Price:</strong> <?php echo htmlspecialchars($productData['product_price']); ?></p>
            <p><strong>Original Price:</strong> <?php
                if (isset($productData['product_original_price']) && $productData['product_original_price'] !== null) {
                    echo htmlspecialchars($productData['product_original_price']);
                } else {
                    echo "Unavailable";
                }
                ?>
                ?></p>
            <p><strong>Star Rating:</strong> <?php echo htmlspecialchars($productData['product_star_rating']); ?> / 5</p>
            <p><strong>Number of Ratings:</strong> <?php echo htmlspecialchars($productData['product_num_ratings']); ?></p>
            <p><strong>Availability:</strong> <?php echo htmlspecialchars($productData['product_availability']); ?></p>
            <p><a href="<?php echo htmlspecialchars($productData['product_url']); ?>" target="_blank" class="btn btn-primary">View on Amazon</a></p>
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

<?php
include 'footer.php';
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
