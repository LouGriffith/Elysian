<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- Row for main content area -->


<?php if ( is_active_sidebar( 'pagetop' ) ) : ?>
	<div class="large-12 pagetop" id="lead">
		<?php dynamic_sidebar( 'pagetop' ); ?>
	</div>
<?php endif; ?>

<div class="small-11 small-centered large-9 large-centered columns home-top" id="content" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="large-12 large-centered columns">	
				<section>
					<?php the_content(); ?>
				</section>
			</div>
	<?php endwhile; // End the loop ?>
		
			<div class="small-10 large-6 small-centered columns">
				<hr>
			</div>

			<div class="large-7 columns">
				<section class="services">
					
					<?php
						$page = get_page_by_title( 'services' );
						$the_title = $page->post_title; 
						$content = $page->post_content; 
					?>

					<h3><?php echo $the_title ?></h3>
					<p><?php echo $content ?></p>
				
					<a href="/services">View Our List of Services</a>

					<?php wp_reset_query(); ?>
				</section>

				<div class="small-10 large-8 small-centered columns">
					<hr>
				</div>
				
				<section class="products">

					<?php
						$page = get_page_by_title( 'products' );
						$the_title = $page->post_title; 
						$content = $page->post_content; 
					?>

					<h3><?php echo $the_title ?></h3>
					<p><?php echo $content ?></p>
					<a href="/products">View Our List of Products</a>

					<?php wp_reset_query(); ?>
				</section>

			</div>



			<div class="large-5 columns show-for-large-up">
				<div class="image-spa">
					<img src="<?php echo get_template_directory_uri(); ?>/img/woman_spa.jpg">
				</div>
			</div>
		</div>

</div>

<div class="small-11 small-centered large-9 large-centered columns pagebottom" id="bottom">
	<div class="row">

		<div class="large-12 columns">
			<section>

				<h3>Specials</h3>
				<div class="row">
					<div class="large-7 columns">
						<?php $loop = new WP_Query( array( 
							'post_type' => 'special', 
							'posts_per_page' => 1, 
							'meta_query' => array(
								array(
									'key' => 'featured',
									'value' => '1',
									'compare' => '=='
									)
								) 
							) 
						); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						<?php endwhile; wp_reset_query(); ?>
					</div>

					<div class="small-10 small-centered columns show-for-small-only">
						<?php $loop = new WP_Query( array( 
							'post_type' => 'special', 
							'posts_per_page' => -1, 
							'meta_query' => array(
								array(
									'key' => 'featured',
									'value' => '0',
									'compare' => '=='
									)
								) 
							) 
						); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php get_template_part( 'content', 'special-item' ); ?>
						<?php endwhile; wp_reset_query(); ?>
					</div>
					<div class="large-5 columns">
						<?php $loop = new WP_Query( array( 
							'post_type' => 'special', 
							'posts_per_page' => -1, 
							'meta_query' => array(
								array(
									'key' => 'featured',
									'value' => '0',
									'compare' => '=='
									)
								) 
							) 
						); ?>
						<ul>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php get_template_part( 'content', 'special-item' ); ?>
						<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<!-- /end the main content area -->
		
<?php get_footer(); ?>
