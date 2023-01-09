<!doctype html>
<html>
<head>
<title>Contact - Withington Furniture</title>
<?php require_once('includes/header.php');?>


<section class="subBanner" id="contactBanner">
    <div class="container relative _inner regular text-center">
        <h1 class="mx_bold">Contact Us</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Contact</li>
        </ul>
    </div>
</section><!-- subBanner -->


<section id="contact" class="sec_padd">
    <div class="container regular">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-right">
                <h3><i class="fa fa-map-marker"></i>Address & Info</h3>
                <ul class="infoList">
                    <li><a href="index.php">Withington Furniture</a></li>
                    <li>Address: 8th floor, <em>379 Hudson St,</em>New York, NY 10018</li>
                    <li>Phone: (+1) 96 716 6879</li>
                    <li>Email: <a href="?">contact@site.com</a></li>
                </ul>
                <ul class="social">
                    <li><a href="?"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="?"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="?"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="?"><i class="fa fa-vimeo"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <form class="form" id="contact_form" action="test.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-6 col-xx-12">
                            <input class="txtBox" id="name" name="name" type="text" placeholder="Name">
                        </div>
                        <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-6 col-xx-12">
                            <input class="txtBox" id="subject" name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-6 col-xx-12">
                            <input class="txtBox" id="phone" name="phone" type="text" placeholder="Phone">
                        </div>
                        <div class="txtBoxGrp col-lg-6 col-md-6 col-sm-12 col-xs-6 col-xx-12">
                            <input class="txtBox" id="email" name="email" type="text" placeholder="Email">
                        </div>
                        <div class="txtBoxGrp col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea class="txtBox" id="comment" name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="bTn text-right"><button type="submit" class="readBtn">Message</button></div>
                </form>
            </div>
        </div>
        <div class="map-responsive" id="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.7250567536676!2d-84.34897039425!3d33.71606266992961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f501790d22f717%3A0x7ff91decdaf344dc!2s1264+Custer+Ave+SE%2C+Atlanta%2C+GA+30316!5e0!3m2!1sen!2s!4v1493122321821" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section><!-- contact -->


<?php require_once('includes/footer.php');?>