<?php
/**
 * The template for displaying countries
*/

get_header();

// Start the loop.
while ( have_posts() ) {
    the_post();
    // Include the single post content template.
    get_template_part( 'template-parts/test-tpl', 'country' );
} //end while
?>

<?php get_footer(); ?>
