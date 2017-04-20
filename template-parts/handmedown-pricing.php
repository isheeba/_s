<?php
$price = get_post_meta( $post_id, 'saurabh_theme_price', true );

// formats price with 2 decimal places
$price_decimal = number_format( $price, 2 );

// formats price according to the locale
$price_localised = number_format_i18n( $price, 2 );
?>
<section class="hmd-pricing">
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="hmd-offer">
				<span itemprop="priceCurrency" content="INR" class="hmd-currency">₹</span>
				<span itemprop="price" content="<?php echo $price_decimal ?>" class="hmd-price">
					<?php echo $price_localised ?>
				</span>
		</div>
		<form class="hmd-cta-form">
				<input type="submit" name="hmd-submit" value="">
		</form>
</section>