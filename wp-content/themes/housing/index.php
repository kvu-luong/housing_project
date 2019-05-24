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
 
 
  <div class="separate"></div>
  <div class="new-infor" id="news">
    <div class="container">
      <div class="row title-infor">
        <h2>Thông Tin Mới</h2>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 new-infor__right wow slideInLeft" data-wow-duration="1s">
          <div class="col-sm-12 col-md-12 col-lg-12 new-item wow slideInLeft ">
            <div class="new-image">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/infor_lg.jpg" alt="up-image">
            </div>
            <div class="new-caption">
              <div class="time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 26/04/2019
              </div>
              <div class="infor">
                <h3>
                  <a href="#">NOVALAND THÔNG TIN KẾ HOẠCH KINH DOANH NĂM
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </a>
                </h3>
              </div>
              <div>
                <p class="text-truncate">Tại Đại hội đồng cổ đông (ĐHĐCĐ) năm 2019, Tập đoàn Novaland đã trình...</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 new-item__below wow slideInUp" data-wow-delay="0.5s">
              <div class="new-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/infor.jpg" alt="up-image">
              </div>
              <div class="new-caption">
                <div class="time">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 26/04/2019
                </div>
                <div class="infor">
                  <h3>
                    <a href="#">NOVALAND THÔNG TIN KẾ HOẠCH KINH DOANH NĂM 2019 VÀ CHIẾN
                      LƯỢC PHÁT TRIỂN GIAI ĐOẠN 2019 - 2023
                      <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </h3>
                </div>
                <div>
                  <p class="text-truncate">Tại Đại hội đồng cổ đông (ĐHĐCĐ) năm 2019, Tập đoàn Novaland đã trình...</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6  new-item__below  wow slideInUp" data-wow-delay="1s">
              <div class="new-image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/infor.jpg" alt="up-image">
              </div>
              <div class="new-caption">
                <div class="time">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 26/04/2019
                </div>
                <div class="infor">
                  <h3>
                    <a href="#">NOVALAND THÔNG TIN KẾ HOẠCH KINH DOANH NĂM 2019 VÀ CHIẾN
                      LƯỢC PHÁT TRIỂN GIAI ĐOẠN 2019 - 2023
                      <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </h3>
                </div>
                <div>
                  <p class="text-truncate">Tại Đại hội đồng cổ đông (ĐHĐCĐ) năm 2019, Tập đoàn Novaland đã trình...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 new-infor__left wow slideInRight" data-wow-duration="1s">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Thông Tin Thị Trường</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Tin Dự Án</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane container active" id="home">
              <div class="time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> 26/04/2019
              </div>
              <div class="tab-caption">
                <h3> <a href="#">GẦN 10.000 TỶ ĐỒNG ĐẦU TƯ CAO TỐC BẮC – NAM QUA BÌNH THUẬN
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </a></h3>
              </div>
              <div class="tab-infor">
                <p>Dự án đầu tư xây dựng một số đoạn đường bộ cao tốc trên tuyến Bắc – Nam
                  (phía Đông) giai đoạn 2017 – 2020 qua địa bàn tỉnh Bình Thuận có chiều dài 160,3 km,
                  với 3 dự án thành phần đã được Bộ Giao thông – Vận tải phê duyệt.</p>
              </div>
            </div>
            <div class="tab-pane container fade" id="menu1">
              <div class="tab-item">
                <div class="time">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 26/04/2019
                </div>
                <div class="tab-caption">
                  <h3> <a href="#">GẦN 20.000 TỶ ĐỒNG ĐẦU TƯ CAO TỐC BẮC – NAM QUA BÌNH THUẬN
                      <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a></h3>
                </div>
                <div class="tab-infor">
                  <p>Dự án đầu tư xây dựng một số đoạn đường bộ cao tốc trên tuyến Bắc – Nam
                    (phía Đông) giai đoạn 2017 – 2020 qua địa bàn tỉnh Bình Thuận có chiều dài 160,3 km,
                    với 3 dự án thành phần đã được Bộ Giao thông – Vận tải phê duyệt.</p>
                </div>
              </div>
              <hr>
              <div class="tab-item">
                <div class="time">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 26/04/2019
                </div>
                <div class="tab-caption">
                  <h3>
                    <a href="#">GẦN 40.000 TỶ ĐỒNG ĐẦU TƯ CAO TỐC BẮC – NAM QUA BÌNH THUẬN
                      <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>
                  </h3>
                </div>
                <div class="tab-infor">
                  <p>Dự án đầu tư xây dựng một số đoạn đường bộ cao tốc trên tuyến Bắc – Nam
                    (phía Đông) giai đoạn 2017 – 2020 qua địa bàn tỉnh Bình Thuận có chiều dài 160,3 km,
                    với 3 dự án thành phần đã được Bộ Giao thông – Vận tải phê duyệt.</p>
                </div>
              </div>
              <div class="tab-end-item">
                <a href="#">Xem Tất Cả <i class="fa fa-caret-right" aria-hidden="true"></i> </p>
              </div>
            </div>
          </div>
        </div>
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
          <!-- <form>
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
          </form> -->
     
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
