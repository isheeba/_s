<?php

// filter 'post_class' and add our own classes to the article tag for single posts
// viz. hmd-item, hmd-product

/**
 * Displays Location for a handmedown
 * 
 * @global int $post_id
 */
function saurabh_theme_location() {

	global $post_id;

	$locality = get_post_meta( $post_id, '_hmd_locality', true );
	$region = get_post_meta( $post_id, '_hmd_region', true );
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

/**
 * Enqueues font awesome from a CDN
 */
function saurabh_theme_enqueue_fa(){
	wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('fontawesome');
}

// will contain code to display meta box on the backend
// will contain code to process and save location meta
