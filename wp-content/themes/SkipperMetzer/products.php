<?php
/*
Template Name:  Products
*/
?>
<!doctype html>
<html lang="en">

<head>
    <title>Skipper Metzer | Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/wp-content/themes/SkipperMetzer/Images/Logo-photo/faviconlogo.png" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/wp-content/themes/SkipperMetzer/Css/Style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f3aebf1c73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                defaultLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        .goog-te-gadget-simple {
            background-color: #fff;
            border-left: none;
            border-top: none;
            border-bottom: none;
            border-right: none;
            font-size: 14px;
            display: inline-block;
            padding-top: 0px;
            padding-bottom: 0px;
            cursor: pointer;
            zoom: 1;
            display: inline;
        }

        .goog-te-gadget img {
            display: none;
        }

        .goog-te-menu-value span {
            color: red;
        }

        .goog-te-menu-value span:nth-child(3) {
            display: none;
        }

        .goog-te-menu-value span:nth-child(5) {
            display: none;
        }

        body {
            background: #ffffff;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    <div class="wrapper">
        <header class="bg-white mainNav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img src="/wp-content/themes/SkipperMetzer/Images/Logo-photo/logo.png" alt="Skipper Metzer" style="width: 120px;"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav ms-auto text-uppercase">
                                        <a class="nav-link " href="/">Home</a>
                                        <a class="nav-link " href="/about-us">About us</a>
                                        <a class="nav-link active" aria-current="page" href="/lin-light-flat-integral-dripper">Products</a>
                                        <a class="nav-link" href="/gallery">Gallery</a>
                                        <a class="nav-link" href="/contact-us">Contact us</a>
                                        <!-- <a class="nav-link" href="#">
                                            <div id="google_translate_element"></div>
                                        </a> -->
                                        <a class="nav-link" href="tel:+9118005722997">Toll Free: 1800 572 2997</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="translateDiv position-fixed" style="z-index: 999999;right:0;">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
        <main>
            <!-- <section class="topBannerProducts">
                <div class="center-items">
                    <h1 class=" mt-2 text-uppercase p-5">Products</h1>
                </div>
            </section> -->
            <section class="products mt-5 mb-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="linDripline-tab" data-bs-toggle="tab" data-bs-target="#linDripline" type="button" role="tab" aria-controls="linDripline" aria-selected="true">LIN Dripline</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="compactDripline-tab" data-bs-toggle="tab" data-bs-target="#compactDripline" type="button" role="tab" aria-controls="compactDripline" aria-selected="false">Compact Integral Dripline</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="verdictPc-tab" data-bs-toggle="tab" data-bs-target="#verdictPc" type="button" role="tab" aria-controls="verdictPc" aria-selected="false">Verdit PC Integral Dripline</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="onlineNpc-tab" data-bs-toggle="tab" data-bs-target="#onlineNpc" type="button" role="tab" aria-controls="onlineNpc" aria-selected="false">Online Dripper (Non PC)</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="onlinepc-tab" data-bs-toggle="tab" data-bs-target="#onlinepc" type="button" role="tab" aria-controls="onlinepc" aria-selected="false">Online Dripper (PC Gali)</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="miniSprinkler-tab" data-bs-toggle="tab" data-bs-target="#miniSprinkler" type="button" role="tab" aria-controls="miniSprinkler" aria-selected="false">Mini Sprinkler System</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="hdpPipes-tab" data-bs-toggle="tab" data-bs-target="#hdpPipes" type="button" role="tab" aria-controls="hdpPipes" aria-selected="false">HDP Pipes for Sprinkler Irrigation</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="linDripline" role="tabpanel" aria-labelledby="linDripline-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>LIN Dripline</h2>
                                            <a class="btn downloadBtn mt-4" href="/wp-content/themes/SkipperMetzer/Pdfs/LIN Flyer_15Ver_CC.pdf" download="LIN Flyer PDF">Download PDF</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Lin_Dripline_1/Lin_Breakdown_1.jpg" alt="LIN" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Lin_Dripline_1/Lin_2.jpg" alt="LIN" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Lin_Dripline_1/LIN_Flat_Drip_laterals_3.JPG" alt="LIN" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-3">
                                            <div class="specificDes">
                                                <p>Applications</p>
                                                <ul>
                                                    <li> Row Crops</li>
                                                    <li> Vegetables</li>
                                                    <li> Sugarcane</li>
                                                    <li> Orchards</li>
                                                    <li> Greenhouses</li>
                                                    <li> Landscaping</li>
                                                    <li> Gravity system/small household plots</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="specificDes">
                                                <p>Technical data</p>
                                                <ul>
                                                    <li> Dripper flow rate: 1.2/2.0/4.0 l/h</li>
                                                    <li> Dripper diameters: 12/16/20 mm</li>
                                                    <li> Dripline wall thickness: 0.20 to 1.0 mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="specificDes">
                                                <p>Features</p>
                                                <ul>
                                                    <li> Light flat integral dripper</li>
                                                    <li> Large Clog resistant inlet filter</li>
                                                    <li> Short and wide labyrinth with turbulent flow pattern prevents particle setting </li>
                                                    <li> As per IS-13488</li>
                                                    <li> Also available in low wall thicknesses</li>
                                                    <li> Root Guard configurations available for extra protection against root intrusion system</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="compactDripline" role="tabpanel" aria-labelledby="compactDripline-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>LIN Dripline</h2>
                                            <a class="btn downloadBtn mt-4" href="/wp-content/themes/SkipperMetzer/Pdfs/LIN Flyer_15Ver_CC.pdf" download="LIN Flyer PDF">Download PDF</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Lin_Dripline_1/Lin_Breakdown_1.jpg" alt="LIN" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Lin_Dripline_1/Lin_2.jpg" alt="LIN" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Lin_Dripline_1/LIN_Flat_Drip_laterals_3.JPG" alt="LIN" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Applications</p>
                                                <ul>
                                                    <li> Row Crops</li>
                                                    <li> Vegetables</li>
                                                    <li> Sugarcane</li>
                                                    <li> Orchards</li>
                                                    <li> Greenhouses</li>
                                                    <li> Landscaping</li>
                                                    <li> Gravity system/small household plots</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Technical data</p>
                                                <ul>
                                                    <li> Dripper flow rate: 1.2/2.0/4.0 l/h</li>
                                                    <li> Dripper diameters: 12/16/20 mm</li>
                                                    <li> Dripline wall thickness: 0.20 to 1.0 mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Features</p>
                                                <ul>
                                                    <li> Light flat integral dripper</li>
                                                    <li> Large Clog resistant inlet filter</li>
                                                    <li> Short and wide labyrinth with turbulent flow pattern prevents particle setting </li>
                                                    <li> As per IS-13488</li>
                                                    <li> Also available in low wall thicknesses</li>
                                                    <li> Root Guard configurations available for extra protection against root intrusion system</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mt-5" id="verdictPc" role="tabpanel" aria-labelledby="verdictPc-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2> Verdit PC Integral Dripline</h2>
                                            <a class="btn downloadBtn mt-4" href="/wp-content/themes/SkipperMetzer/Pdfs/Vardit.pdf" download="Verdict PDF">Download PDF</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Verdit_3/Vardit_1.jpg" alt="Compact Integral Dripline" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Verdit_3/Vardit_Breakdown_2.jpg" alt="Compact Integral Dripline" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Verdit_3/Reel_57x22.5_C_Skipper_3.png" alt="Compact Integral Dripline" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Applications</p>
                                                <ul>
                                                    <li> Greenhouses</li>
                                                    <li> Orchards</li>
                                                    <li> Row Crops</li>
                                                    <li> Plantation</li>
                                                    <li> Vineyards</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Technical data</p>
                                                <ul>
                                                    <li> Dripper flow rates: 0.85 / 1.2 / 1.6 / 2.1 / 3.4 l/h</li>
                                                    <li> Dripline diameters: 16 / 20 / 25 mm</li>
                                                    <li> Dripline wall thickness: 0.4 - 1.25 mm</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Features</p>
                                                <ul>
                                                    <li> Efficient and cost-effective Driper</li>
                                                    <li> Wide range of working pressures of various topographies</li>
                                                    <li> Uniform flow rate</li>
                                                    <li> Expanded inlet filter</li>
                                                    <li> Highly accurate presssure-compensating labyrinth mechanism</li>
                                                    <li> Wide water passages along the labyrinth</li>
                                                    <li> Suitable for different water sourses</li>
                                                    <li> Long lasting silicon diaphragm</li>
                                                    <li> Durable under harsh field conditions and chemical applications</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="onlineNpc" role="tabpanel" aria-labelledby="onlineNpc-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2> Online Dripper Non PC</h2>
                                            <a class="btn downloadBtn mt-4" href="/wp-content/themes/SkipperMetzer/Pdfs/Non-PC-Dripper.pdf" download="Online Dripper PDF">Download PDF</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Online_Dripper_4/1.jpg" alt="Online Dripper NPC" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/Online_Dripper_4/Plain_Laterals_2.JPG" alt="Online Dripper NPC" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Applications</p>
                                                <ul>
                                                    <li> Greenhouses</li>
                                                    <li> Orchards</li>
                                                    <li> Grapes</li>
                                                    <li> Nurseries</li>
                                                    <li> Gardening</li>
                                                    <li> landscaping</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Technical data</p>
                                                <ul>
                                                    <li> Dripper flow rates: 4 to 8 l/h</li>
                                                    <li> Suitable for 12 / 16 / 20 mm Laterals</li>
                                                    <li> Openable Drippers</li>
                                                    <li> Color Coded</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Features</p>
                                                <ul>
                                                    <li> Robust performance</li>
                                                    <li> Accurate labyrinth</li>
                                                    <li> Water passage</li>
                                                    <li> Compact Openable Button Dripper </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="onlinepc" role="tabpanel" aria-labelledby="onlinepc-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2> Online Dripper PC Gali</h2>
                                            <a class="btn downloadBtn mt-4" href="/wp-content/themes/SkipperMetzer/Pdfs/Gali.pdf" download="Gali PDF">Download PDF</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/PC_Gali_Dripper_5/Gali_1.jpg" alt="Online Dripper PC Gali" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card text-center align-items-center justify-content-center mt-4">
                                                <img src="/wp-content/themes/SkipperMetzer/Images/ProductImages/PC_Gali_Dripper_5/Plain_Laterals_2.JPG" alt="Online Dripper PC Gali" class="img-fluid w-100 imgSec">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Applications</p>
                                                <ul>
                                                    <li> Orchards</li>
                                                    <li> Plantation</li>
                                                    <li> Vegetables</li>
                                                    <li> Hydrophonics / Soilless Culture</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Technical data</p>
                                                <ul>
                                                    <li> Dripper flow rates: 4 and 4 l/h</li>
                                                    <li> Suitable for 12 / 16 / 20 mm Laterals</li>
                                                    <li> Non-Drain option: Shutdown Pressure:2m</li>
                                                    <li> Color Coded</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="specificDes">
                                                <p>Features</p>
                                                <ul>
                                                    <li> Highly reliable dripper</li>
                                                    <li> Unique and accurate regulating labyrinth mechanishm</li>
                                                    <li> Wide passages along the labyrinth </li>
                                                    <li> Self-flushing operations at the begining and end of each irrigation cycle </li>
                                                    <li> Compact multi-optional Button Dripper </li>
                                                    <li> Accommodates 1,2 and 4 outlets adapters </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="miniSprinkler" role="tabpanel" aria-labelledby="miniSprinkler-tab">...</div>
                                <div class="tab-pane fade" id="hdpPipes" role="tabpanel" aria-labelledby="hdpPipes-tab"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="mainfooter ">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-3 rightB">
                        <div class="innerBox">
                            <img src="/wp-content/themes/SkipperMetzer/Images/Logo-photo/ind-israel_logo.png" alt="" class="img-responsive" style="max-width:260px" />
                            <p><strong>Skipper Metzer India LLP</strong> is an Indo-Israeli joint venture between M/s Skipper Limited, India
                                and M/s Metzer, Israel, to foray into Micro Irrigation
                                market in India with an objective to become a key
                                player and bring in new technologies in the
                                growing irrigation market to help farmers.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 rightB">
                        <div class="innerBox">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about-us">About Us </a></li>
                                <li><a href="/lin-light-flat-integral-dripper">Products</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 rightB">
                        <div class="innerBox">
                            <h4>Our Products</h4>
                            <ul>
                                <li><a class="dropdown-item " href="/lin-light-flat-integral-dripper">LIN Dripline</a></li>
                                <li><a class="dropdown-item " href="/compact-integral-dripline">Compact Integral Dripline</a></li>
                                <li><a class="dropdown-item " href="/verdit-pc-integral-dripline">Verdit PC Integral Dripline</a></li>
                                <li><a class="dropdown-item " href="/online-dripper-npc">Online Dripper (Non PC)</a></li>
                                <li><a class="dropdown-item " href="/online-dripper-pc-gali">Online Dripper (PC Gali)</a></li>
                                <li><a class="dropdown-item " href="/mini-sprinkler-system">Mini Sprinkler System</a></li>
                                <li><a class="dropdown-item " href="/hdp-pipes-for-sprinkler-irrigation">HDP Pipes for Sprinkler Irrigation</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4 rightB">
                        <div class="innerBox">
                            <h4>Contact Us</h4>
                            <address>
                                <p class="addresss"><i class="fas fa-map-marker-alt"></i>
                                    Skipper Metzer India LLP
                                    44-67, Sy. No 367/1/A, IDA, MoulaAli,
                                    Hyderabad-500040, Telangana, India.
                                </p>
                                <p class="addresss">
                                    <i class="fas fa-phone-alt"></i>
                                    +91 40 27243427, +919989773604
                                </p>
                                <p class="addresss">
                                    <i class="fas fa-tty"></i>
                                    +914029990327
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border-bottom w-100"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="innerBox">
                            <address>
                                <p><i class="fas fa-envelope me-3"></i> customercare@skippermetzer.com</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="innerBox text-center">
                            <h4 class="text-info">Call Us On</h4>
                            <p class="text-white fs-3">18005722997</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="innerBox">
                            <div class="social-icons">
                                <div class="social-icon"><i class="fab fa-facebook-f"></i></div>
                                <div class="social-icon"><i class="fab fa-twitter"></i></div>
                                <div class="social-icon"><i class="fab fa-instagram"></i></div>
                                <div class="social-icon"><i class="far fa-envelope"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p style="font-size:14px;" class="p-2">Copyright 2021 Skipper Metzer, Designed & Developed by Annamraju Designs & Technologies</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

</body>

</html>