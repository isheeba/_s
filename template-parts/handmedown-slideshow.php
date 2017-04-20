<section class="item-slideshow-wrapper">
		<ul class="bxslider item-slideshow">
				<?php
				$attachments = get_attached_media( 'image' );

				foreach ( $attachments as $attachment ) {
					?>
					<li>
							<?php
							// code to display image 
							$img_src = wp_get_attachment_image_url( $attachment->ID, 'large' );
							$img_srcset = wp_get_attachment_image_srcset( $attachment->ID, 'large' );
							?>
							<img src="<?php echo esc_url( $img_src ); ?>"
								 srcset="<?php echo esc_attr( $img_srcset ); ?>"
								 sizes="(max-width: 50em) 87vw, 680px" alt="A rad wolf">

					</li>
					<?php
				}
				?>
		</ul>
</section>