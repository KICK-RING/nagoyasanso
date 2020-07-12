<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/datasheet_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/datasheet_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">SAFETY DATA SHEET</div>
          <div class="c-page-ttl__sub">安全データシート</div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">HAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>安全データシート</div>
      </div>
    </section>

    <section class="c-service">
      <section class="c-service-wrap">
        <div class="c-service-wrap--ttl">SDSダウンロードページ</div>
        <div class="c-service-wrap--desc">
          ＳＤＳ（Ｓａｆｅｔｙ　Ｄａｔａ　Ｓｈｅｅｔ）とは<br class="pc">
          化学物質の性質（危険性、有害性、ばく露した際の応急処置、保管・廃棄方法）<br class="pc">
          及び取扱いに関する情報を記載した文章です。<br>
          私たちが製造・販売する高圧ガスについてのＳＤＳダウンロードページとなっております。<br>
          ぜひ、ご活用下さいませ。
        </div>
      </section>

      <section class="p-datasheet">
        <section class="p-datasheet-wrap">
          <div class="u-font-en p-datasheet-ttl">SHEET LIST</div>
          <div class="p-datasheet-subttl">シート一覧</div>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">窒素ガス</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">高純度窒素ガス</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">窒素＋酸素の混合ガス（非支燃焼）</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">アルゴンガス</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">高純度アルゴンガス</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">アルゴン＋酸素の混合ガス（非支燃焼）</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">アルゴン＋二酸化炭素の混合ガス</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">アルゴン＋二酸化炭素＋酸素の混合ガス（非支燃焼）</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">液化酸素</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">液化窒素</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">液化アルゴン</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
          <a href="#"><div class="p-datasheet-cont"><span class="p-datasheet-cont--text">液化二酸化炭素</span><span class="p-datasheet-cont--img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"></span></div></a>
        </section>
      </section>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>