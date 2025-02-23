<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget">
                    <div class="footer-wiget-log">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sagescorp-logo.svg'); ?>" alt="SagesCorp">
                        </a>
                    </div>
                    <div class="footer-shape-title whitetext">
                        <p>We are SagesCorp Business Advisory Private Limited, a team of accounting professionals providing Company Formation and Business Setup, Accounting, GST, Taxation, Bank Loan Syndication and Audit services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget pl-15">
                    <div class="footer-wiget-title">
                        <h4>Quick Links</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-wiget">
                    <div class="footer-wiget-title">
                        <h4>Our Services</h4>
                    </div>
                    <div class="footer-wiget-menu">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/business-setup')); ?>">Business Setup</a></li>
                            <li><a href="<?php echo esc_url(home_url('/tax-and-compliance')); ?>">Tax and Compliance</a></li>
                            <li><a href="<?php echo esc_url(home_url('/audit-and-assurance')); ?>">Audit and Assurance</a></li>
                            <li><a href="<?php echo esc_url(home_url('/bank-loan-consulting')); ?>">Bank Loan Consulting</a></li>
                            <li><a href="<?php echo esc_url(home_url('/trademark')); ?>">Trademark</a></li>
                            <li><a href="<?php echo esc_url(home_url('/property-and-personal')); ?>">Property and Personal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pr-0">
                <div class="foter-box">
                    <div class="footer-widget-contct-menu">
                        <div class="footer-wiget-title">
                            <h4>Contact Us</h4>
                        </div>
                        <ul>
                            <li><a href="tel:+918129445777">+91 8129445777</a></li>
                            <li class="line"><a href="mailto:sagescorpkochi@gmail.com">sagescorpkochi@gmail.com</a></li>
                            <li><a href="#">Kadavanthara, Elamkulam, Ernakulam, Kerala, India</a></li>
                        </ul>
                    </div>
                    <div class="footer-wiget-icon pt-20">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="copyright-text">
                    <p>Copyright © <?php echo date('Y'); ?> SagesCorp - All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-condition">
                    <ul>
                        <li><a target="_blank" href="https://orizonic.com/">Powered By <img width="72" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/orizinic-logo.svg'); ?>" alt="Orizonic Solutions Pvt Ltd."></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>

<!-- Scroll to Top -->
<div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>

<!-- WhatsApp Button -->
<a class="whats" href="https://api.whatsapp.com/send?phone=918129445777&amp;text=Hi+SagesCorp%0D%0AI+have+a+requirement" target="_blank">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/whatsapp.svg'); ?>" alt="SagesCorp Contact">
</a>

<?php wp_footer(); ?>
</body>
</html>