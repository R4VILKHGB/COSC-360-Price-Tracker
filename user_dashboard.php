<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Dashboard - Price Tracker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles_dashboard.css"> 
    <!-- <script src="javaScript/dashboard.js"></script> -->

</head>

<body>
    <?php
        include 'navbar.php';
    ?>

    <div class="container">
        <h1>User Dashboard</h1>
        <section id="tracked-products" class="dashboard-section">
            <h2>Tracked Products</h2>
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
            </div>
            <div class="product-grid">
                <div class="product-item">
                    <h2>Product 1</h2>
                    <div class="product-image">Image placeholder</div>
                    <p>Best Price: $50.00</p>
                    <p>List Price: $60.00</p>
                    <p>Average Price: $55.00</p>
                    <a href="#">View at Amazon</a>
                </div>
                <div class="product-item">
                    <h2>Product 2</h2>
                    <div class="product-image">Image placeholder</div>
                    <p>Best Price: $75.00</p>
                    <p>List Price: $90.00</p>
                    <p>Average Price: $80.00</p>
                    <a href="#">View at Amazon</a>
                </div>
            </div>
        </section>

        <section id="price-alerts" class="dashboard-section">
            <h2>Price Alerts</h2>
            <div class="filter-bar">
                <div>
                    <button class="filter-button">All Alerts</button>
                    <button class="filter-button">Active Alerts</button>
                </div>
                <div>
                    <label for="alert-category" class="visually-hidden">Alert Category</label>
                    <select id="alert-category" class="filter-select">
                        <option value="all">All</option>
                    </select>
                </div>
            </div>
            <div class="product-grid">
                <div class="product-item">
                    <h2>Alert 1</h2>
                    <p>Product: Product Name 1</p>
                    <p>Target Price: $40.00</p>
                    <p>Current Price: $45.00</p>
                    <a href="#">View Product</a>
                </div>
                <div class="product-item">
                    <h2>Alert 2</h2>
                    <p>Product: Product Name 2</p>
                    <p>Target Price: $30.00</p>
                    <p>Current Price: $35.00</p>
                    <a href="#">View Product</a>
                </div>
            </div>
        </section>

        <section id="account-settings" class="dashboard-section">
            <h2>Account Settings</h2>
            <div class="dashboard-content">
                <p>Welcome to your user dashboard ...... .....! Manage your tracked products, receive price alerts,
                    and update your account settings.</p>
            </div>
            <form id="account-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
        
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
        
                <button type="submit">Update Account</button>
            </form>
        </section>
    </div>

    <?php
        include 'footer.php';
    ?>

</body>

</html>
