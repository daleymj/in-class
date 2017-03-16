<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); //hook. REQUIRED for plugins and admin bar to work  ?>
  </head>
  <body>
    <header role="banner" id="header">
  <div class="header-bar">
    <h1 class="site-title">
      <a href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
    <h2><?php bloginfo('description'); ?></h2>
    <nav>
      <ul class="nav">
        <?php wp_list_pages(array(
          'title_li' => '', //hide the 'pages' heading
          'exclude'  => '', //hides a page
        ));?>
      </ul>
    </nav>

    <?php get_search_form(); ?>

  </div>
</header>
<div class="wrapper">
