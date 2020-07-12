<?php get_header(); ?>
　<section class="p-top-visual">
    <div class="p-top-visual--slider">
      <div class="p-top-visual--slider__img">
        <div class="p-top-visual--slider__copy">
          <div class="p-top-visual--slider__sub p-top-visual--slider__fade">高圧ガスと溶接資材の専門商社</div>
          <div class="p-top-visual--slider__main p-top-visual--slider__fade u-font-en">POWER OF HISTORY</div>
        </div>
        <div class="p-top-visual--slider__number"><span>01</span> / 05</div>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/top_visual01.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_visual01.jpg">
        </picture>
      </div>
      <div class="p-top-visual--slider__img">
        <div class="p-top-visual--slider__copy">
          <div class="p-top-visual--slider__sub">高圧ガスと溶接資材の専門商社</div>
          <div class="p-top-visual--slider__main u-font-en">POWER OF HISTORY</div>
        </div>
        <div class="p-top-visual--slider__number"><span>02</span> / 05</div>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/top_visual02.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_visual02.jpg">
        </picture>
      </div>
      <div class="p-top-visual--slider__img">
        <div class="p-top-visual--slider__copy">
          <div class="p-top-visual--slider__sub">高圧ガスと溶接資材の専門商社</div>
          <div class="p-top-visual--slider__main u-font-en">POWER OF HISTORY</div>
        </div>
        <div class="p-top-visual--slider__number"><span>03</span> / 05</div>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/top_visual03.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_visual03.jpg">
        </picture>
      </div>
      <div class="p-top-visual--slider__img">
        <div class="p-top-visual--slider__copy">
          <div class="p-top-visual--slider__sub">高圧ガスと溶接資材の専門商社</div>
          <div class="p-top-visual--slider__main u-font-en">POWER OF HISTORY</div>
        </div>
        <div class="p-top-visual--slider__number"><span>04</span> / 05</div>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/top_visual04.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_visual04.jpg">
        </picture>
      </div>
      <div class="p-top-visual--slider__img">
        <div class="p-top-visual--slider__copy">
          <div class="p-top-visual--slider__sub">高圧ガスと溶接資材の専門商社</div>
          <div class="p-top-visual--slider__main u-font-en">POWER OF HISTORY</div>
        </div>
        <div class="p-top-visual--slider__number"><span>05</span> / 05</div>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/top_visual05.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_visual05.jpg">
        </picture>
      </div>
    </div><? //.p-top-visual--slider__imgs ?>
    <div class="p-top-visual--news">
      <?php query_posts('posts_per_page=1&paged='.$paged); ?>
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>
      <div class="p-top-visual--news--conts">
        <div class="p-top-visual--news--conts__head u-font-en">NEWS</div>
        <div class="p-top-visual--news--conts__data"><?php the_time('Y.m.d'); ?></div>
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo '<div class="p-top-visual--news--conts__cat u-cat-' . $cat->category_nicename . '" >'; } ?><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
        <div class="p-top-visual--news--conts__ttl"><?php the_title(); ?></div>
      </div>

      <?php
        endwhile;
      else:
      ?>
      <p>記事はありません</p>
      <?php
        endif;
      ?>
    </div>
  </section>

  <section class="p-top-overview">
    <div class="p-top-overview--ttl u-font-en">SINCE 1913</div>
    <div class="p-top-overview--subttl">〜100年分の恩返し～</div>
    <div class="p-top-overview--copy">
      ガス、溶材をお届けして100余年。<br>
      お取引先様に恵まれ、おかげ様でガス充填において地区トップクラスに成長できました。<br>
      これは皆様からのご愛顧があってこその賜物でございます。<br>
      今度は、私たちの番です。<br>
      「いつもここにいる、いつもここにある」をモットーに、<br>
      お客様の「今」にお応えできる品質、サービスを追求し、<br>
      「今」以上の満足のために常に前進し続けます。<br>
      この激動の時代だからこそ、その時の一瞬を常に全力で、<br>
      そして、ともに次の100年ヘ
    </div>
    <div class="c-btn p-top-overview--btn"><a href="#" class="c-btn__hover"><div class="c-btn__text">会社案内を詳しく見る</div></a></div>
  </section>

  <section class="p-top-service" id="service">
    <div class="p-top-service--icon">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_service_icon.png">
      </picture>
    </div>
    <div class="u-center"><div class="p-top-service--ttl u-font-en">SERVICES</div></div>
    <div class="p-top-service--subttl">取り扱い商品</div>
    <div class="p-top-service--copy">
      酸素や炭酸ガス・高圧ガスなどの製造・販売から工場などで使われる溶接・溶断機械や材料類、<br>
      産業ロボットなどの販売も展開しています。<br>
      その他、医薬品・医薬部外品や毒劇物、工業用薬品類の販売も展開しています。
    </div>
    <div class="p-top-service--wrap">
      <div class="p-top-service--cont">
        <div class="p-top-service--cont__img">
          <a href="/indust_invest/">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_service01.png">
            </picture>
          </a>
        </div>
        <div class="p-top-service--cont__text">産業用ガス/ 分析・研究用ガス</div>
      </div>
      <div class="p-top-service--cont">
        <div class="p-top-service--cont__img">
          <a href="/medical/">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_service02.png">
            </picture>
          </a>
        </div>
        <div class="p-top-service--cont__text">医療用ガス</div>
      </div>
      <div class="p-top-service--cont">
        <div class="p-top-service--cont__img">
          <a href="/welding/">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_service03.png">
            </picture>
          </a>
        </div>
        <div class="p-top-service--cont__text">溶接・産業機器関連</div>
      </div>
      <div class="p-top-service--cont">
        <div class="p-top-service--cont__img">
          <a href="/equipment/">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_service04.png">
            </picture>
          </a>
        </div>
        <div class="p-top-service--cont__text">ガス設備及び各種工事</div>
      </div>
    </div>
  </section>

  <section class="p-top-topics">
    <div class="p-top-topics--visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_topics.jpg">
      </picture>
      <div class="p-top-topics--ttl">
        <div class="p-top-topics--ttl__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_topics_ttl.png">
          </picture>
        </div>
        <div class="p-top-topics--ttl__main u-font-en">TOPICS</div>
        <div class="p-top-topics--ttl__sub">お知らせ</div>
      </div>
    </div>
    <div class="p-top-topics--wrap">
      <div class="l-container">
        <div class="p-top-topics--conts">
          <?php query_posts('posts_per_page=3&paged='.$paged); ?>
          <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="p-top-topics--cont__border">
            <div class="p-top-topics--cont">
              <div class="p-top-topics--cont__head">
                <div class="p-top-topics--cont__date u-font-en"><?php the_time('Y.m.d'); ?></div>
                <?php $cat = get_the_category(); $cat = $cat[0]; { echo '<div class="p-top-topics--cont__cat u-cat-' . $cat->category_nicename . '" >'; } ?><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
              </div>
              <div class="p-top-topics--cont__ttl"><?php the_title(); ?></div>
              <div class="p-top-topics--cont__desc"><?php the_excerpt(); ?></div>
              <div class="p-top-topics--cont__more u-font-en">READ MORE<span class="u-arrow"></span></div>
            </div>
          </a>
          <?php
            endwhile;
          else:
          ?>
          <p>記事はありません</p>
          <?php
            endif;
          ?>
        </div>
        <div class="c-btn p-top-topics--btn"><a href="/info/" class="c-btn__hover"><div class="c-btn__text">お知らせ一覧</div></a></div>
      </div>
    </div>
  </section>

  <section class="p-top-recruit">
    <div class="p-top-recruit--wrap">
      <div class="p-top-recruit--img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/sp_top_visual04.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_recruit.jpg">
        </picture>
        <div class="p-top-recruit--img__text"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/top_recruit_text.png"></div>
      </div>
      <div class="p-top-recruit--conts">
        <div class="u-font-en p-top-recruit--ttl">RECRUIT</div>
        <div class="p-top-recruit--subttl">採用について</div>
        <div class="p-top-recruit--desc">
          POWER OF HISTORY - 100年以上ガス、溶材をお届けしてきた<br>
          私たちと一緒に次の100年を創造していきませんか。<br>
          転職経験のある社員も多く、経験は問いません。<br>
          中途入社のハンディはなく、実務を早く覚えていただけるよう<br>
          に現場・会社でバックアップをしていきます。
        </div>
        <div class="c-btn p-top-recruit--btn"><a href="/recruit/" class="c-btn__hover"><div class="c-btn__text">採用情報を詳しく見る</div></a></div>
      </div>
    </div>
  </section>
<?php get_template_part('contact'); ?>
<?php get_footer(); ?>
