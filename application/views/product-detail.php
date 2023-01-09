

<section class="subBanner" id="aboutBanner">
    <div class="container relative _inner regular text-center">
        <h1 class="mx_bold">Product Detail</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li><a href="product-list.php">Product List</a></li>
            <li>/</li>
            <li>Product Detail</li>
        </ul>
    </div>
</section><!-- subBanner -->


<section id="proDetail" class="sec_marg">
    <div class="container regular">
        <div class="row outter">
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 LSide">
                <div class="miniSlider">
                <ul id="vertical">
                        <li data-thumb="<?= get_site_image_src("images", $product->image, 'thumb_'); ?>">
                            <img src="<?= get_site_image_src("images", $product->image, ''); ?>" alt="" data-imagezoom="true">
                        </li>
                        <?php foreach($color as $cl){ ?>
                        <li data-thumb="<?=  get_site_image_src("images", $cl->image, 'thumb_'); ?>">
                            <img src="<?= get_site_image_src("images", $cl->image, ''); ?>" alt="" data-imagezoom="true">
                        </li>
                        <?php }?>
                       
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 RSide">
                <div class="content">
                    <h3 class="fancy"><?=$product->title?></h3>
                    <div class="itemPrice price"><?=$product->price?><del>$ 320.00</del></div>
                    <div class="avail">Available: <span class="bold">In Stock</span></div>
                    <hr>
                    <h5>Dimensions:</h5>
                    
                    <p><?=$product->description?></p>
                    
                    <ol class="list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
                        <li>Sed do eiusmod tempor incididunt ut labore.</li>
                        <li>Incididunt labore et dolore magna aliqua.</li>
                        <li>Ut enim ad minim veniam, quis nostrud.</li>
                        <li>Exercitation ullamco ex ea commodo consequat.</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate.</li>
                    </ol>

                    <form class="relative">
                        <div class="itemColor">
                            <ul class="clearfix">
                                <li><h6>Color:</h6></li>
                                <li><span class="iColor" data-color="#212121"></span></li>
                                <li><span class="iColor active" data-color="#019243"></span></li>
                                <li><span class="iColor" data-color="#a86c30"></span></li>
                                <li><span class="iColor" data-color="#496a9f"></span></li>
                                <li><span class="iColor" data-color="#c63837"></span></li>
                            </ul>
                        </div>
                        <div class="itemSize">
                            <ul class="clearfix">
                                <li><h6>Size:</h6></li>
                                <li><span class="iSize" data-size="x_samall">XS</span></li>
                                <li><span class="iSize active" data-size="small">S</span></li>
                                <li><span class="iSize" data-size="medium">M</span></li>
                                <li><span class="iSize" data-size="large">L</span></li>
                                <li><span class="iSize" data-size="x_large">XL</span></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <ul class="bTn clearfix">
                            <li><h6>Qty:</h6></li>
                            <li>
                                <div class="qtyBtn">
                                    <input type="button" value="-" class="qtyminus readBtn">
                                    <input type="button" name="quantity" value="1" class="qty">
                                    <input type="button" value="+" class="qtyplus readBtn">
                                </div>
                            </li>
                            <li>
                                <button type="submit" class="readBtn">Shop Now</button>
                            </li>
                            <li>
                                <a href="?" class="addHeart"><i class="fi-heart"></i></a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="social">
                            <li><h6>Share:</h6></li>
                            <li><a href="?"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="?"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="?"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="?"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                        <input type="hidden" name="itemcolor" id="icolor"/>
                        <input type="hidden" name="itemsize" id="isize"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- proDetail -->

