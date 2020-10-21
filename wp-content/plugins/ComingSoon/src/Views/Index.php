<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Advent</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?=COMINGSOON_URI.'assets/Advent10/'?>css/base.css">
    <link rel="stylesheet" href=<?=COMINGSOON_URI.'assets/Advent10/'?>css/vendor.css">
    <link rel="stylesheet" href="<?=COMINGSOON_URI.'assets/Advent10/'?>css/main.css">

    <!-- Modernizr
    =================================================== -->
    <script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/modernizr.js"></script>

    <!-- Favicons
    =================================================== -->
    <link rel="shortcut icon" href="<?=COMINGSOON_URI.'assets/Advent10/'?>favicon.png" >

</head>

<body>

<!--[if lt IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- content-wrap -->
<div id="content-wrap">

    <!-- main  -->
    <main class="row">

        <header class="site-header">
            <div class="logo">
                <img src="<?=COMINGSOON_URI.'assets/upload/'.esc_html($aOptions['logo'])?>" alt="" style="width: 250px;
    height: 100px;
    border: 2px solid black;
    border-radius: 50%;">
            </div>
        </header>
        <div id="main-content"  class="twelve columns">
            <h1><?php echo esc_html($aOptions['title']); ?></h1>
            <p> <?php echo esc_html($aOptions['heading']); ?>
            </p>

            <hr>
            <div id="counter" data-end-date="<?php echo esc_html($aOptions['month']); ?>/<?php echo esc_html($aOptions['day']); ?>/<?php echo esc_html($aOptions['year']); ?>" class="group">
                <span><?php echo esc_html($aOptions['day']); ?><em>days</em></span>
                <span><?php echo esc_html($aOptions['HOURS']); ?><em>hours</em></span>
                <span><?php echo esc_html($aOptions['MINUTES']); ?><em>minutes</em></span>
                <span><?php echo esc_html($aOptions['SECONDS']); ?> <em>seconds</em></span>
            </div>

            <!-- MailChimp Signup Form -->
            <div id="mc-signup">

                <form id="mc-form" class="group" >

                    <input type="email" value="" name="EMAIL"  class="email" id="mce-EMAIL" placeholder="email address" required>

                    <input type="submit" value="Get Notified" name="subscribe" class="button">

                    <label for="mce-EMAIL" class="subscribe-message"></label>

                </form>

            </div> <!-- /sign-up form -->

        </div><!-- /main-content form -->

        <div class="modal-toggles">
            <ul>
                <li class="about-us"><a href="#mod-about">More about us</a></li>
                <li class="location"><a href="#mod-map">Our Location</a></li>
            </ul>
        </div><!-- /modal-toggles -->

    </main>

</div><!-- /content-wrap -->


<!-- modals
=================================================== -->

<section id="mod-about" >

    <!-- Modal toggle -->
    <div class="modal-toggle">
        <a href="#" title="close" id="modal-close">close</a>
    </div>

    <div class="row about-header">

        <div class="twelve columns">

            <div class="icon-wrap">
                <i class="icon"></i>
            </div>

            <h1>About Us.</h1>

        </div>

    </div> <!-- /about-header -->

    <div class="row about-content">

        <div class="six columns mob-whole">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>

            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                lorem quis bibendum auctor, natus error sit voluptatem accusantium nisi elit et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
        </div>

        <div class="six columns mob-whole contact">

            <h3>Contact Numbers:</h3>
            <p>Phone: (000) 555 1212<br>
                Mobile: (000) 555 0100<br>
                Fax: (000) 555 0101</p>

            <h3>Email:</h3>
            <p>UzumakiNaruto@yoursite.com<br>
                HarunoSakura@yoursite.com
            </p>

            <h3>Address:</h3>
            <p>5th Avenue, Fort Bonifacio, Taguig<br>
                Metro Manila, Philippines
            </p>

        </div>

    </div> <!-- /about-content -->

    <div class="slider row">

        <hr>

        <ul id="owl-slider" class="owl-carousel">
            <li class="item s-photography">
                <span class="slider-icon"></span>
                <p>Photography</p>
            </li>
            <li class="item s-digital-media">
                <span class="slider-icon"></span>
                <p>Digital Media</p>
            </li>
            <li class="item s-marketing">
                <span class="slider-icon"></span>
                <p>Marketing</p>
            </li>
            <li class="item s-packaging">
                <span class="slider-icon"></span>
                <p>Packaging</p>
            </li>
            <li class="item s-videography">
                <span class="slider-icon"></span>
                <p>Videography</p>
            </li>
            <li class="item s-webdesign">
                <span class="slider-icon"></span>
                <p>Web Design</p>
            </li>
            <li class="item s-branding">
                <span class="slider-icon"></span>
                <p>Branding</p>
            </li>
            <li class="item s-web-development">
                <span class="slider-icon"></span>
                <p>Web Development</p>
            </li>
        </ul>

    </div><!-- /slider -->

</section><!-- /mod-about -->

<section id="mod-map" >

    <!-- Modal toggle -->
    <div class="modal-toggle">

    </div>

    <div id="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3149951871624!2d105.79349141442565!3d20.980006794817868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc51191abcb%3A0x47247696a51de226!2zMTQxIENoaeG6v24gVGjhuq9uZywgVMOibiBUcmnhu4F1LCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1602143044081!5m2!1svi!2s" width="800" height="800" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div id="map-zoom-in"></div>
    <div id="map-zoom-out"></div>

    <address>
         141 Chiến Thắng, Tân Triều <br>
        Văn Quán Hà Đông Hà Nội
    </address>

</section><!-- /mod-about -->


<!-- footer
=================================================== -->
<footer class="group">

    <ul class="footer-social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-skype"></i></a></li>
    </ul>

    <ul class="footer-copyright">
        <li>&copy; Copyright 2015 Advent</li>
        <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>
    </ul>

</footer>

<div id="preloader">
    <div id="loader">
    </div>
</div>

<!-- Script
=================================================== -->
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/jquery-1.11.3.min.js"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/jquery.fittext.js"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/jquery.countdown.min.js"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/jquery.placeholder.min.js"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/owl.carousel.min.js"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?=COMINGSOON_URI.'assets/Advent10/'?>js/main.js"></script>

</body>
</html>
