<?php
/*
Template Name: Lineup
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twlevecol first clearfix" role="main">

						<?php 
		                    $args = array(
		                        'post_type'=> 'artist',
								'posts_per_page' => -1
		                    );
		                    query_posts( $args );
		                ?>

						<ul class="lineup">

					   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<li class="threecol">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('wtf-lineup')?>
										<div class="clearfix"></div>
										<?php the_title(); ?>
									</a>
								</li>

						
								
								

					    		

					    	<?php endwhile; endif; ?>	
						</ul>
			
				    </div> <!-- end #main -->
    			    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
