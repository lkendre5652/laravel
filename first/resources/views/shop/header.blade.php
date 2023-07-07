<!-- <html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <div class="header-menus">
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/careers">Careers</a>
            <a href="/products">Products</a>
        </div> -->
        <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Myrah - Spa</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
     <link rel="stylesheet" href="assets/css/style.css"> -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div>
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center"><button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <!-- <div class="mobile-logo"><a href="index.html"><img src="assets/img/logo.png" alt=""></a></div> -->
            <div class="vs-mobile-menu">
                <ul>
                    <li><input type="search" class="search-icon" placeholder="search"></li>
                    <li class=""><a href="about.php">ABOUT<span class="vs-mean-expand"></span></a></li>
                    <li class="menu-item-has-children mega-menu-wrap"><a href="/service/">SERVICES</a>
                        <ul class="mega-menu">
                            <li><a href="#">SPA</a>
                                <ul>
                                    <li><a href="#">Massage</a></li>
                                    <li><a href="#">Body Care</a></li>
                                    <li><a href="#">Skin Care</a></li>
                                    <li><a href="#">Couple</a></li>
                                    <li><a href="#">Journeys</a></li>
                                    <li><a href="#">Bridal</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Saloon</a>
                                <ul>
                                    <li><a href="#">Haircut</a></li>
                                    <li><a href="#">Blow Dry</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dermatology</a>
                                <ul>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="home-spa.php">HOME SPA</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="gift-cards.php">GIFT VOUCHERS</a></li>
                    <li class="menu-item-has-children"><a href="#">MEMBERSHIP</a>
                        <ul class="sub-menu">
                            <li><a href="spa-membership.php">Spa Memberships</a></li>
                            <li><a href="salon-membership.php">Salon Memberships</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" class="border-theme" placeholder="What are you looking for"> <button
                type="submit"><i class="fal fa-search"></i></button></form>
    </div>
    <header class="vs-header header-layout9">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="header-links style2">
                    <ul>
                        <li class="d-none d-xl-inline-block"><i class="far fa-phone-alt"></i>+91 84477 90445
                        </li>
                        <li class="d-lg-none ps-5 calendar"><i class="far fa-calendar-check"></i>
                        </li>
                    </ul>
                </div>
                <div class="logo-img">
                    <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo" class="img-fluid"></a>
                </div>
                <div class="">
                    <div class="social-style5 text-lg-end"><a href="#" class="border-0 m-0"><i
                                class="far fa-shopping-bag"></i></a> <a href="#" class="border-0 m-0"><i
                                class="far fa-heart"></i></a> <a href="#"
                            class="border-0 m-0 d-lg-inline-block d-none"><i class="far fa-user"></i></a>
                        <button class="d-lg-inline-block d-none">Book an Appoinment</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col text-center">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li><a href="/about/">ABOUT</a></li>
                                    <li class="menu-item-has-children mega-menu-wrap"><a
                                            href="/service/">SERVICES</a>
                                        <ul class="mega-menu">
                                            <li><a href="#">SPA</a>
                                                <ul>
                                                    <li><a href="#">Massage</a></li>
                                                    <li><a href="#">Body Care</a></li>
                                                    <li><a href="#">Skin Care</a></li>
                                                    <li><a href="#">Couple</a></li>
                                                    <li><a href="#">Journeys</a></li>
                                                    <li><a href="#">Bridal</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Saloon</a>
                                                <ul>
                                                    <li><a href="#">Haircut</a></li>
                                                    <li><a href="#">Blow Dry</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Dermatology</a>
                                                <ul>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <img src="assets/img/menu2.jpg" alt="">
                                                <h6 class="mt-2">Gift Cards</h6>
                                            </li>
                                            <li>
                                                <img src="assets/img/menu1.jpg" alt="">
                                                <h6 class="mt-2">Memberships</h6>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/home-spa/">HOME SPA</a></li>
                                    <li><a href="/shop/">Shop</a></li>
                                    <li><a href="/contact/">CONTACT</a></li>
                                    <li><a href="/gift-vouchers/">GIFT VOUCHERS</a></li>
                                    <li class="menu-item-has-children"><a href="#">MEMBERSHIP</a>
                                        <ul class="sub-menu">
                                            <li><a href="/spa-membership/">Spa Memberships</a></li>
                                            <li><a href="/salon-membership/">Salon Memberships</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><button
                                                class="icon-btn style4 searchBoxTggler d-none d-sm-inline-block"><i
                                                    class="far fa-search"></i></button> </a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <div class="header-btns"><button class="vs-menu-toggle d-inline-block d-lg-none"
                                    type="button"><i class="fal fa-bars"></i></button></div>
                            <div class="header-call">
                                <div class="icon-btn style4"><i class="fal fa-headset"></i></div>
                                <div class="media-body"><span class="media-label">24/7 Support Center</span> <a
                                        href="tel:+4401234569" class="media-number">+44 0123 4569</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>