<?php
get_header();
?>
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
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $query = array(
		'posts_per_page' => 2,
		'paged' => $paged, 
		'post_type'      => 'post',
        'orderby'        => 'date',
		'order'          => 'DESC',
		
        );
		$featured_home = new WP_Query( $query );
		$temp_query = $wp_query;
		$wp_query = null;
		$wp_query = $featured_home;
		if( $featured_home->have_posts() ) {
		while ( $featured_home->have_posts() ) : $featured_home->the_post();
		// var_dump(get_the_category());
		// var_dump(has_category( array('project', 'project_en') ));
		// if( has_category( array('project', 'project_en') ) ){
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
						<div class="col-xs-12 col-md-5 col-lg-5 row-eq-height">
							<?php housing_post_thumbnail(); ?>
						</div>
						<div class="col-xs-12 col-md-7 col-lg-7 row-eq-height">
							<div class="post_content">
								<?php echo wp_trim_words( get_the_content(), 200, '...' ); ?>
								<div><a href="<?php echo esc_url( get_permalink() ); ?>" class="btn my_button">Chi Tiết</a><div>
							</div>
						</div>
					</div>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->
			<?php
			// }
			endwhile;
			wpbeginner_numeric_posts_nav($featured_home);
		  }
		  wp_reset_postdata();

$wp_query = NULL;
$wp_query = $temp_query;

?>
<?php  ?>