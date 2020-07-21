<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css?2020071512">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/webclip.jpg" />
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
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>│愛知県名古屋市│高圧ガスと溶接資材の専門商社│お客様の「今」にお応えできる品質、サービスを追求し、前進し続けます</title>

    <meta property="og:site_name" content="名古屋酸素株式会社">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>│愛知県名古屋市│高圧ガスと溶接資材の専門商社│お客様の「今」にお応えできる品質、サービスを追求し、前進し続けます">
    <meta property="og:description" content="
      <?php if ( is_single()): ?>
      名古屋酸素は、ガス、溶材をお届けして100余年の専門商社です。溶接・溶断機械や材料類、産業ロボット、医療品、工業用薬品類などの販売も展開しています。最新のお知らせや採用情報などを更新しています。
      <?php elseif ( is_home() || is_front_page() ): ?>
      <?php bloginfo('description'); ?>
      <?php elseif ( is_category() ): ?>
      <?php echo category_description(); ?>
      <?php elseif ( is_tag() ): ?>
      <?php echo tag_description(); ?>
      <?php else: ?>
      <?php the_excerpt();?>
      <?php endif; ?>
    ">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://nagoya-sanso.co.jp/">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/ogp.jpg">
    <meta property="og:image:secure_url" content="<?php bloginfo('template_url'); ?>/images/ogp.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>│愛知県名古屋市│高圧ガスと溶接資材の専門商社│お客様の「今」にお応えできる品質、サービスを追求し、前進し続けます">
    <meta name="twitter:description" content="
      <?php if ( is_single()): ?>
      名古屋酸素は、ガス、溶材をお届けして100余年の専門商社です。溶接・溶断機械や材料類、産業ロボット、医療品、工業用薬品類などの販売も展開しています。最新のお知らせや採用情報などを更新しています。
      <?php elseif ( is_home() || is_front_page() ): ?>
      <?php bloginfo('description'); ?>
      <?php elseif ( is_category() ): ?>
      <?php echo category_description(); ?>
      <?php elseif ( is_tag() ): ?>
      <?php echo tag_description(); ?>
      <?php else: ?>
      <?php the_excerpt();?>
      <?php endif; ?>
    ">
    <meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/ogp.jpg">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171450358-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-171450358-1');

     $(window).on("load", function(){
                   setTimeout(function(){

                 $('a[href^="tel:"]').on("click", function(){
                   gtag('event', 'click', {'event_category': 'tel','event_label': window.location.href, 'value': '1'});
                 });
                }, 1000);
              });
    </script>
    <?php wp_head(); ?>
  </head>

  <body>
    <main>
      <header class="l-header l-header__bg">
        <a href="/sample/">
          <div class="l-header-logo">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/logo.png">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="NAGOYA SANSO">
            </picture>
          </div>
        </a>
        <ul class="l-header-nav">
          <a href="/sample/company/"><li class="l-header-nav--item"><span>会社案内</span></li></a>
          <a href="/sample/message/"><li class="l-header-nav--item"><span>社長挨拶</span></li></a>
          <a href="/sample/environment/"><li class="l-header-nav--item"><span>環境への取り組み</span></li></a>
          <a href="/sample/datasheet/"><li class="l-header-nav--item"><span>安全データシート</span></li></a>
          <?php if ( is_home() || is_front_page() ) : ?>
          <a href="#service"><li class="l-header-nav--item"><span>取扱い製品</span></li></a>
          <?php else : ?>
          <a href="/sample/#service"><li class="l-header-nav--item"><span>取扱い製品</span></li></a>
          <?php endif; ?>
          <a href="/sample/info/"><li class="l-header-nav--item"><span>お知らせ</span></li></a>
          <a href="/sample/recruit/"><li class="l-header-nav--item"><span>採用情報</span></li></a>
        </ul>
        <a href="/sample/contact/"><div class="l-header-contact"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mail_icon_white.png"></div></a>
      </header>
