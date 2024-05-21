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

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Java Srcript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Java Srcript -->

  <!-- Title Tab -->
  <title>Macthelena</title>
  <!-- Title Tab -->
</head>
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
      background-image: url(../img/banner/banner.jpg);
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


    /* ----------------------------------------------------------- INNERPAGE ---------------------------------------------------- */

    /*Inner Page*/
    .row-produk{
      background-color: #9B5E34;
      border: 1px solid rgba(0, 0, 0, 0.4);
      border-radius: 3px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      margin: 0;
      padding: 5px;
      padding-top: 16px;
    }
    .img-innerpage{
      border-radius: 10px;
    }
    .underline-title{
      border-bottom: 2px solid;
      margin-top: 5px;
      margin-bottom: 13px;
      color: white;
    }
    .title-innerpage{
      font-size: 45px;
      text-align: center;
      color: black;
    }
    .harga-produk{
      font-size: 35px;
      color: black;
    }
    .jumlah-produk{
      font-size: 19px;
      color: black;
    }
    .button-keranjang{
      font-size: 18px;
      color: #C97B45;
      background-color: black;
      box-shadow: inset -3px -3px rgba(201, 123, 69, 0.4);
      border: 1px solid rgba(201, 123, 69, 0.4);
      transition: transform 0.2s ease;
      padding: 7px 14px 7px 14px;
    }
    .button-keranjang:hover{
      color: black;
      background-color: white;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border: 1px solid rgba(0, 0, 0, 0.4);
    }
    .button-keranjang:active{
      transform: scale(0.96);
    }
    .img-review{
      width: 50px;
      border: 1px solid black;
      border-radius: 50px;
    }
    .nama-pelanggan{
      font-size: 18px;
      margin-top: 5px;
      margin-bottom: 1px;
      margin-left: 15px;
      color: black;
      font-weight: normal;
    }
    .komentar-pelanggan{
      color: black;
      font-size: 17px;
      margin-left: 15px;
    }
    .deskripsi{
      height: 150px;
      color: black;
      font-weight: normal;
      font-size: 17px;
    }
    .review{
      height: 155px;
      overflow: scroll;
      overflow-x: hidden;
      font-weight: normal;
    }
    .x-button{
      margin-left: 595px;
      margin-bottom: 0px;
      color: white;
    }
    /*Inner Page*/


    /* --------------------------------------------------------- INNERPAGE END -------------------------------------------------- */
</style>
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
    <a class="navbar-brand brand-toko" href="../index.php">
      <img src="../img/logo/logo.jpg" alt="" width="60" height="60" class="me-2 logo">
          <strong>Macthelena</strong> Resto
    </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link nav-btn space" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav-btn" href="../menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn" href="../contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-btn" href="../login.php"><i class="fa-solid fa-user"></i></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!----------------------------------------------------------------- Inner Page --------------------------------------------------------->
  <div class="container mt-5 mb-5">
    <div class="row row-produk">
      <div class="col-lg-5">
        <div class="figure">
          <figure class="figure">
            <img src="../img/innerpage/12.jpg" class="figure-img img-fluid img-innerpage">
            <figcaption class="figure-caption">
              <a href="#"></a>
            </figcaption>
          </figure>
        </div>
      </div>

      <div class="col-lg-7">
      <a href="../menu.php"><button type="button" class="btn-close x-button" aria-label="Close" style="color: white;"></button></a>
        <h4 class="title-innerpage"><strong>~ Nasi Goreng Telur ~</h4>
        <div class="underline-title"></div>
        <p style="font-size: 17px; margin-bottom: 10px; color: black;"><span style="border-bottom: 1px solid black; color: black; font-size: 19px;">4.0</span> <span style="font-size: 23px; color: black;">★★★★☆</span> | <span style="border-bottom: 1px solid black; color: black;">531</span> <span style="color: black;">Penilaian</span> | <span style="color: black; border-bottom: 1px solid black;">2,3RB</span> <span style="font-size: 15px; color: black;">Terjual</span></p>
        <h3 class="harga-produk"><strong>Rp. 27.000,-</strong></h3>
        <p class="jumlah-produk">~ 1 porsi</p>
        <div class="btn-produk mt-3">
          <a href="beli.php?id=12"><button class="button-keranjang mx-2"><i class="fas fa-cart-plus"></i> Masukkan ke Keranjang </button></a>
        </div>

        <!-- Review -->
        <div class="row mt-5">
          <ul class="nav nav-tabs nav-tabs" id="myTab" role="tablist-dark">
            <li class="nav-item" role="presentation">
              <button class="nav-link link-des active" style="color: black;" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true"> Description Product</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link link-rev" style="color: black;" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review Product</button>
            </li>
          </ul>
          <div class="tab-content p-3" id="myTabContent">
            <div class="tab-pane fade deskripsi show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
              <p>
                <span style="font-size: 19px;">~ Nasi Goreng Telur ~</span><br>
                Isi : Nasi Goreng<br>
                Topping : Telur Mata Sapi + Sawi Ijo + Kol + Acar.<br>
            </div>
            <div class="tab-pane fade review" id="review" role="tabpanel" aria-labelledby="review-tab">
              <div class="row">
                <div class="col-1">
                  <img src="../img/innerpage/komen1.jpg" class="img-review">
                </div>
                <div class="col">
                  <h5 class="nama-pelanggan">Rafandra Dareen</h5>
                  <p class="komentar-pelanggan">Gak nyesel beli disini, rasanya vibes restoran mahal padahal harga sangat affordable.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <img src="../img/innerpage/komen2.jpg" class="img-review">
                </div>
                <div class="col">
                  <h5 class="nama-pelanggan">Carissa Azkadina</h5>
                  <p class="komentar-pelanggan">Recomended bgt pesan makanan disini, berkualitas bahan makanannya.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <img src="../img/innerpage/komen3.jpg" class="img-review">
                </div>
                <div class="col">
                  <h5 class="nama-pelanggan">Bagas Adelardo</h5>
                  <p class="komentar-pelanggan">Pelayanan sangat ramah dan packagingnya rapih.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <img src="../img/innerpage/komen5.jpg" class="img-review">
                </div>
                <div class="col">
                  <h5 class="nama-pelanggan">Jasmine Aisyah</h5>
                  <p class="komentar-pelanggan">Rasanya enak bgt, pas dilidah.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-1">
                  <img src="../img/innerpage/komen4.jpg" class="img-review">
                </div>
                <div class="col">
                  <h5 class="nama-pelanggan">Rio Denandra</h5>
                  <p class="komentar-pelanggan">Packaging sangat rapih dan pengiriman super cepat.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Review -->

      </div>
    </div>
  </div>
  <!--------------------------------------------------------------- Inner Page End ------------------------------------------------------->


  <!-------------------------------------------------------------------- Footer ---------------------------------------------------------->
  <footer>
    <div class="container">
      <small> Copyright &copy; 2024 - Macthelena Resto, All Rights Reserved.</small>
    </div>
  </footer>
  <!------------------------------------------------------------------ Footer End -------------------------------------------------------->




















</body>
</html>