
<?php
session_start();

include "connect.php";

// Cek apakah pengguna sudah login, jika iya maka akan diarahkan ke halaman lain
if (isset($_SESSION['order'])) {
    header("Location: index.php");
    exit;
}

// Cek apakah pengguna telah mengirimkan form login
if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi form
    $errors = array();

    if (empty($username)) {
        $errors[] = "Username harus diisi";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi";
    }

    // Jika tidak ada error pada form, lakukan proses login
    if (empty($errors)) {
        // Lakukan validasi login di sini (misalnya dengan memeriksa database)
        // Jika login berhasil, set session dan arahkan ke halaman selamat datang (welcome.php)
        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit;
        } else {
            // Jika login gagal, tampilkan pesan error
            $errors[] = "Username atau password salah!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/splide.min.css">
    <title>Tickyt</title>

    <style>
        body {
            background-color: #FAFAFA;
            font-family: "Poppins", sans-serif;
        }

        .splide__slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .splide__arrow {
            display: none;
        }

        .splide__pagination {
            display: flex;
            position: static;
            align-items: center;
            margin-top: 1%;
        }

        .splide__pagination__page {
            display: flex;
            opacity: 100;
        }

        .splide__pagination__page.is-active {
            background: #1F1F95;
            width: 16px;
            height: 6px;
            border-radius: 4px;
            margin: 0 6px;
        }

        .laris-manis {
            
        }

        .bg-laris-manis {
            background-color: #1F1F95;
            border-radius: 0 24px 24px 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-laris-manis {
            color: white;
            padding: 0 60px;
        }

        .text-laris-manis h3 {
            font-size: 44px;
            font-weight: 600;
            padding-bottom: 24px;
            color: white;
        }

        .text-laris-manis p {
            font-size: 16px;
            font-weight: 300;
            padding-bottom: 24px;
            margin-bottom: 0;
        }

        .card-laris-manis {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            /* margin-left: 8px; */
        }

        .event-laris-manis {
            display: flex;
            gap: 24px;
            align-items: center;
            /* padding: 14px;
            box-shadow: 0px 30px 40px -30px rgba(215,215,215,0.75);
-webkit-box-shadow: 0px 30px 40px -30px rgba(215,215,215,0.75);
-moz-box-shadow: 0px 30px 40px -30px rgba(215,215,215,0.75); */
            border-radius: 24px;
        }

        .banner-laris-manis {
            width: 100%;
            /* height: 132px; */
            /* background-color: #7e7e7e; */
        }

        .banner-laris-manis img {
            width: 100%;
            /* object-fit: cover; */
            border-radius: 12px;
        }

        .detail-laris-manis {
            padding: 0;
        }

        .name-laris-manis {
            padding-right: 24px;
        }

        .name-laris-manis h4 {
            font-size: 16px;
            font-weight: 600;
            color: #1F1F95;
            padding-bottom: 12px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        .calendar-laris-manis {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 0;
        }     
        
        .calendar-laris-manis img {
            width: 18px;
        }        

        .calendar-laris-manis label {
            font-size: 14px;
            font-weight: 400;
            color: #7e7e7e;
            margin-bottom: 0;
        }

        .location-laris-manis {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 0;
        }     
        
        .location-laris-manis img {
            width: 18px;
        }        

        .location-laris-manis label {
            font-size: 14px;
            font-weight: 400;
            color: #7e7e7e;
            margin-bottom: 0;
        }

        .rekomendasi-event {

        }

        .label-rekomendasi-event {
            display: flex;
            justify-content: space-between;
        }

        .label-rekomendasi-event h4 {
            font-size: 20px;
            font-weight: 600;
            color: #181818;
            padding: 0;
        }

        /* .label-rekomendasi-event a {
            font-size: 16px;
            font-weight: 500;
            text-align: right;
            text-decoration: none;
            color: #1F1F95;
        } */

        .card-rekomendasi-event {
            /* display: flex; */
            row-gap: 24px;
            padding: 12px 0;
        }

        .card-event {
            /* padding: 20px; */
            /* width: 100%; */
            background-color: white;
            border-radius: 24px;
            box-shadow: 0px 30px 40px -30px rgba(215,215,215,0.75);
-webkit-box-shadow: 0px 30px 40px -30px rgba(215,215,215,0.75);
-moz-box-shadow: 0px 30px 40px -30px rgba(215,215,215,0.75);
        }

        .banner-event {
            /* object-fit: cover; */
            padding: 12px;
        }

        .banner-event img {
            width: 100%;
            height: auto;
            
            border-radius: 12px;
            
        }

        .detail-event {
            padding: 6px 12px 12px 12px;
        }

        .info-event {
            display: flex;
            flex-direction: column;
            gap: 8px;
            
        }

        .event-name {

        }

        .event-name h5 {
            font-size: 16px;
            font-weight: 600;
            color: #181818;
            margin-bottom: 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* width: 100%; */
        }

        .event-calendar {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .event-calendar .calendar-icon {
            display: flex;
            background-color: #F5F5F5;
            border-radius: 8px;
            width: 28px;
            height: 28px;
            justify-content: center;
        }

        .calendar-icon img {
            width: 18px;
        }

        .event-calendar label {
            font-size: 13px;
            font-weight: 400;
            color: #7E7E7E;
            margin-bottom: 0;
        }

        .event-location {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .event-location .location-icon {
            display: flex;
            background-color: #F5F5F5;
            border-radius: 8px;
            width: 28px;
            height: 28px;
            justify-content: center;
        }

        .location-icon img {
            width: 18px;
        }

        .event-location label {
            font-size: 13px;
            font-weight: 400;
            color: #7E7E7E;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* width: 100%; */
            margin-bottom: 0;
        }

        .event-order {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-top: 6%;
        }

        .event-price {
            display: flex;
            flex-direction: column;
        }

        .event-price label {
            font-size: 13px;
            font-weight: 500;
            color: #B0B0B0;
            margin-bottom: 0;
        }

        .event-price span {
            font-size: 16px;
            font-weight: 600;
            color: #F26419;
        }

        .btn-event-buy {
            background-color: #1F1F95;
            padding: 8px 24px;
            color: white;
            font-size: 13px;
            font-weight: 500;
            border: none;
            border-radius: 8px;
        }

        #section-laris-manis-mobile {
            display: none;
            background-color: #1F1F95;
            height: auto;
        }

        .laris-manis-mobile {
            display: flex;
            flex-direction: column;
            padding: 12px 0;
            
        }

        .laris-manis-mobile h4 {
            font-size: 18px;
            font-weight: 600;
            color: white;
            margin: 0;
        }

        .card-laris-manis-mobile {
            display: flex;
            flex-direction: row;
            overflow-x: scroll;
            gap: 16px;
            padding: 12px 0;
        }

        .card-laris-manis-mobile::-webkit-scrollbar {
            display: none;
        }

        .event-laris-manis-mobile {

        }

        .banner-laris-manis-mobile {
            width: 100%
        }

        .banner-laris-manis-mobile img {
            width: 100%;
            border-radius: 12px;
        }

        .see-more {
            display: flex;
            justify-content: center;
        }

        .btn-see-more {
            background-color: none;
            /* outline: solid 2px #1F1F95; */
            padding: 8px 24px;
            color: #1F1F95;
            font-size: 14px;
            font-weight: 500;
            border: solid 1px #1F1F95;
            border-radius: 8px;
        }

        .btn-see-more:hover {
            background-color: #1F1F95;
            color: white;
        }


        @media (max-width: 820px) {

            .splide__pagination {
                margin-top: 2%;
            }
            
            #section-laris-manis {
                display: none;
            }

            #section-laris-manis-mobile {
                display: block;
            }

            .label-rekomendasi-event {
                align-items: end;
            }

            .label-rekomendasi-event h4 {
                font-size: 18px;
                margin: 0;
            }

            .label-rekomendasi-event a {
                font-size: 14px;
            }

        }

    </style>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MPWXGDPRG4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MPWXGDPRG4');
</script>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/tyt2.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="css/animsition.min.css"> -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    

    <link rel="stylesheet" href="css/main.css">
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all"> -->

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Animate CSS -->
    
    <!-- Owl Carousel -->
    
    
    <!-- Magnific Popup -->
    
    <!-- Full Page Animation -->
    
    <!-- Ionic Icons -->
    
    <!-- Main Style css -->
    <body>

        <style>
        .nav-logo img {
            width: 120px;
        }
        
        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        .navbar .explore a {
            color: white;
            font-weight: 600;
            letter-spacing: 0px;
        }

        .navbar .contact a {
            color: white;
            font-weight: 600;
            letter-spacing: 0px;
        }

        .btn-event {
            
        }

        .btn-event a {
            padding: 8px 16px;
            background-color: #1f1f95;
            border: 2px solid #fff;
            border-radius: 8px;
            color: white;
            font-weight: 500;
        }

        .btn-event a:hover {
            background-color: #fff;
            color: #1f1f95;
        }

        .header-mobile {

        }

        .header-mobile .hamburger {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 22px;
            height: 22px;
            cursor: pointer;
            transition: all .2s ease-in-out;
        }

        .menu-btn {
            width: 22px;
            height: 2px;
            background: #fff;
            border-radius: 5px;
            transition: all .2s ease-in-out;
            padding: 0px;
        }

        .menu-btn::before,
        .menu-btn::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 2px;
            background: #fff;
            border-radius: 5px;
            transition: all .2s ease-in-out;

        }

        .menu-btn::before {
            transform: translateY(-8px);
        }

        .menu-btn::after {
            transform: translateY(8px);
        }

        .hamburger.open .menu-btn {
            transform: translateX(-50px);
            background: transparent;
        }

        .hamburger.open .menu-btn::before {
            transform: rotate(45deg) translate(35px, -35px);
        }

        .hamburger.open .menu-btn::after {
            transform: rotate(-45deg) translate(35px, 35px);
        }

        .nav-menu-mobile {
            display: none;
        }

        .nav-menu-mobile .wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            z-index: 100;
            padding: 10px 36px;
            background-color: white;
        }

        .nav-menu-mobile .wrapper .explore-mobile{
            height: 50px;
        }

        .nav-menu-mobile .wrapper .explore-mobile a{
            font-weight: 600;
            font-size: 14px;
            color: #828282;
        }

        .nav-menu-mobile .wrapper .contact-mobile{
            height: 50px;
        }

        .nav-menu-mobile .wrapper .contact-mobile a{
            font-weight: 600;
            font-size: 14px;
            color: #828282;
        }

        .nav-menu-mobile .wrapper .btn-event-mobile{
            height: 50px;
            margin-top: 20px;
        }

        .btn-event-mobile a{
            padding: 12px 16px;
            background-color: #1f1f95;
            border-radius: 8px;
            color: white;
            font-weight: 500;
        }

        .search-bar {
            display: none;
        }

        .header-mobile .search-bar .wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0; left: 0;
            z-index: 120;
            background-color: #fff;
        }

        .search-bar .input-area {
            display: flex;
            /* height: 60px; */
            background-color: #1f1f95;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
        }

        .default-language {
            display: flex;
            position: relative;
            flex-direction: row;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        
        .language {
            display: none;
            position: absolute;
            background-color: #FAFAFA;
            width: auto;
            justify-content: center;
            padding: 4px 14px;
            border-radius: 8px;
            top: 70px;
            z-index: 200;
        }
        
        .language-content {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: start;
        }

        .language-mobile {
            display: none;
            position: absolute;
            background-color: #FAFAFA;
            width: auto;
            justify-content: center;
            padding: 12px 14px;
            border-radius: 8px;
            top: 70px;
            z-index: 200;
        }
        
        .language-content-mobile {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            height:auto;
            /* gap: 12px; */
            justify-content: start;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
            max-height: 40px;
            margin: 12px 0px;
        }

        .form-check-label {
            font-weight: 600;
        }

        #mobile-nav-toggle {
            display: none;
        }


    /* Media Query */
    /*  Mobile    */
    @media (max-width: 768px) {
        .main-menu .container {
            display: none;
        }

        #mobile-nav-toggle {
            display: none;
        }

        #undefined-sticky-wrapper {
            display: none;
        }

        .position-sm-static {
            position: static !important;
        }

        .image-logo-navbar {
            margin: 0px 0 20px 10px;
            height: 35px;
            border-radius: 3px 0px 0px 3px;
        }

        .img-header-banner {
            height: 100%;
        }

        .search-navbar {
            position: absolute;
            top: 90px;
            left: 14px;
            max-width: 94%;
            margin-right: 50px;

        }

        .search-navbar:focus {
            width: 50%;
        }

        .form-input-search {
            text-indent: 30px;
            font-size: 14px;
            background-color: white !important;
        }

        .icon-search-navbar {
            left: 4% !important;
        }

        .ps-sm-15px {
            padding-left: 15px;
        }
    }

    @media (min-width: 768px) {
        .image-logo-navbar {
            display: none;
        }


        .search-navbar {
            width: 50%;
            margin-left: 0%;
            margin-right: 0px !important;
        }

        .form-input-search {
            margin-left: 20px;
            text-indent: 45px;
        }

        .ps-sm-15px {
            padding-left: 0px;
        }
    }
    
    .container-login {
      justify-content: center;
      display: flex;
    }
    </style>

    <!-- Start Header Area -->
    <header class="position-sm-static">
        <div class="main-menu" style="background-color: #1f1f95;">
            <div class="container d-md-none d-lg-block" id="#container-desktop">
                <div class="d-flex align-items-center justify-content-between flex-nowrap">
                    <div id="logo">
                        <a href="index.php"><img src="img/tyt4.png" width="90" alt="" title="Logo Tickyt" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu d-flex">
                            <li><img src="img/tyt4.png" class="image-logo-navbar" /></li>
                            <!--<li class="menu-active"><a href="" >Home</a></li>-->
                            <li><a href="tentangkami.php" class="d-flex" style="color: #fff;">
                                    <img src="icon/discover.svg" alt="explore" class="d-none d-md-block"
                                        style="width: 18px; margin-right: 5px;" />
                                    <img src="icon/explore-mobile.svg" alt="explore" class="d-md-none"
                                        style="width: 18px; margin-right: 5px;" />
                                    About Us                                </a></li>
                            <!-- <li><a href="cek_tiket.php">Cek Tiket</a></li> -->
                            <li><a href="contact.php" class="d-flex" style="color: #fff;">
                                    <img src="icon/callcalling.svg" alt="hubungi kami" class="d-none d-md-block"
                                        style="width: 18px; margin-right: 5px;" />
                                    <img src="icon/seluler-mobile.svg" alt="hubungi kami" class="d-md-none"
                                        style="width: 18px; margin-right: 5px;" />
                                    Hubungi Kami                                </a></li>
                            <li class="my-auto ps-5 ps-md-0 ps-sm-15px"><a href="login.php" class="d-flex justify-content-center align-items-center text-white text-nowrap" style="width: 100px;border: 2px solid white; background-color: #1f1f95; padding: 10px 25px; border-radius: 8px;
                                    ">Login</a></li>                        </ul>
                    </nav>
                    <!--######## #nav-menu-container -->
                </div>
            </div>
    </div>
</header>
<div class="container-login">
  <div class="col-md-6">
    <h2>Form Pemesanan Tiket</h2>
    <form>
      <div class="form-group">
        <label for="namaPembeli">Nama Pembeli:</label>
        <input type="text" class="form-control" id="namaPembeli" placeholder="Masukkan Nama Pembeli">
      </div>
      <div class="form-group">
        <label for="nikPembeli">NIK Pembeli:</label>
        <input type="text" class="form-control" id="nikPembeli" placeholder="Masukkan NIK Pembeli">
      </div>
      <div class="form-group">
        <label for="emailPembeli">Email Pembeli:</label>
        <input type="email" class="form-control" id="emailPembeli" placeholder="Masukkan Email Pembeli">
      </div>
      <div class="form-group">
        <label for="konser">Nama Konser:</label>
        <select class="form-control" id="konser" onchange="updatePrice()">
          <option value="">Pilih Konser</option>
          <!-- Dinamiskan dengan data dari database -->
          <?php
            // Lakukan koneksi ke database untuk mengambil data konser
            $query = "SELECT konser_id, konser_nama FROM konser";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['konser_id'] . "'>" . $row['konser_nama'] . "</option>";
            }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="konser">Tiket Konser:</label>
        <select class="form-control" id="tiketkonser" onchange="updatePrice()">
          <option value="">Pilih Konser</option>
          <!-- Dinamiskan dengan data dari database -->
          <?php
            // Lakukan koneksi ke database untuk mengambil data kategori tiket
            $query = "SELECT tiket_cat_id, cat_name FROM tiket_kategori";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['tiket_cat_id'] . "'>" . $row['cat_name'] . "</option>";
            }
          ?>
        </select>
      </div>
     
      <a href="index.php" class="btn btn-primary">Pesan Tiket</a>
    </form>
  </div>
</div>

  
    <!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<footer class="section-footer border-top pb-0" style="background-color: #1f1f95; padding-top: 50px;">
    <div class="container">
        <section class="footer-top py-2">
            <div class="row">
                
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title mt-md-0" style="color: #fff;">Tentang</h6>
                    <ul class="list-unstyled">
                        <li class="pb-2"> <a href="tentangkami.php" style="color: #fff !important;"> Tentang kami</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title" style="color: #fff;">Event</h6>
                    <ul class="list-unstyled">
                        <li class="pb-2"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSdb5R5xwiwEi3KMyuI828YU42A_YHHIxQArXR9ZSfmscESwCA/viewform?usp=sf_link" style="color: #fff !important;"> Daftarkan Event</a></li>                       
                    </ul>
                </aside>
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title" style="color: #fff;">Informasi</h6>
                    <ul class="list-unstyled">

                        <li class="pb-2"> <a href="syarat.php" style="color: #fff !important;">Syarat dan Ketentuan</a></li>

                    </ul>
                </aside>
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title" style="color: #fff;">Admin</h6>
                    <ul class="list-unstyled " style="color: #222;">
                        <li class="pb-2"> <a href="admin.php" style="color: #fff !important;"> Masuk </a></li>
                    </ul>
                </aside>
                <div class="d-sm-block d-md-none">

                   
 
                </div>
                
            </div> <!-- row.// -->
        </section> <!-- footer-top.// -->

        <section class="border-top py-3">
            <div class="align-items-center">
            <div class="row">

                    <div class="col-3">
                        <img src="img/tyt2.png" class="logo-footer mt-2" width="25">
                    </div>

                    <div class="col-9 my-auto d-md-none text-right">
                        <p class="mt-2 mb-2" style="color: #fff !important;"> © 2023 CV. Pemweb Fix A. All Rights Reserved </p>
                    </div>

                    <div class="col-6 d-none d-md-block text-center">
                        <p class="mt-2 mb-0" style="color: #fff !important;"> © 2023 CV. Pemweb Fix A. All Rights Reserved </p>
                    </div>

                
                </div>
            </div>
        </section>

        
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d3dad495a7389ad","version":"2023.4.0","r":1,"token":"5360e9bf626641669eaef62451edd094","si":100}' crossorigin="anonymous"></script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/splide.min.js"></script>
    
    <script src="vendor/jquery/jquery-2.2.4.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js " integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4 " crossorigin="anonymous "></script>
    <script type="text/javascript " src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA "></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js "></script>
    <script src="js/jquery.ajaxchimp.min.js "></script>
    <script src="js/jquery.nice-select.min.js "></script>
    <script src="js/jquery.sticky.js "></script>
    <script src="js/ion.rangeSlider.js "></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js "></script>
    <script src="js/jquery.magnific-popup.min.js "></script>
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/main.js "></script>


<script>
    $('.owl-carousel').owlCarousel({
        items: 4,
        loop: $('.owl-carousel .item').size() > 1 ? true:false,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2500,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        lazyLoad: true,
        animateIn: 'fadeIn',

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                
            },
            600: {
                items: 1,
               
            },
            1000: {
                items: 1,
               
                loop: true
            }
        }

        
    })

    $(".default-language").click(function(){
        $(".language").toggle();
        });
    
    $(".default-language-mobile").click(function(){
        $(".language-mobile").toggle();
        });

    function select_language(value)
    {
        let lang = value;
        if(lang == 'en'){
            window.location.href = "?lang=en";
        } else{
            window.location.href = "?lang=id";
        }
    }

    function select_language_mobile(value)
    {
        let lang = value;
        if(lang == 'en'){
            window.location.href = "?lang=en";
        } else{
            window.location.href = "?lang=id";
        }
    }
    
</script>

<!--<script src="js/jquery.min.js"></script> -->
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    });    
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VBBHXGPD9M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VBBHXGPD9M');
</script>
    <script>

    function submit_search() {
        document.getElementById("search-form").submit();
    }
    function submit_search_mobile() {
        document.getElementById("search-form-mobile").submit();
    }

    const hamburgerBtn = document.querySelector('.hamburger');
    let menuOpen = false;
    hamburgerBtn.addEventListener('click', () => {
        if(!menuOpen) {
            hamburgerBtn.classList.add('open');
            menuOpen = true;
        } else {
            hamburgerBtn.classList.remove('open');
            menuOpen = false;
        }
    })

    $(".hamburger").click(function(){
        $("#search-mobile").slideToggle();
        $("#nav-menu-mobile").toggle(200);
        });

    $("#search-mobile").click(function(){
        $(".search-bar").show(200);
        });

    $(".back-btn").click(function(){
        $(".search-bar").hide(200);
        });
        
    </script>
    
    <script>
        var splide = new Splide( '.splide', {
            type   : 'loop',
            autoplay: true,
            perPage: 1,
            gap    : '2rem',
            breakpoints: {
                640: {
                perPage: 1,
                gap    : '.7rem',
                height : '6rem',
                },
                480: {
                perPage: 1,
                gap    : '.7rem',
                height : '6rem',
                },
            },
        });
            splide.mount();
    </script>
<script>
  function updatePrice() {
    var selectKategori = document.getElementById("kategori");
    var priceInput = document.getElementById("price");
    var jumlahTiketInput = document.getElementById("jumlahTiket");
    
    var tiketCatId = selectKategori.options[selectKategori.selectedIndex].value;
    var jumlahTiket = jumlahTiketInput.value;
    
    // Lakukan perhitungan harga
    var harga = calculateHarga(tiketCatId, jumlahTiket);
    
    // Tampilkan harga pada input field
    priceInput.value = harga;
  }
  
  function calculateHarga(tiketCatId, jumlahTiket) {
   
    var hargaPerTiket = 100; // Harga per tiket (misalnya)
    var harga = hargaPerTiket * jumlahTiket;
    
    return harga;
  }
  
  function increment() {
    var jumlahTiketInput = document.getElementById("jumlahTiket");
    var jumlahTiket = parseInt(jumlahTiketInput.value);
    jumlahTiketInput.value = jumlahTiket + 1;
    
    updatePrice();
  }
  
  function decrement() {
    var jumlahTiketInput = document.getElementById("jumlahTiket");
    var jumlahTiket = parseInt(jumlahTiketInput.value);
    
    if (jumlahTiket > 0) {
      jumlahTiketInput.value = jumlahTiket - 1;
      updatePrice();
    }
  }
</script>


</html>