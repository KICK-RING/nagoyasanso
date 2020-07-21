<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/spot_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/spot_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl c-page-ttl__long">
          <div class="u-font-en c-page-ttl__main">SPOT SUPPLY/<br>PLUMBING</div>
          <div class="c-page-ttl__sub"><h1>スポット供給及び特殊ガス配管工事</h1></div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/sample/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span><a href="/sample/equipment/">ガス設備及び各種工事</a><br class="sp"><span class="c-page-breadcrumbs__arrow">></span>スポット供給及び特殊ガス配管工事</div>
      </div>
    </section>

    <section class="c-gas">
      <section class="c-gas-wrap">
        <div class="u-font-en c-gas-ttl">PRODUCT LIST</div>
        <div class="c-gas-subttl">商品一覧</div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img c-gas-conts--img__large">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/spot_conts01.jpg">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">産業ガス供給サービス</div>
            <div class="c-gas-conts--product__desc">
              例えばコンビナート内にあるプラントなどは工場の安全を保つため、定期的にメンテナンスを行っています。この際、『期間限定で大量に必要となる窒素ガスの供給』をお手伝いするサービスです。<br>
              では、大量の窒素ガスとは、どのぐらいの量なのでしょうか？<br>
              プラントの総合気密など、流量として時間2,000m3の供給設備での実績が多いです。<br>
              こちらの設備は圧力・流量のコントロールなどもできます。<br>
              工事期間中、20本組の窒素カードルのレンタルも行っています。
            </div>
          </div>
        </div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img c-gas-conts--img__large">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/spot_conts02.jpg">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">
              特殊ガス配管工事(集中配管)<br>
              クリーンルーム設計施工(シリンダーキャビネットの製作)
            </div>
            <div class="c-gas-conts--product__desc">
              食い込み式継手を使った配管工事、パイプ自動溶接機での施工、超低温に対応した真空配管など、あらゆる施工に対応しており、集合装置による集中配管をしたボンベ庫の設計施工、クリーンルーム、シリンダーキャビネットの設計施工なども手掛けております。
            </div>
          </div>
        </div>

        <div class="u-font-en c-gas-ttl c-gas-ttl__results">CONSTRUCTION<br class="sp"> RESULTS</div>
        <div class="c-gas-subttl">工事実績</div>
        <table class="c-gas-table">
          <tr><th><img src="<?php bloginfo('stylesheet_directory'); ?>/images/table_icon.png">基礎化学品工場</th><td>ポンプ車によるプラントパージ及び気密</td></tr>
          <tr><th><img src="<?php bloginfo('stylesheet_directory'); ?>/images/table_icon.png">〇〇県研究機関</th><td>特殊ガス配管工事</td></tr>
          <tr><th><img src="<?php bloginfo('stylesheet_directory'); ?>/images/table_icon.png">大手電化製品工場</th><td>クリーンルーム設計施工</td></tr>
        </table>
        <div class="c-btn c-gas-btn"><a href="/sample/equipment/" class="c-btn__hover"><div class="c-btn__text c-gas-btn__text">ガス設備及び各種工事へ戻る</div></a></div>
      </section><? //.c-gas-wrap ?>
    </section><? //.c-gas ?>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
