<!DOCTYPE html>
<html lang="en">
<?php require "partials/head.php"; ?>

<body>
    <?php require "partials/menu.php"; ?>


    <div class="boxed_wrapper">



        <div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/4.jpg);">
            <div class="container">
                <div class="box">
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="pull-left">
                    <ul class="list-inline link-list">
                        <li>
                            <a href="index.view.php">Home</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>

                        <li>
                            Contact us
                        </li>
                    </ul>
                </div>
                <div class="pull-right">
                    <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
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
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">send message</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h2>Quick <span class="thm-color">Contact</span></h2>
                        </div>
                        <div class="content">
                            <div class="text">
                                <p>If you are passionate about helping people: through education, or preventing then you are in the right place. </p>
                            </div>
                            <ul class="contact-info">
                                <li><i class="icon-arrows"></i><span>Address:</span> 121, humanity Apple Street <br>Iwo, Osun State, Nigeria</li>
                                <li><i class="icon-phone"></i><span> Phone:</span> +234 706 752 6407 & <br>+234 706 752 6407</li>
                                <li><i class="icon-back"></i><span>Email:</span> cortia@gmail.com</li>
                            </ul>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>



        <section class="home-google-map">
            <div class="google-map" id="contact-google-map" data-map-lat="42.568692" data-map-lng="72.930105" data-icon-path="images/logo/map-marker.png" data-map-title="Chester" data-map-zoom="8">

            </div>

        </section>





       
    <!-- Footer area start -->
    <?php require "partials/footer.php"; ?>
    <!-- Footer area end -->

    <?php require "partials/js.php"; ?>

        <!--Footer Bottom-->
      

        <!-- Scroll Top  -->
        <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
        <!-- preloader  -->
        <div class="preloader"></div>
        <div id="donate-popup" class="donate-popup">
            <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
            <div class="popup-inner">


                <div class="container">
                    <div class="donate-form-area">
                        <div class="section-title center">
                            <h2>Donation Information</h2>
                        </div>

                        <h4>How much would you like to donate:</h4>

                        <form action="#" class="donate-form default-form">
                            <ul class="chicklet-list clearfix">
                                <li>
                                    <input type="radio" id="donate-amount-1" name="donate-amount" />
                                    <label for="donate-amount-1" data-amount="1000">$1000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                                    <label for="donate-amount-2" data-amount="2000">$2000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-3" name="donate-amount" />
                                    <label for="donate-amount-3" data-amount="3000">$3000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-4" name="donate-amount" />
                                    <label for="donate-amount-4" data-amount="4000">$4000</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-5" name="donate-amount" />
                                    <label for="donate-amount-5" data-amount="5000">$5000</label>
                                </li>
                                <li class="other-amount">

                                    <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                                        <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount" />
                                    </div>
                                </li>
                            </ul>

                            <h3>Donor Information</h3>

                            <div class="form-bg">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <div class="form-group">
                                            <p>Your Name*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Email*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Address*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Phn Num*</p>
                                            <input type="text" name="fname" placeholder="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <ul class="payment-option">
                                <li>
                                    <h4>Choose your payment method:</h4>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Paypal</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Offline Donation</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Credit Card</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input name="pay-us" type="checkbox">
                                            <span>Debit Card</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div class="center"><button class="thm-btn" type="submit">Donate Now</button></div>


                        </form>
                    </div>
                </div>



            </div>
        </div>

        <!-- jQuery -->
     
        <!-- google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
        <script src="js/gmap.js"></script>

        <script id="map-script" src="js/default-map.js"></script>


        <script src="js/custom.js"></script>

    </div>

</body>

<!-- Mirrored from st.ourhtmldemo.com/new/humanity-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 14:33:34 GMT -->

</html>