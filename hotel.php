<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include 'database/connection.php';
    $res = array();
    $query = sqlsrv_query($conn, "SELECT * FROM Hotel  where h_id=" . $id, $res, array("Scrollable" => 'static'));

    if (sqlsrv_num_rows($query) > 0) {
        $row = sqlsrv_fetch_object($query);
        $res[] = array(
            "id" => $row->h_id,
            "h_name" => $row->h_name,
            "h_description" => $row->h_description,
            "h_contact" => $row->h_contact,
            "city_id" => $row->city_id,
            "h_price" => $row->h_price,
            "H_stars" => $row->H_stars,
            "pool" => $row->pool,
            "gym" => $row->gym,
            "wifi" => $row->wifi,
            "roomService" => $row->roomService,
            "airCondition" => $row->airCondition,
            "restaurant" => $row->restaurant,
            "photo" => $row->photo
        );

    }

    ?>


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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <header id="header">
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


    <section class="about-banner relative"
             style="background: url(<?php echo $res[0]['photo'] ?>)  no-repeat; background-size: cover">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        <?php echo $res[0]['h_name']; ?>
                    </h1>
                    <p class="text-white link-nav"><a href="index.php">Home </a> <span
                                class="lnr lnr-arrow-right"></span>
                        <a href="hotels.php"> Hotels</a>
                        <span
                                class="lnr lnr-arrow-right"></span>
                        <a href="hotel.php?id=<?php echo $res[0]['id']; ?>">
                            <?php echo $res[0]['h_name']; ?>
                        </a>


                    </p>
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

            </div>
        </div>
    </section>

    <section class="destinations-area section-gap">
        <div class="container">

            <div class="row" style="justify-content: center">
                <div class="thumb" style="width: 500px;"  >
                    <img src="<?php echo $row->photo ?>" style="width: 500px;" alt="">

                    <p><?php echo $row->h_description ?></p>

                    <div class="row" style="justify-content: center">
                        <button class="primary-btn text-uppercase btn btn-info btn-lg"
                                type="button" data-toggle="modal" data-target="#myModal"

                                style="margin: 0 5px; color: black">Edit
                        </button>
                        <button class="primary-btn text-uppercase btn  btn-lg"
                                type="button" data-toggle="modal" data-target="#deleteModal"
                                style="margin: 0 5px;color: black">Delete
                        </button>
                    </div>


                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog" style="    max-width: 1000px !important;
                            width: 1000px;
                            margin: 0 auto;">

                            <!-- Modal content-->
                            <div class="modal-content" style="padding: 0 50px" >
                                <div class="modal-header">
                                    <!--                                        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    <h4 class="modal-title">Edit Hotel</h4>
                                </div>
                                <div class="modal-body">

                                    <form action="">
                                        <div>
                                            <div class="row">
                                                <p>Name:</p>
                                                <input type="text"
                                                       name="name"
                                                       class="form-control"
                                                       value="<?php echo $res[0]['h_name'] ?>">
                                            </div>


                                            <div class="row">
                                                <p>Description:</p>
                                                <input type="text"
                                                       name="description"
                                                       class="form-control"
                                                       value="<?php echo $res[0]['h_description'] ?>">
                                            </div>


                                            <div class="row">
                                                <p>Contact:</p>
                                                <input type="text"
                                                       name="contact"
                                                       class="form-control"
                                                       value="<?php echo $res[0]['h_contact'] ?>">
                                            </div>


                                            <div class="row">
                                                <p>City:</p>
<!--                                                <input type="text"-->
<!--                                                       name="name"-->
<!--                                                       class="form-control"-->
<!--                                                       value="--><?php //echo $res[0]['h_name'] ?><!--">-->
                                            </div>

                                            <div class="row">
                                                <p>Price:</p>
                                                <input type="number"
                                                       name="contact"
                                                       class="form-control"
                                                       value="<?php echo $res[0]['price'] ?>">
                                            </div>

                                            <div class="row">
                                                <p>Photo:</p>
<!--                                                <input type="text"-->
<!--                                                       name="contact"-->
<!--                                                       class="form-control"-->
<!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>


                                            <div class="row">
                                                <p>Stars:</p>
<!--                                                <input type="text"-->
<!--                                                       name="contact"-->
<!--                                                       class="form-control"-->
<!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>


                                            <div class="row">
                                                <p>Pool:</p>
                                                <!--                                                <input type="text"-->
                                                <!--                                                       name="contact"-->
                                                <!--                                                       class="form-control"-->
                                                <!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>



                                            <div class="row">
                                                <p>Gym:</p>
                                                <!--                                                <input type="text"-->
                                                <!--                                                       name="contact"-->
                                                <!--                                                       class="form-control"-->
                                                <!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>


                                            <div class="row">
                                                <p>Wifi:</p>
                                                <!--                                                <input type="text"-->
                                                <!--                                                       name="contact"-->
                                                <!--                                                       class="form-control"-->
                                                <!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>


                                            <div class="row">
                                                <p>Room service:</p>
                                                <!--                                                <input type="text"-->
                                                <!--                                                       name="contact"-->
                                                <!--                                                       class="form-control"-->
                                                <!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>



                                            <div class="row">
                                                <p>Air condition:</p>
                                                <!--                                                <input type="text"-->
                                                <!--                                                       name="contact"-->
                                                <!--                                                       class="form-control"-->
                                                <!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>


                                            <div class="row">
                                                <p>Restaurant:</p>
                                                <!--                                                <input type="text"-->
                                                <!--                                                       name="contact"-->
                                                <!--                                                       class="form-control"-->
                                                <!--                                                       value="--><?php //echo $res[0]['contact'] ?><!--">-->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal fade" id="deleteModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Some text in the modal.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <div class="col-lg-4">
                    <div class="single-destinations">
                        <!--                        <div class="thumb">-->
                        <!--                            <img src="--><?php //echo $row->photo ?><!--" alt="">-->
                        <!--                        </div>-->
                        <div class="details">
                            <h4 class="d-flex justify-content-between">
                                <span><?php echo $row->h_name ?></span>


                                <div class="star">


                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($row->H_stars <= $i) {
                                            ?>
                                            <span class="fa fa-star "></span>
                                            <?php
                                        } else {

                                            ?>
                                            <span class="fa fa-star checked"></span>

                                            <?php
                                        }

                                    }

                                    ?>


                                    <!-- <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>	 -->
                                </div>
                            </h4>
                            <!-- <p>
                                View on map   |   49 Reviews
                            </p> -->
                            <ul class="package-list">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Swimming pool</span>
                                    <span><?php echo $row->pool ? 'Yes' : 'No' ?></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Gymnesium</span>
                                    <span><?php echo $row->gym ? 'Yes' : 'No' ?></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Wi-fi</span>
                                    <span><?php echo $row->wifi ? 'Yes' : 'No' ?></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Room Service</span>
                                    <span><?php echo $row->roomService ? 'Yes' : 'No' ?></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Air Condition</span>
                                    <span><?php echo $row->airCondition ? 'Yes' : 'No' ?></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Restaurant</span>
                                    <span><?php echo $row->restaurant ? 'Yes' : 'No' ?></span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Price per night</span>
                                    <a href="hotel.php?id=<?php echo $row->h_id ?>"
                                       class="price-btn">$<?php echo $row->h_price ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Agency</h6>
                        <p>
                            The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would much rather look at a presentation and understand the message. It
                            has
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
                            For business professionals caught between high OEM price and mediocre print and graphic
                            output.
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
                    All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a
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
    <?php
}

?>
