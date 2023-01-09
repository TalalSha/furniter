
<footer class="relative">
    <div class="container regular">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="footerLogo"><a href="index.php"><img src="images/logo.png" alt="" class="img"></a></div>
                <div class="content">
                    <p>We sell a bit of everything, including household goods, toys, personal electronics, cosmetics, apparel, and anything else we can find via liquidation. You can fill a cart with great brand name and limited edition quality products. You can also buy large quantities of merchandise by the case or pallet, depending on what's in stock.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content">
                            <h3 class="regular">Helpful Links</h3>
                            <ul>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Furniture</a></li>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Sofa</a></li>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Beds</a></li>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Dining</a></li>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Study</a></li>
                                <li><a href="?"><i class="fa fa-angle-right"></i>Kitchens</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content">
                            <h3 class="regular">Trending Jobs</h3>
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
                                <li>Address: 8th floor, <em>379 Hudson St,</em>New York, NY 10018</li>
                                <li>Phone: (+1) 96 716 6879</li>
                                <li>Email: <a href="?">contact@site.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container regular text-center">
            <p>Copyright © 2017. All Rights Reserved. <a href="index.php"> Withington Furniture.</a></p>
            <ul class="social">
                <li><a href="?"><i class="fa fa-facebook"></i></a></li>
                <li><a href="?"><i class="fa fa-twitter"></i></a></li>
                <li><a href="?"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="?"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div><!-- copyright -->
</footer><!-- footer -->


<!-- JS Files -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
        $("#datepicker").datepicker();
    });
</script>
<script type="text/javascript" src="js/smoothscroll.min.js"></script>
<!-- Gallery Js -->
<script type="text/javascript" src="js/jquery.blueimp-gallery.min.js"></script>
<!-- Isotope Js -->
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/isotops.js"></script>
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
<script type="text/javascript" src="js/owl.carousel.js"></script>
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
<script type="text/javascript" src="js/lightslider.min.js"></script>
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
<script type="text/javascript" src="js/imagezoom.js"></script>

<!-- Main Js -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>