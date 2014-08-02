<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<li class="special-item">
	<div class="dotted-bg"></div> 
	<?php echo '<label><h5>'.get_the_title().'</h5></label>'; ?>

	<?php // special_price
		$special_price = get_post_meta($post->ID, 'special_price', true);
		// check if the custom field has a value
		if($special_price != '') {
		  echo '<span class="special_price">$'.$special_price.'</span>';
		} 
	?>

</li>