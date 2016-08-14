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
		<div class="content col-md-9 nopadding">
	
        <?php
                $args = array(
                    'post_type'         =>   'slider',
                    'posts_per_page'    =>   '3',    
                );
                $the_query = new WP_Query($args);
        ?>	
	<div  id="slider" class="nivoSlider hidden-sm hidden-xs">    
 			<?php if ( $the_query->have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
                	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				    		<?php the_post_thumbnail('slider'); ?>
  						<?php endwhile; ?>
                 	<?php else : ?>
                 	  <?php endif; ?>
                    <?php wp_reset_postdata(); ?>  

	</div> 




			<div class="news-area nopadding col-md-8">

				<section class="news flagged-wise">
	                <header class="header-borders"><a href="" title="">গুণীজন</a></header>
	            </section>	<!-- news flagged-wise -->


   								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'wise',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>                      
                


	
				<article class="latest-post">
					
							<?php

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								echo '<ul class="latest-item">';
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
										
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
								}
								echo '</ul>';
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							}
							?>
					
				</article>
	        
				<section class="news flagged-conversation">
	                <header class="header-borders"><a href="" title="">কথোপকথন</a></header>
	            </section>	<!-- news flagged-national -->


							    <?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'conversation',
                                        'posts_per_page'    =>   '10',    
                                    );
                          	         $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>         

				<article class="latest-post">
					
							<?php

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								echo '<ul class="latest-item">';
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
										
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
								}
								echo '</ul>';
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							}
							?>
					
				</article>

				<section class="news flagged-added-joy">
	                <header class="header-borders"><a href="" title="">আনন্দযোগ</a></header>                                                        
	            </section>	<!-- news flagged-national -->

   								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'added-joy',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    


				<article class="latest-post">
					
							<?php

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								echo '<ul class="latest-item">';
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
										
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
								}
								echo '</ul>';
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							}
							?>
					
				</article>


				<section class="news flagged-music-building">
	                <header class="header-borders"><a href="" title="">গানের ভবন</a></header>                                 
	            </section>	<!-- news flagged-national -->


   								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'added-joy',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    



			
				<article class="latest-post">
					
							<?php

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								echo '<ul class="latest-item">';
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
										
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
								}
								echo '</ul>';
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							}
							?>
					
				</article>
				<section class="news flagged-travel">
	                <header class="header-borders"><a href="" title="">ভ্রমন</a></header>	                                                                         
	            </section>	<!-- news flagged-travel -->

	
   								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'travel',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    
   
   			<article class="latest-post">
					
							<?php

							// The Query
							$the_query = new WP_Query( $args );

							// The Loop
							if ( $the_query->have_posts() ) {
								echo '<ul class="latest-item">';
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
								?>
										
								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
								}
								echo '</ul>';
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							}
							?>
					
				</article>

				<section class="news flagged-dear">
	                <header class="header-borders"><a href="" title="">সুহৃদ</a></header>
                                                          
	            </section>	<!-- news flagged-national -->

								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'dear',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    
   
				   			<article class="latest-post">
									
											<?php

											// The Query
											$the_query = new WP_Query( $args );

											// The Loop
											if ( $the_query->have_posts() ) {
												echo '<ul class="latest-item">';
												while ( $the_query->have_posts() ) {
													$the_query->the_post();
												?>
														
												<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
												<?php
												}
												echo '</ul>';
												/* Restore original Post Data */
												wp_reset_postdata();
											} else {
												// no posts found
											}
											?>
									
								</article>


				<section class="news flagged-river-of-life">
	                <header class="header-borders"><a href="" title="">নদী ও জীবন</a></header>                                   
	            </section>	<!-- news flagged-river-of-life -->
								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'river-of-life',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    
	   
	   					<article class="latest-post">
						
								<?php

								// The Query
								$the_query = new WP_Query( $args );

								// The Loop
								if ( $the_query->have_posts() ) {
									echo '<ul class="latest-item">';
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
									?>
											
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php
									}
									echo '</ul>';
									/* Restore original Post Data */
									wp_reset_postdata();
								} else {
									// no posts found
								}
								?>
						
						</article>

				<section class="news flagged-arrangements">
	                <header class="header-borders"><a href="" title="">আয়োজন</a></header>
	                                                                         
	            </section>	<!-- news flagged-arrangements -->

								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'arrangements',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
												</article>
   
                                         
                                 
                                  
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    
   
		   			<article class="latest-post">
							
									<?php

									// The Query
									$the_query = new WP_Query( $args );

									// The Loop
									if ( $the_query->have_posts() ) {
										echo '<ul class="latest-item">';
										while ( $the_query->have_posts() ) {
											$the_query->the_post();
										?>
												
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php
										}
										echo '</ul>';
										/* Restore original Post Data */
										wp_reset_postdata();
									} else {
										// no posts found
									}
									?>
							
						</article>

				<section class="news flagged-culture-news">
	                <header class="header-borders"><a href="" title="">সংস্কৃতি বার্তা</a></header>                                                
	            </section>	<!-- news flagged-national -->
	            
								<?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'category_name'     =>   'culture-news',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>                
           
                                

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        
                                            <?php if ( !$the_query->current_post > 0 ) : ?>
                                    			<article class="category-post">
													<div class="news-img">
														 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image'); ?></a>
													</div>
													<div class="news-desc">
														<h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


														   <p class="read"><?php echo excerpt('15'); ?></p>
													</div>
				
                                                <?php endif; ?>
                                            
                                        <?php endwhile; ?>
                                 

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>    
   
		   			<article class="latest-post">
							
									<?php

									// The Query
									$the_query = new WP_Query( $args );

									// The Loop
									if ( $the_query->have_posts() ) {
										echo '<ul class="latest-item">';
										while ( $the_query->have_posts() ) {
											$the_query->the_post();
										?>
												
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php
										}
										echo '</ul>';
										/* Restore original Post Data */
										wp_reset_postdata();
									} else {
										// no posts found
									}
									?>
							
						</article>
		


			</div>
			<div class="letest-news-area nopadding col-md-4">
                             <?php
                                    $args = array(
                                        'post_type'         =>   'post',
                                        'posts_per_page'    =>   '10',    
                                    );
                                    $the_query = new WP_Query($args);
                                ?>   			
				<section class="news flagged-latest">
	                <header class="header-borders"><a href="" title="">সর্বশেষ</a></header>	                                                                         
	            </section>					

                                <?php if ( $the_query->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                             
                                            <ul class="last-item">
                                            	<li>
                                            		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            	</li>
                                            </ul>
                                            
                                        <?php endwhile; ?>
                                           
                                        <?php else : ?>

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>   

	            <section class="news flagged-discussed ">
	                <header class="header-borders"><a href="" title="">সর্বাধিক পঠিত</a></header>
	                                                                         
	            </section>	
						<?php // Popular Post Viwes Args ?>
	                      <?php

                                $args = array( 
                                        'post_type' => 'post',
                                        'posts_per_page' => 10, 
                                        'meta_key' => 'wpb_post_views_count', 
                                        'orderby' => 'meta_value_num', 
                                        'order' => 'DESC'  );
                                    
                                    $popularpost = new WP_Query( $args );
                                ?>                
                   
                                <?php if ( $popularpost->have_posts() ) : ?>

                                        <?php /* Start the Loop */ ?>
                                
                                        <?php while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                                            

                                            <ul class="last-item">
                                            	<li>
                                            		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            	</li>
                                            </ul>
                                            
                                            
                                        <?php endwhile; ?>
                                           
                                        <?php else : ?>

                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>                      
                   

			</div> <!-- letest-news-area -->
		</div>
		<div class="col-md-3"><?php get_sidebar(); ?></div>
		
	</section> <!-- End-content -->
<?php
get_footer();

