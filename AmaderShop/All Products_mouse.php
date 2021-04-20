<?php
include_once 'database.php';
$res = mysqli_query($conn, "SELECT * FROM `mouse` WHERE `keyword` LIKE '%mouse%'");
?>
<!doctype html>

<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>



    <meta charset="UTF-8">

    <title>Gaming Mice</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="format-detection" content="telephone=no">



    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900%7COpen+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">



    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/ionicons.min.css">



    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/jquery.formstyler.css">

    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <link rel="stylesheet" href="css/ion.rangeSlider.css">

    <link rel="stylesheet" href="css/jquery.mThumbnailScroller.css">

    <link rel="stylesheet" href="css/chosen.css">



    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/elements.css">

    <link rel="stylesheet" href="css/media.css">

    <link rel="stylesheet" href="css/elements-media.css">


</head>

<body>
    <div id="page" class="site">

        <div class="site-header">



            <p class="h-logo">

                <a href="index.html"><img src="img/logo.png" alt="Amader Dokan"></a>

            </p>
            <!--

    No Space

    -->
            <div class="h-shop">



                <form method="get" action="#" class="h-search" id="h-search">

                    <input type="text" placeholder="Search...">

                    <button type="submit"><i class="ion-search"></i></button>

                </form>


                <ul class="h-shop-links">

                    <li class="h-search-btn" id="h-search-btn"><i class="ion-search"></i></li>


                    <li class="h-shop-icon h-profile">

                        <a href="auth.html" title="My Account">

                            <i class="ion-android-person"></i>

                        </a>

                        <ul class="h-profile-links">

                            <li><a href="auth.html">Login / Registration</a></li>

                            <li><a href="#">Cart</a></li>

                        </ul>

                    </li>



                    <li class="h-cart">

                        <a class="cart-contents" href="#">

                            <p class="h-cart-icon">

                                <i class="ion-android-cart"></i>

                                <span>3</span>

                            </p>

                            <p class="h-cart-total">$510.00</p>

                        </a>

                        <div class="widget_shopping_cart">

                            <div class="widget_shopping_cart_content">

                                <ul class="cart_list">

                                    <li>

                                        <a href="#" class="remove">&times;</a>

                                        <a href="#">



                                            Razer Huntsman TE

                                        </a>

                                        <span class="quantity">1 &times; $180.00</span>

                                    </li>

                                    <li>

                                        <a href="#" class="remove">&times;</a>

                                        <a href="#">



                                            Corsair Harpoon

                                        </a>

                                        <span class="quantity">1 &times; $115.00</span>

                                    </li>

                                    <li>

                                        <a href="#" class="remove">&times;</a>

                                        <a href="#">



                                            SteelSeries Sensei

                                        </a>

                                        <span class="quantity">1 &times; $150.00</span>

                                    </li>

                                </ul>

                                <p class="total"><b>Subtotal:</b> $510.00</p>

                                <p class="buttons">

                                    <a href="#" class="button">View cart</a>

                                    <a href="#" class="button">Checkout</a>

                                </p>

                            </div>

                        </div>

                    </li>



                    <li class="h-menu-btn" id="h-menu-btn">

                        <i class="ion-navicon"></i> Menu

                    </li>

                </ul>

            </div>
            <!--

    No Space

    -->
            <div class="mainmenu">



                <nav id="h-menu" class="h-menu">

                    <ul>

                        <li class="menu-has-children ">

                            <a href="index.html">Home</a>

                        </li>

                        <li class="menu-has-children ">

                            <a href="catalog-gallery.html">Shop</a>



                        </li>

                        <li>

                            <a href="#">About Us</a>

                        </li>

                        <li>

                            <a href="#">Contacts</a>

                        </li>

                        <li>

                            <a href="#">Gallery</a>

                        </li>



                    </ul>

                </nav>



            </div>
            <!--

    No Space

-->
        </div>





        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="cont maincont">

                        <div class="section-top">

                            <h1 class="maincont-ttl">Shop</h1>
                            <ul class="b-crumbs">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="catalog-gallery.html">Products</a></li>
                                <li><a href="product_page_mouse.html">Gaming Mice</a></li>
                            </ul>
                            <div class="section-top-sort">

                                <div class="section-sort">
                                    <p>Sort</p>
                                    <div class="dropdown-wrap">
                                        <p class="dropdown-title section-sort-ttl">Newness</p>
                                        <ul class="dropdown-list">
                                            <li>
                                                <a href="#">Popularity</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">Newness</a>
                                            </li>
                                            <li>
                                                <a href="#">Price: low to high</a>
                                            </li>
                                            <li>
                                                <a href="#">Price: high to low</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="section-sort">
                                    <p>Per Page</p>
                                    <div class="dropdown-wrap">
                                        <p class="dropdown-title section-sort-ttl">All</p>
                                        <ul class="dropdown-list">
                                            <li>
                                                <a href="product_pageVar1_mouse_1.html">9</a>
                                            </li>
                                            <li>
                                                <a href="product_pageVar1_mouse_1.html">All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <?php

                        $i = 1;
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <div class="row prod-items prod-items-4 ">
                                <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">

                                    <?php
                                    $i++; ?>
                                    <div class="sectgl prod-i">
                                        <div class="prod-i-top">
                                            <a class="prod-i-img" href="product.html">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </a>
                                            <div class="prod-i-actions">
                                                <div class="prod-i-actions-in">
                                                    <p class="prod-i-cart">
                                                        <a href="#" class="hover-label prod-addbtn"><i class="icon ion-android-cart"></i><span>Add to
                                                                Cart</span></a>
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="prod-i-bot">
                                            <div class="prod-i-info">
                                                <p class="prod-i-price"><?php echo $row["price"]; ?>.00 Tk</p>
                                                <p class="prod-i-categ"><a href="catalog-gallery.html">Electricity</a>
                                                </p>
                                            </div>
                                            <h3 class="prod-i-ttl"><a href="product.html"><?php echo $row["name"]; ?></a></h3>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        <?php }
                        ?>
                    </div>
            </div>
        </div>
        </main>
    </div>

    </div>


    <div class="container-fluid blog-sb-widgets page-styling site-footer">

        <div class="row">

            <div class="col-sm-12 col-md-4 widget align-center-tablet f-logo-wrap">

                <a href="index.html" class="f-logo">

                    <img src="img/logo.png" alt="logo" style="width: 70%;">

                </a>

                <p><b><i>Best Products. Better Prices</i></b></p>

                <button class="btn callback">Contact Us</button>

            </div>

            <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                <h3 class="widgettitle">Company</h3>

                <ul class="menu">

                    <li>

                        <a href="index.html">Home Page</a>

                    </li>

                    <li>

                        <a href="about.html">About Us</a>

                    </li>

                    <li>

                        <a href="contacts.html">Contacts</a>

                    </li>

                    <li>

                        <a href="index.html">Gallery</a>

                    </li>

                </ul>

            </div>

            <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                <h3 class="widgettitle">Shop</h3>

                <ul class="menu">

                    <li>

                        <a href="#">Gaming Mice</a>

                    </li>

                    <li>

                        <a href="#">Keyboards</a>

                    </li>

                    <li>

                        <a href="#">Headphone</a>

                    </li>

                    <li>

                        <a href="#">Monitor</a>

                    </li>

                </ul>

            </div>

            <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                <h3 class="widgettitle">Account</h3>

                <ul class="menu">

                    <li>

                        <a href="auth.html">My Account</a>

                    </li>

                    <li>

                        <a href="cart.html">Cart</a>

                    </li>

                </ul>

            </div>




        </div>



    </div><!-- #page -->
    <div class="form-validate modal-form" id="modal-form">

        <form action="#" method="POST" class="form-validate">

            <h4>Contact Us</h4>

            <input type="text" placeholder="Your name" data-required="text" name="name">

            <input type="text" placeholder="Your phone" data-required="text" name="phone">

            <input type="text" placeholder="Your email" data-required="text" data-required-email="email" name="email">

            <input class="btn1" type="submit" value="Send">

        </form>

    </div>


    <script src="js/jquery-1.12.3.min.js"></script>

    <script src="js/jquery-plugins.js"></script>

    <script src="js/main.js"></script>


    <script src="1extra/js/jquery-ui.min.js"></script>

</body>

</html>