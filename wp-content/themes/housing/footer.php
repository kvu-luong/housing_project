<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package housing
 */

?>


	<footer>
    <div class="container">
      <!-- <div class="row foot-nav-cover">
        <div class="foot-nav">
          <h4>Giới Thiệu</h4>
          <ul>
            <li><a href="#">Giới thiệu chung</a></li>
            <li><a href="#">Tầm nhìn - Sứ mạng</a></li>
            <li><a href="#">Giá trị cốt lỗi</a></li>
            <li><a href="#">Lịch sử phát triển</a></li>
            <li><a href="#">Ban lãnh đạo</a></li>
            <li><a href="#">Giải thưởng</a></li>
            <li><a href="#">Bộ quy tắc ứng xử</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <h4>Bất động sản</h4>
          <ul>
            <li><a href="#">Bất động sản nhà ở</a></li>
            <li><a href="#">Bất động sản du lịch nghỉ dưỡng</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <h4>Tin tức</h4>
          <ul>
            <li><a href="#">Thông tin thị trường</a></li>
            <li><a href="#">Thông tin An Phúc</a></li>
            <li><a href="#">Thông tin báo chí</a></li>
            <li> <a href="#">Brochure công ty</a></li>
            <li> <a href="#">Video</a></li>
          </ul>
        </div>
        <div class=" foot-nav">
          <h4>Phát triển bền vững</h4>
          <ul>
            <li><a href="#">Hội đồng Phát triển bền vững</a></li>
            <li> <a href="#">Quản trị Tập đoàn</a></li>
            <li><a href="#">Quản trị nguồn nhân lực</a></li>
            <li><a href="#">Quản trị thương hiểu An Phúc</a></li>
            <li><a href="#">Môi trường</a></li>
            <li><a href="#">Hoạt động Cộng đồng</a></li>
          </ul>
        </div>
        <div class="foot-nav">
          <h4>Tuyển dụng</h4>
          <ul>
            <li><a href="#">Chính sách nhân sự</a></li>
            <li> <a href="#">Vị trí tuyển dụng</a></li>
            </li>
        </div>
      </div> -->
      <div class="row my-row">
        <p class="note">Lưu ý: Hình ảnh chỉ mang tính chất minh họa.
          Mọi thông tin trên website này đúng tại thời điểm phát hành
          và có thể được điều chỉnh mà không cần thông báo trước</p>
        <div class="foot-top"></div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9 end-footer">
          <p>Tòa nhà văn phòng An Phúc,479 Mã Lò, 
            Phường Bình Hưng Hòa A, Quận Bình Tân, TP.HCM - 
            ĐT: (08)999 99 999 - Hotline: 1900 99 9999</p>
          <p>&copy; <?php echo date("Y");?>. Bản quyền thuộc về Tập đoàn An Phúc (Việt Nam). 
            Tất cả các quyền được bảo hộ.&nbsp;</p>

        </div>
        <!-- <div class="col-sm-12 col-md-3 col-lg-3">
          <ul class="social-media">
            <li>
              <a href="#" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></em></a>
            </li>
            <li>
              <a href="#" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></em></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
  </footer>
  <a id="back-to-top"></a>

  <!-- change loading script for heroku -->
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="js/slick.js"></script> -->
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/slick.min.js">
  </script>

  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wowslider.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script_wow.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>

  <script>
    jQuery(document).ready(function(){
      $('#dropdownSearchBtn').on('click',function(){
         
      });
    });
    </script>
<?php wp_footer(); ?>

</body>
</html>
