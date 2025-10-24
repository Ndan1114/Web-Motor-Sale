<?php include('include/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda Product</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Container for products */
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* Grid layout */
            gap: 20px;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Styling for each product item */
        .product-item {
            background-color: #fff;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px; /* Added padding for spacing */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Make content evenly spaced */
        }

        /* Image styling */
        .product-item img {
            width: 100%;
            height: 250px;
            object-fit: cover; /* Ensure images are cropped nicely */
            border-bottom: 3px solid #f4f4f4;
            margin-bottom: 20px; /* Space between image and product details */
        }

        /* Title styling */
        .product-item h3 {
            font-size: 1.5em;
            color: #333;
            margin: 15px 0;
        }

        /* Price text styling */
        .product-item p {
            color: #777;
            font-size: 1.2em;
            margin: 10px 0;
        }

        /* Styling for the buy button */
        .buy-button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 18px;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: auto; /* Ensure button stays at the bottom */
        }

        /* Buy button hover effect */
        .buy-button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        /* Hover effect for product items */
        .product-item:hover {
            transform: translateY(-10px); /* Lift effect */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .product-item {
                padding: 15px;
            }

            .buy-button {
                font-size: 1em;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="product-list">
        <div class="product-item">
            <img src="hias/img/r15.jpg" alt="Honda Motor">
            <h3>Yamaha R15 V3</h3>
            <p>Price : Rp 23,000,000</p>
            <a href="order.php?id=3" class="buy-button">Buy Now</a>
        </div>
        <div class="product-item">
            <img src="hias/img/r25.jpg" alt="Honda Motor">
            <h3>Yamaha R25</h3>
            <p>Price : Rp 37,000,000</p>
            <a href="order.php?id=4" class="buy-button">Buy Now</a>
        </div>
    </div>
</body>
</html>
<?php include('include/footer.php'); ?>