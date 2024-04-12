<?php
session_start();

//if (!isset($_SESSION['currentUser'])) {
//    header('Location: login.php');
//    exit();
//}

$host = "localhost";
$database = "db_73975104";
$user = "73975104";
$password = "73975104";


$connection = mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_error()) {
    $output = "<p>Unable to connect to database!</p>";
    $_SESSION["Error_login"] = $output;
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = mysqli_real_escape_string($connection, $_POST['product_id']);
    $user_id = $_SESSION['currentUser'];

    $sql = "INSERT INTO wishlist (user_id, product_id) VALUES ('$user_id', '$product_id')";
    if (mysqli_query($connection, $sql)) {
        echo "<p>New record created successfully</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . mysqli_error($connection) . "</p>";
    }
}

$sql = "SELECT products.id, products.name, products.price FROM products JOIN wishlist ON products.id = wishlist.product_id WHERE wishlist.user_id = '{$_SESSION['currentUser']}'";
$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Wishlist</title>
</head>
<body>
<h1>My Wishlist</h1>

<?php
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

<form action="wishlist.php" method="post">
    <label for="product_id">Enter Product ID to Add:</label>
    <input type="text" name="product_id" id="product_id" required>
    <button type="submit">Add to Wishlist</button>
</form>
</body>
</html>

<?php
mysqli_close($connection);
?>
