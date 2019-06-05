<?php
$home_title_arr = new WP_Query(array("post_type"=>"home_title"));
$list_home_title = array();
while($home_title_arr->have_posts()){
  $home_title_arr->the_post();
  $list_home_title = array(
    "new" => get_field("new_infor"),
    "project"=> get_field("famous_project")
  );
}

?>
  <div class="slider" id="sliders">
    <!-- Start WOWSlider.com BODY section -->
    
    <div id="wowslider-container1">
      <div class="ws_images">
        <ul>

        <?php 
       $slider_arr = new WP_Query(array("post_type"=>"slider"));
       $total_slide = 0;
      while($slider_arr->have_posts()){
        $slider_arr->the_post();

        $image_link = get_field("slider_1");
        $slide_title = get_field("slider_title");
        $slide_caption = get_field("slide_caption");
        $total_slide++;

    ?>
          <li>
            <a href="<?php echo get_the_permalink() ?>">
              <img src="<?php echo $image_link; ?>" alt="jquery image carousel" title="slider" id="wows1_0" />
            </a>
            <div class="container">
              <div class="banner-content col-sm-4 d-sm-none animated tada delay-1s">
                <p><?php echo $slide_title; ?></p>
                <div class="banner-item">
                  <div><?php echo $slide_caption ; ?></div>
                </div>
                <p>&nbsp;</p>
              </div>
            </div>

          </li>
      <?php } ?>
     </ul>
      </div>
      <div class="ws_bullets">
        <div>
          <?php 
          for($x = 0 ; $x < $total_slide; $x++){
            ?>
              <a href="#" title="slider"><span><?php echo ($x+1); ?></span></a>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="ws_shadow"></div>
    </div>


    <!-- End WOWSlider.com BODY section -->
  </div>
<div class="separate"></div>
<div class="new-infor" id="news">
  <div class="container">
    <!-- <div class="row title-infor">
      <h2><?php echo $list_home_title["new"]; ?></h2>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-8 new-infor__right wow slideInLeft" data-wow-duration="1s">
        <?php 
            $new_arr = new WP_Query(array('post_type' => 'new_infor_right'));
            $final_new_arr = array();
            while($new_arr->have_posts()){
              $new_arr->the_post();
              $temp_arr = array(
                "link_image"=> get_field("new_image"),
                "time" => get_field("new_right_time"),
                "content" => wp_trim_words(get_field("new_right_content"),200) ,
                "title" => get_the_title(),
                "link" => get_the_permalink()
              );
              array_push($final_new_arr, $temp_arr);
              }
           ?>
        <div class="col-sm-12 col-md-12 col-lg-12 new-item wow slideInLeft ">
          <div class="new-image">
            <img src="<?php echo $final_new_arr[0]["link_image"] ?>" alt="up-image">
          </div>
          <div class="new-caption">
            <div class="time">
              <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $final_new_arr[0]["time"]; ?>
            </div>
            <div class="infor">
              <h3>
                <a href="<?php echo $final_new_arr[0]["link"]; ?>"><?php  echo $final_new_arr[0]["title"]; ?>
                  <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
              </h3>
            </div>
            <div>
              <p class="text-truncate"><?php echo $final_new_arr[0]["content"]; ?></p>
            </div>
          </div>
        </div>


        <div class="row">
          <?php 
            if(count($final_new_arr) > 1){
              for($x = 1; $x < count($final_new_arr); $x++){
                ?>
          <div class="col-sm-6 col-md-6 col-lg-6 new-item__below wow slideInUp" data-wow-delay="0.5s">
            <div class="new-image">
              <img src="<?php echo $final_new_arr[$x]["link_image"]; ?>" alt="up-image">
            </div>
            <div class="new-caption">
              <div class="time">
                <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $final_new_arr[$x]["time"]; ?>
              </div>
              <div class="infor">
                <h3>
                  <a href="<?php echo $final_new_arr[0]["link"]; ?>"><?php echo $final_new_arr[$x]["title"]; ?>
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </a>
                </h3>
              </div>
              <div>
                <p class="text-truncate"><?php echo $final_new_arr[$x]["content"]; ?></p>
              </div>
            </div>
          </div>
          <?php
              }
            }
            ?>

        </div>
      </div>

      <?php
        //start get field for left infor 
        $left_infor_arr = new WP_Query(array("post_type"=>"new_infor_left"));
        $list_left_infor = array();
        while($left_infor_arr->have_posts()){
          $left_infor_arr->the_post();
          $temp_arr = array(
            "category" => get_field("new_left_category"),
            "time"=> get_field("new_left_time"),
            "title"=> get_the_title(),
            "content"=> wp_trim_words(get_field("new_left_content"), 50),
            "link" => get_the_permalink()
          );
          array_push($list_left_infor, $temp_arr);
        }
        //get list of category in each post
        $list_category= array();
        if(count($list_left_infor) > 0){
          for($x = 0; $x < count($list_left_infor); $x++){
            $category = strtolower(str_replace(' ', '',$list_left_infor[$x]["category"]));
            if(!in_array($category, $list_category)){
              array_push($list_category, $category);
            }
          }
        }
        $list_post_by_category = array();//use it to compare post belong to with category
        for($x = 0; $x < count($list_category); $x++){
          for($y = 0; $y < count($list_left_infor); $y++){
            $origin_category = strtolower(str_replace(' ', '',$list_left_infor[$y]["category"]));
            if($list_category[$x] == $origin_category){
              $temp_arr = array(
                "category" => $list_category[$x],
                "infor" => $list_left_infor[$y]
              );
              array_push($list_post_by_category, $temp_arr);
            }
          }
        }
        ?>
      <div class="col-sm-12 col-md-12 col-lg-4 new-infor__left wow slideInRight" data-wow-duration="1s">
         Nav tabs 
        <ul class="nav nav-tabs">
          <?php 
            $id_modify = array();//use it to make the different id
            for($x = 0; $x < count($list_category) ; $x++ ){?>
              <li class="nav-item <?php echo $x == 0 ? "active" : "";?>">
                <a class="nav-link" data-toggle="tab" href="#tab<?php echo $x;?>"><?php echo $list_category[$x]; ?></a>
              </li>
              <?php array_push($id_modify, "tab".$x); 
            } ?>
        </ul>
        Tab panes 
        <div class="tab-content">
          <?php 
           if(count($list_left_infor) > 0){
            for($x = 0; $x < count($list_category); $x++){?>
                <div class="tab-pane container <?php echo $x == 0 ? "active" : "";?>" id="<?php echo $id_modify[$x]; ?>">
                  <?php  
                    for($y = 0; $y < count($list_post_by_category); $y++){ 
                      if($list_post_by_category[$y]["category"] == $list_category[$x]){?>
                        <div class="tab-item">
                          <div class="time">
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $list_left_infor[$y]["time"]; ?>
                          </div>
                          <div class="tab-caption">
                            <h3> <a href="<?php echo $list_left_infor[$y]["link"]; ?> "><?php echo $list_left_infor[$y]["title"] ?>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                              </a></h3>
                          </div>
                          <div class="tab-infor">
                            <p><?php echo $list_left_infor[$y]["content"]; ?></p>
                          </div>
                        </div>
                    <?php }} ?>
                </div>
            <?php }} ?>
        </div>
      </div>
    </div> -->
  </div>
</div>


<!-- project -->
<div class="project" id="projects">
  <!-- <div class="container text-center">
    <a href="#" alt="prevent auto add a tag"></a>
    <p class="project_title"><?php echo $list_home_title["project"]; ?></p>
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
        <p class="link-project"><a href="/single-project">Village Place <i class="fa fa-caret-right"
              aria-hidden="true"></i></a>
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

  </div> -->
</div>
<div class="customer_infor" id="customers">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8 customer-item wow slideInLeft">
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
        <?php 
              echo do_shortcode("[contact-form-7 id=85 title=Contact form 1]");
         ?>
      </div>
      <!-- <div class="col-sm-12 col-md-3 col-lg-3 customer-item wow slideInUp" data-wow-delay="1s">
        <h5>Brochure Công Ty</h5>
        <p>Download Brochure mới nhất của An Phúc để hiểu rõ hơn về chúng tôi</p>
        <a href="#">Tải brochure <em class="fa fa-caret-right" aria-hidden="true"></em></a>
      </div> -->
      <div class="col-sm-12 col-md-4 col-lg-4 customer-item wow slideInUp mt-md-2">
        <h5>Hotline:<span>1900 90 9999</span></h5>
        <p>Email:<span>chamsockhachhang@novaland.com.vn</span></p>
      </div>
    </div>
  </div>
</div>