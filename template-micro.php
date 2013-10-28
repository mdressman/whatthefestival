<?php
/*
Template Name: Micro Experience
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix split-page" role="main">
						
						<?php the_post(); ?>
						
						<header class="article-header">
						    <h1><?php the_title(); ?></h1>
					    </header> <!-- end article header -->
				    	
						<div class="twelvecol first">
							<p>The OMG Experience is the ultimate way to enjoy What The Festival. It offers you elevated levels of luxury and comfort, featuring the following perks and more:</p>
						</div>



						<div class="sixcol first">
							<?php the_content( ); ?>
							
							<a href="http://whatthefestival2013.eventbrite.com" target="_blank"><h2>BUY TICKETS</h2></a>

								<!-- <a href="http://whatthefestival2013.eventbrite.com" target="_blank">
									<div id="buy-tickets-button">BUY TICKETS</div>
								</a> -->
						
						</div>
						<div class="sixcol">
							<iframe src="http://player.vimeo.com/video/43489783" width="551" height="310" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>

				    	<div class="twelvecol first">
				    		<?php the_post_thumbnail('full'); ?>

				    		
<!-- 
				    		<?php if (get_post_meta( get_the_ID(), 'button_url', true )) { ?>

								<a href="<?php echo get_post_meta( get_the_ID(), 'button_url', true ); ?>" target="_blank">
									<div class="split-page-button <?php echo get_post_meta (get_the_ID(), 'button_class', true); ?>">
										<?php echo get_post_meta (get_the_ID(), 'button_text', true); ?>
									</div>
								</a>

				    		<?php } ?> -->

				    		<?php if (get_post_meta( get_the_ID(), 'split_image_src', true )) { ?>

								<?php if (get_post_meta( get_the_ID(), 'split_image_url', true )) { ?>
								<a href="<?php echo get_post_meta( get_the_ID(), 'split_image_url', true ); ?>">
								<?php } ?>
									<img src="<?php echo get_post_meta( get_the_ID(), 'split_image_src', true ); ?>" />
								<?php if (get_post_meta( get_the_ID(), 'split_image_url', true )) { ?>
								</a>
								<?php } ?>

				    		<?php } ?>

							<div class="clearfix"></div>
							<?php echo do_shortcode( '[social_share/]' ); ?>

				    	</div>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
