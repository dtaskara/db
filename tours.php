


<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                    <ul>
                        <li><a href="#">Visit Us</a></li>
                        <li><a href="#">Buy Tickets</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="hotels.php">Hotels</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>


<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hotels
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="hotels.php"> Tours</a></p>
            </div>
        </div>
    </div>
</section>

<div id="list"></div>


<section class="ftco-section justify-content-end ftco-search">
    <div class="container-wrap ml-auto">
        <div class="row no-gutters">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content p-4 px-5" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                         aria-labelledby="v-pills-nextgen-tab">
                        <form method="post" action="api/methods/search.php" class="search-destination">
                            <div class="row">


                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">City</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="city" id="" class="form-control">
                                                    <option value="">-</option>
                                                    <?php

                                                    include 'database/connection.php';
                                                    $res = array();


                                                    $query = sqlsrv_query($conn, "SELECT * FROM City;", $res, array("Scrollable" => 'static'));

                                                    if (sqlsrv_num_rows($query) > 0) {
                                                        while ($row = sqlsrv_fetch_object($query)) {

                                                            ?>


                                                            <option value="<?php echo $row->City_id ?>"><?php echo $row->City_name ?></option>

                                                            <?php
                                                        }
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Name</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="name" id="" class="form-control">
                                                    <option value="">-</option>
                                                    <?php

                                                    include 'database/connection.php';
                                                    $res = array();


                                                    $query = sqlsrv_query($conn, "SELECT * FROM PackageTour;", $res, array("Scrollable" => 'static'));

                                                    if (sqlsrv_num_rows($query) > 0) {
                                                        while ($row = sqlsrv_fetch_object($query)) {

                                                            ?>


                                                            <option value="<?php echo $row->h_name ?>"><?php echo $row->name ?></option>

                                                            <?php
                                                        }
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Star</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="star" id="" class="form-control">
                                                    <option value="">-</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md align-items-end">
                                    <div class="form-group">
                                        <label for="#">Search text</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span
                                                            class="ion-ios-arrow-down"></span>
                                                </div>
                                                <input type="text"
                                                       name="searchText"
                                                       class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--                                <div class="col-md align-items-end">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="#">from</label>-->
                                <!--                                        <div class="form-field">-->
                                <!--                                            <div class="select-wrap">-->
                                <!--                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                <!--                                                <select name="" id="" class="form-control">-->
                                <!--                                                    --><?php
                                //
                                //                                                    include 'database/connection.php';
                                //                                                    $res = array();
                                //
                                //
                                //                                                    $query = sqlsrv_query($conn, "SELECT * FROM City;", $res, array("Scrollable" => 'static'));
                                //
                                //                                                    if (sqlsrv_num_rows($query) > 0) {
                                //                                                        while ($row = sqlsrv_fetch_object($query)) {
                                //
                                //                                                            ?>
                                <!---->
                                <!---->
                                <!--                                                            <option value="">-->
                                <?php //echo $row->City_name ?><!--</option>-->
                                <!---->
                                <!--                                                            --><?php
                                //                                                        }
                                //                                                    }
                                //
                                //                                                    ?>
                                <!--                                                </select>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->

                                <!--                                <div class="col-md align-items-end">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="#">To</label>-->
                                <!--                                        <div class="form-field">-->
                                <!--                                            <div class="select-wrap">-->
                                <!--                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                <!--                                                <select name="" id="" class="form-control">-->
                                <!--                                                    --><?php
                                //
                                //                                                    include 'database/connection.php';
                                //                                                    $res = array();
                                //
                                //
                                //                                                    $query = sqlsrv_query($conn, "SELECT * FROM City;", $res, array("Scrollable" => 'static'));
                                //
                                //                                                    if (sqlsrv_num_rows($query) > 0) {
                                //                                                        while ($row = sqlsrv_fetch_object($query)) {
                                //
                                //                                                            ?>
                                <!---->
                                <!---->
                                <!--                                                            <option value="">-->
                                <?php //echo $row->City_name ?><!--</option>-->
                                <!---->
                                <!--                                                            --><?php
                                //                                                        }
                                //                                                    }
                                //
                                //                                                    ?>
                                <!--                                                </select>-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->

                                <!--                                <div class="col-md align-items-end">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="#">Date</label>-->
                                <!--                                        <div class="form-field">-->
                                <!--                                            <div class="select-wrap">-->
                                <!--                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                <!--                                                <input type="date" id="start" name="trip-start"-->
                                <!--                                                       value="2019-12-03"-->
                                <!--                                                       class="form-control"-->
                                <!--                                                       min="2019-12-03" max="2021-12-03">-->
                                <!---->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                                <div class="col-md align-items-end">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="#">Days</label>-->
                                <!--                                        <div class="form-field">-->
                                <!--                                            <div class="select-wrap">-->
                                <!--                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                <!---->
                                <!--                                                    <input type="number"-->
                                <!--                                                           class="form-control">-->
                                <!---->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->


                                <!--                                <div class="col-md align-items-end">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <label for="#">Person</label>-->
                                <!--                                        <div class="form-field">-->
                                <!--                                            <div class="select-wrap">-->
                                <!--                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                                <!--                                                <input type="number"-->
                                <!--                                                       class="form-control">-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <div class="col-md align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <button class="primary-btn text-uppercase">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start destinations Area -->
<section class="destinations-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <!--                    <h1 class="mb-10">Popular Destinations</h1>-->
                    <!--                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,-->
                    <!--                        day to.</p>-->
                </div>
            </div>
        </div>


        <div class="row">


            <?php

            include 'database/connection.php';
            // $query=sqlsrv_query($conn,"SELECT * FROM Hotel;");
            $res = array();


            $query = sqlsrv_query($conn, "SELECT * FROM PackageTour;", $res, array("Scrollable" => 'static'));

            if (sqlsrv_num_rows($query) > 0) {
                while ($row = sqlsrv_fetch_object($query)) {

                    ?>

                    <div class="col-lg-4">
                        <div class="single-destinations">
                            <div class="thumb">
                                <img src="<?php echo $row->photo ?>" alt="">
                            </div>
                            <div class="details">
                                <h4 class="d-flex justify-content-between">
                                    <span><?php echo $row->name ?></span>


                                
                                </h4>
                                <!-- <p>
                                    View on map   |   49 Reviews
                                </p> -->
                                <ul class="package-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Name</span>
                                        <span><?php echo $row->description ? 'Yes' : 'No' ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <?php


                }
            }
            ?>


        </div>
    </div>
</section>
<!-- End destinations Area -->


<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                    standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the
                    job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/hotels/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">

        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Agency</h6>
                    <p>
                        The world has become so fast paced that people don’t want to stand by reading a page of
                        information, they would much rather look at a presentation and understand the message. It has
                        come to a point
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Navigation Links</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>
                        For business professionals caught between high OEM price and mediocre print and graphic output.
                    </p>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="subscription relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">InstaFeed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="img/i1.jpg" alt=""></li>
                        <li><img src="img/i2.jpg" alt=""></li>
                        <li><img src="img/i3.jpg" alt=""></li>
                        <li><img src="img/i4.jpg" alt=""></li>
                        <li><img src="img/i5.jpg" alt=""></li>
                        <li><img src="img/i6.jpg" alt=""></li>
                        <li><img src="img/i7.jpg" alt=""></li>
                        <li><img src="img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
<!-- <script src="js/functions/list.js"></script>	 -->
</body>
</html>

