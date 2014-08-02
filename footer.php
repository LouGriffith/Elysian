		</div><!-- Row End -->
	</div><!-- Container End -->
	
	<div id="footer">
		<footer class="full-width footer" role="contentinfo">
			<div class="row">
				<div class="large-2 columns footer-logo">
	        		<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><i class="icon-elysian"><span><?php bloginfo( 'name' ); ?><span></i></a></h2>
				</div>

				<div class="large-5 columns">
					<h4 class="services">Our Services</h4>
				    
				    <?php
				        wp_nav_menu( array(
				            'theme_location' => 'services',
				            'container' => false,
				            'depth' => 0,
				            'items_wrap' => '<ul class="services">%3$s</ul>',
				            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
				            'walker' => new reverie_walker( array(
				                'in_top_bar' => false,
				                'item_type' => 'li',
				                'menu_type' => 'main-menu'
				            ) ),
				        ) );
				    ?>

				</div>

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
						          
						        <div class="large-2 columns">
									<ul class="footer-social">
										<li><a href="<?php the_field('facebook'); ?>"><i class="icon-facebook"></i></a></li>
										<li><a href="<?php the_field('twitter'); ?>"><i class="icon-twitter"></i></a></li>
									</ul>
								</div>

								<div class="large-3 columns location-info">
									<h3 class="location-phone"><?php the_field('phone'); ?></h3>

									<address class="location-address">
										<?php the_field('street_address'); ?><br>
										<?php the_field('city'); ?>, <?php the_field('state'); ?> <?php echo the_field('zip'); ?>
									</address>

									<a class="location-directions" href ="http://maps.google.com/maps?saddr=Start&daddr=<?php the_field('street_address'); ?> <?php the_field('city'); ?>,<?php the_field('state'); ?> <?php echo the_field('zip'); ?>">Get Directions</a>
								</div>

						        <?php
						      }
						    }
						    else {
						      echo '';
						    }
						  ?>

			</div>

			<div class="row">
				<div class="large-2 columns">
					
				</div>

				<div class="large-10 columns">
					<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Handcrafted by','lou'); ?> <a href="http://lougriffith.com" rel="nofollow" title="Lou">Lou</a>.</p>
				</div>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>

	<script>
		(function($) {
			$(document).foundation();
		})(jQuery);
	</script>
		
	</body>
</html>