<?php
/*
Template Name: Venue Page
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
				    	
				    	<div class="eightcol first">

				    		<?php if (get_post_meta( get_the_ID(), 'map', true )) { ?>

								<?php echo get_post_meta( get_the_ID(), 'map', true ); ?>

				    		<?php } ?>

				    	</div>

				    	<div class="fourcol split-content">
							<?php the_content( ); ?>
				    	</div>

				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
