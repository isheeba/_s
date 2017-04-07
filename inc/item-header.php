<?php

// filter 'post_class' and add our own classes to the article tag for single posts
// viz. hmd-item, hmd-product

function _s_location() {

	global $post_id;

	$locality = get_post_meta( $post_id, '_item_locality', true );
	$region = get_post_meta( $post_id, '_item_region', true );
	?>
	<address itemprop="location" itemscope itemtype="http://schema.org/Place">
			<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span class="locality" itemprop="addressLocality"><?php echo $locality; ?></span>
					<span class="region" itemprop="addressRegion"><?php echo $region; ?></span>
			</p>
	</address>
	<?php
}

// will contain code to display meta box on the backend
// will contain code to process and save location meta
