<?php
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://real-time-amazon-data.p.rapidapi.com/deals?country=US",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: real-time-amazon-data.p.rapidapi.com",
        "X-RapidAPI-Key: cdf3508a51mshbe5af6a133567edp158282jsn632c685a4d38"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
    exit;
}

$deals = json_decode($response, true)['data']['deals'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Deals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles_home.css">
    <link rel="stylesheet" href="/css/styles_products.css">
</head>
<body>
<?php
include 'navbar.php';
?>

<div class="header-container">
    <h1 class="main-title">Popular Amazon Deals</h1>
    <div class="underline"></div>
    <p class="subtitle">Discover the best deals on Amazon products.</p>
</div>

<section class="product-grid container mt-3">
    <?php foreach ($deals as $deal): ?>
        <div class="card mb-4">
            <img src="<?php echo htmlspecialchars($deal['deal_photo'] ?? 'placeholder.jpg'); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($deal['deal_title']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($deal['deal_title']); ?></h5>
                <p class="card-text"><?php echo isset($deal['deal_price_min']) ? "From $" . htmlspecialchars($deal['deal_price_min']['amount']) : ""; ?></p>
                <p class="card-text"><?php echo isset($deal['deal_price_max']) ? "To $" . htmlspecialchars($deal['deal_price_max']['amount']) : ""; ?></p>
                <p class="card-text badge badge-primary"><?php echo htmlspecialchars($deal['deal_badge']); ?></p>
                <a href="<?php echo htmlspecialchars($deal['deal_url']); ?>" class="btn btn-primary" target="_blank">View at Amazon</a>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<?php
include 'footer.php';
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
</body>
</html>







<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!--<head>-->
<!--<meta charset="UTF-8">-->
<!--<meta name="viewport" content="width=device-width, intial-scale=1.0">-->
<!--<title>Template</title>-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<!--<link rel="stylesheet" href="css/styles_home.css">-->
<!--<link rel="stylesheet" href="css/styles_products.css">-->
<!---->
<!--</head>-->
<!---->
<!--<body>-->
<?php
//        include 'navbar.php';
//    ?>
<!---->
<!---->
<!---->
<!--    <div class="header-container">-->
<!--      <h1 class="main-title">Popular Products</h1>-->
<!--      <div class="underline"></div>-->
<!--      <p class="subtitle">Here is what's popular with the Camel community lately. <a href="#">(more info)</a> <a href="#" class="rss-link">View the custom RSS feed for this list</a></p>-->
<!--      -->
<!--    </div>-->
<!---->
<!--  <div class="filter-bar">-->
<!--    <div>-->
<!--      <button class="filter-button">All Products</button>-->
<!--      <button class="filter-button">Deals Only</button>-->
<!--    </div>-->
<!--    <div>-->
<!--      <label for="product-category" class="visually-hidden">Product Category</label>-->
<!--      <select id="product-category" class="filter-select">-->
<!--        <option value="all">All</option>-->
<!--      </select>-->
<!--  -->
<!--    </div>-->
<!--    <div class="navigation-buttons">-->
<!--      <button class="filter-button">Previous</button>-->
<!--      <button class="filter-button">Next</button>-->
<!--    </div>-->
<!--  </div>-->
<!--  -->
<!--  <section class="product-grid">-->
<!--    <div class="product-item">-->
<!--      <h2>Product Name Placeholder</h2>-->
<!--      <div class="product-image">Image placeholder</div>-->
<!--      <p>Best Price: $XX.XX</p>-->
<!--      <p>List Price: $XX.XX</p>-->
<!--      <p>Average Price: $XX.XX</p>-->
<!--      <a href="#">View at Amazon</a>-->
<!--    </div>-->
<!---->
<!--    <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!---->
<!--      <div class="product-item">-->
<!--        <h2>Product Name Placeholder</h2>-->
<!--        <div class="product-image">Image placeholder</div>-->
<!--        <p>Best Price: $XX.XX</p>-->
<!--        <p>List Price: $XX.XX</p>-->
<!--        <p>Average Price: $XX.XX</p>-->
<!--        <a href="#">View at Amazon</a>-->
<!--      </div>-->
<!--  </section>-->
<!--  --><?php
//        include 'footer.php';
//    ?>
<!--  -->
<!--</body>-->
<!---->
<!---->
<!---->
<!--</html>-->
<!---->
<!---->
