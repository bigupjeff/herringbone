<?php

/**
 * Herringbone Theme Template - Page.php
 * 
 * This template is used for static pages and should be able to handle the following:
 * 
 * - Display page title and page content.
 * - Display comment list and comment form (unless comments are off).
 * - Include wp_link_pages() to support navigation links within a page.
 * - Metadata such as tags, categories, date and author should not be displayed.
 * - Display an "Edit" link for logged-in users with edit permissions.
 *
 * @package herringbone
 * @author Jefferson Real <me@jeffersonreal.uk>
 * @copyright Copyright (c) 2023, Jefferson Real
 */

get_header(); ?>


<main class="main">

	<div class="base">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>

	<div class="sides-narrow">
		<?php get_sidebar( 'left' ); ?>
		<?php get_sidebar( 'right' ); ?>
	</div>

</main>


<?php get_footer(); ?>
<!--<script> console.log( 'wp-template: page.php' );</script>-->