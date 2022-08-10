<?php 
  include "config.php";
?>

<!DOCTYPE html>

<html class="no-js">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MVV4YHQDJB"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-MVV4YHQDJB');
  </script>
  <title><?php  echo $lang["alwadi"]?> </title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" type="image/x-icon" href="favicon.ico?v=2" />
  <link rel="icon" type="image/x-icon" href="apple-touch-icon.png" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animations.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/main.css" class="color-switcher-link" />
  <link rel="stylesheet" href="css/lang.css" class="color-switcher-link" />
  <script src="js/vendor/modernizr-custom.js"></script>
</head>

<body class=" <?php echo $lang["font"]?> ">
  <div class="preloader">
    <div class="preloader_image"></div>
  </div>
  <!--topline section visible only on small screens|-->
  <section class="page_topline ls ms c-my-10 ltr">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12 d-flex">
          <div class="me-auto me-4">
            <span class="social-icons">
              <span class="color-dark small-text me-4">
                Alwadi
              </span>
            </span>
          </div>
          <div>
            <div id="topline_dropdown" class="dropdown meta-dropdown">
              <span id="toplineDropdown" class="nav-btn type-dots dark" data-bs-toggle="dropdown" aria-expanded="false"
                role="button">
                <span></span>
              </span>
              <ul class="dropdown-menu dropdown-menu-md site-meta" aria-labelledby="toplineDropdown">
                <li class="icon-inline">
                  <span class="meta-item"><i class="ico-search">
                      <a href="http://www.alwadi-invest.com">
                      </a></i>www.alwadi-invest.com</span>
                </li>
                <li class="icon-inline">
                  <span class="meta-item"><i class="ico-phone"></i><a href="tel:+256779081082">+256 779 081
                      082</a></span>
                </li>
                <li class="icon-inline">
                  <span class="meta-item"><i class="ico-send"></i><a
                      href="mailto:info@alwadi-invest.com">info@alwadi-invest.com</a></span>
                </li>
                <li class="icon-inline">
                  <span class="meta-item"><i class="ico-pin"></i><?php  echo $lang["h-address"]?> </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- wrappers for visual page editor and boxed version of template -->
  <div id="canvas">
    <div id="box_wrapper">
      <!-- template sections -->
      <!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
      <header class="page_header ls justify-nav-center <?php echo $lang["language"]?>">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3 col-11 s-pb-xl-80 px-20">
              <a href="./" class="logo">
                <img src="images/logo<?php echo $lang["t-lang"]?>.svg" alt="img" />
              </a>
            </div>
            <div class="col-xl-8 col-1 text-sm-center">
              <!-- main nav start -->
              <nav class="top-nav">
                <ul class="nav sf-menu">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php"><?php  echo $lang["t-home"]?> </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"><?php  echo $lang["t-about"]?> </a>
                  </li>

                  <!-- Services -->
                  <li class="nav-item">
                    <a class="nav-link" href="services.php"><?php  echo $lang["t-services"]?> </a>
                  </li>
                  <!-- Contact -->

                  <li class="nav-item">
                    <a class="nav-link" href="contact.php"><?php  echo $lang["t-contact"]?> </a>
                  </li>
                  <!-- Crops -->
                  <li class="nav-item">
                    <a class="nav-link" href="crops.php"><?php  echo $lang["t-crops"]?> </a>

                  </li>
                  <!-- Blogs -->
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link" href="blogs.php"><?php  echo $lang["t-blogs"]?> </a>-->
                  <!--</li>-->

                  <li class="nav-item px-20">
                    <div class="langs">
                      <a class="arabic nones active" href="index.php?lang=ar"><img src="images/ar.svg" alt=""></a>
                      <a class="english nones" href="index.php?lang=en"><img src="images/en.svg" alt=""></a>
                    </div>
                  </li>

                </ul>

              </nav>
              <!-- eof main nav -->
            </div>

          </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
      </header>
      <!-- Whatsapp Icon Start -->

      <div>
        <a href="https://wa.me/+256779081082?text=I'm%20need%20%20to%20ask%20about%20your%20services">
          <img class="whatsapp" src="images/whatsapp.svg" alt="Whatsapp-icon">
        </a>
      </div>