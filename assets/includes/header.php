<?php
$page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="css/mycss.css">
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="css/responsive.css">
<!-- Font-Awesome Css -->
<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="css/fonticon.min.css">
<!-- Gallery Css -->
<link type="text/css" rel="stylesheet" href="css/blueimp-gallery.min.css">
<!-- Isotops Css -->
<link type="text/css" rel="stylesheet" href="css/isotops.css">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="css/owl.carousel.css">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="css/owl.theme.css">
<!-- Range Slider Css -->
<link type="text/css" rel="stylesheet" href="css/range-slider.css">
<!-- Light Slider Css -->
<link type="text/css" rel="stylesheet" href="css/lightslider.css">
<!-- Date Picker Css -->
<link type="text/css" rel="stylesheet" href="css/datepicker.css">

<!-- Favicon -->
<link rel="icon" href="images/favicon.png" type="image/png">
</head>


<body id="home-page">
<!--<div id="pageloader">
    <span class="loader"><span></span><span></span><span></span></span>
</div>-->
<div class="upperlay"></div>


<section id="topBar">
    <div class="container regular">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 inner left">
                <ul class="bold">
                    <li><a href="?">Up to 70% OFF Outdoor Living Sale - Call Us (678) 284-9100!</a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 inner right text-right">
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="javascript:void(0)" class="log">My Account</a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- topBar -->


<header>
    <div class="container regular relative">
        <div class="logo ease">
            <a href="index.php"><img src="images/logo.png" alt="" class="img"></a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease scrollbar">
            <ul id="nav" class="relative clearfix">
                <li class="<?php if($page=="index"){echo 'active';} ?>">
                    <a href="index.php">Home</a>
                </li>
                <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
                    <a href="buy-wholesale.php">Furniture</a>
                </li>
                <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
                    <a href="buy-wholesale.php">Sofa</a>
                </li>
                <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
                    <a href="buy-wholesale.php">Beds</a>
                </li>
                <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
                    <a href="buy-wholesale.php">Dining</a>
                </li>
                <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
                    <a href="buy-wholesale.php">Study</a>
                </li>
                <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
                    <a href="buy-wholesale.php">Kitchens</a>
                </li>
            </ul>
            <ul class="miniNav">
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="javascript:void(0)" class="log">My Account</a></li>
            </ul>
        </nav>
        <form action="" method="post">
            <div class="inner relative">
                <input type="text" class="txtBox" name="search" id="search" placeholder="Search">
                <button type="submit"><i class="fi-search"></i></button>
            </div>
        </form>
        <div id="cart">
            <a class="fi-cart" href="javascript:void(0)"></a>
            <div id="cartList" class="scrollbar ease">
                <div class="basket">
                    <span class="bold">Your Shopping Cart</span> -<samp><a href="checkout.php">to adjust</a></samp>
                </div>
                <div class="orderShip text-center">Order now and your order will be shipped for free!</div>
                <ul class="checkList">
                    <li>
                        <div class="pro_cart">
                            <div class="ico">
                                <a href="?"><img src="images/items/1.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Green Office Chair</a></h4>
                            </div>
                        </div>
                        <div class="size_cart"><span>XL</span></div>
                        <div class="price_cart">
                            <div class="price">$ 270.00</div>
                            <span class="closeBtn"><samp>Delete</samp></span>
                        </div>
                    </li>
                    <li>
                        <div class="pro_cart">
                            <div class="ico">
                                <a href="?"><img src="images/items/2.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Cover Wood Table</a></h4>
                            </div>
                        </div>
                        <div class="size_cart"><span>S</span></div>
                        <div class="price_cart">
                            <div class="price">$ 270.00</div>
                            <span class="closeBtn"><samp>Delete</samp></span>
                        </div>
                    </li>
                    <li>
                        <div class="pro_cart">
                            <div class="ico">
                                <a href="?"><img src="images/items/3.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Study Wood Chair</a></h4>
                            </div>
                        </div>
                        <div class="size_cart"><span>M</span></div>
                        <div class="price_cart">
                            <div class="price">$ 270.00</div>
                            <span class="closeBtn"><samp>Delete</samp></span>
                        </div>
                    </li>
                    <li>
                        <div class="pro_cart">
                            <div class="ico">
                                <a href="?"><img src="images/items/4.png" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="?">Corona Classic Wood Table</a></h4>
                            </div>
                        </div>
                        <div class="size_cart"><span>XS</span></div>
                        <div class="price_cart">
                            <div class="price">$ 270.00</div>
                            <span class="closeBtn"><samp>Delete</samp></span>
                        </div>
                    </li>
                </ul>
                <div class="orderTable">
                    <table>
                        <tr>
                            <td>Subtotal:</td>
                            <td class="price">$ 4363.64</td>
                        </tr>
                        <tr>
                            <td>Indication shipping:</td>
                            <td class="price"><span class="color">Free</span></td>
                        </tr>
                        <tr>
                            <td class="bold">Total:</td>
                            <td class="price">$ 4363.64</td>
                        </tr>
                    </table>
                </div>
                <div class="bTn"><a href="shopping-cart.php" class="readBtn">To Checkout</a></div>
            </div>
        </div>
        <div id="heart">
            <a class="fi-heart" href="javascript:void(0)"></a>
        </div>
        <div id="find">
            <a class="fi-search" href="javascript:void(0)"></a>
        </div>
        <div class="clearfix"></div>
    </div>
</header><!-- header -->


<section id="loginSec" class="regular scrollbar">
    <div class="table_dv">
        <div class="table_cell">
            <div id="signup">
                <div class="inner">
                    <h3>Register</h3>
                    <div class="crosBtn">×</div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input class="txtBox" id="fname" name="firstName" type="text" placeholder="First Name" required="">
                            </div>
                            <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input class="txtBox" id="lname" name="lastName" type="text" placeholder="Last Name" required="">
                            </div>
                            <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input class="txtBox" id="phone" name="phone" type="text" placeholder="Phone" required="">
                            </div>
                            <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input class="txtBox" id="password" name="password" type="password" placeholder="Password" required="">
                            </div>
                            <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input class="txtBox" id="email" name="email" type="text" placeholder="Email" required="">
                            </div>
                            <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="rememberBtn">
                                    <input type="checkbox" id="confirm" tabindex="1" name="confirm">
                                    <label for="confirm">By signing up, you confirm that you agree with our <a href="?">Terms & Conditions</a> and <a href="?">Privacy Policy</a></label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="cmd" value="signup" class="readBtn"><i class="fa fa-check"></i>Register</button>
                    </form>
                    <div class="oRLine text-center relative"><span>OR</span></div>
                    <div class="haveAccount text-center">
                        <span>Already have an account ?</span>
                        <a href="javascript:void(0)" id="user">Login</a>
                    </div>
                </div>
            </div><!-- signUp -->

            <div id="login">
                <div class="inner">
                    <h3>Login</h3>
                    <div class="crosBtn">×</div>
                    <form action="" method="post">
                        <div class="txtBoxGrp">
                            <input class="txtBox" id="email" placeholder="Email" name="email" type="text" required="">
                        </div>
                        <div class="txtBoxGrp">
                            <input type="password" id="password" name="password" class="txtBox" placeholder="Password" required="">
                        </div>
                        <div class="txtBoxGrp">
                            <div class="rememberBtn pull-left">
                                <input type="checkbox" id="rememberMe" tabindex="1" name="remeberMe">
                                <label for="rememberMe">Remember me</label>
                            </div>
                            <a href="javascript:void(0)" id="pass" class="pull-right">Forgot Password ?</a>
                            <div class="clearfix"></div>
                        </div>
                        <button type="submit" name="cmd" value="login" class="readBtn"><i class="fa fa-sign-in"></i>Sign In</button>
                        <div class="oRLine text-center relative"><span>OR</span></div>
                        <div class="haveAccount text-center">
                            <span class="margin-right-15">Don’t have an account ?</span>
                            <a href="javascript:void(0)" id="member">Register</a>
                        </div>
                    </form>
                </div>
            </div><!-- login -->

            <div id="forgtPas">
                <div class="inner">
                    <div class="crosBtn">×</div>
                    <h4 class="regular">Reset Password</h4>
                    <form action="" method="post">
                        <p>Enter the email address associated with your account, and we’ll email you a link to reset your password.</p>
                        <div class="txtBoxGrp">
                            <input class="txtBox" id="email" placeholder="Email" name="email" type="text">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="readBtn"><i class="fa fa-check"></i>Send Email</button>
                        </div>
                    </form>
                </div>
            </div><!-- forgtPas -->
        </div>
    </div>
</section><!-- forgtPas -->