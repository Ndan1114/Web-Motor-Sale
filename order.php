<?php
  include('include/header.php');
  include('include/connect.php');

  // Ambil ID motor dari URL
  $motor_id = $_GET['id'];

  // Query untuk mendapatkan informasi motor berdasarkan ID
  $query = "SELECT * FROM motors WHERE id = $motor_id";
  $result = mysqli_query($conn, $query);
  $motor = mysqli_fetch_assoc($result);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form order
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert data pemesanan ke database (contoh menggunakan tabel orders)
    $order_query = "INSERT INTO orders (motor_id, name, email, address) VALUES ('$motor_id', '$name', '$email', '$address')";
    if (mysqli_query($conn, $order_query)) {
      echo "<div class='message-box success-message'>Permintaan Pesanan Anda Telah Kami Terima! Akan Kami Proses Segera. Terima Kasih!</div>";
    } else {
      echo "<div class='message-box error-message'>Error: " . mysqli_error($conn) . "</div>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - <?php echo $motor['name']; ?></title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Message box for success or error */
        .message-box {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
        }
        .success-message {
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
        }
        .error-message {
            background-color: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
        }

        /* Order page container */
        .order-page {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Image container for the product */
        .product-image-container {
            max-width: 100%;
            height: auto;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-image-container img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
            border-radius: 8px;
        }

        /* Form styling */
        .order-form {
            margin-top: 20px;
        }

        .order-form input,
        .order-form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .order-form button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 18px;
            font-size: 1.1em;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .order-form button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .order-page {
                padding: 15px;
            }

            .order-form input,
            .order-form textarea {
                font-size: 0.9em;
                padding: 10px;
            }

            .order-form button {
                font-size: 1em;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="order-page">
        <h1>Order <?php echo $motor['name']; ?></h1>
        <div class="product-image-container">
            <img src="hias/img/<?php echo $motor['image']; ?>" alt="<?php echo $motor['name']; ?>">
        </div>
        <p style="text-align: justify;"><?php echo $motor['description']; ?></p>
        <p><strong>Price :</strong> Rp.<?php echo number_format($motor['price'], 0, ',', '.'); ?></p>

        <div class="order-form">
            <h3>Fill out the form to place your order:</h3>
            <form method="POST" action="order.php?id=<?php echo $motor['id']; ?>">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="address" placeholder="Your Address" required></textarea>
                <button type="submit">Place Order</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php include('include/footer.php'); ?>