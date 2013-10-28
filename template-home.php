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
						
						<div id="news-feed" class="twelvecol first clearfix">

							<?php 
								$args = array(
									'category_name' => 'news',
									'showposts' => 12
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
								    	<?php if ($post->ID == 1538) { ?>
								    	<a href="http://whatthefestival.com/opulent-temple" rel="bookmark" title="<?php the_title_attribute(); ?>">
								    	<?php } elseif ($post->ID == 1904) { ?>
										<a href="http://whatthefestival.com/ecoshuttle" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php } elseif ($post->ID == 1934) { ?>
										<a href="http://whatthefestival.com/experience/workshops" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php } elseif ($post->ID == 1953) { ?>
										<a href="http://whatthefestival.com/schedule" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php } elseif ($post->ID == 1698) { ?>
										<a href="http://whatthefestival.com/experience/big-art" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php } elseif ($post->ID == 1984) { ?>
										<a href="http://whatthefestival.com/marketplace/food-beverage" rel="bookmark" title="<?php the_title_attribute(); ?>">	
										<?php } elseif ($post->ID == 1854) { ?>
										<a href="http://whatthefestival.com/marketplace/craft-vendors" rel="bookmark" title="<?php the_title_attribute(); ?>">	
										<?php } elseif ($post->ID == 1994) { ?>
										<a href="http://whatthefestival.com/info/getting-here" rel="bookmark" title="<?php the_title_attribute(); ?>">	
										<?php } else { ?>
								    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								    	<? } ?>

								    		<?php the_title(); ?>
								    		<?php the_post_thumbnail( 'wtf-fourcol' ); ?>
								    	</a>
								    </h2>
							
							    </header> <!-- end article header -->
						
							    <!-- <section class="entry-content clearfix">
								    <?php the_excerpt(); ?>
							    </section> --> <!-- end article section -->
							
						    </article> <!-- end article -->
						
						    <?php endwhile; ?>	
						
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

						<div class="clearfix"></div>

						<!-- <div id="home-social" class="clearfix">

							<div class="fourcol first stream facebook clearfix">
								<h2 class="home-fb">Facebook</h2>
								<div class="fb-like-box" data-href="http://www.facebook.com/whatthefestival" data-width="359" data-height="390" data-show-faces="true" data-stream="true" data-header="false" data-border-color="#fff"></div>
								<script type="text/javascript">
								window.fbAsyncInit=function() {
									FB.XFBML.parse();
								}
								</script>
							</div>


							<div class="fourcol stream instagram clearfix">

								<h2 class="home-ig">Instagram</h2>

								<?php // echo do_shortcode( '[alpine-phototile-for-instagram user="whatthefestival" src="user_recent" imgl="instagram" dltext="Instagram" style="wall" row="3" num="9" size="Th" align="center" max="100" nocredit="1"]' ); ?>
								
							</div>


							<div class="fourcol stream twitter clearfix">
								<h2 class="home-tw">Twitter</h2>
								<div class="wtf-tweets"></div>
					        </div>

				
						</div>

						<div class="clearfix"></div> -->

						<div id="home-actions" class="twelvecol first clearfix">
						
							<a href="http://whatthefestival2013.eventbrite.com" target="_blank">
								<div id="one" class="fourcol first clearfix">
									<h2>BUY TICKETS</h2>
								</div>
							</a>

							<a href="http://whatthefestival.com/gallery">
								<div id="two" class="fourcol clearfix">
									<h2>MEDIA GALLERY</h2>
								</div>
							</a>

							<a href="https://www.facebook.com/events/341321765968059/">
								<div id="three" class="fourcol clearfix">
									<h2>RSVP ON FACEBOOK</h2>
								</div>
							</a>

						</div>
						<div class="clearfix"></div>						
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>