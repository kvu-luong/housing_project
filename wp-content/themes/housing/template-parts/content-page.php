<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package housing
 */

?>
<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<!-- <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?> -->
		</header><!-- .entry-header -->
		<div class="row">
			<?php
			// var_dump(is_active_sidebar("sidebar-1"));
			// exit();
			$upper_class = is_active_sidebar("sidebar-1") ? "col-xs-12 col-md-9 col-lg-9" : "col-xs-12 col-md-12 col-lg-12";
			// var_dump($upper_class);
			// exit();
			$lower_class = is_active_sidebar("sidebar-1") ? "position_custom d-sm-none d-md-block col-xs-12 col-md-3 col-lg-3" : "d-none";
			?>
			<div class="entry-content <?php echo $upper_class; ?>">
				<?php
			the_content();
			?>
			</div><!-- .entry-content -->
			<div class="<?php echo $lower_class;?>">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</article>
</div>