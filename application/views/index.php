
<section id="slider" class="relative" style="background-image:url('<?=get_site_image_src("images/",
     $site_content['image'],'thumb_') ?>')">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
          <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item slides slide1 active"></div>
            <div class="item slides slide2"></div>
            <div class="item slides slide3"></div>
            <div class="item slides slide4"></div>
        </div>
        <!-- Controls -->
        <div class="leftBtn ease">
            <a class="btns prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="left" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <h1> this is uploaded to  sad github</h1>
        </div>
        <div class="rightBtn ease">
            <a class="btns next" href="#myCarousel" role="button" data-slide="next">
                <span class="right" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- <div class="_inner">
        <div class="table_dv">
            <div class="table_cell">
                <div class="container relative regular text-center">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-1"></div>
                        <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                            <div class="content">
                                <h1>New Way To Design Your Home</h1>
                                <div class="prc">Only <span class="price">$ 205.00</span></div>
                                <p>If you love the outrageous, the provocative or the novel, our furniture designers will always create new styles that are fabulous and imaginative for every room in your house. The simple statement of a contemporary sofa, the soothing simplicity of a contemporary bedroom - We have the ultimate in style.</p>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>
        </div>
    </div> -->
</section><!-- slider -->


<section id="deals" class="sec_marg" >
    <div class="container regular">
        <h1 class="main_heading text-center"><?=$site_content['section2_heading']?></h1>
        <div class="row deals1">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 LSide">
                <div class="inner" style="background-image:url('<?=get_site_image_src("images/",
                     $site_content['image1'],'thumb_') ?>')">
                    <div class="cnt">
                        <h2><span class="regular"><?=$site_content['img1_heading']?></span>
                             <?=$site_content['img1_heading2']?></h2>
                        <div class="bTn"><a href="?" class="readBtn"> 
                             <?=$site_content['img1_link_text']?></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 RSide">
                <ul class="clearfix">
                 <?php for($i=1; $i<=4; $i++): ?>
                    <li>
                        <a href="?" class="inner">
                            <div class="image">
                            <img src="<?= get_site_image_src("images", $site_content['image'.($i+1)], 'thumb_'); ?>" alt=""></div>
                            <h4><?=$site_content['cat1_heading'.$i]?></h4>
                        </a>
                    </li>
                    <!-- <li>
                       
                    <li>
                        <a href="?" class="inner">
                            <div class="image"><img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/4.png"></div>
                            <h4>Wood Chair</h4>
                        </a>
                    </li> -->
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
        
        <div class="row deals2">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 LSide pull-right">
                <div class="inner" style="background-image:url('<?=get_site_image_src("images/",
                     $site_content['image6']) ?>')">
                    <div class="cnt">
                        <h2><span class="regular"><?=$site_content['img2_heading']?></span>
                             <?=$site_content['img2_heading2']?></h2>
                        <div class="bTn"><a href="?" class="readBtn">
                            <?=$site_content['img2_link_text']?></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 RSide">
                <ul class="clearfix">
                <?php for($i=1; $i<=4; $i++): ?>
                    <li>
                        <a href="?" class="inner">
                            <div class="image">
                            <img src="<?= get_site_image_src("images", $site_content['image'.($i+6)], 'thumb_'); ?>" alt=""></div>
                            <h4><?=$site_content['cat2_heading'.$i]?></h4>
                        </a>
                    </li> 
                    <!-- <li>
                        <a href="?" class="inner">
                            <div class="image"><img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/6.png"></div>
                            <h4>Simple Chair</h4>
                        </a>
                    </li>
                    <li>
                        <a href="?" class="inner">
                            <div class="image"><img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/7.png"></div>
                            <h4>Office Chair</h4>
                        </a>
                    </li>
                    <li>
                        <a href="?" class="inner">
                            <div class="image"><img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/8.png"></div>
                            <h4>Wood Chair</h4>
                        </a>
                    </li>  -->
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="offer" class="sec_marg">
    <div class="container regular">
        <div class="row inner">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="image relative">
                    <!-- <div class="circle">On Sale<span class="price">$ 40</span></div> -->
                    <img src="<?= get_site_image_src("images", $site_content['image11'], 'thumb_'); ?>" alt="" data-src="images/sofa.png">
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <h1 class="main_heading"><?=$site_content['discount_heading']?><span class="price">50%</span></h1>
                <p><?=$site_content['discount_detail']?></p>
                <a href="?" class="readBtn"><?=$site_content['discount_text']?></a>
            </div>
        </div>
    </div>
</section><!-- offer -->


<section id="gallery" class="sec_marg">
    <div class="container regular">
        <h1 class="main_heading text-center">Our Collection</h1>
        <div class="isotops_list">
            <div class="isotops_toggle"><span class="fa fa-align-center margin-right-5"></span> Select Category</div>
            <div class="row">
                <ul class="isotops text-center">
                    <li data-filter="*" class="selected">All</li>
                    <li data-filter=".furniture">Furniture</li>
                    <li data-filter=".sofa">Sofa</li>
                    <li data-filter=".chair">Chair</li>
                    <li data-filter=".study">Study</li>
                    <li data-filter=".other">Other</li>
                </ul>
            </div>
        </div>
        <ul class="iso_container gallery">
            <li class="isotops_item sofa study other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/1.png">
                    <div class="overlay">
                        <a href="images/items/1.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item furniture chair study">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/2.png">
                    <div class="overlay">
                        <a href="images/items/2.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item sofa chair other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/3.png">
                    <div class="overlay">
                        <a href="images/items/3.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item furniture study other">
                <div class="inner">
                    <img src="images/fake.png" alt="" data-src="images/items/4.png">
                    <div class="overlay">
                        <a href="images/items/4.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item sofa chair other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/5.png">
                    <div class="overlay">
                        <a href="images/items/5.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item furniture chair study">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/6.png">
                    <div class="overlay">
                        <a href="images/items/6.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item sofa other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/7.png">
                    <div class="overlay">
                        <a href="images/items/7.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item furniture study other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/8.png">
                    <div class="overlay">
                        <a href="images/items/8.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item sofa chair other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/9.png">
                    <div class="overlay">
                        <a href="images/items/9.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
            <li class="isotops_item furniture study other">
                <div class="inner">
                    <img src="<?=base_url()?>assets/images/fake.png" alt="" data-src="images/items/10.png">
                    <div class="overlay">
                        <a href="images/items/10.png" class="fancybox" data-gallery><i class="fi-file"></i></a>
                        <a href="product-detail.php" class="view"><i class="fi-link"></i></a>
                        <a href="?" class="cart"><i class="fi-cart"></i></a>
                    </div>
                </div>
            </li>
        </ul>
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev"><i class="fa fa-angle-left"></i></a>
            <a class="next"><i class="fa fa-angle-right"></i></a>
            <a class="close">×</a>
        </div>
    </div>
</section><!-- gallery -->
<!---------testimonials------------------------------>
<?php
    if(!empty($testimonials)):
?>
<section id="testimonial" class="sec_marg">
    <div class="container regular">
        <h1 class="main_heading text-center"><?=$site_content['client_heading']?></h1>
        <div id="owl-client" class="owl-carousel owl-theme">
             <?php
                foreach($testimonials as $testimonial):
              ?>
            <div class="inner">
                <div class="icon"><img src="<?= get_site_image_src('testimonials', $testimonial->image, 'thumb_', true); ?>" alt="
                         <?=$testimonial->name?>">
            </div>
                <div class="content">
                    <span class="profession"><class="scrollbar"><?=$testimonial->detail?></span>
                </div>
                <h4><?=$testimonial->name?><span><?=$testimonial->designation?></span></h4>
                <div class="clearfix"></div>
                   
            </div>
            <!-- <div class="inner">
                <div class="icon"><img src="<?=base_url()?>assets/images/client/2.jpg" alt=""></div>
                <div class="content">
                    <p class="scrollbar">Awesome experience! I will be using Hero for other products for sure. The response rate and communication has been the best I've experienced on this platform for sure.</p>
                </div>
                <h4>Gavinireland<span>CEO, Omuk Group</span></h4>
                <div class="clearfix"></div>
            </div>
            <div class="inner">
                <div class="icon"><img src="<?=base_url()?>assets/images/client/3.jpg" alt=""></div>
                <div class="content">
                    <p class="scrollbar">Excellent work, it was done quickly and exactly to my specifications. I will definitely use herosolutions again. There was some miscommunication in the initial stages, however Hero Solutions turned out to be an awesome choice!! I am very pleased with the outcome,would recommend!! A+ Service.</p>
                </div>
                <h4>Purehrsolutions<span>CEO, Omuk Group</span></h4>
                <div class="clearfix"></div>
            </div> -->
            <?php
                         endforeach;
                       ?>
     </div> 
    </div>
</section><!-- testimonial -->

<?php
    endif;
?>