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
    .nav-btn:hover{
      border-bottom: 1px solid black
    }
  	.space{
      margin-left: 70px;
    }
    /* Navbar */

    /* Contact */
    .fab-container{
      position: fixed;
      bottom: 30px;
      right: 25px;
      z-index: 999;
      cursor: pointer;
    }
    .fab-icon-holder{
      width: 50px;
      height: 50px;
      border-radius: 100%;
      background: #9B5E34;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }
    .fab-icon-holder:hover{
      opacity: 0.8;
    }
    .fab-icon-holder i {
      justify-content: center;
      align-items: center;
      display: flex;
      margin-top: 20px; 
      height: 100%
      font-style: 150px;
      color: white;
    }
    .fab{
      width: 60px;
      height: 60px;
      background: #9B5E34;
    }
    .fab-options{
      list-style-type: none;
      margin: 0;
      position: absolute;
      bottom: 70px;
      right: 0;
      opacity: 0;
      transition: all 0.3s ease;
      transform: scale(0);
      transform-origin: 85% bottom; 
    }
    .fab:hover + .fab-options, .fab-options:hover{
      opacity: 1;
      transform: scale(1);
      font-size: 30px;
    }
    .fab-options li{
      display: flex;
      justify-content: flex-end;
      padding: 5px;
    }
    .fab-label{
      padding: 2px 7px;
      align-self: center;
      user-select: none;
      white-space: nowrap;
      border-radius: 5px;
      font-size: 16px;
      background: #CFA282;
      color: black;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      margin-right: 10px;
    }
    /* Contact */

    /* Footer */
    footer{
      padding: 30px 0;
      background-color: #9B5E34;
      color: black;
      text-align: center;
    }
    a{
      color: inherit;
      text-decoration: none;
    }
    ul li{
      display: inline-block;
      padding: 0px;
    }
    footer{
      position: fixed;
      bottom: 0;
    }
    @media (max-height: 800px)
    {
      footer{
        position: static;
      }
    }
    .footer-distributed{
      background-color: #9B5E34;
      box-sizing: border-box;
      widows: 100%;
      text-align: left;
      font-family: bold 16px serif;
      padding: 50px 50px 30px 50px;
      margin-top: 80px;
    }
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
      display: inline-block;
      vertical-align: top;
    }
    .footer-distributed .footer-left{
      width: 30%;
      font-weight: bold;
    }
    .footer-distributed .footer-links{
      color: black;
      margin: 20px 0 12px;
    }
    .footer-distributed .footer-links a{
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: black;
    }
    .footer-distributed .footer-links a:hover{
      color: white;
    }
    .footer-distributed .footer-company-name{
      color: #8f9296; 
      font-size: 14px;
      font-weight: normal;
      margin: 0;
      font-weight: bold;
    }
    .footer-distributed .footer-center{
      margin-left: 50px;
      width: 35%;
    }
    .footer-distributed .footer-center i{
      background-color: transparent;
      border: 1px solid black;
      color: black;
      font-size: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }
    .footer-distributed .footer-center i .fa-envelope{
      font-size: 17px;
      line-height: 38px;
    }
    .footer-distributed .footer-center p{
      display: inline-block;
      color: black;
      vertical-align: middle;
      margin: 0;
      font-weight: bold;
    }
    .footer-distributed .footer-center p span{
      display: block;
      font-weight: normal;
      font-size: 15px;
      line-height: 2;
      font-weight: bold;
    }
    .footer-distributed .footer-center p a{
      color: black;
      text-decoration: none;
    }
    .footer-distributed .footer-center p a:hover{
      color: white;
    }
    .footer-distributed .footer-right{
      width: 30%;
    }
    .footer-distributed .footer-company-about{
      line-height: 20px;
      color: black;
      font-size: 15px;
      font-weight: normal;
      font-weight: bold;
    }
    .footer-distributed .footer-icons{
      margin-top: 10px;
    }
    .footer-distributed .footer-icons a{
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      border: 1px solid;
      border-radius: 2px;
      font-size: 23px;
      color: black;
      text-align: center;
      line-height: 35px;
      margin-right: 5px;
    }
    .footer-distributed .footer-icons a:hover{
      background-color: black;
      color: white;
      border: 1px solid #9B5E34;
    }
    @media(max-width: 880px){
      .footer-distributed .footer-links, .footer-distributed .footer-center, .footer-distributed .footer-right,{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }
      .footer-distributed .footer-center i{
        margin-left: 0;
      }
    }
    /* Footer */
  	/* ---------------------------------------------------------- GENERAL END --------------------------------------------------- */

  	/* ------------------------------------------------------------- HOME ------------------------------------------------------- */

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

    /* About */
    .persepsi{
      height: 60vh;
      background-repeat: no-repeat; 
      position: relative;
      display: flex;
      margin-top: 20px;
    }
    .persepsi-body{
      width: 330px;
      height: 355px;
      background-color: #252525;
      border-radius: 0px;
      margin-left: 20px;
    }
    .persepsi-title1{
      margin-top: 50px;
      margin-bottom: 0px;
      font-size: 17px;
      color: #B06B3B;
    }
    .persepsi-title2{
      margin-top: 5px;
      margin-bottom: 20px;
      color: white;
      text-align: center;
      font-size: 30px;
    }
    .persepsi-title2 span{
      color: #B06B3B;
    }
    .persepsi-deskripsi{
      color: white;
      padding: 0px 17px 0px 17px;
      text-align: center;
      font-size: 16px;
      padding-left: 30px;
      padding-right: 30px; 
    }
    .img-persepsi-left{
      margin-left: 100px;
    }
    .img-persepsi-right{
      margin-left: 20px;
    }
    .btn-persepsi{
      margin-left: 100px;
      background-color: #9B5E34;
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.4);
      border: 1px solid rgba(0, 0, 0, 0.4);
      color: black;
      transition: transform 0.2s ease;
      margin-top: 15px;
    }
    .btn-persepsi:hover{
      margin-left: 100px;
      color: black;
      background-color: #B06B3B;
      border: 1px solid rgba(0, 0, 0, 0.4);
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.4);
    }
    .btn-persepsi:active{
      transform: scale(0.90);
    }
    /* About */

    /* Menu Home */
    .menu{
      margin-top: 100px;
      width: 100%;
      padding: 4% 11%;
      background-color: #252525;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .img-menu img{
      width: 470px;
      padding: 0 5%;
    }
    .text-menu h1{
      font-size: 45px;
      color: #9B5E34;
      position: relative;
    }
    .text-menu span{
      font-size: 26px;
    }
    .text-menu h1::after{
      position: absolute;
      content: "";
      width: 20%;
      height: 4px;
      background-color: #9B5E34;
      top: 56px;
      left: 0;
      bottom: 2px;
    }
    .text-menu h5{
      margin-top: 0px;
      font-size: 25px;
      color: black;
      position: relative;
      margin-bottom: 0px;
    }
    .text-menu p{
      font-size: 18px;
      color: white;
      line-height: 28px;
      margin: 17px 0 45px 0;
      max-width: 480px;
    }
    .text-menu p span {
      font-size: 16px;
      color: #B06B3B;
    }
    /* Menu Home */

    /* Location */
    .body-location{
      width: 1180px;
      border: none;
    }
    .img-location{
     border: none;
    }
    .title-location{
      color: #9B5E34;
      font-size: 55px;
      margin-left: 120px;
      margin-top: 0px;
      text-shadow: 1px -1px rgba(0, 0, 0, 0.8);
    }
    .des-location{
      color: white;
      font-size: 20px;
      margin-left: 125px;
      margin-top: 15px;
    }
    .button-location-home{
      font-size: 18px;
      color: black;
      background-color: #9B5E34;
      border: 1px solid rgba(0, 0, 0, 0.4);
      border-radius: 3px;
      padding: 4px 20px 4px 20px;
      margin-left: 240px;
      margin-top: 20px;
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.4);
      transition: transform 0.2s ease;
    }
    .button-location-home:hover{
      color: black;
      background-color: #B06B3B;
      border: 1px solid rgba(0, 0, 0, 0.4);
      box-shadow: inset -2px -2px rgba(0, 0, 0, 0.4);
    }
    .button-location-home:active{
      transform: scale(0.90);
    }
    .logo-location{
      width: 180px;
      margin-left: 210px;
      margin-top: 10px;
    }
    /* Location */

    /* ----------------------------------------------------------- HOME END ----------------------------------------------------- */

  </style>
</head>
<body>
	<!-------------------------------------------------------------- Banner --------------------------------------------------------->
	<div class="banner">
	  <main class="content">
	    <h1 class="text-banner-1"><strong>A special treat at <span>Macthelena</span></strong></h1>
	    <p class="text-banner-2">Jadikan setiap menu makanan kami sebagai pengalaman tak terlupakan.</p>
	  </main>
	</div>
	<!------------------------------------------------------------ Banner End ------------------------------------------------------->



	<!-------------------------------------------------------------- Navbar --------------------------------------------------------->
	<nav class="navbar navbar-expand-lg navbar-light body-navbar">
	  <div class="container">
		<a class="navbar-brand brand-toko" href="index.php">
		  <img src="img/logo/logo.jpg" alt="" width="60" height="60" class="me-2 logo">
		      <strong>Macthelena</strong> Resto
		</a>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav ">
	        <li class="nav-item">
	          <a class="nav-link active nav-btn space" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link nav-btn" href="menu.php">Menu</a>
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
	<!------------------------------------------------------------ Navbar End ------------------------------------------------------->


  <!-------------------------------------------------------------- Contact --------------------------------------------------------->
  <div class="fab-container">
    <div class="fab fab-icon-holder">
      <i class="fa fa-plus"></i>
    </div>

    <ul class="fab-options">
      <li>
        <span class="fab-label">Whatsapp</span>
        <div class="fab-icon-holder">
          <a href="https://wa.me/6285779082884?text=Mohon info tentang produk"><i class="fa-brands fa-whatsapp" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Instagram</span>
        <div class="fab-icon-holder">
          <a href="https://instagram.com/violettaflorist_bekasi?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Facebook</span>
        <div class="fab-icon-holder">
          <a href="https://www.facebook.com/ubsi.kaliabang?locale=id_ID"><i class="fa-brands fa-square-facebook" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Tiktok</span>
        <div class="fab-icon-holder">
          <a href="https://www.tiktok.com/@ubsi_official?is_from_webapp=1&sender_device=pc"><i class="fa-brands fa-tiktok" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Telegram</span>
        <div class="fab-icon-holder">
          <a href="https://t.me/+UzWS1ego2Go2NzY1"><i class="fa-brands fa-telegram" style="margin-top: 10px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Location</span>
        <div class="fab-icon-holder">
          <a href="https://maps.app.goo.gl/9z7noQ9cd1tiwjq56"><i class="fas fa-map-marker-alt" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
    </ul>
  </div>
  <!------------------------------------------------------------ Contact End ------------------------------------------------------->


  <!------------------------------------------------------------- Persepsi --------------------------------------------------------->
    
      <div class="container persepsi mt-5">
        <img src="img/background/about3.jpg" class="img-persepsi-left">
        <div class="persepsi-body">
          <p align="center" class="persepsi-title1">Taste Perception</p>
          <h5 class="persepsi-title2"><strong>TRADITIONAL <br><span>&</span> MODERN</h5></strong>
          <p class="persepsi-deskripsi"> Enjoy the opportunity to try this new menu with your family, friends or special someone!</p>
          <a href="menu.php" class="btn btn-persepsi">View All Product</a>
        </div>
        <img src="img/background/about4.jpg" class="img-persepsi-right">
      </div>
      
  <!----------------------------------------------------------- Persepsi End ------------------------------------------------------->
 


  <!--------------------------------------------------------------- Menu ----------------------------------------------------------->
    <div class="menu mt-5 mb-3">
      <div class="img-menu">
        <img src="img/background/menu.jpg" alt="" srcset="">
      </div>
      <div class="text-menu">
        <h5 style="font-size: 20px; color: white; margin-bottom: 0px; margin-top: 50px; color: #9B5E34;">Our Best Seller</h5>
        <h1>Our Special</h1>
        <p>
          Nasi Goreng Kambing --------------------------------------- IDR 35k,- <br>
          <span>Nasi goreng + Daging kambing + Telur acak + Sayuran</span><br>
          Nasi Goreng Special ----------------------------------------- IDR 40k,- <br>
          <span>Nasi goreng + Daging kambing + Seafood + Ati ayam + Bakso + Sayuran</span><br>
          Kwetiauw Goreng -------------------------------------------- IDR 32k,- <br>
          <span>Kwetiauw goreng + Daging ayam + Telur acak + Sayuran</span><br>
          Honey Croffle ------------------------------------------------- IDR 23k,- <br>
          <span>Croffle 3pcs + Madu + Susu</span><br>   
          Milk Cheese Toast ------------------------------------------- IDR 25k,- <br>
          <span>Roti Bakar 3 slice : Keju + Susu</span><br>
          Korean Corndog ---------------------------------------------- IDR 25k,-<br>
          <span>Corndog isi Sosis Jumbo + Mozarela mini</span><br>
        </p>
      </div>
    </div>
  <!------------------------------------------------------------- Menu End --------------------------------------------------------->


  <!------------------------------------------------------------- Location --------------------------------------------------------->
  <div class="container mb-5">
    <div class="location">
      <div class="card text-white body-location">
        <img src="img/background/location2.jpg" class="card-img img-location" alt="...">
        <div class="card-img-overlay">
          <img src="img/logo/logo6.jpg" class="logo-location">
          <h5 class="card-title title-location"><i class="fa-solid fa-location-dot"></i> Reservation</h5>
          <p class="card-text des-location">
            Jakarta | Surabaya | Bandung | Bali | Solo | Aceh<br>
            Batam | Banjarmasin | Medan | Manado | Maluku<br>
            Palembang | Yogyakarta | Bengkulu | Tanggerang<br>
            Depok | Bekasi | Bogor | Ambon<br>
          </p>
          <a href="contact.php"><button class="button-location-home">Reserve a place</button></a>
        </div>
      </div>
    </div>
  </div>
  <!------------------------------------------------------------ Location End ------------------------------------------------------>


  <!-------------------------------------------------------------- Footer ---------------------------------------------------------->
  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="img/logo/logo2.jpg" style="width: 330px;">
      <p class="footer-links">
        <a href="index.php">Home</a>
        |
        <a href="menu.php">Menu</a>
        |
        <a href="faq.html">FAQ</a>
        |
        <a href="blog.html">Blog</a>
      </p>
      <p class="footer-company-name">Copyright &copy; 2024 - <strong>Violette Florist</strong>, All Rights Reserved. </p>
      <div class="footer-icons">
        <ul>
          <li><a href="https://www.facebook.com/ubsi.kaliabang?locale=id_ID"><i class="fa-brands fa-square-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/bsi_kaliabang/"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="https://www.tiktok.com/@ubsi_official"><i class="fa-brands fa-tiktok"></i></a></li>
          <li><a href="https://wa.me/6285779082884?text=Mohon info tentang produk"><i class="fa-brands fa-whatsapp"></i></a></li>
          <li><a href="https://t.me/+dYUvRJzGAx1lZWU1"><i class="fa-brands fa-telegram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa-solid fa-location-dot"></i>
        <p><span>Macthelena Pusat </span>
         Jl. Raya Casablanca No.88, Jakarta.</p>
      </div>
      <div>
        <i class="fa-solid fa-fax"></i>
        <p>(021) 21236158</p>
      </div>
      <div>
        <i class="fa-regular fa-envelope"></i>
        <p><a href="#">macthelenaofficial@gmail.com</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        Available Payment :
        <a href="#"><img src="img/background/payment.jpg" style="width: 350px;"></a>
        Download Our App :
        <a href="#"><img src="img/background/app.jpg" style="width: 350px;"></a>
      </p>
    </div>
  </footer>
  <!------------------------------------------------------------ Footer End -------------------------------------------------------->
</body>
</html>