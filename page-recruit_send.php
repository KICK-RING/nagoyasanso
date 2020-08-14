<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/contact_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">RECRUIT</div>
          <div class="c-page-ttl__sub"><h1>募集要項</h1></div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>お問い合わせ</div>
      </div>
    </section>

    <section class="p-contact">
      <div class="l-container">
        <div class="p-contact-ttl u-font-en">FORM</div>
        <div class="p-contact-subttl">お問い合わせフォーム</div>
        <div class="p-contact-wrap">
          <div class="c-steps">
            <div class="c-step">
              <div class="u-font-en">STEP1</div>
              <div class="c-step--desc">入力</div>
            </div>
            <div class="c-step">
              <div class="u-font-en">STEP2</div>
              <div class="c-step--desc">確認</div>
            </div>
            <div class="c-step c-step__here">
              <div class="u-font-en">STEP3</div>
              <div class="c-step--desc">完了</div>
            </div>
          </div>
          <div class="p-contact_send-wrap">
            <div class="p-contact_send-wrap--text">
              お問い合わせいただき<br class="sp">ありがとうございました。<br>
              ご入力いただいたメールアドレス宛てに、<br class="sp">お問い合わせ完了のメールを<br class="sp">送信いたしましたので、ご確認ください。<br>
              なお、一週間経っても連絡が無い場合、<br class="sp">お手数ですがお電話にてご連絡ください。
            </div>
            <div class="c-btn p-contact_send-wrap--btn"><a href="/" class="c-btn__hover"><div class="c-btn__text c-gas-btn__text">トップへ戻る</div></a></div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
