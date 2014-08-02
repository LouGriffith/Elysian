<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<li class="staff-member">
	<?php echo '<h4>'.get_the_title().'</h4>'; ?>

	<?php // staff member 
		$staff_biography = get_post_meta($post->ID, 'staff_biography', true);
		// check if the custom field has a value
		if($staff_biography != '') {
			echo '<div class="staff_biography">'.$staff_biography.'</div>';
		}
	?><br>

</li>
