<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package housing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			$page_id =  $wp_query->post->ID;

			if( $page_id == 6 || $page_id == 42 || $page_id == 37 || $page_id == 226){
				get_template_part( 'template-parts/content', 'project' );
			}elseif($page_id == 62 || $page_id == 188){
				get_template_part( 'template-parts/content', 'index');	
			}elseif($page_id == 17 || $page_id == 276){
				get_template_part( 'template-parts/content', 'news');	
			}else{
				get_template_part( 'template-parts/content_menu', 'page' );
			}
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
