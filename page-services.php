<?php
/*
Template Name: Services
*/
get_header(); ?>

<aside id="sidebar" class="large-4 columns show-for-medium-up">
	
	<article id="contact" class="panel widget widget_meta">
		<h1 class="entry-title">Services</h1>

			<ul class="side-nav">

			<?php /* Start loop */

				$custom_terms = get_terms('service_type');

				foreach($custom_terms as $custom_term) {
				    wp_reset_query();
				    $args = array('post_type' => 'service',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'service_type',
				                'field' => 'slug',
				                'terms' => $custom_term->slug,
				            ),
				        ),
				     );

				     $loop = new WP_Query($args);
				     if($loop->have_posts()) {
	        			echo '<li><a href="#'.$custom_term->name.'">'.$custom_term->name.'</a></li>';
				     }
				}

			?>

			</ul>
	</article>

</aside><!-- /#sidebar -->

<!-- Row for main content area -->
	<div id="content" class="small-11 small-centered large-uncentered large-8 columns" role="main">
		
		<?php /* Start loop */

			$custom_terms = get_terms('service_type');

			foreach($custom_terms as $custom_term) {
			    wp_reset_query();
			    $args = array('post_type' => 'service',
			        'tax_query' => array(
			            array(
			                'taxonomy' => 'service_type',
			                'field' => 'slug',
			                'terms' => $custom_term->slug,
			            ),
			        ),
			     );

			     $loop = new WP_Query($args);
			     if($loop->have_posts()) {
        			echo '<section>';
        			echo '<h3 id="'.$custom_term->name.'" style="padding-top: 90px; margin-top: -90px;">'.$custom_term->name.'</h3>';
        			echo '<p>'.$custom_term->description.'</p>';
        			echo '<ul class="services small-11 large-10 small-centered columns ">';

			        while($loop->have_posts()) : $loop->the_post();
			       		get_template_part( 'content', 'product-item' );
			        endwhile;

			        echo '</ul>';
			        echo '</section>';
			     }
			}

		?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>