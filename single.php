<?php get_header(); ?>
<div class="c-page">
  <section class="c-page-visual">
    <picture>
      <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/info_visual.jpg">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/info_visual.jpg">
    </picture>
    <div class="c-page-container">
      <div class="c-page-ttl">
        <div class="u-font-en c-page-ttl__main">INFORMATION</div>
        <div class="c-page-ttl__sub"><h1>お知らせ</h1></div>
      </div>
      <div class="c-page-breadcrumbs"><a href="/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span><a href="/info/">お知らせ</a><span class="c-page-breadcrumbs__arrow">></span>お知らせ詳細</div>
    </div>
  </section>

  <section class="p-info_detail">
    <section class="p-info_detail-wrap">
      <div class="p-info_detail-conts">
        <div class="p-info_detail-head">
          <div class="p-info_detail-date u-font-en"><?php the_time('Y.m.d'); ?></div>
          <?php $cat = get_the_category(); $cat = $cat[0]; { echo '<div class="p-info_detail-cat u-cat-' . $cat->category_nicename . '" >'; } ?><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
        </div>
        <div class="p-info_detail-ttl"><?php the_title(); ?></div>
        <div class="p-info_detail-cont"><?php the_content(); ?></div>
      </div>
      <div class="c-btn p-info_detail-btn"><a href="/info/" class="c-btn__hover"><div class="c-btn__text">一覧へ戻る</div></a></div>
    </section>
  </section>

</div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
