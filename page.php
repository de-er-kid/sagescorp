<?php
// page.php
get_header();

// Get custom field using get_post_meta
$banner_image = get_post_meta(get_the_ID(), 'banner_image', true);

// Fallback to ACF if get_post_meta is empty and ACF is active
if (empty($banner_image) && function_exists('get_field')) {
    $banner_image = get_field('banner_image');
}

// Final fallback to default image if neither is set
if (empty($banner_image)) {
    $banner_image = get_template_directory_uri() . '/assets/images/service/business-setup-banner.jpg';
}
?>

<!--==================================================-->
<div class="breatcome-area" style="background-image: url(<?php echo esc_url($banner_image); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="bratcome-text">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        the_content();
    endwhile;
else:
    echo '<p>No content found</p>';
endif;
?>
<?php get_footer(); ?>