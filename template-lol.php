<?php
/*
Template Name: LOL
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix full-width" role="main">

			    	   <header class="article-header">
						
						    <h1><?php the_title(); ?></h1>
					
					    </header> <!-- end article header -->

						<?php the_post(); ?>

						<div class="sixcol first">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="sixcol">
							<?php the_content( ); ?>
						</div>

						<div class="clearfix"></div>

						<h2>Featuring</h2>

						<?php 
		                    $args = array(
		                        'post_type'=> 'artist',
		                        'category_name' => 'LOL',
								'posts_per_page' => -1,
								'order' => 'ASC'
		                    );
		                    query_posts( $args );
		                ?>

		                <ul class="lineup">

					   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<li class="threecol lineup-artist">

									<div class="lineup-artist-hover"></div>
									
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('wtf-lineup')?>
										
										<h3 class="artist-name"><?php the_title(); ?></h3>
										
									</a>
								</li>

					    	<?php endwhile; endif; ?>	

						</ul>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
