<?php
/*
Template Name: Home
*/

get_header();

?>

<div class="home_wrapper">
  <div class="home_header">
    <div class="header_desktop_logo">
      <img src="/themes/Iplay/media/images/logo_white_magenta.svg">
    </div>
    <h1 class="home_header_text">The only sport app you’ll ever need!</h1>
    <div class="home_header_button_wrap">
      <div class="home_header_button first_button">
        <div class="button_desktop"></div>
        <span>TEAM</span>
      </div>
      <div class="home_header_button home_header_button_active second_button">
        <img src="/themes/Iplay/media/images/logo_white_magenta.svg">
      </div>
      <div class="home_header_button third_button">
        <div class="button_desktop"></div>
        <span>ABOUT</span>
      </div>
    </div>
  </div>
  <h1 class="home_slider_title home_slider_title_default">The only sport app you’ll ever need!</h1>
  <div class="home_right_column home_right_column_default">
    <img src="/themes/Iplay/media/images/phoneHand.png">
  </div>
  <?php require('partials/carousel.php'); ?>
  <?php require('partials/about.php'); ?>
  <?php require('partials/team.php'); ?>

<div class="home_footer">
  <p class="footer_text">GET THE APP NOW</p>
  <div class="desktop_footer_text">
    <p>GET THE APP NOW!</p>
    <p class="small_footer_text">© 2018 All rights reserved. IPY Holding AB</p>
  </div>
  <div class="home_footer_button_wrap">
    <a href="https://play.google.com/store/apps/details?id=com.iplay" class="home_footer_button">
      <img class="mobile_androidicon"src="/themes/Iplay/media/images/android_orange.svg">
      <img class="desktop_androidicon"src="/themes/Iplay/media/images/android_white.svg">
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
