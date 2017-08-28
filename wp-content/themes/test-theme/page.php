<?php
    get_header();
?>

<div class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>
			
			
			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		
		<?php endwhile; // End of the loop. ?>
	
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>