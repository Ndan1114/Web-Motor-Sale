<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Sale</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #f4f4f4, #ffffff);
            scroll-behavior: smooth;
        }
        header {
            background: linear-gradient(135deg, #333, #444);
            color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 12px 25px;
            border-radius: 30px;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }
        nav a:hover {
            background-color: #4CAF50;
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .section {
            padding: 100px 20px;
            text-align: center;
            margin-top: 80px;
            transition: all 0.5s ease;
        }
        .section h2 {
            font-size: 2.5em;
            color: #333;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .brand-selection {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 50px;
        }
        .brand-link {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 20px;
            font-size: 18px;
            text-decoration: none;
            border-radius: 10px;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s ease;
        }
        .brand-link:hover {
            background-color: #4CAF50;
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .brand-link img {
            width: 80%;
            height: 80%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        .brand-link:hover img {
            transform: scale(1.1);
        }
        @media (max-width: 768px) {
            .brand-selection {
                flex-direction: column;
                align-items: center;
            }
            .brand-link {
                width: 150px;
                height: 150px;
            }
        }
        .section p {
            font-size: 1.15em;
            line-height: 1.7;
            color: #555;
        }
        .section a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        .section a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Motor Sale</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <div id="home" class="section">
        <h2>Pilih Brand Favorit Anda</h2>
    </div>

    <div class="brand-selection">
        <a href="../honda.php" class="brand-link">
            <img src="../hias/img/logo honda.png" alt="Honda">
        </a>
        <a href="../yamaha.php" class="brand-link">
            <img src="../hias/img/yamaha.jpg" alt="Yamaha">
        </a>
        <a href="../kawasaki.php" class="brand-link">
            <img src="../hias/img/kawasaki.jpg" alt="Kawasaki">
        </a>
    </div>

    <div id="about" class="section">
        <h2>About Us</h2>
        <p>Selamat datang di [Nama Toko Motor], tempat terbaik untuk menemukan motor impian Anda! Kami adalah dealer motor yang berkomitmen untuk menyediakan berbagai pilihan motor berkualitas tinggi dengan harga terbaik. Kami memahami betapa pentingnya kendaraan untuk mendukung mobilitas dan gaya hidup Anda, oleh karena itu kami menawarkan motor dari berbagai merek ternama dengan spesifikasi yang dapat disesuaikan dengan kebutuhan Anda.</p>
        <p>Dengan pengalaman bertahun-tahun di industri ini, tim kami selalu siap memberikan layanan pelanggan yang ramah dan profesional, serta membantu Anda dalam memilih motor yang tepat. Kami juga menyediakan layanan purna jual yang lengkap, termasuk servis dan suku cadang original, untuk memastikan motor Anda tetap dalam kondisi terbaik.</p>
        <p>Visi kami adalah menjadi pilihan utama bagi Anda yang mencari motor berkualitas, dengan proses pembelian yang mudah dan transparan. Bergabunglah dengan keluarga besar [Nama Toko Motor] dan temukan motor yang sesuai dengan gaya hidup Anda!</p>
    </div>

    <div id="contact" class="section">
        <h2>Contact Us</h2>
        <p>Email : info@gmail.com</p>
        <p>Phone : 0812-3456-7890</p>
    </div>

    <script>
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
<?php include('footer.php'); ?>