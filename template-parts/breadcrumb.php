<?php
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

// Determine the title and breadcrumbs based on the current page type
if (is_singular()) {
    // Single post or page
    $page_title = get_the_title();
    $breadcrumbs = array(
        array('title' => 'Home', 'url' => home_url('/')),
        array('title' => $page_title, 'url' => ''),
    );
} elseif (is_archive()) {
    // Archive page (e.g., services archive)
    $page_title = post_type_archive_title('', false);
    $breadcrumbs = array(
        array('title' => 'Home', 'url' => home_url('/')),
        array('title' => $page_title, 'url' => ''),
    );
} elseif (is_search()) {
    // Search results page
    $page_title = 'Search Results for: "' . get_search_query() . '"';
    $breadcrumbs = array(
        array('title' => 'Home', 'url' => home_url('/')),
        array('title' => 'Search', 'url' => ''),
    );
} else {
    // Fallback for other pages
    $page_title = get_the_title();
    $breadcrumbs = array(
        array('title' => 'Home', 'url' => home_url('/')),
        array('title' => $page_title, 'url' => ''),
    );
}
?>

<!--==================================================-->
<div class="breatcome-area" style="background-image: url(<?php echo esc_url($banner_image); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="breatcome-content">
                    <div class="breatcome-title">
                        <h1><?php echo esc_html($page_title); ?></h1>
                    </div>
                    <div class="bratcome-text">
                        <ul>
                            <?php foreach ($breadcrumbs as $crumb) : ?>
                                <li>
                                    <?php if (!empty($crumb['url'])) : ?>
                                        <a href="<?php echo esc_url($crumb['url']); ?>"><?php echo esc_html($crumb['title']); ?></a>
                                    <?php else : ?>
                                        <?php echo esc_html($crumb['title']); ?>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->