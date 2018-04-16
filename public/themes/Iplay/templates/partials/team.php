
<div class="team_wrapper notActive">
  <h1 class="team_title">TEAM</h1>
  <?php
  if(have_rows('teamFields_field')):
    while ( have_rows('teamFields_field') ) : the_row();
    ?>
    <div class="team_elements_wrapper">
      <img src="<?php echo get_sub_field('image')['url'] ?>">

      <div class="team_text_section_wrapper">

        <h2> <?php the_sub_field('role') ?></h2>

        <div class="team_text_section">
          <img src="/themes/Iplay/media/images/profile.svg">
          <p><?php the_sub_field('name'); ?></p>
        </div>

        <div class="team_text_section">
          <img src="/themes/Iplay/media/images/phone.svg">
          <p><?php the_sub_field('phone'); ?></p>
        </div>

        <div class="team_text_section">
          <img src="/themes/Iplay/media/images/mail.svg">
          <p><?php the_sub_field('mail'); ?></p>
        </div>

      </div>
    </div>
    <?php
  endwhile;
endif;
?>
</div>
