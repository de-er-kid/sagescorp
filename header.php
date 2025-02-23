<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title><?php // wp_title('|', true, 'right'); ?></title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php
    if (!is_front_page() && !is_home()) {
        get_template_part('template-parts/header-top');
    } else {
        ?>
        <!-- Loader -->
        <div class="loader_bg">
            <div class="loader"></div>
            <h4 class="loading-title">LOADING...</h4>
        </div>

        <!-- Sidebar Info -->
        <div class="sidebar-info">
            <div class="side-menu">
                <a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
            </div>
            <div class="topbar-info style-two">
                <span><a href="tel:+918129445777"><i class="bi bi-telephone"></i> +91 8129445777</a></span>
                <span><a href="mailto:sagescorpkochi@gmail.com"><i class="bi bi-envelope"></i>
                        sagescorpkochi@gmail.com</a></span>
            </div>
        </div>
        <?php
    }
    ?>
    <!-- Header -->
    <header class="thrown-header-area style-two" id="navbar">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3">
                    <div class="header-logo style-two">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="logo-normal"
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sagescorp-logo-white.svg'); ?>"
                                alt="SagesCorp">
                            <img class="logo-stick"
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sagescorp-logo.svg'); ?>"
                                alt="SagesCorp">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="thrown-menu style-two">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a></li>
                            <li>
                                <a href="/services">Services <i class="fas fa-chevron-down"></i></a>
                                <?php
                                $services_args = array(
                                    'post_type' => 'services',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                );

                                $services_query = new WP_Query($services_args);
                                ?>

                                <div class="sub-menu">
                                    <ul>
                                        <?php if ($services_query->have_posts()): ?>
                                            <?php while ($services_query->have_posts()):
                                                $services_query->the_post(); ?>
                                                <li>
                                                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                                                </li>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php else: ?>
                                            <li>No services found.</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="thrown-search-button style-twoeng">
                        <div class="thrown-btn">
                            <a class="header-button" href="<?php echo esc_url(home_url('/contact')); ?>#enquire">Enquire
                                Now <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu-area sticky-mobile" id="sticky-mobile-menu">
        <div class="mobile-menu">
            <div class="mobile-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/sagescorp-logo.svg'); ?>"
                        alt="SagesCorp"></a>
            </div>
            <div class="side-menu-info">
                <div class="sidebar-menu">
                    <a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
                </div>
            </div>
        </div>
    </div>