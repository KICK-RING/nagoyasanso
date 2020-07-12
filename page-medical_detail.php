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
          <div class="c-page-ttl__sub">医療用ガス</div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">HAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span><a href="/medical/">医療用ガス</a><span class="c-page-breadcrumbs__arrow">></span>医療用ガス</div>
      </div>
    </section>

    <section class="c-gas">
      <section class="c-gas-wrap">
        <div class="u-font-en c-gas-ttl">PRODUCT LIST</div>
        <div class="c-gas-subttl">商品一覧</div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_conts01.png">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">酸素</div>
            <div class="c-gas-conts--product__desc">
              みなさんもよくご存知かと思いますが、医療用としての用途は吸入です。呼吸器疾患などの患者だけでなく酸素濃度の低い高地などの呼吸補助用としても使用されます。また、提供される形は様々で、テレビなどでよく見かけるスプレー缶のような簡易的なものから大病院など大量に使用される現場ではタンクから直接気化させて使用するなど使い方に応じて変化します。
            </div>
          </div>
        </div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_conts02.png">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">窒素</div>
            <div class="c-gas-conts--product__desc">
              工業用と同じく液化状態での超低温特性を利用して、骨肉腫などの骨軟部に発症する悪性腫瘍の治療や皮膚イボの除去などの冷凍手術、さらには治療だけでなく検体や臍帯血などを凍結保存する際にも使用されます。<br>
              また、医療用酸素と組み合わせることで無菌に近いクリーンエアーを人工的に作り出すこともできます。
            </div>
          </div>
        </div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_conts03.png">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">二酸化炭素</div>
            <div class="c-gas-conts--product__desc">
              酸素吸入を行う際に、同時に数％混合させると呼吸中枢に適切な刺激を与えることができるため、呼吸困難者などの低酸素症状の治療に重要な役割をもっています。また、腹部を切開する必要がなく、患者の負担軽減や術後の回復が早いことで近年注目されている腹腔鏡手術にも、腹部を膨らませ、内視鏡やレーザーメスを使用する術部スペースを確保するためにも使用されています。
            </div>
          </div>
        </div>
        <div class="c-gas-conts">
          <div class="c-gas-conts--img">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/medical_conts04.png">
          </div>
          <div class="c-gas-conts--product">
            <div class="c-gas-conts--product__ttl">亜酸化窒素</div>
            <div class="c-gas-conts--product__desc">
              別名「笑気ガス」とも言われ、吸入すると陶酔させる作用があることから全身麻酔用として使用されています。また混合させる酸素濃度を調整することで麻酔深度を自由に変えられることから、歯科治療では、低濃度の笑気吸入による、意識を保たせたままでの鎮痛効果や治療への不安感の除去などに一役買っています。<br>
              しかし、反復摂取により依存性が生じるため、脱法ドラックとして使用されていることから、近年では指定薬物となり医療などの用途外での使用は禁止されています。
            </div>
          </div>
        </div>
        <div class="c-btn c-gas-btn"><a href="/indust_invest/" class="c-btn__hover"><div class="c-btn__text c-gas-btn__text">医療用ガスへ戻る</div></a></div>
      </section><? //.c-gas-wrap ?>
    </section><? //.c-gas ?>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
