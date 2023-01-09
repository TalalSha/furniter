
<footer class="relative">
    <div class="container regular">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="footerLogo"><a href="index.php"><img src="<?= SITE_IMAGES.'/images/'.$site_settings->site_footer_logo ?>" alt="" class="img"></a></div>
                <div class="content">
                    <p><?=$site_settings->site_about?></p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content">
                            <h3 class="regular">Categories</h3>
                            <ul>
                            <?php foreach ($cats as $cat) { ?>
                <li class="<?php if($page=="index" || $page=="catalog"){echo 'active';} ?>">
                    <a href="<?=base_url()?>catalog/<?=doEncode($cat->id)?>">
                    <i class="fa fa-angle-right"></i><?=$cat->title?></a>
                </li>
            <?php }?> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content">
                            <h3 class="regular">Helpful Links</h3>
                            <ul>
                                <li><a href="about.php"><i class="fa fa-angle-right"></i>About</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li>
                                <li><a href="return-policy.php"><i class="fa fa-angle-right"></i>My Invoices</a></li>
                                <li><a href="return-policy.php"><i class="fa fa-angle-right"></i>My Profile</a></li>
                                <li><a href="privacy-policy.php"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                                <li><a href="privacy-policy.php"><i class="fa fa-angle-right"></i>Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content">
                            <h3 class="regular">Contact Us</h3>
                            <ul>
                               <li>Address:<a><?=$site_settings->site_address?></a></li>
                                <li>Phone:<a><?=$site_settings->site_phone?></a></li>
                                <li>Email:<a><?=$site_settings->site_email?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container regular text-center">
        <p>Copyright © <?=date('Y')?> <a href="<?=base_url()?>">
            <?=$site_settings->site_name?></a> <?=$site_settings->site_copyright?></p>
            <ul class="social">
                <li><a href="<?=$site_settings->site_facebook?>"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?=$site_settings->site_twitter?>"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?=$site_settings->site_linkedin?>"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?=$site_settings->site_instagram?>"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div><!-- copyright -->
</footer><!-- footer -->


<!-- JS Files -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
        $("#datepicker").datepicker();
    });
</script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/smoothscroll.min.js"></script>
<!-- Gallery Js -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery.blueimp-gallery.min.js"></script>
<!-- Isotope Js -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/isotops.js"></script>
<script type="text/javascript">
    // for load
    $(window).load(function () {
        $('.iso_container').masonry({
            // options
            itemSelector: '.isotops_item'
        });
    });
</script>
<!-- Owl Carousel Js -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/owl.carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#owl-client').owlCarousel({
            autoplay: false,
            stopOnHover: true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            dots: false,
            loop: true,
            items: 1,
            smartSpeed: 2000,
            autoplayTimeout: 10000,
            autoplayHoverPause: true
        });
    });
</script>
<!-- Range Slider Js -->
<script type="text/javascript">
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
    });
</script>
<!-- Light Slider Js -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/lightslider.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //$("#lightSlider").lightSlider();
        $('#vertical').lightSlider({
            gallery: true,
            item: 1,
            auto: true,
            loop: true,
            speed: 2500,
            pause: 8000,
            slideMargin: 0,
            vertical: true,
            enableDrag: false,
            thumbMargin: 4,
            thumbItem: 4
        });
    });
    $(window).load(function () {
        $(".miniSlider").delay(300).fadeIn("slow");
    });
</script>
<!-- Image Zoom Js -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/imagezoom.js"></script>

<!-- Main Js -->
<script type="text/javascript" src="<?=base_url()?>/assets/js/main.js"></script>
</body>
</html>