<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>" >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="theme-color" content="black">
  <title><?php titles(); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  
  <?php if ( is_single() ) : ?>
    <!-- 記事ページ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/article.css">
  <?php elseif ( is_page() ) : ?>
    <!-- 固定ページ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/article.css">
  <?php else: ?>
    <!-- 他 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
  <?php endif; ?>
  
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script>
    (function(d) {
      var config = {
        kitId: 'cbc5ubf',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <label id="menu-closeArea" for="menu-btn"></label>
  <div id="main-nav">
    <input id="menu-btn" type="checkbox">
    <label id="menu-hamburger" for="menu-btn">
      <div class="menu">
          <div class="menu_part"></div>
          <div class="menu_part"></div>
          <div class="menu_part"></div>
      </div>
    </label>
    <nav id="main-navtab">
      <ul>
          <?php
          $args = array(
              'title_li' => ''
          );
          wp_list_categories($args);
          ?>
      </ul>
    </nav>
  </div>
  <h1 class="title"><a href="<?php echo esc_url(home_url()); ?>">A3 code note</a></h1>