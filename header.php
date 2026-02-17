<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>INTEGRA PRO.DESIGN - Дизайн и ремонт под ключ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

     <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body-bg">
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php"><img class="logo-img" src="assets/img/logo/logoorginal.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="index.php">Главная</a></li>
                                <li><a href="remont.php">Ремонт под ключ</a></li>
                                <li><a href="design.php">Дизайн-проектирование</a>
                                </li>
                                <!-- <li><a href="design.php">Наши проекты</a>
                                    <ul class="submenu">
                                        <li><a href="design-kvartiry.php">Квартиры</a></li>
                                        <li><a href="design-commercial.php">Коммерческие объекты</a></li>
                                        <li><a href="design-doma.php">Частные дома</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="blog.php">Блог</a></li>
                                <li><a href="contact.php">Контакты</a></li>
                                <li class="mobile-content"><button class="mobile-content" style="color:black;" type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button></li>
                            </ul>
                        </nav>
                    </div>          
                    <!-- Header-btn -->
                    <div class="header-btns d-none d-lg-block f-right">
                        <button style="color:black;" type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#1a1a1a; border:1px solid #2a2a2a; color:#fff;">
      
      <div class="modal-header" style="border-bottom:1px solid #2a2a2a;">
        <h5 class="modal-title" id="exampleModalLabel">Оставить заявку</h5>
        <button type="button" class="close" data-dismiss="modal" style="color:#fff; opacity:0.7;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="contact_process.php" method="post">
        <div class="modal-body">
          <div class="input-row" style="display:flex; gap:16px;">
            <div class="form-group" style="flex:1;">
              <input class="form-control" name="name" type="text" placeholder="Введите ваше имя"
                style="background:#111; border:1px solid #333; color:#fff; padding:12px 14px;">
            </div>
            <div class="form-group" style="flex:1;">
              <input class="form-control" name="phone" type="tel" placeholder="Телефон"
                style="background:#111; border:1px solid #333; color:#fff; padding:12px 14px;">
            </div>
          </div>
        </div>

        <div class="modal-footer" style="border-top:1px solid #2a2a2a;">
          <button type="button" class="btn" data-dismiss="modal"
            style="background:#c0392b; color:black; font-weight:700; letter-spacing:1px; border:none; padding:12px 28px;">
            ЗАКРЫТЬ
          </button>
          <button type="submit" class="btn"
            style="background:#c0392b; color:black; font-weight:700; letter-spacing:1px; border:none; padding:12px 28px;">
            ОТПРАВИТЬ
          </button>
        </div>
      </form>

    </div>
  </div>
</div>