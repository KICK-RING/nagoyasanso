<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/indust_invest_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/indust_invest_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">FOR ANALYTICAL<br>RESEARCH</div>
          <div class="c-page-ttl__sub">分析・研究用ガス</div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">HAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span><a href="/indust_invest/">産業用ガス/分析・研究用ガス</a><span class="c-page-breadcrumbs__arrow">></span>分析・研究用ガス</div>
      </div>
    </section>

    <section class="c-gas">
      <section class="c-gas-wrap">
        <div class="u-font-en c-gas-ttl">PRODUCT LIST</div>
        <div class="c-gas-subttl">商品一覧</div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/invest_conts01.png">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">純ガス</div>
            <div class="c-gas-conts--product__desc">
              計器のゼロ点を調整するための基準ガス（ゼロガス）や、ガスの成分分析に使用するガスクロマトグラフィで試料を送り込むためのガス（キャリアガス）などで使用されます。<br>
              特定不純物が一定以下で保証されたガスで酸素、窒素、アルゴン、水素、ヘリウムなどがあります。
            </div>
          </div>
        </div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/invest_conts02.png">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">標準ガス</div>
            <div class="c-gas-conts--product__desc">
              気体成分濃度を測定する際の基準として分析装置の目盛値や出力値の校正をするために使用されます。その用途は、工業用ガスや医療用ガスの分析はもちろんのこと、自動車の排ガス測定などの公害計測用から現場単位での可燃性ガス漏洩チェックなど非常に多岐にわたります。
            </div>
          </div>
        </div>
        <div class="c-btn c-gas-btn"><a href="/indust_invest/" class="c-btn__hover"><div class="c-btn__text c-gas-btn__text">産業用ガス/分析・研究用ガスへ戻る</div></a></div>
      </section><? //.c-gas-wrap ?>
    </section><? //.c-gas ?>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
