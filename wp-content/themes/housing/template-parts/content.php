<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package housing
 */

?>
  <?php
      $query = array(
        'posts_per_page' => 5,
        'post_type'      => 'post',
        'orderby'        => 'date',
        'order'          => 'DESC'
        );
		$featured_home = new WP_Query( $query );

		if( $featured_home->have_posts() ) {
		while ( $featured_home->have_posts() ) : $featured_home->the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php  post_class(); ?>>
				<header class="entry-header container">
					<?php
			
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							echo get_post_modified_time('F d, Y g:i a');
							// housing_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<?php //housing_post_thumbnail(); ?>

				<div class="entry-content container">
					<div class="row">
						<div class="col-xs-12 col-md-6 col-lg-6 row-eq-height">
							<?php housing_post_thumbnail(); ?>
						</div>
						<div class="col-xs-12 col-md-6 col-lg-6 row-eq-height">
							<div class="post_content">
								<?php echo wp_trim_words( get_the_content(), 200, '...' ); ?>
								<div><a href="<?php echo esc_url( get_permalink() ); ?>" class="btn my_button">Chi Tiết</a><div>
							</div>
						</div>
					</div>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
			endwhile;
		  }


		// echo get_field("new_right_content");
		// echo get_field("new_left_content");
?>