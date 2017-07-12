<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ประวัติผู้ซื้อ - GreenHouse</title>

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
    <link rel="stylesheet" href="css/flipclock.css">
    <link rel="stylesheet" href="css/flipclock.scss">

</head>

<body>
<style>
.container{
    font-family: 'Athiti', sans-serif;
}
</style>

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <div class="user-menu text-right">
                    <ul>
                        <li><a href="customer-proflie.php"><i class="fa fa-user"></i> บัญชีของฉัน</a></li>
                        <li><a href="login.html"><i class="fa fa-user"></i> เข้าสู่ระบบ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

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
                    <li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="shop.php">ตลาด</a></li>
                    <li><a href="travel.html">ท่องเที่ยว</a></li>
                    <li><a href="contract.html">ติดต่อเรา</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="index.php">Green<span>House</span></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="auction-detail.html">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" >
                <div class="product-bit-title text-center">
                    <h2>ข้อมูลผู้ซื้อ</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--รายละเอียดผู้ซื้อ-->
<div class="single-product-area">

    <div class="container">
        <div class="product-content-right">
            <div class="row">
                <div class="col-sm-6">
                    <div class="product-images">
                        <div class="product-main-img">
                            <img src="http://moo.upyim.com/wp-content/uploads/2017/06/1-569.jpg" class="img-circle" alt="Forest" width="304" height="236">
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="product-inner">
                        <h2 class="product-name">ข้อมูลผู้ซื้อ</h2>
                        <div class="product-breadcroumb">
                            <a href="">ติดตาม</a>
                            <a href="">จำนวนสินค้า</a>
                            <a href="">จำนวนผู้เข้าชม</a>
                        </div>
                        <hr/>
                        <div role="tabpanel">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <h2>รายละเอียดผู้ซื้อ</h2>
                                    <p>ชื่อ นายณเดชน์  คูกิมิยะ</p>
                                    <p>ชื่อเล่น เวียร์</p>
                                    <p>	ที่อยู่: บ้านป่าหว้า โคกม่วง อำเภอภาชี พระนครศรีอยุธยา</p>
                                    <p>	โทรศัพท์: 0624796962</p>
                                    <p>	มือถือ: 0897888673  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br><br>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <style type="text/css">
            .mySlides {display:none}
            .demo {cursor:pointer}
            </style>

            <script> <!-- javascript for images slider gallory -->
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                }
                x[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " w3-opacity-off";
            }
            </script>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>


<br/>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="col-md-4 text-center">
            <a href="tracking.php">
                <img src="icon/016-lace.png"  style="height: 200px;padding: 15px;">
                <p>รายการโปรด</p>
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a href="by-detail.html">
                <img src="icon/009-commerce.png"  style="height: 200px;padding: 15px;">
                <p>รายการสั่งซื้อ</p>
            </a>
        </div>
        <div class="col-md-4 text-center">
            <a href="by-announce.html">
                <img src="icon/013-list.png"  style="height: 200px;padding: 15px;">
                <p>ประกาศซื้อ</p>
            </a>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<br/>


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
                        <li><a href="">My account</a></li>
                        <li><a href="">Order history</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li><a href="">Vendor contact</a></li>
                        <li><a href="">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="">Mobile Phone</a></li>
                        <li><a href="">Home accesseries</a></li>
                        <li><a href="">LED TV</a></li>
                        <li><a href="">Computer</a></li>
                        <li><a href="">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Type your email">
                        <input type="submit" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
</div>


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
