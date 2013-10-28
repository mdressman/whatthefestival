<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix contact-page" role="main">
						
						<?php the_post(); ?>
						
						<header class="article-header">
						    <h1><?php the_title(); ?></h1>
					    </header> <!-- end article header -->
				    	
				    	<div class="eightcol first">
				    		
							<?php the_content( ); ?>

				    	</div>

				    	<?php get_sidebar( 'contact_sidebar' ); ?>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
