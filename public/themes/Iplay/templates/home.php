<?php
/*
Template Name: Home
*/

get_header();

$homeData = get_fields();
$posts = get_posts()
?>

<div class="home_wrapper">
  <div class="home_header">
    <h1 class="home_header_text">The only sport app you’ll ever need!</h1>
    <div class="home_header_button_wrap">
      <div class="home_header_button">
        <span>TEAM</span>
      </div>
      <div class="home_header_button">
        <img src="/themes/Iplay/media/images/logo_white_magenta.svg">
      </div>
      <div class="home_header_button">
        <span>ABOUT</span>
      </div>
    </div>
  </div>

  <div class="carousel slide" data-interval="10" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      if(have_rows('carousel_quotes')):
        while ( have_rows('carousel_quotes') ) : the_row();
      ?>
      <div class="carousel-item <?php echo get_row_index() == 1 ? 'active' :'' ?>">
        <div class="carousel_content d-block">
          <?php the_sub_field('quote'); ?>
        </div>
      </div>

      <?php
      endwhile;
    endif;
      ?>
    </div>
  </div>

<div class="home_footer">
  <p class="footer_text">GET THE APP NOW</p>
  <div class="home_footer_button_wrap">
    <a href="https://play.google.com/store/apps/details?id=com.iplay" class="home_footer_button">
      <img src="/themes/Iplay/media/images/android_orange.svg">
      <span>GOOGLE PLAY</span>
    </a>
    <a href="https://itunes.apple.com/se/app/iplay-sport/id1068927526?l=en&mt=8" class="home_footer_button">
      <img src="/themes/Iplay/media/images/Apple_white.svg">
      <span>APPSTORE</span>
    </a>
  </div>
</div>
</div>
<?php
wp_footer();
