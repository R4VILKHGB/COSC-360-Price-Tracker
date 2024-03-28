<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["productUrl"])) {
    // Extract the ASIN code from the URL
    $url = str_replace("//", "/", $_POST["productUrl"]);
    $parts = explode("/", $url);
    $dp_index = array_search("dp", $parts);

// Output the very next index after "dp" which is the ASIN number
    $asin = $dp_index !== false ? $parts[$dp_index + 1] : "ASIN not found";

    if ($asin) {
        // Initialize cURL session
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://real-time-amazon-data.p.rapidapi.com/product-details?asin=$asin&country=CA",
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
        } else {
            // Decode JSON response
            $data = json_decode($response, true);

            // Check if response status is OK
            if ($data['status'] == 'OK') {
                // Store product data
                $productData = $data['data'];

                // Redirect to products.php and pass the product data
                session_start();
                $_SESSION['productData'] = $productData;
                header('Location: products.php');
                exit();
            } else {
                echo "Error retrieving product information.";
            }
        }
    } else {
        echo "Invalid URL provided.";
    }
} else {
    echo "Please provide a product URL.";
}
?>
