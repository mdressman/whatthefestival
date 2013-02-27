<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    <?php 
									
							$artist_fields = array('_artist_website','_artist_facebook','_artist_twitter',
												   '_artist_instagram','_artist_soundcloud','_artist_youtube_embed',
												   '_artist_vimeo_embed','_artist_soundcloud_embed','_artist_mp3_id',
												   '_artist_mp3_name');
		
							$artist_data = array();
		
							foreach($artist_fields as $artist_field) {
								$artist_data[$artist_field] = get_post_meta ($post->ID, $artist_field, true);
							}
		
						?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>
                  
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix">
							
							    <?php the_post_thumbnail( 'wtf-artistpage' ); ?>

							    <?php the_content(); ?>
					
						    </section> <!-- end article section -->
						
						    <footer class="article-header">
							    
							
						    </footer> <!-- end article footer -->
						
						
					
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
        						    <p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
        						</footer>
        					</article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <div id="artist_sidebar" class="artist_sidebar fourcol last clearfix" role="complementary">

						<?php 
				 			if($artist_data['_artist_youtube_embed']){ 				
				                echo '<iframe width="359" height="283" src="http://www.youtube.com/embed/'.$artist_data['_artist_youtube_embed'].'" frameborder="0" allowfullscreen></iframe>';				
				            }elseif($artist_data['_artist_vimeo_embed']){ 				
				                echo '<iframe width="359" height="283"  src="http://player.vimeo.com/video/'.$artist_data['_artist_vimeo_embed'].'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>';				
				            }          
						    
				            if($artist_data['_artist_soundcloud_embed']){
				                echo do_shortcode('[soundcloud]' . $artist_data['_artist_soundcloud_embed'] . '[/soundcloud]');
				            }

							echo '<div id="artist_links">';
							if($artist_data['_artist_website']){
								echo '<a title="Artist Website" alt="Artist Website" href="' . $artist_data['_artist_website'] . '" target="www"><div class="www">website</div></a>';
							}
							
							if($artist_data['_artist_facebook']){
								echo '<a title="Artist Facebook" alt="Artist Facebook" href="' . $artist_data['_artist_facebook'] . '" target="fb"><div class="fb">facebook</div></a>';
							}
							
							if($artist_data['_artist_twitter']){
								echo '<a title="Artist Twitter" alt="Artist Twitter" href="' . $artist_data['_artist_twitter'] . '" target="tw"><div class="tw">twitter</div></a>';
							}

							if($artist_data['_artist_instagram']){
								echo '<a title="Artist Twitter" alt="Artist Twitter" href="' . $artist_data['_artist_instagram'] . '" target="tw"><div class="tw">twitter</div></a>';
							}
							
							if($artist_data['_artist_soundcloud']){
								echo '<a title="Artist Soundcloud" alt="Artist Soundcloud" href="' . $artist_data['_artist_soundcloud'] . '" target="sc"><div class="sc">soundcloud</div></a>';
							}	
							echo '<div class="clear"></div></div>';
							
							if($artist_data['_artist_mp3_name']){
								echo '<a href="javascript:;" class="artist_mp3 details_mp3" id="' . $artist_data['_artist_mp3_id'] . '" name="' . $artist_data['_artist_mp3_name'] . '"><div></div>&nbsp;PLAY MP3</a><div class="clear"></div>';
							}
					
				         ?>        

					</div>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
