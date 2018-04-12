
<div class="carousel slide" data-interval="1000" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    if(have_rows('slide_quotes')):
      while ( have_rows('slide_quotes') ) : the_row();
    ?>
    <div class="carousel-item <?php echo get_row_index() == 1 ? 'active' :'' ?>">
      <div class="carousel_content d-block">
        <p>”<?php the_sub_field('quote'); ?>”</p>
        <p>— <?php the_sub_field('author'); ?></p>
        <p><?php the_sub_field('institution'); ?></p>
      </div>
    </div>
    <?php
    endwhile;
  endif;
    ?>
  </div>
</div>
