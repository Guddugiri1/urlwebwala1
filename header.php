<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Dynamic Page Title -->
    <title>
        <?php 
    $pageTitle = "Urlwebwala | IT Services in Ahmedabad";
    $end = basename($_SERVER['PHP_SELF']);

    switch ($end) {
        case 'index.php': 
            $pageTitle = "Welcome to Urlwebwala LLP | IT Services in Ahmedabad"; break;
        case 'about.php': 
            $pageTitle = "About Urlwebwala LLP | Trusted IT Partner in Ahmedabad"; break;
        case 'web_development.php': 
            $pageTitle = "Web Development Services in Ahmedabad | Urlwebwala LLP"; break;
        case 'services.php': 
            $pageTitle = "Comprehensive IT Services in Ahmedabad | Urlwebwala LLP"; break;
        case 'mobile_app_development.php': 
            $pageTitle = "Mobile App Development in Ahmedabad | Urlwebwala LLP"; break;
        case 'digital_marketing.php': 
            $pageTitle = "Digital Marketing Services in Ahmedabad | Urlwebwala LLP"; break;
        default:
            $pageTitle = "Urlwebwala | IT Services in Ahmedabad";
    }
    echo $pageTitle;
    ?>
    </title>

    <!-- Place favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/fev.png">

    <?php
$metaData = [
    'index.php' => [
        "title" => "Welcome to Urlwebwala LLP | IT Services in Ahmedabad",
        "description" => "Urlwebwala LLP provides web development, mobile apps, and digital marketing services in Ahmedabad. Grow your business with expert IT solutions.",
    ],
    'about.php' => [
        "title" => "About Urlwebwala LLP | Trusted IT Partner in Ahmedabad",
        "description" => "Learn more about Urlwebwala LLP, your trusted IT partner in Ahmedabad. We specialize in web solutions, mobile app development, and digital marketing.",
    ],
    'web_development.php' => [
        "title" => "Web Development Services in Ahmedabad | Urlwebwala LLP",
        "description" => "Professional web development services in Ahmedabad. We create fast, responsive, and SEO-optimized websites for businesses of all sizes.",
    ],
    'services.php' => [
        "title" => "Comprehensive IT Services in Ahmedabad | Urlwebwala LLP",
        "description" => "Discover comprehensive IT services at Urlwebwala LLP, including web and mobile app development, SEO, and graphic design. Based in Ahmedabad.",
    ],
    'mobile_app_development.php' => [
        "title" => "Mobile App Development in Ahmedabad | Urlwebwala LLP",
        "description" => "Develop high-quality mobile applications for Android and iOS with Urlwebwala LLP. Scalable and user-friendly app solutions for businesses.",
    ],
    'digital_marketing.php' => [
        "title" => "Digital Marketing Services in Ahmedabad | Urlwebwala LLP",
        "description" => "Boost your online presence with expert digital marketing services. We offer SEO, PPC, social media marketing, and content strategies in Ahmedabad.",
    ]
];

if (isset($metaData[$end])) {
    echo '<meta name="title" content="'.$metaData[$end]['title'].'" />' . PHP_EOL;
    echo '<meta name="description" content="'.$metaData[$end]['description'].'" />' . PHP_EOL;
    echo '<meta property="og:title" content="'.$metaData[$end]['title'].'" />' . PHP_EOL;
    echo '<meta property="og:description" content="'.$metaData[$end]['description'].'" />' . PHP_EOL;
}
?>

    <!-- Open Graph & Social Media Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.urlwebwala.com" />
    <meta property="og:site_name" content="Urlwebwala LLP" />
    <meta property="og:image" itemprop="image" content="https://urlwebwala.com/assets/metalog.png">
    <meta property="og:updated_time" content="<?php echo time(); ?>" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.urlwebwala.com" />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Urlwebwala LLP",
        "url": "https://www.urlwebwala.com",
        "logo": "https://urlwebwala.com/assets/metalog.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91 6359433164",
            "contactType": "customer service"
        }
    }
    </script>

    <!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
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
                    <a href="contact.html" class="tp-common-btn">get in touch
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