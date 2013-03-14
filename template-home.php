<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">

						<?php the_post(); ?>
						<?php the_content(); ?>
						
						<?php wp_reset_postdata(); ?>

						
						<div id="testimonials-tickets" style="margin: 30px 0;" class="clearfix">

							<div id="testimonials" class="fourcol first clearfix">
								<div style="background: #f69222; color: white; height: 100px; text-align: center;">
									BUY TICKETS
								</div>
							</div>
							<div id="buy-tickets" class="fourcol clearfix">
								<div style="background: #59c4be; color: white; height: 100px; text-align: center;">
									2012 PHOTO GALLERY
								</div>
							</div>
							<div id="testimonials" class="fourcol clearfix">
								<div style="background: #902a8d; color: white; height: 100px; text-align: center;">
									FACEBOOK RSVP
								</div>
							</div>

						</div>




						<div id="home-features" class="clearfix">

							<div class="twelvecol first clearfix">

								<h1>What The Instagram</h1>

								<?php echo do_shortcode( '[alpine-phototile-for-instagram user="whatthefestival" src="user_recent" imgl="instagram" dltext="Instagram" style="wall" row="6" num="6" size="Th" align="center" max="100"]' ); ?>
								
							</div>
				
						</div>

						
						<div id="news-feed" class="twelvecol first clearfix">

							<h1>News Feed</h1>


							<?php 
								$args = array(
									'category_name' => 'news'
	  							);

	  							query_posts( $args );
	  						?>

							
							<?php $post_counter = 0; ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php 
								$post_counter++;
								$post_classes = "clearfix fourcol"; 
								if ($post_counter == 4) {
									$post_counter = 1;
								}
								if ($post_counter == 1) { 
									$post_classes .= " first";
								}
							?>
								
							<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?> role="article">
							
							    <header class="article-header">
								
								    <h2>
								    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								    		<?php the_title(); ?>
								    		<?php the_post_thumbnail( 'wtf-fourcol' ); ?>
								    	</a>
								    </h2>
							
							    </header> <!-- end article header -->
						
							    <section class="entry-content clearfix">
								    <?php the_excerpt(); ?>
							    </section> <!-- end article section -->
							
							    <footer class="article-footer">
	    							

							    </footer> <!-- end article footer -->
							    
						
						    </article> <!-- end article -->
						
						    <?php endwhile; ?>	
						
						        <?php if (function_exists('bones_page_navi')) { ?>
						            <?php bones_page_navi(); ?>
						        <?php } else { ?>
						            <nav class="wp-prev-next">
						                <ul class="clearfix">
						        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
						        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
						                </ul>
						            </nav>
						        <?php } ?>		
						
						    <?php else : ?>
						    
						        <article id="post-not-found" class="hentry clearfix">
						            <header class="article-header">
						        	    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
						        	</header>
						            <section class="entry-content">
						        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
						        	</section>
						        	<footer class="article-footer">
						        	    <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
						        	</footer>
						        </article>
						
						    <?php endif; ?>
							
							
						</div>

					<!-- <div id="home-social" class="twelvecol first clearfix">
						<h1>Connect with us</h1>
				
							<div class="fb-like-box fourcol first" data-href="http://www.facebook.com/whatthefestival" data-width="359" data-show-faces="false" data-stream="true" data-border-color="#902a8d" data-header="false"></div>

							<div class="fourcol">
								<div class="wtf-tweets"></div>
							</div>

							
							
							

							<div id="home-gallery" class="fourcol clearfix home-feature">
								<div style="background: #888;">
									2012 PHOTO GALLERY!
								</div>
							</div>
					</div> -->

			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
