<?php get_header() ?>

        <!-- Start Page Header Section -->
        <section class="bg-page-header">
            <div class="page-header-overlay">
                <div class="container">
                    <div class="row">
                        <div class="page-header">
                            <div class="page-title">
                                <h2>contact info</h2>
                            </div>
                            <!-- .page-title -->
                            <div class="page-header-content">
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact</li>
                                </ol>
                            </div>
                            <!-- .page-header-content -->
                        </div>
                        <!-- .page-header -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .page-header-overlay -->
        </section>
        <!-- End Page Header Section -->


        <!-- Start Contact us Section -->
        <section class="bg-contact-us">
            <div class="container">
                <div class="row">
                    <div class="contact-us">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3 class="contact-title">Get in Touch</h3>
                                <?php echo do_shortcode("[ninja_form id=1]") ?>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="contact-title">Contact Info</h3>
                                <ul class="contact-address">
                                    <li>
                                        <i class="flaticon-placeholder"></i>
                                        <div class="contact-content">
                                            <p>Home#007, Road#07 New Elephant Road Dhaka, Bangladesh</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="flaticon-vibrating-phone"></i>
                                        <div class="contact-content">
                                            <p>88013 659 214 512,</p>
                                            <p>66021489 01923 255 100 326</p>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="flaticon-message"></i>
                                        <div class="contact-content">
                                            <p>Support@yourmail.com</p>
                                            <p>http://admin@.com</p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- .contact-address -->
                                <ul class="social-icon-rounded contact-social-icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .contact-us -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Contact us Section -->


        <!-- STart Maps Section -->
        <div id="map"></div>
        <!-- End Maps Section -->

        <!-- Start Footer Section -->
      <?php get_footer() ?>