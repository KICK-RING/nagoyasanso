<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/medical_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">MEDICAL</div>
          <div class="c-page-ttl__sub"><h1>医療用ガス</h1></div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>医療用ガス</div>
      </div>
    </section>

    <section class="c-service">
      <section class="c-service-wrap">
        <div class="c-service-wrap--ttl">命に大きく関わる医療の<br class="sp">現場を支える</div>
        <div class="c-service-wrap--desc">
          病院では、様々なものを高度に使用して病気やケガに苦しんでいる<br class="pc">患者さんの命や暮らしを守るため医療従事者の方々が日々奮闘されています。<br>
          その現場でも医療用として使用される【ガス】の存在は欠かすことができません。<br>
          例えば、吸入（呼吸）用の「酸素」ガスも医療用ガスのひとつで<br class="pc">みなさんもよくご存知だと思います。<br>
          その他には、手術時の麻酔用として使用される「亜酸化窒素」ガス（別名「笑気ガス」）や、<br>微生物やウイルスなどの殺（滅）菌・消毒用として使用される「酸化エチレン」ガスなど、<br class="pc">医療現場でも【ガス】は密接な関わりをもっています。<br>
          私たちは、「尊い命を守る」社会的使命の一翼を担っているという自覚と責任を胸に、<br>
          今日も万全の体制を整え医療の現場に【ガス】をお届けしております。
        </div>
      </section>

      <section class="c-service-catch">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/medical_catch.jpg">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_catch.jpg">
        </picture>
      </section>

      <section class="c-service-conts">
        <div class="c-service-cont">
          <div class="u-font-en c-service-cont--ttl">MEDICAL GAS</div>
          <div class="c-service-cont--subttl">医療用ガス</div>
          <div class="c-service-cont--img">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/medical_cont.jpg">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_cont.jpg">
            </picture>
          </div>
          <div class="c-service-cont--item">
            <div class="c-service-cont--item__ttl">取扱い商品</div>
            <div class="c-service-cont--item__product">酸素/窒素/二酸化炭素/亜酸化窒素</div>
            <div class="c-btn"><a href="/medical_detail/" class="c-btn__hover"><div class="c-btn__text c-service-cont--item__btn">詳しくはこちら</div></a></div>
          </div>
        </div>
      </section>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
