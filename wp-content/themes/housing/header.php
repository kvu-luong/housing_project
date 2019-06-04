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
            <p>HOTLINE :<span class="phone_number">1900 63 6666</span></p>
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
         
        <?php
           wp_nav_menu(array(
            "menu" =>"Main",
            "container" => "div",
            "container_class" => "my_nav",
            "menu_class"=>"navbar-nav mt-2 mt-lg-0",
            "menu_id" => "my-navbar-js",
            "walker"=> new Walker_Nav_Primary()
          ));
        ?>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
  </header>

