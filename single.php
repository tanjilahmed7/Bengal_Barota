<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bengal_Barota
 */

get_header(); ?>

	<section id="content" class="main-content-area container">
		<div class="content col-md-9 nopadding">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php the_breadcrumb(); ?>
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					// the_post_navigation();

					// // If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</section>
<?php

get_footer();
