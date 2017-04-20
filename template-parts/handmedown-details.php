<?php
/*
"Age Range ( _ years to _ years)* => 2 inputs
Brand => Free text
Model => Free text
Size/ Dimensions => Free Text
Included Accessories => Free Text,
Warranty Left => _ mo/year (toggle)
Availability Timings of Seller => metas"

 */

// Retrieve the "From and To" years of the item.
$yrs_from = get_post_meta( $post_id, 'sheeba_yrs_from', true );
$yrs_to = get_post_meta( $post_id, 'sheeba_yrs_to', true );

// Get Brand name - like Samsung, Apple, Woodland etc.
$brand = get_post_meta( $post_id, 'sheeba_brand', true );

// Get Model for the item.
$model = get_post_meta( $post_id, 'sheeba_model', true );

// Get dimension for the item.
$dimension = get_post_meta( $post_id, 'sheeba_dimension', true );

// Get Accessorie(s) for the item.
$accessories = get_post_meta( $post_id, 'sheeba_accessories', true );

// Get how many months and years left for warranty to expire.
$warranty_mon = get_post_meta( $post_id, 'sheeba_warranty_mon', true );
$warranty_yr = get_post_meta( $post_id, 'sheeba_warranty_yr', true );

?>
<section class="hmd-details">
	<div itemprop="property" itemscope itemtype="http://meta.schema.org/Property" class="hmd-meta">
		<span itemprop="typicalAgeRange" class="hmd-age-range">
			<?php echo "$yrs_from - $yrs_to"; ?>
		</span>
		<span itemprop="brand" class="hmd-brand"> <?php echo $brand; ?> </span>
		<span itemprop="model" class="hmd-model"> <?php echo $model; ?> </span>
		<span itemprop="dimension" class="hmd-dimension"> <?php echo $dimension; ?> </span>
		<span itemprop="accessories" class="hmd-accessories"> <?php echo $accessories; ?> </span>
		<span itemprop="warranty" class="hmd-warranty">
			<?php echo "$warranty_mon, $warranty_yr"; ?>
		</span>

	</div>
</section>
