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

  <div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel_content d-block w-1000">
          <p><?php echo $homeData['quote_1'] ?></p>
          <p><?php echo $homeData['quote_1_author'] ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel_content d-block w-1000">
          <p><?php echo $homeData['quote_1'] ?></p>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel_content d-block w-1000">
          <p1>third slide</p>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="home_middle_content_wrapper">
  <div class="quotes_container">
  <p>Detta är världens bästa app blablabla</p>
  <p>niclas blavla</p>
</div>
</div> -->

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
