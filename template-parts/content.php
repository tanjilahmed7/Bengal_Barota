<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bengal_Barota
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
		
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

	<div class="entry-content">
		<?php the_post_thumbnail('single-full', array('class' => 'thumbnail')); ?>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bengal_barota' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bengal_barota' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
