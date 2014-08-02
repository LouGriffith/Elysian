<?php
/*
Template Name: Contact
*/
get_header(); ?>

	<aside id="sidebar" class="small-12 large-4 columns">
		
		<article id="contact" class="panel widget widget_meta">
			<h4>Contact Us</h4>

			<?php
			    $args = array(
					'numberposts' => 1,
			      	'post_type' => 'location',
			    );
			    
			    $location = new WP_Query( $args );
			    if( $location->have_posts() ) {
			      	while( $location->have_posts() ) {
			        	$location->the_post();
			        ?>

	        	<div class="location-info">
					<h3 class="location-phone"><?php the_field('phone'); ?></h3>
				</div>
		</article>

	</aside><!-- /#sidebar -->

	<!-- Row for main content area -->
	<div id="content" class="large-8 columns" role="main">
		<h1 class="entry-title">Visit Us</h1>
		
		<img src="http://maps.googleapis.com/maps/api/staticmap?center=Elysian+Aesthetics+of+Memphis+3086+Poplar+Avenue,+Memphis,+Tn+38111&zoom=15&scale=2&size=700x200&maptype=roadmap&sensor=false&format=png&visual_refresh=true&markers=size:mid%7Ccolor:green%7CElysian+Aesthetics+of+Memphis+3086+Poplar+Avenue,+Memphis,+Tn+38111&zoom=15&scale=2&size=x400&maptype=roadmap&sensor=false&format=png&visual_refresh=true&markers=size:mid%7Ccolor:green%7CElysian+Aesthetics+of+Memphis+3086+Poplar+Avenue,+Memphis,+Tn+38111" alt="Google Map of Elysian Aesthetics of Memphis 3086 Poplar Avenue, Memphis, Tn 38111">
		<hr>

		<div class="large-6 columns">
			<h3>Our Address</h3>
			<address class="location-address">
				<?php the_field('street_address'); ?><br>
				<?php the_field('city'); ?>, <?php the_field('state'); ?> <?php echo the_field('zip'); ?>
			</address>
			<br><br>
			<a class="location-directions button" href ="http://maps.google.com/maps?saddr=Start&daddr=<?php the_field('street_address'); ?> <?php the_field('city'); ?>,<?php the_field('state'); ?> <?php echo the_field('zip'); ?>">Get Directions</a>
		</div>

		<div class="large-6 columns">

		</div>
	</div>
        <?php
	}
}
	else {
		echo '';
	}
?>
		
<?php get_footer(); ?>