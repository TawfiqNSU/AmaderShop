<?php
include_once 'database.php';
$result = mysqli_query($conn, "SELECT * FROM mouse WHERE `product_code`=27985");

?>
<!doctype html>

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>



    <meta charset="UTF-8">

    <title>Aorus M4 RGB Mouse</title>

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

                        <li class="menu-has-children active">

                            <a href="index.html">Home</a>

                        </li>

                        <li class="menu-has-children active">

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

        </div>





        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="cont maincont">
                        <ul class="b-crumbs">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="catalog-gallery.html">All Products</a></li>
                            <li>Product</li>
                        </ul>
                        <article>
                            <?php
                            $row = mysqli_fetch_array($result)
                            ?>
                            <div class="prod">
                                <div class="prod-slider-wrap prod-slider-shown">
                                    <div class="flexslider prod-slider" id="prod-slider">
                                        <ul class="slides">
                                            <li>
                                                <a data-fancybox-group="prod" class="fancy-img" href="<?php base64_encode($row['image']); ?>">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="prod-slider-count"> 
                                            <p class="hover-label prod-slider-zoom"><i class="icon ion-search"></i><span>Zoom In</span></p>
                                        </div>
                                    </div>
                                    <div class="flexslider prod-thumbs" id="prod-thumbs">
                                        <ul class="slides">
                                            <li>
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="prod-cont">

                                    <p class="prod-categs"><a href="#">Gaming Mice</a>, <a href="#"><?php echo $row["brand"];?></a></p>
                                    <h1><?php echo $row["name"]; ?></h1>
                                    <div class="variations_form cart">
                                        <p class="prod-price"><?php echo $row["price"];?>.00 Tk.</p>
                                        <p class="prod-excerpt">Pellentesque habitant morbi tristique senectus et netus
                                            et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                            ultricies eget... <a id="prod-showdesc" class="prod-excerpt-more" href="#">read more</a></p>
                                        <div class="prod-add">

                                            <button type="submit" class="button"><i class="icon ion-android-cart"></i>
                                                Add to cart</button>
                                            <p class="qnt-wrap prod-li-qnt">
                                                <a href="#" class="qnt-plus prod-li-plus"><i class="icon ion-arrow-up-b"></i></a>
                                                <input type="text" value="1">
                                                <a href="#" class="qnt-minus prod-li-minus"><i class="icon ion-arrow-down-b"></i></a>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="prod-props">
                                        <dl class="product_meta">
                                            <dt>Product Code:</dt>
                                            <dd><?php echo $row["product_code"]; ?></dd>
                                            <dt>Brand:</dt>
                                            <dd><a href="#"><?php echo $row["brand"]; ?></a></dd>
                                            <dt>Weight</dt>
                                            <dd><?php echo $row["weight"]; ?></dd>
                                            <dt>Dimensions</dt>
                                            <dd><?php echo $row["dimension"]; ?></dd>
                                            <dt>Сolor</dt>
                                            <dd><?php echo $row["color"]; ?></dd>
                                            <dt>Manufacturer</dt>
                                            <dd><?php echo $row["manufacturer"]; ?></dd>
                                            <dt>Material</dt>
                                            <dd><?php echo $row["material"]; ?></dd>
                                        </dl>
                                    </div>
                                </div>
                                <p class="prod-badge">
                                    <span class="badge-1">TOP SELLER</span>
                                </p>
                            </div>
                            <div class="prod-tabs-wrap">
                                <ul class="prod-tabs">
                                    <li id="prod-desc" class="active" data-prodtab-num="1">
                                        <a data-prodtab="#prod-tab-1" href="#">Description</a>
                                    </li>
                                    <li data-prodtab-num="2" id="prod-props">
                                        <a data-prodtab="#prod-tab-2" href="#">Additional information</a>
                                    </li>
                                </ul>
                                <div class="prod-tab-cont">
                                    <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">
                                        Description</p>
                                    <div class="prod-tab page-styling prod-tab-desc" id="prod-tab-1">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                    <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Additional
                                        information</p>
                                    <div class="prod-tab" id="prod-tab-2">
                                        <dl class="prod-tab-props">
                                            <dt>Weight</dt>
                                            <dd><?php echo $row["weight"]; ?></dd>
                                            <dt>Dimensions</dt>
                                            <dd><?php echo $row["dimension"]; ?></dd>
                                            <dt>Сolor</dt>
                                            <dd>
                                                <p><?php echo $row["color"]; ?></p>
                                            </dd>
                                            <dt>Manufacturer</dt>
                                            <dd>
                                                <p><a href="#"><?php echo $row["manufacturer"]; ?></a></p>
                                            </dd>
                                            <dt>Material</dt>
                                            <dd>
                                                <p><?php echo $row["material"]; ?></p>
                                            </dd>
                                        </dl>
                                    </div>


                                </div>
                            </div>

                            <?php
                            $res = mysqli_query($conn, "SELECT * FROM `mouse` WHERE `keyword` LIKE '%mouse%' AND `product_code` != 27985")
                            ?>
                            <h2 class="prod-related-ttl">Related Products</h2>
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($res)) { 
                                if($i<5){?>
                                <div class="row prod-items prod-items-4 ">
                                    <article class=" sectgl-item sectgl-item ">

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
                                                    <p class="prod-i-price"><?php echo $row["price"];?>.00 Tk</p>
                                                    <p class="prod-i-categ"><a href="catalog-gallery.html">Electricity</a>
                                                    </p>
                                                </div>
                                                <h3 class="prod-i-ttl"><a href="product.html"><?php echo $row["name"]; ?></a></h3>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            <?php } } ?>

                        </article>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->


            <!-- Elements -->
            <div class="content-area width-full">
                <div class="maincont page-styling page-full">


                    <div class="container mb20 page-styling row-wrap-container row-wrap-nottl">
                        <div class="row">
                            <div class="cf-lg-4 col-sm-4">
                                <div class="iconbox-item iconbox-i-3">
                                    <div class="iconbox-i-top">
                                        <p class="iconbox-i-img">
                                            <i class="fa fa-road"></i>
                                        </p>
                                        <h3>Financing Services</h3>
                                    </div>
                                    <p>Vestibulum eu odio vitae neque blandit consequat ut nec nisi. Maecenas et velit
                                        sem. Nam egestas lectus vel fringilla accumsan.</p>
                                </div>
                            </div>
                            <div class="cf-lg-4 col-sm-4">
                                <div class="iconbox-item iconbox-i-3">
                                    <div class="iconbox-i-top">
                                        <p class="iconbox-i-img">
                                            <i class="fa fa-truck"></i>
                                        </p>
                                        <h3>Home Delivery</h3>
                                    </div>
                                    <p>Aliquam fermentum tortor lacus, id dictum tellus feugiat non. Donec rutrum ligula
                                        sed dui lobortis, id scelerisque sem volutpat.</p>
                                </div>
                            </div>
                            <div class="cf-lg-4 col-sm-4">
                                <div class="iconbox-item iconbox-i-3">
                                    <div class="iconbox-i-top">
                                        <p class="iconbox-i-img">
                                            <i class="fa fa-shield"></i>
                                        </p>
                                        <h3>Warranty Available</h3>
                                    </div>
                                    <p>Etiam iaculis urna metus, in volutpat dolor faucibus at. Nulla vitae aliquet
                                        justo. Aenean in iaculis sapien. Vivamus rutrum hendrerit egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mb60 page-styling row-wrap-container row-wrap-nottl">
                        <div class="promobox-i promobox-i-hasbtn">
                            <h3>Our terms of services</h3>
                            <p>Nam dictum condimentum eros, eu tincidunt ex hendrerit sed. Fusce eleifend rutrum magna
                                vel scelerisque. Donec purus sapien, tincidunt a congue quis, hendrerit quis massa.</p>
                            <a class="promobox-i-link" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="container-fluid page-styling row-wrap-full product-parallax-bg" style="background-image: url(img/1/product/bg2.jpg);"></div>
                </div>
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

        </div>



        <script src="js/jquery-1.12.3.min.js"></script>

        <script src="js/jquery-plugins.js"></script>

        <script src="js/main.js"></script>


        <script src="1extra/js/jquery-ui.min.js"></script>



</body>

</html>