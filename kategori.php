<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","db_macthelena");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Design -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap -->

  
  <!-- Design -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Title Tab -->
  <title>Macthelena</title>
  <!-- Title Tab -->

  <style>
    /* ----------------------------------------------------------- GENERAL ----------------------------------------------------- */
    *{
      font-family: serif;
      margin: 0;
        padding: 0;
    }
    body{
      background-color: black;
      background-size: cover;
      background-repeat: no-repeat;
    }

    /* Banner */
    .banner{
      height: 75vh;
      background-image: url(img/banner/banner.jpg);
      background-repeat: no-repeat;
      position: relative;
      display: flex;
      margin: 0;
    }
    .text-banner-1{
      color: white;
      font-size: 67px;
      margin-top:170px;
      margin-left: 220px;
      text-shadow: 2px -2px black;
    }
    .text-banner-1 span{
      color: #9B5E34;
      text-shadow: 2px -2px black;
    }
    .text-banner-2{
      color: white;
      font-size: 20px;
      margin-top: 5px;
      margin-right: 150px;
      margin-left: 350px;
      margin-bottom: 40px;
      text-shadow: 2px -2px black;
    }
    /* Banner */

    /* Navbar */
    .body-navbar{
      background-color: #9B5E34;
    }
    .brand-toko{
      font-size: 32px;
      margin-left: 260px;
    }
    .nav-btn{
      font-size: 20px;
    }
    .space{
      margin-left: 70px;
    }
    /* Navbar */

    /* Footer */
    footer{
      padding: 30px 0;
      background-color: #9B5E34;
      color: black;
      text-align: center;
    }
    /* Footer */
    /* ---------------------------------------------------------- GENERAL END --------------------------------------------------- */

    /* ------------------------------------------------------------- MENU ------------------------------------------------------- */

    /* Menu */
    .body-card{
      width: 98%;
      border-radius: 0px;
      background-color: #2c2c2c;
      margin-top: 5px;
    }
    .body-card:hover{
      width: 98%;
      border-radius: 0px;
      background-color: #9B5E34;
    }
    .img-produk{
      width: 100%;
      padding: 5px 5px 5px 5px;
    }
    .title-produk{
      font-size: 18px;
      color: white;
    }
    .harga-produk{
      color: white;
    }
    .tombol-produk{
      color: black;
      background-color: #9B5E34;
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(0, 0, 0, 0.6);
      border-radius: 3px;
      margin-top: 0px;
      margin-left: 12px;
      margin-bottom: 15px;
      transition: transform 0.2s ease;
    }
    .tombol-produk:hover{
      color: #C97B45;
      background-color: #2c2c2c;
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.6);
      border: 1px solid rgba(0, 0, 0, 0.6);
    }
    .tombol-produk:active{
      transform: scale(0.90);
    }
    .icon-keranjang-produk{
      color: #9B5E34;
      font-size: 30px;
      margin-left: 10px;
      text-align: center;
      line-height: 1px;
      display: inline-block;
      transition: transform 0.2s ease;
      text-shadow: 2px -2px rgba(0, 0, 0, 0.6), -2px 2px rgba(0, 0, 0, 0.6);
    }
    .icon-keranjang-produk:hover{
      color: black;
      text-shadow: 2px -2px rgba(155, 94, 52, 0.6), -2px 2px rgba(155, 94, 52, 0.6);

    }
    .icon-keranjang-produk:active{
      transform: scale(0.85);
    }
    .kategori1{
      color: #9B5E34;
      margin-bottom: 0px;
      margin-top: 50px;
    }
    .kategori1a{
      color: #9B5E34;
      margin-bottom: 0px;
      margin-top: 70px;
    }
    .kategori2{
      color: #9B5E34;
      content: "";
      margin-top: 0px;
    }
    /* Menu */
    }
    /* ----------------------------------------------------------- MENU END ----------------------------------------------------- */
  </style>
</head>
<body>
  <!-- Banner -->
  <div class="banner">
    <main class="content">
      <h1 class="text-banner-1"><strong>A special treat at <span>Macthelena</span></strong></h1>
      <p class="text-banner-2">Jadikan setiap menu makanan kami sebagai pengalaman tak terlupakan.</p>
    </main>
  </div>
  <!-- Banner -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light body-navbar">
    <div class="container">
    <a class="navbar-brand brand-toko" href="index.php">
      <img src="img/logo/logo.jpg" alt="" width="60" height="60" class="me-2 logo">
          <strong>Macthelena</strong> Resto
    </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link nav-btn space" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav-btn" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn" href="login.php"><i class="fa-solid fa-user"></i></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->


  <!-- Appetizer -->
    <div class="container mb-5">
      <h5 class="kategori1" align="center">Categories</h5>
      <h1 class="kategori2 mb-3" align="center">-Appetizer-</h1>

      <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_appetizer"); ?>
        <?php while($pertbl_appetizer = $ambil->fetch_assoc()){ ?>
        <div class="col">
          <div class="card body-card">
            <a href="#"><img src="img/produk/<?php echo $pertbl_appetizer['foto_produk'];?>" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong><?php echo $pertbl_appetizer['nama_produk'];?></strong></h5>
            <p class="card-text harga-produk" align="center">Rp. <?php echo number_format($pertbl_appetizer['harga_produk']);?>,-</p>
            <a href="#" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=<?php echo $pertbl_appetizer['id_produk']?>"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <!-- Appetizer -->

  <!-- Main Course -->
    <div class="container mb-5">
      <h5 class="kategori1a" align="center">Categories</h5>
      <h1 class="kategori2 mb-3" align="center">-Main Course-</h1>

      <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_maincourse"); ?>
        <?php while($pertbl_maincourse = $ambil->fetch_assoc()){ ?>
        <div class="col">
          <div class="card body-card">
            <a href="#"><img src="img/produk/<?php echo $pertbl_maincourse['foto_produk'];?>" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong><?php echo $pertbl_maincourse['nama_produk'];?></strong></h5>
            <p class="card-text harga-produk" align="center">Rp. <?php echo number_format($pertbl_maincourse['harga_produk']);?>,-</p>
            <a href="#" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=<?php echo $pertbl_maincourse['id_produk']?>"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <!-- Main Course -->

  <!-- Dessert -->
    <div class="container mb-5">
      <h5 class="kategori1a" align="center">Categories</h5>
      <h1 class="kategori2 mb-3" align="center">-Dessert-</h1>

      <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_dessert"); ?>
        <?php while($pertbl_dessert = $ambil->fetch_assoc()){ ?>
        <div class="col">
          <div class="card body-card">
            <a href="#"><img src="img/produk/<?php echo $pertbl_dessert['foto_produk'];?>" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong><?php echo $pertbl_dessert['nama_produk'];?></strong></h5>
            <p class="card-text harga-produk" align="center">Rp. <?php echo number_format($pertbl_dessert['harga_produk']);?>,-</p>
            <a href="#" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=<?php echo $pertbl_dessert['id_produk']?>"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <!-- Dessert -->

  <!-- Drink -->
    <div class="container mb-5">
      <h5 class="kategori1a" align="center">Categories</h5>
      <h1 class="kategori2 mb-3" align="center">-Drink-</h1>

      <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
        <?php $ambil = $koneksi->query("SELECT * FROM tbl_drink"); ?>
        <?php while($pertbl_drink = $ambil->fetch_assoc()){ ?>
        <div class="col">
          <div class="card body-card">
            <a href="#"><img src="img/produk/<?php echo $pertbl_drink['foto_produk'];?>" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong><?php echo $pertbl_drink['nama_produk'];?></strong></h5>
            <p class="card-text harga-produk" align="center">Rp. <?php echo number_format($pertbl_drink['harga_produk']);?>,-</p>
            <a href="#" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=<?php echo $pertbl_drink['id_produk']?>"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <!-- Drink -->




  <!-- footer -->
  <footer>
    <div class="container">
      <small> Copyright &copy; 2024 - Macthelena Resto, All Rights Reserved.</small>
    </div>
  </footer>
  <!-- End Footer -->
</body>
</html>