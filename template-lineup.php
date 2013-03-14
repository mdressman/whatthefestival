<?php
/*
Template Name: Lineup
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twlevecol first clearfix" role="main">

				    	<h1>Music</h1>

						<?php 
		                    $args = array(
		                        'post_type'=> 'artist',
								'posts_per_page' => -1,
								'order' => 'ASC'
		                    );
		                    query_posts( $args );
		                ?>

						<ul class="lineup">

					   		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					   		<?php
								$mp3_id = get_post_meta($post->ID, '_artist_mp3_id', true); 
								$mp3_name = get_post_meta($post->ID, '_artist_mp3_name', true); 
							?>
								
								<li class="threecol lineup-artist">

									<div class="lineup-artist-hover"></div>
									
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('wtf-lineup')?>
										
										<h3 class="artist-name"><?php the_title(); ?></h3>
										<?php 
											if ($mp3_name) { 
										 		echo '<a href="javascript:;" id="' . $mp3_id . '" name="' . $mp3_name . '" class="artist_mp3 lineup_mp3" alt="Listen" title="Listen">{mp3}</a>';
											}
										?>
									</a>
								
								


								</li>

						
								
								

					    		

					    	<?php endwhile; endif; ?>	
						</ul>
			
				    </div> <!-- end #main -->
    			    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
