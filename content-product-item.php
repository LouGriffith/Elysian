<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<li class="product-item">
	<div class="dotted-bg"></div> 
	<?php echo '<label>'.get_the_title().'</label>'; ?>

	<?php // service time 
		$service_time = get_post_meta($post->ID, 'service_time', true);
		// check if the custom field has a value
		if($service_time != '') {
		  echo '<span class="service-time">'.$service_time.' min</span>';
		} 
	?>

	<?php // service cost 
		$service_cost = get_post_meta($post->ID, 'service_cost', true);
		// check if the custom field has a value
		if($service_cost != '') {
		  echo '<span class="service-cost">$'.$service_cost.'</span>';
		} 
	?>

</li>