<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/equipment_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/equipment_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">GAS EQUIPMENT &<br>CONSTRUCTION</div>
          <div class="c-page-ttl__sub">ガス設備及び各種工事</div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">HAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>ガス設備及び各種工事</div>
      </div>
    </section>

    <section class="c-service">
      <section class="c-service-wrap">
        <div class="c-service-wrap--ttl">お客様のニーズにあった<br class="sp">設備を<br class="pc">ご提案いたします</div>
        <div class="c-service-wrap--desc">
          高圧ガスを使いたいが、どういった供給方法があるのだろう？使用量に見合った設備にしたいが、イメージがわかない...<br>
          設備を導入するにあたって、分からないことってありますよね。<br>
          そんな時は、私たちにおまかせ！お客様の使用量に応じたガス供給方法を経験と実績を元にご提案いたします！！<br>
          また、工場に欠かせない設備工事、補助金などの手続きもご相談承ります！
        </div>
      </section>

      <section class="c-service-catch">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/equipment_catch.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/equipment_catch.jpg">
        </picture>
      </section>

      <section class="c-service-conts">
        <div class="c-service-cont">
          <div class="u-font-en c-service-cont--ttl">GAS EQUIPMENT</div>
          <div class="c-service-cont--subttl">ガス設備</div>
          <div class="c-service-cont--img">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/equipment_cont01.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/equipment_cont01.jpg">
            </picture>
          </div>
          <div class="c-service-cont--item">
            <div class="c-service-cont--item__ttl">設備内容</div>
            <div class="c-service-cont--item__product">
              シリンダー容器・ＬＧＣ供給設備（カードル製作・集合装置）<br>
              タンクローリー供給による液化ガス設備（CE供給設備）<br>
              ガス発生装置による供給設備（PSA）
            </div>
            <div class="c-btn"><a href="/facility/" class="c-btn__hover"><div class="c-btn__text c-service-cont--item__btn">詳しくはこちら</div></a></div>
          </div>
        </div>
        <div class="c-service-cont c-service-cont__even">
          <div class="u-font-en c-service-cont--ttl">SPOT SUPPLY/<br>PLUMBING</div>
          <div class="c-service-cont--subttl">スポット供給及び<br>特殊ガス配管工事</div>
          <div class="c-service-cont--img">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/equipment_cont02.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/equipment_cont02.jpg">
            </picture>
          </div>
          <div class="c-service-cont--item">
            <div class="c-service-cont--item__ttl">サービス内容</div>
            <div class="c-service-cont--item__product">
              産業ガス供給サービス
              特殊ガス配管工事（集中配管）
              クリーンルーム設計施工（シリンダーキャビネットの製作）
            </div>
            <div class="c-btn"><a href="/spot/" class="c-btn__hover"><div class="c-btn__text c-service-cont--item__btn">詳しくはこちら</div></a></div>
          </div>
        </div>
        <div class="c-service-cont">
          <div class="u-font-en c-service-cont--ttl">VARIOUS WORKS</div>
          <div class="c-service-cont--subttl">各種工事</div>
          <div class="c-service-cont--img">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/equipment_cont03.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/equipment_cont03.jpg">
            </picture>
          </div>
          <div class="c-service-cont--item">
            <div class="c-service-cont--item__ttl">サービス内容</div>
            <div class="c-service-cont--item__product">
              ホイスト設備工事（各種クレーンの製作）<br>
              空調設備工事（水配管工事・ダクト工事 他）<br>
              1点ものの製作<br>
              メンテナンスサービス（保守点検）
            </div>
            <div class="c-btn"><a href="/construction/" class="c-btn__hover"><div class="c-btn__text c-service-cont--item__btn">詳しくはこちら</div></a></div>
          </div>
        </div>
      </section>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
