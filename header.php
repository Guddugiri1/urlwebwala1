<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Dynamic Page Title -->
    <title>
        <?php 
        $pageTitle = "Urlwebwala | IT Services in Ahmedabad"; // Default title
        $end = basename($_SERVER['PHP_SELF']);

        $titles = [
            'index.php' => "Urlwebwala LLP | IT & Web Development Services",
            'about.php' => "About Urlwebwala LLP | Trusted IT Partner",
            'web_development.php' => "Web Development Services | Urlwebwala LLP",
            'services.php' => "Complete IT Services | Urlwebwala LLP",
            'mobile_app_development.php' => "Mobile App Development | Urlwebwala LLP",
            'digital_marketing.php' => "Digital Marketing | SEO & Ads | Urlwebwala LLP"
        ];

        if (isset($titles[$end])) {
            $pageTitle = $titles[$end];
        }
        echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); // Prevents HTML injection
        ?>
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/logo/fev.png" type="image/x-icon">

    <!-- Meta Description (120-160 Characters) -->
    <?php
    $metaDescriptions = [
        'index.php' => "Urlwebwala LLP offers web development, mobile apps, and digital marketing in Ahmedabad. Boost your business with expert IT solutions.",
        'about.php' => "Learn about Urlwebwala LLP, a trusted IT solutions provider in Ahmedabad, specializing in web development, apps, and digital marketing.",
        'web_development.php' => "Get responsive, SEO-friendly web development in Ahmedabad. Urlwebwala LLP creates user-friendly websites for businesses.",
        'services.php' => "Explore our IT services, including web development, mobile apps, and digital marketing. Elevate your brand with Urlwebwala LLP.",
        'mobile_app_development.php' => "Build scalable mobile apps for Android & iOS with Urlwebwala LLP. Innovative solutions tailored for your business.",
        'digital_marketing.php' => "SEO, PPC, and social media marketing from Urlwebwala LLP. Improve online visibility and grow your audience."
    ];

    $metaDescription = $metaDescriptions[$end] ?? "Urlwebwala LLP provides IT solutions in Ahmedabad, including web development, mobile apps, and digital marketing."; // Default description
    echo '<meta name="description" content="'.htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8').'" />' . PHP_EOL;
    ?>

    <!-- Open Graph (Social Media Preview) -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.urlwebwala.com" />
    <meta property="og:site_name" content="Urlwebwala LLP" />
    <meta property="og:image" content="https://urlwebwala.com/assets/metalog.png" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.urlwebwala.com" />

    <!-- Schema.org Structured Data (Local Business) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Urlwebwala LLP",
        "url": "https://www.urlwebwala.com",
        "logo": "https://urlwebwala.com/assets/metalog.png",
        "image": "https://urlwebwala.com/assets/metalog.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ahmedabad, Gujarat",
            "addressLocality": "Ahmedabad",
            "postalCode": "382481",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91 6359433164",
            "contactType": "customer service"
        }
    }
    </script>

    <!-- Google Analytics & Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ5QVDBENP"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-NZ5QVDBENP');
    </script>



    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <div class="tp-header__1 theme-bg p-relative">
            <div id="header-sticky" class="tp-header__1-main header-border-button pl-105 pr-105">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="row align-items-center">
                            <div class="col-xxl-3 col-xl-2 col-6">
                                <div class="logo border-right">
                                    <a href="#">
                                        <img src="assets/img/logo/urlwebwala.png" style="width:215px;" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 d-none d-xl-block">
                                <div class="main-menu p-relative">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="">
                                                <a href="index.php">Home</a>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="#">Company</a>
                                                <ul class="submenu">
                                                    <li>
                                                    <li><a href="about.php">ABOUT US</a></li>
                                                    <li><a href="career.php">CAREER</a></li>
                                                    <li><a href="developmentprocess.php">DEVELOPMENT PROCESS</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li>
                                                <a href="about.php">About Us</a>
                                            </li> -->
                                            <li class="has-dropdown">
                                                <a href="services.php">SERVICES</a>
                                                <ul class="submenu">
                                                    <li>
                                                    <li><a href="web_development.php">WEB DEVELOPMENT</a></li>
                                                    <li><a href="mobile_app_development.php">APP DEVELOPMENT</a></li>
                                                    <li><a href="digital_marketing.php">DIGITAL MARKETING</a></li>
                                                    <li><a href="graphics.php">GRAPHICS & LOGO</a></li>
                                                    <li><a href="testing.php">QA TESTING WEBSITE</a></li>
                                                    <li><a href="digital_card.php">DIGITAL CARD DESIGN</a></li>
                                                    <li><a href="hosting.php">HOSTING SERVICE PROVIDER</a></li>
                                                    <li><a href="support.php">SUPPORT & MAINTAINANCE</a></li>
                                                </ul>
                                            </li>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="internship.php">INTERSHIP</a>
                                                <ul class="submenu">
                                                    <li>
                                                    <li><a href="php-internship.php">PHP</a></li>
                                                    <li><a href="web-design-internship.php">WEB DEVELOPMENT</a></li>
                                                    <li><a href="flutter-internship.php">FLUTTER</a></li>
                                                    <!-- <li><a href="android-internship.php">ANDROID</a></li> -->
                                                    <li><a href="reactJS-internship.php">REACT JS</a></li>
                                                    <li><a href="nodeJS-internship.php">NODE JS</a></li>
                                                    <!-- <li><a href="live-project-internship.php">LIVE PROJECT TRAINING</a> -->
                                            </li>
                                        </ul>
                                        </li>
                                        </li>
                                        <li>
                                            <a href="portfolio.php">Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                        <!-- <li>
                                                <a href="team.php">Admin</a>
                                            </li> -->
                                        </ul>

                                    </nav>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-2 d-xl-block col-md-6 col-6">
                                <div class="tp-header__1-right d-flex justify-content-end align-items-center">
                                    <div class="tp-header-search-nav d-flex justify-content-end d-xl-none">
                                        <div class="tp-header-nav">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="tp-offcanvas-wrapper">
        <div class="tp-offcanvas white-bg">
            <div class="offc-top-pattern">
                <img src="assets/img/hero/nav-parrten-top.png" alt="">
            </div>
            <div class="tp-offcanvas__top tp-border-bottom pb-30 mb-30">
                <div class="tp-offcanvas-close">
                    <span><i class="fal fa-times"></i></span>
                </div>
                <div class="tp-offcanvas__logo mb-50">
                    <a href="#"> <img src="assets/img/logo/urlwebwala.png" style="width:100px;" alt="logo"></a>
                </div>
                <p>We believe that every customer deserves a quality experience and we're committed to delivering just
                    that.</p>
                <div class="tp-offcanvas__social">
                    <span> <a href="https://www.facebook.com/share/18aStSgd8m/"><i
                                class="fab fa-facebook-f"></i></a></span>
                    <span> <a href=""><i class="fab fa-twitter"></i></a></span>
                    <span> <a href="https://www.instagram.com/urlwebwala?igsh=MXM1aTl3ZDhiN284eQ=="><i
                                class="fab fa-instagram"></i></a></span>
                    <span> <a href="https://www.linkedin.com/company/urlwebwala-pvt-ltd/"><i
                                class="fab fa-linkedin"></i></a></span>
                </div>
            </div>
            <div class="tp-offcanvas__widget mb-40 d-none d-xl-block">
                <h3 class="tp-footer__widget-title mb-35">
                    Get In Touch
                </h3>
                <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20  mb-30">
                    <span class="icon mr-20"><img src="assets/img/icons/ofp-phone.png" alt=""></span>
                    <span>
                        <span class="d-block mb-0">Phone number</span>
                        <b><a href="tel:+916359433164"> Call Us: +91 6359433164 </a></b>
                    </span>
                </div>

                <div class="tp-offcanvas-cta d-flex align-items-center tp-border-bottom pb-20 mb-30">
                    <span class="icon mr-20"><img src="assets/img/icons/ofc-mail-icon.png" alt=""></span>
                    <span>
                        <span class="d-block mb-0">Email address</span>
                        <b><a href="mailto:mail.urlwebwala@gmail.com"> urlwebwala@gmail.com </a></b>
                    </span>
                </div>
                <div class="tp-offcanvas-cta d-flex align-items-center pb-20  mb-30">
                    <span class="icon mr-20"><img src="assets/img/icons/ofc-locaiton.png" alt=""></span>
                    <span>
                        <span class="d-block mb-0">
                            Ahemdabad Gujrat (382481)</span>

                    </span>
                </div>
            </div>
            <div class="tp-mobile-menu">
            </div>
            <div class="tp-offcanvas__bottom mt-80 d-none d-lg-block">
                <p>Our team applies its wide ranging in
                    experience to determining.</p>
                <div class="tp-offcanvas-btn-wrapper">
                    <a href="contact.html" class="tp-common-btn">Get in touch
                        <span>
                            <i class="fal fa-long-arrow-right"></i>
                            <i class="fal fa-long-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="offc-bottom-pattern">
                <img src="assets/img/hero/nav-parrten-botoom.png" alt="">
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- back to top start  -->
    <style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 53.1px;
        right: 50px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
    </style>

    <a href="#main-wrapper" id="tp-backto-top" class="tp-back-to-top show">
        <span>
            <i class="fal fa-angle-double-up"></i>
        </span>
    </a>