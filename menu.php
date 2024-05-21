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
    <h5 class="kategori1 mt-5" align="center">Categories</h5>
    <h1 class="kategori2 mb-3" align="center">-Appetizer-</h1>
    <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
      <div class="col">
        <div class="card body-card">
           <a href="innerpage/detail_1.php"><img src="img/produk/koreancorndog.jpg" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Korean Corndog</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 25,000,-</p>
            <a href="innerpage/detail_1.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=1"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_2.php"><img src="img/produk/japanesecorndog.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Japanese Corndog</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 24,000,-</p>
            <a href="innerpage/detail_2.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=2"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_3.php"><img src="img/produk/risolmayo.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Risoles Mayonaise</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 18,500,-</p>
            <a href="innerpage/detail_3.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=3"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_4.php"><img src="img/produk/samosa.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Indian Samosa</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 20,000,-</p>
            <a href="innerpage/detail_4.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=4"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_5.php"><img src="img/produk/lumpia.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Spring Roll</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 20,000,-</p>
            <a href="innerpage/detail_5.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=5"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Course -->
  <div class="container mb-5">
    <h5 class="kategori1 mt-5" align="center">Categories</h5>
    <h1 class="kategori2 mb-3" align="center">-Main Course-</h1>
    <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
      <div class="col">
        <div class="card body-card">
           <a href="innerpage/detail_6.php"><img src="img/produk/nasgorayam.jpg" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Ayam</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 29,000,-</p>
            <a href="innerpage/detail_6.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=6"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_7.php"><img src="img/produk/nasgorkambing.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Kambing</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 35,000,-</p>
            <a href="innerpage/detail_7.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=7"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_8.php"><img src="img/produk/nasgorseafood.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Seafood</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 35,000,-</p>
            <a href="innerpage/detail_8.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=8"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_9.php"><img src="img/produk/nasgorsosis.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Sosis</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 29,000,-</p>
            <a href="innerpage/detail_9.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=9"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_10.php"><img src="img/produk/nasgorspcl.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Special</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 40,000,-</p>
            <a href="innerpage/detail_10.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=10"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-5 g-1 mt-1">
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_11.php"><img src="img/produk/nasgormawut.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Mawut</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 27,000,-</p>
            <a href="innerpage/detail_11.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=11"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_12.php"><img src="img/produk/nasgortelorr.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Goreng Telur</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 27,000,-</p>
            <a href="innerpage/detail_12.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=12"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_13.php"><img src="img/produk/kwegor.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Kwetiauw Goreng</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 32,000,-</p>
            <a href="innerpage/detail_13.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=13"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_14.php"><img src="img/produk/migor.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Mie Goreng</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 32,000,-</p>
            <a href="innerpage/detail_14.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=14"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_15.php"><img src="img/produk/nasigila.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Nasi Gila</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 29,000,-</p>
            <a href="innerpage/detail_15.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=15"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Main Course -->


  <!-- Dessert -->
  <div class="container mt-5 mb-5">
    <h5 class="kategori1 mt-5" align="center">Categories</h5>
    <h1 class="kategori2 mb-3" align="center">-Dessert-</h1>
    <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
      <div class="col">
        <div class="card body-card">
           <a href="innerpage/detail_16.php"><img src="img/produk/rotbakcoklat.jpg" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong> Milk Choco Toast</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 25,000,-</p>
            <a href="innerpage/detail_16.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=16"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_17.php"><img src="img/produk/rotbakstroberi.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Strawberry Toast</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 25,000,-</p>
            <a href="innerpage/detail_17.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=17"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_18.php"><img src="img/produk/rotbakkeju.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Milk Cheese Toast</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 25,000,-</p>
            <a href="innerpage/detail_18.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=18"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_19.php"><img src="img/produk/croffle.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Honey Croffle</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 23,000,-</p>
            <a href="innerpage/detail_19.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=19"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_20.php"><img src="img/produk/piesusu.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Milk Pie</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 23,000,-</p>
            <a href="innerpage/detail_20.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=20"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-5 g-1 mt-1">
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_21.php"><img src="img/produk/souffle.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Souffle Cake</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 25,000,-</p>
            <a href="innerpage/detail_21.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=21"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_22.php"><img src="img/produk/chocolatelava.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Chocolate Lava</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 25,000,-</p>
            <a href="innerpage/detail_22.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=22"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_23.php"><img src="img/produk/vanillaicecream.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Vanilla Ice Cream</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 20,000,-</p>
            <a href="innerpage/detail_23.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=23"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_24.php"><img src="img/produk/stroberiicecream.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Strawberry Ice Cream </strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 20,000,-</p>
            <a href="innerpage/detail_24.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=24"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Dessert -->

  <!-- Drink -->
  <div class="container mt-5 mb-5">
    <h5 class="kategori1 mt-5" align="center">Categories</h5>
    <h1 class="kategori2 mb-3" align="center">-Drink-</h1>
    <div class="row row-cols-1 row-cols-md-5 g-1 mt-3">
      <div class="col">
        <div class="card body-card">
           <a href="innerpage/detail_25.php"><img src="img/produk/esteh.jpg" class="card-img-top img-produk" alt="..."></a>
           <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Ice Tea</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 15,000,-</p>
            <a href="innerpage/detail_25.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=25"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_26.php"><img src="img/produk/lemontea.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Ice Lemon Tea</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 16,000,-</p>
            <a href="innerpage/detail_26.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=26"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_27.php"><img src="img/produk/orangejus.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Orange Juice</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 18,000,-</p>
            <a href="innerpage/detail_27.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=27"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_28.php"><img src="img/produk/mangojus.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Mango Juice</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 18,000,-</p>
            <a href="innerpage/detail_28.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=28"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card body-card">
          <a href="innerpage/detail_29.php"><img src="img/produk/mineralwater.jpg" class="card-img-top img-produk" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title title-produk" align="center"><strong>Mineral Water</strong></h5>
            <p class="card-text harga-produk" align="center">Rp. 10,000,-</p>
            <a href="innerpage/detail_29.php" class="btn tombol-produk">View Product</a>
            <a href="beli.php?id=29"><i class="fas fa-cart-plus icon-keranjang-produk"></i></a>
          </div>
        </div>
      </div>
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