<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrangeCup - Product Details</title>
    <style>
        body {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            box-sizing: border-box;
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .navbar .logo span {
            font-size: 18px;
            font-weight: bold;
            color: #ff7e5f;
        }

        .navbar .nav-item {
            display: flex;
            flex-direction: row;
        }

        .navbar .nav-item a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar .nav-item a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        #product-heading {
            color: white;
            font-size: 2.5em;
            margin-top: 80px; /* Ensure content starts below the navbar */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .product-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }

        .product-container img {
            width: 300px; /* Adjust the size of the image */
            height: auto;
            border-radius: 10px;
            margin-right: 20px;
        }

        .product-details {
            background: #fff;
            color: #000;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            flex-grow: 1;
        }

        .product-details h2 {
            font-size: 2em;
            margin-top: 0;
        }

        .product-details .price {
            font-size: 1.5em;
            color: #ff7e5f;
            margin: 10px 0;
        }

        .product-details p {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .product-details .specifications {
            margin-top: 20px;
            font-size: 1em;
        }

        .product-details .specifications ul {
            list-style-type: none;
            padding-left: 0;
        }

        .product-details .specifications ul li {
            margin-bottom: 5px;
        }

        .product-details .buttons {
            margin-top: 20px;
        }

        .product-details button {
            background: #ff7e5f;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s;
        }

        .product-details button:hover {
            background: #feb47b;
        }

        #terms {
            background-color: #222;
            color: #ddd;
            padding: 15px 20px;
            text-align: center;
            font-size: 14px;
            position: relative;
            bottom: 0;
            width: 100%;
            box-sizing: border-box;
            margin-top: 20px; /* Ensures it stays at the bottom without overlapping */
        }

        #terms p {
            margin: 0;
        }

        #terms a {
            color: #ff7e5f;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        #terms a:hover {
            color: #feb47b;
        }

        #terms-text {
            margin-top: 10px;
            text-align: left;
            color: #ddd;
            font-size: 12px;
            padding: 10px 20px;
            background-color: #333;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php
    include 'products.php';

    // Get the product ID from the URL, default to 1 if not set
    $product_id = isset($_GET['id']) ? intval($_GET['id']) : 3;

    // Ensure the product ID is valid
    if (!array_key_exists($product_id, $products)) {
        // Handle invalid product ID, e.g., show an error page or default to the first product
        $product_id = 3;
    }

    $product = $products[$product_id];
    ?>

    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="OrangeCup Logo"> <!-- Add your logo image here -->
            <span>OrangeCup</span>
        </div>
        <div class="nav-item">
            <a href="Home.html">Home</a>
            <a href="Gallery.html">My Gallery</a>
            <a href="MyMemories.html">My Memories</a>
            <a href="Gifts.html">Gifts</a>
            <a href="Contacts.html">Contacts</a>
            <a href="Help.html">Help</a>
        </div>
    </div>

    <h1 id="product-heading"><?php echo htmlspecialchars($product['name']); ?></h1>

    <div class="product-container">
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
        <div class="product-details">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <div class="price"><?php echo htmlspecialchars($product['price']); ?></div>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <div class="specifications">
                <h3>Specifications:</h3>
                <ul>
                    <?php foreach ($product['specifications'] as $spec) : ?>
                        <li><?php echo htmlspecialchars($spec); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="buttons">
                <button>Add to Cart</button>
                <button>Buy Now</button>
            </div>
        </div>
    </div>

    <div id="terms">
        <p>&copy; 2024 OrangeCup. <a href="#terms-text">Terms and Conditions</a></p>

        <div id="terms-text">
            <h3>Terms and Conditions</h3>
            <p>
                Welcome to OrangeCup! These terms and conditions outline the rules and regulations for the use of our website.
                By accessing this website, we assume you accept these terms and conditions. Do not continue to use OrangeCup if
                you do not agree to all of the terms and conditions stated on this page.
            </p>
            <p>
                The following terminology applies to these Terms and Conditions, Privacy Statement, and Disclaimer Notice
                and all Agreements: "Client", "You" and "Your" refer to you, the person logging on this website and compliant
                to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refer to our Company.
            </p>
            <p>
                Cookies: We employ the use of cookies. By accessing OrangeCup, you agreed to use cookies in agreement with
                our Privacy Policy.
            </p>
            <!-- Add more terms and conditions as needed -->
        </div>
    </div>
</body>
</html>
