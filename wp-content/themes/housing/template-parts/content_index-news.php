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
      $query = array(
        'posts_per_page' => -1,
        'post_type'      => 'post',
        // 'category_name' => 'news',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'cat_name' => 'news'
        );
		$featured_home = new WP_Query( $query );
        $check = 0;
		if( $featured_home->have_posts() ) {
        while ( $featured_home->have_posts() ) : $featured_home->the_post();
        if( has_category( array('news', 'news_en') ) ){
            if($check < 4){
                $check++;
            ?>
        <div class="new-top col-xs-12 col-sm-12 col-md-6 col-lg-6 row-eq_height">
            <div class="row">
                <div class="zoom col-xs-12 col-sm-6 col-md-6 col-lg-6 row-eq-height">
                    <?php housing_post_thumbnail(); ?>
                </div>
                <div class="news-caption col-xs-12 col-sm-6 col-md-6 col-lg-6 row-eq-height">
                    <div class="new_title">
                    <h2 class="entry-title"><a href="<?php echo esc_url( get_permalink()); ?>" rel="bookmark">
                        <?php
                            wp_trim_words( the_title(), 1,'...');
                        ?>
                        </a></h2>
                    </div>
                    <div class=time><i class="fa fa-calendar" aria-hidden="true"></i>
                            <span><?php echo get_post_modified_time('F d, Y g:i a');?></span>
                    </div>
                    <div>
                        <?php echo wp_trim_words( get_the_content(), 30, '...' ); ?>
                        <!-- <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn my_button">Chi Tiết</a> -->
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
			endwhile;
  		}
?>