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

						<div id="home-features">
				
							<div id="home-gallery" class="fourcol first clearfix home-feature">
								<div style="background: #888;">
									2012 PHOTO GALLERY!
								</div>
							</div>

							<div id="home-gallery" class="fourcol clearfix home-feature">
								<div style="background: #333;">
									2012 PHOTO GALLERY!
								</div>
							</div>

							<div id="home-gallery" class="fourcol clearfix home-feature">
								<div style="background: #888;">
									2012 PHOTO GALLERY!
								</div>
							</div>
				
						</div>

						
						<div id="news-feed" class="eightcol first clearfix">


							<?php 
								$args = array(
									'category_name' => 'news'
	  							);

	  							query_posts( $args );
	  						?>

							

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							    <header class="article-header">
								
								    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							
							    </header> <!-- end article header -->
						
							    <section class="entry-content clearfix">
								    <?php the_content(); ?>
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

						<div id="home-sidebar" class="fourcol">
							alsbaksbd
						</div>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
