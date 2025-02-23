<?php
/*
Template Name: Contact
*/
get_header(); ?>

<div class="breatcome-area" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/contact-banner.jpg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="bratcome-text">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="contact-inner-page">
    <div class="container">
        <div class="row inner mb-150">
            <div class="col-lg-4 col-md-6">
                <div class="contact-inner-box">
                    <div class="contact-inner-icon">
                        <i class="bi bi-telephone-x"></i>
                    </div>
                    <div class="contact-content">
                        <h4>Phone Number</h4>
                        <span>+91 8129445777</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-inner-box">
                    <div class="contact-inner-icon">
                        <i class="bi bi-envelope-open"></i>
                    </div>
                    <div class="contact-content">
                        <h4>E-mail</h4>
                        <span>sagescorpkochi@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-inner-box two">
                    <div class="contact-inner-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="contact-content">
                        <h4>Address</h4>
                        <span>Kadavanthara, Elamkulam, Ernakulam, </span>
                        <span>Kerala, India</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="enquire">
            <div class="contact-box inner">
                <div class="contact-title">
                    <h2>Enquire Now</h2>
                </div>
                <form action="#" method="POST" id="it-form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box">
                                <input type="text" name="name" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box">
                                <input type="text" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box">
                                <input type="text" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-box">
                                <textarea name="massage" id="massage" cols="30" rows="10"
                                    placeholder="Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-box-button inner">
                                <button type="Submit">Send Now</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div id="status"></div>
            </div>
        </div>
    </div>
</div>


<!--==================================================-->
<div class="map-area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125746.0602208516!2d76.2165593950721!3d9.970153995873167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3b080d41608619cf%3A0x144e7bd68f605e29!2sSagesCorp%20Business%20Advisory%20Private%20Limited%2C%202nd%20Floor%2C%20Renjith%20Vihar%2C%20Kolleth%20Lane%2C%20KK%20Road%2C%20Kadavanthara%2C%20Ernakulam%2C%20Kerala%20682020!3m2!1d9.9701641!2d76.2989613!5e0!3m2!1sen!2sin!4v1696842812753!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
</div>

<!--==================================================-->

<!--==================================================-->


<?php get_footer(); ?>