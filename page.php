<?php
// page.php
get_header();

get_template_part('template-parts/breadcrumb');

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