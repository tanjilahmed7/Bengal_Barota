        <?php
                $args = array(
                    'post_type'         =>   'old_issue',
                    'posts_per_page'    =>   '3',    
                );
                $the_query = new WP_Query($args);
        ?>	
	<div  id="old_issue" class="nivoSlider hidden-sm hidden-xs">    
 			<?php if ( $the_query->have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
                	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				    		<?php the_post_thumbnail('old_issue'); ?>
  						<?php endwhile; ?>
                 	<?php else : ?>
                 	  <?php endif; ?>
                    <?php wp_reset_postdata(); ?>  

	</div> 





<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bengal_Barota
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

		<aside id="secondary" class="widget-area" role="complementary">
		          
			            <form role="search" method="get" 
			            class="widget-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			              <div>
			                  <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			                    <input type="text" value="<?php echo get_search_query(); ?>" class="form-control wid-search-form-" name="s" id="s" placeholder="খোঁজ করুন"/>
			                
			              </div>
			          </form>            
          
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->


