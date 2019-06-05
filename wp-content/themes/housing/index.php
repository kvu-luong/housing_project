<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package housing
 */

get_header();
?>
 
<div class="slider" id="sliders">
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
      <div class="ws_images">
        <ul>
          <li>
            <a href="#">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider.jpg" alt="jquery image carousel" title="slider" id="wows1_0" />
            </a>
            <div class="container">
              <div class="banner-content col-sm-4 d-sm-none animated tada delay-1s">
                <p>TẦM NHÌN</p>
                <div class="banner-item">
                  <div>Tập đoàn kinh tế hàng đầu trong các lĩnh vực:</div>
                  <div>Bất động sản – Tài chính – Du lịch – Phát triển Hạ tầng.</div>
                </div>
                <p>&nbsp;</p>
              </div>
            </div>

          </li>
          <li><img src="<?php bloginfo('stylesheet_directory'); ?>/img/slider2.jpg" alt="slider2" title="slider2" id="wows1_1" /></li>
        </ul>
      </div>
      <div class="ws_bullets">
        <div>
          <a href="#" title="slider"><span>1</span></a>
          <a href="#" title="slider2"><span>2</span></a>
        </div>
      </div>
      <div class="ws_shadow"></div>
    </div>


    <!-- End WOWSlider.com BODY section -->
  </div>
  <div class="separate"></div>
  <div class="new-infor" id="news">
    <div class="container">
      <div class="row title-infor">
        <h2>Thông Tin Mới</h2>
      </div>
      <div class="row">
          <?php 
         	while ( have_posts() ) :
            the_post();
      
            get_template_part( 'template-parts/content-index', get_post_type() );
      
            // the_post_navigation();
      
            // // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            // 	comments_template();
            // endif;
      
          endwhile; // End of the loop.
          ?>
      </div>
    </div>
  </div>
  <div class="project" id="projects">
    <div class="container text-center">
      <a href="#" alt="prevent auto add a tag"></a>
      <p class="project_title">Dự Án Tiêu Biểu</p>
    </div>
    <a href="#" title="prevent auto add a tag"></a>
    <div class="row row_me carousel">
      <div class="card  3 zoom wow zoomIn" data-wow-delay="1.5s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card 7  zoom wow zoomIn" data-wow-delay="2s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card 4 zoom  wow zoomIn" data-wow-delay="0.5s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card 8 zoom wow zoomIn" data-wow-delay="1s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card zoom wow zoomIn" data-wow-delay="3s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card zoom wow zoomIn" data-wow-delay="3.5s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card  1 zoom wow zoomIn" data-wow-delay="0.5s">
        <div class="card-overplay">
          <p class="link-project"><a href="/single-project">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card 5 zoom wow zoomIn" data-wow-delay="1s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card 2 zoom wow zoomIn" data-wow-delay="1.5s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>
      <div class="card 6 zoom wow zoomIn" data-wow-delay="2s">
        <div class="card-overplay">
          <p class="link-project"><a href="#">Village Place <i class="fa fa-caret-right" aria-hidden="true"></i></a>
          </p>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/list_img.jpg" alt="slider">
      </div>

    </div>
  </div>
  <div class="customer_infor" id="customers">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 customer-item wow slideInLeft" data-wow-delay="0.5s">
          <h5>Đăng Ký nhận bản tin</h5>
          <p>Kết nối với chúng tôi để theo dõi thông tin mới nhất</p>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp"
                placeholder="Email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Phone</label>
              <input type="text" class="form-control" id="inputPhone" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3 customer-item wow slideInUp" data-wow-delay="1s">
          <h5>Brochure Công Ty</h5>
          <p>Download Brochure mới nhất của An Phúc để hiểu rõ hơn về chúng tôi</p>
          <a href="#">Tải brochure <em class="fa fa-caret-right" aria-hidden="true"></em></a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3 customer-item wow slideInUp mt-md-2" data-wow-delay="1.5s">
          <h5>Hotline:<span>1900 90 9999</span></h5>
          <p>Email:<span>chamsockhachhang@novaland.com.vn</span></p>
        </div>
      </div>
    </div>
  </div>
  

<?php

get_footer();
