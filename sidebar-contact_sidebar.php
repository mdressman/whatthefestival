				<div id="contact_sidebar" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'contact_sidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets. yes?????", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>