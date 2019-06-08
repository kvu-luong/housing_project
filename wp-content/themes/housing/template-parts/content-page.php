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
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->
		<div class="row">
			<?php
			$upper_class = is_active_sidebar("sidebar-1") ? "col-xs-12 col-md-9 col-lg-9" : "col-xs-12 col-md-12 col-lg-12";
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
	<div class="d-flex justify-content-center">
		<div class="col-xs-12 col-md-6 col-lg-6">
			<div><p class="contact_title">Để biết thêm thông tin chi tiết , hãy liên hệ với chúng tôi</p><div>
			<div>
				<?php 
					if(do_shortcode("[contact-form-7 id=85 title=Contact form 1]") != '[contact-form-7 404 "Not Found"]'){
						echo do_shortcode("[contact-form-7 id=85 title=Contact form 1]");
						// if(do_shortcode("[contact-form-7 id=22 title=Contact form 1]") != '[contact-form-7 404 "Not Found"]'){
						// echo do_shortcode("[contact-form-7 id=22 title=Contact form 1]");
						}
					?>
			</div>
		</div>
	</div>
</div>