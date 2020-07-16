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
        <div class="c-page-breadcrumbs"><a href="/sample/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>お知らせ</div>
      </div>
    </section>

    <section class="p-info">
      <div class="l-container">
        <div class="p-info-ttl u-font-en sp">INFORMATION<br>LIST</div>
        <div class="p-info-ttl u-font-en pc">INFORMATION LIST</div>
        <div class="p-info-subttl">お知らせ一覧</div>
        <div class="p-info-wrap">
          <?php query_posts('posts_per_page=6&paged='.$paged); ?>
          <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post();
          ?>
          <div class="p-info-conts">
            <div class="p-info-conts--head">
              <div class="p-info-conts--data u-font-en"><?php the_time('Y.m.d'); ?></div>
              <?php $cat = get_the_category(); $cat = $cat[0]; { echo '<div class="p-info-conts--cat u-cat-' . $cat->category_nicename . '" >'; } ?><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
            </div>
            <div class="p-info-conts--ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          </div>
          <?php
            endwhile;
          else:
          ?>
          <p>記事はありません</p>
          <?php
            endif;
          ?>
          <?php if (function_exists("pagination")) {
              pagination($additional_loop->max_num_pages);
          } ?>
        </div>
      </div>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
