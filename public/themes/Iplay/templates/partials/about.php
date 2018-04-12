
<div class="about_wrapper notActive">
  <?php
  if(have_rows('aboutFields_field')):
    while ( have_rows('aboutFields_field') ) : the_row();
    ?>
    <div class="about_element_wrapper">
      <img src="/themes/Iplay/media/images/red_heart.svg">
      <p><?php the_sub_field('content'); ?></p>
    </div>
    <?php
    endwhile;
  endif;
?>
</div>
