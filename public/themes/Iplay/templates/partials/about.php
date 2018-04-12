
<div class="about_wrapper notActive">
  <?php
  if(have_rows('aboutFields_field')):
    while ( have_rows('aboutFields_field') ) : the_row();
    ?>
    <div class="about_element_wrapper">
      <img src="<?php echo get_sub_field('icon')['url'] ?>">
      <div class="about_element_text_wrapper">
        <h2> <?php the_sub_field('title') ?></h2>
        <p><?php the_sub_field('content'); ?></p>
      </div>
    </div>
    <?php
  endwhile;
endif;
?>
</div>
