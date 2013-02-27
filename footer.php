			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<nav role="navigation">
    					<?php bones_footer_links(); ?>
	                </nav>
	                		
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<div id="persistent-wrapper">
			<div id="persistent-bar">

				<div id="wtf_player" class="jp-jplayer"></div>

				<div id="wtf_player_container" class="jp-audio">
					<div class="jp-type-playlist">
						<div class="jp-gui jp-interface">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
								
		                        <li id="track_info">WTF?! LISTEN UP</li>
							</ul>

						</div>
						<div class="jp-playlist">
							<ul>
								<li></li>
							</ul>
						</div>
						<div class="jp-no-solution">
							<span>Update Required</span>
							To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
						</div>
					</div>
				</div>  <!-- #wtf_player -->
		        
		        <a href="javascript:;" id="expand_collapse" alt="Playlist Expand/Collapse" title="Playlist Expand/Collapse">[ Playlist ]</a> 
		        
		        <!-- Begin MailChimp Signup Form -->
		        <!-- <div id="mc_embed_signup">
		        <form action="http://whatthefestival.us4.list-manage.com/subscribe/post?u=8062a10c4a3aa3f6a13d82c05&amp;id=a9e7ada1d3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
		            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="sign up for the email list" required>
		            <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button">
		        </form>
		        </div> -->
		        <!--End mc_embed_signup-->

				<!-- <a href="http://twitter.com/whatthefestival" target="tw" id="wtf_tw" alt="WTF Twitter" title="WTF Twitter">Twitter</a>  
				<a href="http://facebook.com/whatthefestival" target="fb" id="wtf_fb" alt="WTF Facebook" title="WTF Facebook">Facebook</a>   -->
		       
			</div> <!-- #persistent-bar -->
		</div> <!-- #persistent-wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>




	</body>

</html> <!-- end page. what a ride! -->
