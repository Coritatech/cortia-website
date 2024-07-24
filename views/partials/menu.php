<!-- pre loader area start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
        <div class="loader-brand-icon"><img src="views/assets/img/logo/preloder.png" alt=""></div>
    </div>
    <!-- pre loader area end -->
     
    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- Start Search Popup Section -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fa-light fa-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Start Search Popup Section -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
                <a href="index.html">
                    <img src="views/assets/img/logo/logo.png" alt="">
                </a>
            </div>
            <div class="tpoffcanvas__title">
                <p>Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.</p>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5>Contact us</h5>
                </div>
                <ul>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:cortiatechnology@gmail.com"><span class="__cf_email__">cortiatechnology@gmail.com</span></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+2347067526407">+234 706 752 6407</a>
                    </li>
                </ul>
            </div>
            <div class="tpoffcanvas__input">
                <div class="tpoffcanvas__input-title">
                    <h4>Get UPdate</h4>
                </div>
                <form action="#">
                    <div class="p-relative">
                        <input type="text" placeholder="Enter mail">
                        <button>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->



    <!-- header area start -->
    <header class="tp-header-height">
        <?php

        if($url == '/') {
            echo '<div class="tp-header-bottom tp-header-bottom tp-header-transparent">';
        }
        
        ?>
        <div id="header-sticky" class="tp-header-area">
            <div class="tp-header-area">
                <div class="container">
                    <div class="tp-header-3-wrapper p-relative">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-6 col-md-5 col-6">
                                <div class="logo">
                                    <a href="/"><img src="views/assets/img/logo/logo<?php echo $url == '/' ? '3' : ''; ?>.png" alt=""></a>
                                </div>
                            </div>

                            <div class="col-xl-7 d-none d-xl-block">
                                <div class="main-menu main-menu-<?php echo $url == '/' ? '3' : '2'; ?> main-mega-menu text-center">
                                    <nav class="tp-main-menu-content">
                                        <ul>
                                            <li><a class="active" href="/">Home</a></li>
                                            <li><a href="/about">About Us</a></li>
                                            <!-- <li><a href="/about">Service</a></li>
                                            <li><a href="/about">Blog</a></li> -->
                                            <!-- <li><a href="../index.view.php">Contact</a></li> -->
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-8 col-md-6 col-6">
                                <div class="tp-header-right d-flex justify-content-end align-items-center">

                                    <!-- header button -->
                                    <div class="tp-header-button">
                                        <a class="tp-header-btn tp-header-btn-white d-none d-md-block" rel="noreferrer" href="contact.html" target="_blank"><span>Get a Quete</span></a>
                                    </div>

                                    <button class="d-xl-none tp-header-3-bar tp-menu-bar"><i class="fa-solid fa-bars"></i></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        if ($url == '/') {
            echo ' </div>';
        }

        ?>
    </header>
    <!-- header area end -->