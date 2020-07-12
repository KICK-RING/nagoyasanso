<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/contact_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/contact_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">CONTACT</div>
          <div class="c-page-ttl__sub">お問い合わせ</div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">HAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>お問い合わせ</div>
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
            <div class="c-step c-step__here">
              <div class="u-font-en">STEP2</div>
              <div class="c-step--desc">確認</div>
            </div>
            <div class="c-step">
              <div class="u-font-en">STEP3</div>
              <div class="c-step--desc">完了</div>
            </div>
          </div>
          <div class="h-adr">
            <?php echo do_shortcode('[mwform_formkey key="58"]'); ?>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
