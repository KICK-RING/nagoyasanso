<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">RECRUIT</div>
          <div class="c-page-ttl__sub">採用情報</div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">HAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>採用情報</div>
      </div>
    </section>

    <section class="p-recruit">
      <div class="p-recruit-visual pc">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_ceo.jpg">
      </div>
      <div class="p-recruit-wrap">
        <div class="u-font-en p-recruit-wrap--ttl">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_ttl.png">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_ttl.png">
          </picture>
        </div>
        <div class="p-recruit-wrap--subttl">
          創業106年！長期的な視野で<br>
          お客様と付き合える
        </div>
        <div class="p-recruit-visual sp">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_ceo.jpg">
        </div>
        <div class="p-recruit-wrap--desc">
          自動車業界、食品業界、半導体業界、病院など幅広い業界に対して、工業用及び医療用酸素や窒素、炭酸など高圧ガスだけでなく、産業用ロボットや溶接機や溶接棒などの消耗材料類などを提案。クライアントのニーズに応え、新しい商材を売ることも可能なのが当社の魅力です。<br>
          また、社員の多くが中途入社なのも特徴です。<br>
          だからこそ中途入社のハンディはなく、実務を早く覚えていただけるように現場・会社でバックアップをしていきます。<br>
          周りも転職経験があるため、あなたの気持ちを理解してくれます。
        </div>
      </div>
    </section>

    <section class="p-recruit-catch">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_catch.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_catch.jpg">
      </picture>
    </section>

    <section class="p-recruit-staff">
      <div class="p-recruit-staff--ttl">
        <div class="p-recruit-staff--ttl__img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_introduce.png"></div>
        <div class="p-recruit-staff--ttl__main u-font-en">STAFF</div>
        <div class="p-recruit-staff--ttl__sub">社員紹介</div>
      </div>
      <div class="p-recruit-staff--wrap">
        <div class="p-recruit-staff--conts">
          <div class="p-recruit-staff--conts-img">
            <a href="/staff_01/">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_staff01.jpg">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_staff01.jpg">
              </picture>
            </a>
          </div>
          <div class="p-recruit-staff--conts-belongs">営業部門</div>
          <div class="p-recruit-staff--conts-name">坪井 佳大</div>
          <div class="p-recruit-staff--conts-more u-font-en"><a href="/staff_01/">VIEW MORE<span class="u-arrow"></span></a></div>
        </div>
        <div class="p-recruit-staff--conts">
          <div class="p-recruit-staff--conts-img">
            <a href="/staff_02/">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_staff02.jpg">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_staff02.jpg">
              </picture>
            </a>
          </div>
          <div class="p-recruit-staff--conts-belongs">配送部門</div>
          <div class="p-recruit-staff--conts-name">古田 将人</div>
          <div class="p-recruit-staff--conts-more u-font-en"><a href="/staff_02/">VIEW MORE<span class="u-arrow"></span></a></div>
        </div>
        <div class="p-recruit-staff--conts">
          <div class="p-recruit-staff--conts-img">
            <a href="/staff_03/">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_staff03.jpg">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_staff03.jpg">
              </picture>
            </a>
          </div>
          <div class="p-recruit-staff--conts-belongs">購買部門</div>
          <div class="p-recruit-staff--conts-name">山口 雅代</div>
          <div class="p-recruit-staff--conts-more u-font-en"><a href="/staff_03/">VIEW MORE<span class="u-arrow"></span></a></div>
        </div>
        <div class="p-recruit-staff--conts">
          <div class="p-recruit-staff--conts-img">
            <a href="/staff_04/">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_staff04.jpg">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_staff04.jpg">
              </picture>
            </a>
          </div>
          <div class="p-recruit-staff--conts-belongs">製造部門</div>
          <div class="p-recruit-staff--conts-name">黒田 憲尚</div>
          <div class="p-recruit-staff--conts-more u-font-en"><a href="/staff_04/">VIEW MORE<span class="u-arrow"></span></a></div>
        </div>
      </div>
    </section>

    <section class="p-recruit-list">
      <div class="p-recruit-list--ttl u-font-en">REQUIREMENTS</div>
      <div class="p-recruit-list--sub">募集要項一覧</div>
      <div class="p-recruit-list--wrap">
        <?php $loop = new WP_Query(array("post_type" => "recruit_detail", "posts_per_page" => 9 ));
        while($loop->have_posts()): $loop->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-recruit-list--conts">
            <div class="p-recruit-list--conts-ttl"><?php the_title(); ?></div>
            <div class="p-recruit-list--conts-arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_list_arrow.png"></div>
          </a>
        <?php endwhile; ?>
      </div>
    </section>
  </div>
<?php get_template_part('contact'); ?>
<?php get_footer(); ?>
