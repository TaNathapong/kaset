<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tracking - GreenHouse</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kanit' rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .boxFollow{


        margin-top: 20px;
        margin-right: 10px;
        padding-left: 10px;
        padding-right: 10px;

    }
    .textFollow{
        font-size: 18px;

    }
    .textlike:hover{
        border-bottom: solid 5px;

    }
    @font-face {
        font-family: 'bangna-new';
        src: url('fonts/bangna-new.ttf')  format('truetype');
    }
    h2{
        font-family: 'bangna-new';
    }
    </style>
</head>
<body>


    <?php include'header.php' ?> <!-- header เรียกไฟล์ชื่อ header.php -->

    <!-- start ส่วนหัว -->
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2 style="font-family:url('fonts/bangna-new.ttf');">รายการโปรด</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end ส่วนหัว -->


    <style type="text/css">
    .boxleft a{
        display: block;
        font-size: 20px;
        margin-bottom: 5px;
        margin-left: 5px;
        text-decoration-line: none;
        color: #38b839;
        border:solid 2px;
        border-radius: 5px;
        border-color: #efefef;
        background-color: #efefef;
    }
    .boxleft a:hover{
        background-color: #38b839;
        border:solid 2px;
        border-radius: 5px;
        color: white;
    }
    .boxleft a span{
        color: gray;
    }
    .textFollow{
        color: #38b839;
        font-size: 30px;
    }
    </style>
    <div class="row">

        <div class="col-sm-12">
            <!-- start boxFollow -->
            <div class="boxFollow">

                <div class="maincontent-area">
                    <div class="row">
                        <div class="latest-product">
                            <div class="col-md-2" >
                                <div class="boxleft">
                                    <a href="customer-profile.php"><span class="glyphicon glyphicon-user"></span> คุณณเดชน์</a>
                                    <a href="customer-profile.php"><span class="glyphicon glyphicon-map-marker"></span> ที่อยู่ของคุณ</a>
                                    <a href="order-list.html"><span class="glyphicon glyphicon-shopping-cart"></span> รายการสั่งซื้อ</a>
                                    <a href="tracking.php"><span class="glyphicon glyphicon-heart"></span> รายการชื่นชอบ</a>
                                    <a href="after-order.php"><span class="glyphicon glyphicon-list-alt"></span> ประวัติการสั่งซื้อ</a>
                                    <a href="customer-profile.php"><span class="glyphicon glyphicon-cog"></span> การตั้งค่า</a>

                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h2 class="textFollow">สินค้าที่ชอบ</h2>
                                    </div>
                                    <div class="col-md-7">
                                        <form>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                                <input type="text" class="form-control" name="search" placeholder="ค้นหาอะไรก็เจอ">
                                            </div>
                                        </form>
                                    </div>
                                </div></br>
                                <div class="product-carousel">
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-1.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>หยิบใส่ตะกร้า</a>
                                                <a href="show-products-buyer.html" class="view-details-link"><i class="fa fa-link"></i>รายละเอียด</a>
                                            </div>
                                        </div>

                                        <h2><a href="show-products-buyer.html">แครอท</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$700.00</ins> <del>$800.00</del>
                                        </div>
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>
                                        </div>

                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-2.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>หยิบใส่ตะกร้า</a>
                                                <a href="show-products-buyer.html" class="view-details-link"><i class="fa fa-link"></i>รายละเอียด</a>
                                            </div>
                                        </div>

                                        <h2><a href="show-products-buyer.html">มะเขือเทศ</a></h2>
                                        <div class="product-carousel-price">
                                            <ins>$899.00</ins> <del>$999.00</del>
                                        </div>
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>

                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-3.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>หยิบใส่ตะกร้า</a>
                                                <a href="show-products-buyer.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                            </div>
                                        </div>

                                        <h2><a href="show-products-buyer.html">มันฝรั่ง</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins> <del>$425.00</del>
                                        </div>
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>

                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-4.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> หยิบใส่ตะกร้า</a>
                                                <a href="show-products-buyer.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                            </div>
                                        </div>

                                        <h2><a href="show-products-buyer.html">ข้าวโพค</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$200.00</ins> <del>$225.00</del>
                                        </div>
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>

                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-5.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> หยิบใส่ตะกร้า</a>
                                                <a href="show-products-buyer.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                            </div>
                                        </div>

                                        <h2><a href="show-products-buyer.html">เผือก</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$1200.00</ins> <del>$1355.00</del>
                                        </div>
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>

                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-6.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> หยิบใส่ตะกร้า</a>
                                                <a href="show-products-buyer.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                            </div>
                                        </div>

                                        <h2><a href="show-products-buyer.html">Samsung gallaxy note 4</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins>
                                        </div>
                                        <div class="product-option-shop">
                                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="latest-product"><hr>
                                    <h2 class="textFollow">สถานที่ท่องเที่ยวที่ชอบ</h2>
                                    <div class="product-carousel">
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="http://www.explorer-asia.com/wp-content/uploads/2011/04/Sabah.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="seller-profile.html" class="view-details-link"><i class="fa fa-link"></i>รายละเอียด</a>
                                                </div>
                                            </div>

                                            <h2><a href="seller-profile.htmll">Sabah</a></h2>

                                            <div class="product-option-shop">
                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="http://www.greenlifestylemag.com.au/files/imagecache/node/features/Bali-travel.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="seller-profile.html" class="view-details-link"><i class="fa fa-link"></i>รายละเอียด</a>
                                                </div>
                                            </div>
                                            <h2><a href="seller-profile.html">Bali</a></h2>
                                            <div class="product-option-shop">
                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="http://www.mousetourstravels.com/images/giraffe-serengeti-africa.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="seller-profile.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                                </div>
                                            </div>
                                            <h2><a href="seller-profile.html">Mousemap</a></h2>

                                            <div class="product-option-shop">
                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=1920x400:format=jpg/path/s54867f23102c3ac6/image/i7570938de42a70a7/version/1457359605/image.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="seller-profile.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                                </div>
                                            </div>
                                            <h2><a href="seller-profile.html">ECO-Jungle</a></h2>
                                            <div class="product-option-shop">
                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-f-image">
                                                <img src="https://s-media-cache-ak0.pinimg.com/736x/7d/72/20/7d722000b9dd5ffee0935ed2e0d92eb7--permaculture-dream-garden.jpg" alt="">
                                                <div class="product-hover">
                                                    <a href="seller-profile.html" class="view-details-link"><i class="fa fa-link"></i> รายละเอียด</a>
                                                </div>
                                            </div>
                                            <h2><a href="seller-profile.html">Costa Rica</a></h2>

                                            <div class="product-option-shop">
                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">เลิกติดตาม</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End สถานที่ถูกใจ -->
                        </div>
                    </div>
                </div> <!-- End รายการถูกใจ -->


            </div> <!-- end boxFollow -->
            <!-- start boxFollow -->
        </div>
    </div>



    <div class="footer-top-area">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Electronics</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 eElectronics. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>
</html>
