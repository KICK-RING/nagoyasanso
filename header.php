<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <?php if ( is_single()): ?>
    <?php if ($post->post_excerpt){ ?>
    <meta name="description" content="<? echo $post->post_excerpt; ?>" />
    <?php } else {
      $summary = strip_tags($post->post_content);
      $summary = str_replace("\n", "", $summary);
      $summary = mb_substr($summary, 0, 120). "…"; ?>
    <meta name="description" content="<?php echo $summary; ?>" />
    <?php } ?>
    <?php elseif ( is_home() || is_front_page() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php elseif ( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>" />
    <?php elseif ( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php the_excerpt();?>" />
    <?php endif; ?>
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <main>
      <header class="l-header l-header__bg">
        <a href="/">
          <div class="l-header-logo">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/logo.png">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="NAGOYA SANSO">
            </picture>
          </div>
        </a>
        <ul class="l-header-nav">
          <a href="/company/"><li class="l-header-nav--item"><span>会社案内</span></li></a>
          <a href="/message/"><li class="l-header-nav--item"><span>社長挨拶</span></li></a>
          <a href="/environment/"><li class="l-header-nav--item"><span>環境への取り組み</span></li></a>
          <a href="/datasheet/"><li class="l-header-nav--item"><span>安全データシート</span></li></a>
          <?php if ( is_home() || is_front_page() ) : ?>
          <a href="#service"><li class="l-header-nav--item"><span>取扱い製品</span></li></a>
          <?php else : ?>
          <a href="/#service"><li class="l-header-nav--item"><span>取扱い製品</span></li></a>
          <?php endif; ?>
          <a href="/info/"><li class="l-header-nav--item"><span>お知らせ</span></li></a>
          <a href="/recruit/"><li class="l-header-nav--item"><span>採用情報</span></li></a>
        </ul>
        <a href="/contact/"><div class="l-header-contact"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mail_icon_white.png"></div></a>
      </header>
