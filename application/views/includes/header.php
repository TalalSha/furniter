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
        <a href="index.php"><img src="<?= SITE_IMAGES.'/images/'.$site_settings->site_logo ?>" alt="" class="img"></a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease scrollbar">
            <ul id="nav" class="relative clearfix">
            
                <li class="<?php if($page=="index" ){echo 'active';} ?>">
                    <a href="<?=base_url()?>">Home</a>
                </li>
          
            <?php foreach ($cats as $cat) { ?>
                <li class="<?php if($page=="index" || $page=="catalog"){echo 'active';} ?>">
                    <a href="<?=base_url()?>catalog/<?=doEncode($cat->id)?>"><?=$cat->title?></a>
                </li>
            <?php }?>

                <!-- <li class="<?php if($page=="buy-wholesale"){echo 'active';} ?>">
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
                </li> -->
            </ul>
            <ul class="miniNav">
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="javascript:void(0)" class="log">My Account</a></li>
            </ul>
        </nav>
        <form action="<?=base_url()?>search_pro/" method="post">
            <div class="inner relative">
                <input type="text" class="txtBox" name="search" id="search" required placeholder="Search">
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
                <ul class="checkList" id="newit">
                    <?php $i = 1; ?>
                        <?php foreach($carts as $cart){?>
                        <li>
                        <input type="hidden" name="rowid" value="<?=$cart['rowid']?>" class="row_id<?=$i?>" >
                            <div class="pro_cart">
                                <div class="ico">
                                    <a href="<?=base_url()?>product/<?=doEncode($cart['id'])?>"><img src="<?= get_site_image_src("images/", $cart['image']); ?>" alt=""></a>
                                </div>
                                <div class="pro_name">
                                    <h4><a href="<?=base_url()?>product/<?=doEncode($cart['id'])?>"><?=$cart['name']?></a></h4>
                                </div>
                            </div>
                            <div class="qtyBtn">
                                        <input type="button" value="-" class="qtyminus readBtn">
                                        <input type="button" name="quantity" value="<?=$cart['qty']?>" class="qty">
                                        <input type="button" value="+" class="qtyplus readBtn">
                                    </div>
                            
                            <div class="price_cart " id="dl" >
                                <div class="price"><?=$cart['price']?></div>
                                <span class="closeBtn"  id="<?=$i?>"><samp>Delete</samp></span>
                            </div>
                        </li>
                        <div class="orderTable">
<table>
<tr>
                            <td>Subtotal:</td>
                            <td class="price">$ <?= $this->cart->format_number($cart['subtotal']); ?></td>
                        </tr>
</table>
</div>
                        <?php $i++; } ?>
                    <!-- <li>
                        <div class="pro_cart">
                            <div class="ico">
              
                        </div>
                    </li> -->
                </ul>
                <div class="orderTable" id="tbl">
                    <table>
            
                     
                       
                        <tr>
                            <td>Indication shipping:</td>
                            <td class="price"><span class="color">Free</span></td>
                        </tr>
                        <tr>
                            <td class="bold">Total:</td>
                            <td class="price">$ <?= $this->cart->total($cart['total']); ?></td>
                        </tr>
                    </table>
                </div>
                
                <div class="bTn"><a href="<?=base_url()?>shopping_cart/" class="readBtn">To Checkout</a></div>
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