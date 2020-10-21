<?php
get_header();
?>
    <div class="li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="row li-main-content">
                        <div class="col-lg-12">
                            <div class="li-blog-single-item pb-30">
                                <div class="li-blog-banner">
                                    <a href="blog-details.html"><img class="img-full"
                                                                     src="images/blog-banner/bg-banner.jpg" alt=""></a>
                                </div>
                               <?php if (have_posts()): while (have_posts()):the_post();?>
                                <div class="li-blog-content">
                                    <div class="li-blog-details">
                                        <h3 class="li-blog-heading pt-25"><a href="#"><?=the_title()?></a></h3>
                                        <div class="li-blog-meta">
                                            <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                            <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                            <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                        </div>
                                        <p>
                                            <?=the_content()?>
                                        </p>
                                        <div class="li-tag-line">
                                            <h4>tag:</h4>
                                            <a href="#">Headphones</a>,
                                            <a href="#">Video Games</a>,
                                            <a href="#">Wireless Speakers</a>
                                        </div>
                                        <div class="li-blog-sharing text-center pt-30">
                                            <h4>share this post:</h4>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                                 <?php endif;?>
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer();

