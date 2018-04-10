<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

    <nav>

    </nav>
  <div class="wrapper">


      <!-- <nav class="navbar navbar-expand-lg navbar-inverse navbar-dark mb-3" style="background: #001a52">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php foreach (get_pages() as $page): ?>
              <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                <a class="nav-link" href="<?php echo get_permalink($page); ?>">
                  <?php echo $page->post_title; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav> -->
