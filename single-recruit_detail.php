<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/recruit_detail_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/recruit_detail_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">RECRUIT</div>
          <div class="c-page-ttl__sub"><h1>募集要項</h1></div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span><a href="/recruit/">採用情報</a><span class="c-page-breadcrumbs__arrow">></span>募集要項</div>
      </div>
    </section>

    <section class="p-recruit_detail">
      <section class="p-recruit_detail-wrap">
        <div class="p-recruit_detail-wrap--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/indust_ttl.png"></picture>
        </div>
        <div class="p-recruit_detail-wrap--ttl u-font-en"><?php the_field('en_ttl'); ?></div>
        <div class="p-recruit_detail-wrap--subttl"><?php the_title(); ?></div>
        <div class="p-recruit_detail-wrap--conts">
          <?php if(get_field('business_cont')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">業務内容</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('business_cont'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('qualification')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">応募資格</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('qualification'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('salary')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">給　　与</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('salary'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('treatment')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">待　　遇</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('treatment'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('welfare')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">福利厚生</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('welfare'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('rules')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">諸制度</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('rules'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('time')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">時　　間</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('time'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('holiday')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">休日・休暇</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('holiday'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('place')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">勤務地</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('place'); ?></div>
            </div>
          <?php endif;?>
          <?php if(get_field('other')):?>
            <div class="p-recruit_detail-wrap--item">
              <div class="p-recruit_detail-wrap--item__head">その他</div>
              <div class="p-recruit_detail-wrap--item__cont"><?php the_field('other'); ?></div>
            </div>
          <?php endif;?>
        </div><? //.p-recruit_detail-wrap--conts ?>
        <div class="c-btn p-recruit_detail-btn"><a href="/recruit/" class="c-btn__hover"><div class="c-btn__text c-gas-btn__text">採用情報へ戻る</div></a></div>
      </section>

      <section class="p-recruit_detail-contact">
        <div class="l-container">
          <div class="p-recruit_detail-contact--icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/lets_join.png"></div>
          <div class="p-recruit_detail-contact--ttl u-font-en">ENTRY FORM</div>
          <div class="p-recruit_detail-contact--subttl">エントリーフォーム</div>
          <div class="p-recruit_detail-contact--wrap">
            <div class="c-steps">
              <div class="c-step c-step__here">
                <div class="u-font-en">STEP1</div>
                <div class="c-step--desc">入力</div>
              </div>
              <div class="c-step">
                <div class="u-font-en">STEP2</div>
                <div class="c-step--desc">確認</div>
              </div>
              <div class="c-step">
                <div class="u-font-en">STEP3</div>
                <div class="c-step--desc">完了</div>
              </div>
            </div>
            <div class="h-adr">
              <?php echo do_shortcode('[mwform_formkey key="72"]'); ?><? // 72 69(test) 58(local) //?>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
<?php get_template_part('contact_white'); ?>
<?php get_footer(); ?>
