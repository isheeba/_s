<?php
/*
 Below fields to be retrieved from item meta and displayed.

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

// Get all the available meta values for this post id.
$availability = get_post_meta($post_id,'sheeba_availability');

?>
<section class="hmd-details">
	<dl itemprop="property" itemscope itemtype="http://meta.schema.org/Property" class="hmd-meta">

		// Display the Age of the item.
		<span itemprop="typicalAgeRange" class="hmd-age-range">
			<dt>Age Range</dt>
			<dd><?php echo "$yrs_from - $yrs_to"; ?></dd>
		</span>

		// Display the brand name of the item
		<span itemprop="brand" class="hmd-brand">
			<dt>Brand</dt>
			<dd><?php echo $brand; ?></dd>
		</span>

		// Display the Model of the item
		<span itemprop="model" class="hmd-model">
			<dt>Model</dt>
			<dd><?php echo $model; ?> </dd>
		</span>

		// Display the Dimensions  of the item	.
		<span itemprop="dimension" class="hmd-dimension">
			<dt>Dimensions</dt>
			<dd> <?php echo $dimension; ?> </dd>
		</span>

		// Display Accessories related to the item.
		<span itemprop="accessories" class="hmd-accessories">
			<dt>Accessories</dt>
			<dd> <?php echo $accessories; ?> </dd>
		</span>

		// Display leftover warranty in MM,YY format.
		<span itemprop="warranty" class="hmd-warranty">
			<dt>Warranty</dt>
			<dd> <?php echo "$warranty_mon, $warranty_yr"; ?> </dd>
		</span>

		// Display the seller time availability.
		<span itemprop=" " class="hmd-availability">
			<dt>Availability</dt>
			<dd>
				<?php
				foreach($availability as $day=>$time_avail)
					echo $day . ' : ' . $time_avail[0] . '<br/>';
				?>
			</dd>
		</span>
	</dl>
</section>
