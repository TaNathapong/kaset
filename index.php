<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- star icon-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<style>
input[type=text] {
    width: 50%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('search-icon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
    width: 100%;
}
</style>

<body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div class="user-menu text-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> บัญชีของฉัน</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> เข้าสู่ระบบ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.html">Green<span>House</span></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">หน้าแรก</a></li>
                        <li><a href="shop.html">ตลาด</a></li>
                        <li><a href="#">ท่องเที่ยว</a></li>
                        <li><a href="#">ติดต่อเรา</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="slide-content text-center">
                        <h3>ค้นหาสินค้าที่ต้องการ</h3>
                        <form>
                            <input type="text" name="search" placeholder="Search..">
                        </form>
                        <br/>
                        <a href="" class="readmore">ลงประกาศ</a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div><!-- End search area -->

    <div class="promo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2>สินค้าแนะนำ</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>

                                <div class="promo-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Apple new mac book 2015 March </a></h2>
                                <div class="promo-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Apple new i phone 6</a></h2>

                                <div class="promo-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Sony playstation microsoft</a></h2>

                                <div class="promo-price">
                                    <ins>$200.00</ins> <del>$225.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>

                                <div class="promo-price">
                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="promo-price">
                                    <ins>$400.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="promo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2>สินค้ามาใหม่</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>

                                <div class="promo-price">
                                    <ins>$700.00</ins> <del>$800.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Apple new mac book 2015 March </a></h2>
                                <div class="promo-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Apple new i phone 6</a></h2>

                                <div class="promo-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Sony playstation microsoft</a></h2>

                                <div class="promo-price">
                                    <ins>$200.00</ins> <del>$225.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>

                                <div class="promo-price">
                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> ใส่ลงตะกร้า</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> ดูรายละเอียด</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                <div class="promo-price">
                                    <ins>$400.00</ins>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="shop-area">

        <div class="container">
            <h2>สินค้า</h2>
            <div class="col-md-3">
                <div class="category-list">
                    <ul class="w3-ul w3-border">
                        <h3>ประเภทสินค้า</h3>
                        <li><a href="">ทั้งหมด</a></li>
                        <li><a href="">ผัก</a></li>
                        <li><a href="">ผลไม้</a></li>
                        <li><a href="">OTOP</a></li>
                        <li><a href="">Premium</a></li>
                        <li><a href="">อุปกรณ์ทางการเกษตร</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-2.jpg" alt="">
                            </div>

                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-1.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-3.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-4.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-2.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-1.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-3.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-4.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-2.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-1.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-3.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="img/product-4.jpg" alt="">
                            </div>
                            <h2>Apple new mac book 2015 March </h2>
                            <div class="shop-price">
                                <ins>$899.00</ins> <del>$999.00</del>
                            </div>

                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">ใส่ลงตะกร้า</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-top-area">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Green<span>House</span></h2>
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
                        <p>&copy; 2015 GreenHouse. All Rights Reserved.</a></p>
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