<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package housing
 */

?>
<!doctype html>
<html lang="en">

<head>
  <title>Housing Project</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet">
 

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-color container-fluid fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img alt="logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/icon.jpg">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <div class="phone container">
            <p>Tổng Đài CSKH :<span class="phone_number">1900 63 6666</span></p>
            <form class="search_form">
              <input type="text" id="search" placeholder="Tìm Kiếm..." class="close" />
              <div class="searchtoogle">
                <a id="dropdownSearchBtn" href="javascript:void(0);" title="Search">
                  <i class="fa fa-search search_btn"></i>
                </a>
              </div>
            </form>
            <div class="language"><a class="transition" href="/en-US/Default.aspx" title="EN">EN</a>
            </div>
          </div>
          <div class="my_nav">
            <ul class="navbar-nav mt-2 mt-lg-0" id="my-navbar-js">
              <li class="nav-item active">
                <a class="nav-link" href="">Trang Chủ <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới Thiệu</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#project" id="dropdownId" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Dự Án</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Bất Động Sản Nhà Ở</a>
                  <a class="dropdown-item" href="#">Bất Động Sản Du Lịch Nghỉ Dưỡng</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Quan Hệ Đầu Tư</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Thông Tin Về Tập Đoàn An Phúc</a>
                  <a class="dropdown-item" href="#">Quản Lý Doanh Nghiệp</a>
                  <a class="dropdown-item" href="#">Công Bố Thông Tin</a>
                  <a class="dropdown-item" href="#">Đại Hội Đồng Cổ Đông</a>
                  <a class="dropdown-item" href="#">Hoạt Động Đầu Tư</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Tin Tức</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Thông Tin Thị Trường</a>
                  <a class="dropdown-item" href="#">Thông Tin An Phúc</a>
                  <a class="dropdown-item" href="#">Thông Tin Báo Chí</a>
                  <a class="dropdown-item" href="#">Brochure Công Ty</a>
                  <a class="dropdown-item" href="#">Video</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Phát Triển Bền Vững</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Thông Điệp An Phúc</a>
                  <a class="dropdown-item" href="#">Hội Đồng Phát Triển Bền Vững</a>
                  <a class="dropdown-item" href="#">Quản Trị Tập Đoàn</a>
                  <a class="dropdown-item" href="#">Quản Trị Nhân Lực</a>
                  <a class="dropdown-item" href="#">Quản Trị Thương Hiệu An Phúc</a>
                  <a class="dropdown-item" href="#">Môi Trường</a>
                  <a class="dropdown-item" href="#">Hoạt Động Cộng Đồng </a>
                  <a class="dropdown-item" href="#">Đối Tác</a>
                  <a class="dropdown-item" href="#">Báo Cáo Phát Triển Bền Vững</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Tuyển Dụng</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Chính Sách Nhân Lực</a>
                  <a class="dropdown-item" href="#">Vị Trí Tuyển Dụng</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên Hệ</a>
              </li>
            </ul>
          </div>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
  </header>

