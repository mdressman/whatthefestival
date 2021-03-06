<?php
/*
Template Name: Fullwidth Base
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
						<?php the_content( ); ?>
						<?php echo do_shortcode( '[social_share/]' ); ?>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
