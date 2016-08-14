<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bengal_Barota
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header ">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		
		<div class="entry-meta">
			<?php 
				$term_list = wp_get_post_terms($post->ID, 'bn_month', array("fields" => "all"));
				$term_list1 = wp_get_post_terms($post->ID, 'bn_year', array("fields" => "all"));
				
				foreach ($term_list as $value) {
					// echo "সংখ্যাঃ ". $value->name.",";
					foreach ($term_list1 as $value1) {
						echo "সংখ্যাঃ ". $value->name.", ".$value1->name;
					}
				}

			 ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php excerpt(45); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php //bengal_barota_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
