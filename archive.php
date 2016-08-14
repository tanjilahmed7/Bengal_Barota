<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bengal_Barota
 */

get_header(); 

?>
	<section id="content" class="main-content-area container">
		<div class="col-md-12">	<?php the_breadcrumb(); ?></div>
				<?php if ( have_posts() ) : ?>

			<!--<header class="page-header">-->
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			<!--</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
                        <?php $post_counter = 0; // start a counter before the loop ?>
			<?php while ( have_posts() ) : the_post(); ?>
                                 <?php $post_counter++; // increment the counter for each post ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					//get_template_part( 'content', get_post_format() );
				?>
                        
                        <?php if ( $post_counter <= 1 ) : ?>
                            <div id="layout-<?php echo $post_counter; ?>" >
                        
                            		<div class="layout-1 clearfix col-md-9">
                            			<div class="features-img nopadding col-md-6">
                            				  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archive', array('class' => 'img-responsive thumbnail col-xs-12')); ?></a>
                            			</div>
                            			<div class="features-content  col-md-6">
                            				  <h1 class="cat-title">
                                    			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                			</h1>
                                		<div class="cat-desc ">
                                			<p> <?php excerpt(20); ?></p>
                            			</div>
                            		</div>
                          
                                
                            
                       
                        <?php else: ?>
                        
          			<a href="<?php the_permalink(); ?>">
                                <div id="layout-<?php echo $post_counter; ?>" class="layout-box  post-box">
                                    <div class="layout-img">
                                    	<?php the_post_thumbnail('cat-img', array('class' => ' col-md-12  nopadding img-responsive')); ?>
                                    </div>
                                    <div class="layout-content">
	                                    <h3 class="post-title"><?php the_title(); ?></h3>
	                                    <div class="post-box-info">
	                                        <div><span class="glyphicon glyphicon-user"></span><?php the_author_meta('display_name'); ?></div>
	                                        <div><span class="glyphicon glyphicon-calendar"></span><?php echo get_the_date( 'F j, Y' ); ?></div>
	                                    </div>                                    	
                                    </div>

                                </div>
                            </a>
                        	

                        <?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
			                  </div>
           				
	</div>

				  					<div class="col-md-3 ">
			                           <?php get_sidebar(); ?>			
			                  	</div>

</section>
<?php get_footer(); ?>