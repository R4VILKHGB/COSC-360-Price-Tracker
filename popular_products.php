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
      <h1 class="main-title">Popular Products</h1>
      <div class="underline"></div>
      <p class="subtitle">Here is what's popular with the Camel community lately. <a href="#">(more info)</a> <a href="#" class="rss-link">View the custom RSS feed for this list</a></p>
      
    </div>

  <div class="filter-bar">
    <div>
      <button class="filter-button">All Products</button>
      <button class="filter-button">Deals Only</button>
    </div>
    <div>
      <label for="product-category" class="visually-hidden">Product Category</label>
      <select id="product-category" class="filter-select">
        <option value="all">All</option>
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


