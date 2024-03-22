<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Template</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles_home.css">
<link rel="stylesheet" href="css/styles_products.css">

</head>

<body>
    <?php
        include 'navbar.php';
    ?>


    <div class="header-container">
        <h1 class="main-title">Top Amazon Price Drops</h1>
        <div class="underline"></div>
        <p class="subtitle">The most recent price drops with a minimum relative price drop of 1.0%. <a href="#" class="rss-link">View the custom RSS feed for this list</a></p>
        
      </div>
    
    <div class="filter-bar">
        <div>
          <button class="filter-button">Most Recent</button>
          <button class="filter-button">Top Daily Drops</button>
          <button class="filter-button">Top Daily Drops (%)</button>
          <button class="filter-button">Top Weekly Drops</button>
          <button class="filter-button">Top Weekly Drops (%)</button>
        </div>
        <div>
          <label for="product-category" class="visually-hidden">Product Category</label>
          <select id="product-category" class="filter-select">
            <option value="all">All</option>
          </select>
      
          <label for="minimum-price-drop" class="visually-hidden">Minimum Price Drop</label>
          <select id="minimum-price-drop" class="filter-select">
            <option value="any">Any</option>
          </select>
        </div>
        <div class="navigation-buttons">
          <button class="filter-button">Previous</button>
          <button class="filter-button">Next</button>
        </div>
      </div>
      
  
  <section class="product-grid">
    <div class="product-item">
      <h2>Product Name Placeholder</h2>
      <div class="product-image">Image placeholder</div>
      <p>Best Price: $XX.XX</p>
      <p>List Price: $XX.XX</p>
      <p>Average Price: $XX.XX</p>
      <a href="#">View at Amazon</a>
    </div>

    <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>

      <div class="product-item">
        <h2>Product Name Placeholder</h2>
        <div class="product-image">Image placeholder</div>
        <p>Best Price: $XX.XX</p>
        <p>List Price: $XX.XX</p>
        <p>Average Price: $XX.XX</p>
        <a href="#">View at Amazon</a>
      </div>
  </section>
  
  <?php
        include 'footer.php';
    ?>
</body>



</html>


