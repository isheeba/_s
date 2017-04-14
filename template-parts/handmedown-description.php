<div class="entry-content">
		<?php
		the_content( 
			sprintf(
				/* translators: %s: Name of current post. */
				wp_kses(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'saurabh-theme' ), 
					array( 'span' => array( 'class' => array() ) ) ), 
					the_title( '<span class="screen-reader-text">"',
					'"</span>',
						false
				)
			)
		);
		?>
</div><!-- .entry-content -->
