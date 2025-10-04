<?php require_once __DIR__ . "/../Config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> <?php echo $page_title ?? $SITE_NAME; ?> </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo BASE_URL; ?>assets/img/lg.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo BASE_URL; ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/slick-theme.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/fonticons.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css">
      
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootsnav.css">

  <link href="<?php echo BASE_URL; ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet">

 <style> 
.navbar-brand img {
        height :50px;
        width : 50px;
        border-radius: 50%;
        object-fit: cover;

    }

    .brand img {
        height :70px;
        width : 70px;
        border-radius: 50%;
        object-fit: cover;

    }


 </style>
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

    <a class="navbar-brand" href="#">
      <img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo" style="height:50px;">
            </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="<?php echo BASE_URL; ?>pages/apropos.php">A propos</a></li>
                   
          <li><a class="nav-link scrollto" href="<?php echo BASE_URL; ?>pages/Don.php">Donner</a></li>
          <li><a href="blog.html"></a></li>
          <li class="dropdown"><a href="#"><span>Eglise</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>pages/notreHistoire.php">Notre histoire</a></li>
              <li class="dropdown"><a href="#"><span>Nos deparments</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Jeunesse</a></li>
                  <li><a href="#">Protocole</a></li>
                  <li><a href="#">Evagelisation</a></li>
                  <li><a href="#">Intercession</a></li>
                  <li><a href="#">Chorale</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Nos extensions</a></li>
              
              
            </ul>
          </li>
         
          <li><a class="nav-link scrollto" href="<?php echo BASE_URL; ?>pages/contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
