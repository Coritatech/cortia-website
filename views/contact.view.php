<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<?php require "partials/head.php"; ?>

<body>
    <?php require "partials/menu.php"; ?>

    <main>


        <!-- Contact breadcrumb area start -->
        <section class="tp-portfolio-breadcrumb-area p-relative" data-background="assets/img/contact/contact-brdcmb-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="tp-portfolio-breadcrumb-content text-center">
                        <h2 class="tp-portfolio-breadcrumb-title tp-portfolio-breadcrumb-title-cntct-us">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>




        <section class="contact sec-padd2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Send Your <span class="thm-color">Message</span></h2>
                        </div>
                        <div class="default-form-area">
                            <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/humanity-html/inc/sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="form-group">
                                            <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name *" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <input name="email" type="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <input name="org" type="text" placeholder="Your Organization" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <input name="subject" type="text" placeholder="Your Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="message" placeholder="Write Your Message" required></textarea>
                                    </div>
                                    <div class="tp-contact-submit">
                                        <button class="tp-btn" type="submit" name="send_msg"><span>Send Message</span></button>
                                    </div>
                                    <p class="ajax-response">
                                        <!-- Display session message -->
                                        <?php
                                        if (isset($_SESSION['response'])) {
                                            echo $_SESSION['response'];
                                            unset($_SESSION['response']); // Clear the response after displaying
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </form>
                        <!-- Form ends -->
                    </div>
                </div>

                <div class="tp-contact-inner-page-bottom">
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                            <div class="tp-contact-inner-page-item mb-30 text-center wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <div class="tp-contact-inner-page-icon">
                                    <span><i class="fa-light fa-envelope"></i></span>
                                </div>
                                <div class="tp-contact-inner-page-content">
                                    <h3 class="tp-contact-inner-page-title">Contact us</h3>
                                    <a href="#">cortiatechnology@gmail.com <br>
                                        +234 706 752 6407</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="tp-contact-inner-page-item mb-30 text-center wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <div class="tp-contact-inner-page-icon">
                                    <span><i class="fa-light fa-clock"></i></span>
                                </div>
                                <div class="tp-contact-inner-page-content">
                                    <h3 class="tp-contact-inner-page-title">Avalability</h3>
                                    <a href="#">Five days 8:00 am - 5:00 pm <br> Firday is closed</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact inner pagearea end -->



        <!-- map area start -->
        <div class="tp-map-area">
            <div class="tp-map-content">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3178401.37203209!2d35.68689745030553!3d38.926089619386694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1696137917870!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
        </div>
        <!-- map area end -->




    </main>




    <!-- Footer area start -->
    <?php require "partials/footer.php"; ?>
    <!-- Footer area end -->

    <?php require "partials/js.php"; ?>

</body>

<!-- Mirrored from st.ourhtmldemo.com/new/humanity-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 14:33:34 GMT -->

</html>