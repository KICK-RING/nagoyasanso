<?php get_header(); ?>
  <div class="c-page">
    <section class="c-page-visual">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php bloginfo('stylesheet_directory'); ?>/images/sp/message_visual.jpg">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/message_visual.jpg">
      </picture>
      <div class="c-page-container">
        <div class="c-page-ttl">
          <div class="u-font-en c-page-ttl__main">MESSAGE</div>
          <div class="c-page-ttl__sub"><h1>ごあいさつ</h1></div>
        </div>
        <div class="c-page-breadcrumbs"><a href="/">NAGOYA SANSO HOME</a><span class="c-page-breadcrumbs__arrow">></span>社長挨拶</div>
      </div>
    </section>

    <section class="p-message">
      <div class="p-message-visual pc"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/message_catch.jpg"></div>
      <div class="p-message-wrap">
        <div class="p-message-wrap--head">
          <div class="u-font-en p-message-wrap--ttl">PHILOSOPHY</div>
          <div class="p-message-wrap--subttl">
            これまでの100年に感謝し、<br>
            これからの100年を目指して。
          </div>
        </div>
        <div class="p-message-visual sp"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp/message_catch.jpg"></div>
        <div class="p-message-wrap--desc">
          大正2年創業より長きにわたり数多くのお取引先様のご愛顧を賜り<br class="pc">私たちが現在に至りました事を心より感謝申し上げます。<br>
          これは、様々な時代に於いて数え切れない人との関わりに支えていただいた賜物であります。<br>
          モノを買い、モノを創り、<br class="sp">モノを売り、モノを運ぶ<br>
          言い換えれば<br>
          ヒトが買い、ヒトが創り、<br class="sp">ヒトが売り、ヒトが運ぶ<br>
          全てが人であると考えます。<br>
          IT技術、AI技術が益々進化し発展していく時代ですが、<br class="pc">それを束ね掌るのは人であるとも考えます。<br>
          人との出会い　人との会話　人との関わり　人との繋がり、人との縁を<br class="pc">大切に事業継続し、いつの時代でもどのような時代でも<br class="pc">企業は人なり　継続は力なりを会社の礎として<br class="pc">役員はじめ社員一同が人として会社と共に成長発展を図り、<br class="pc">お取引先様より必要な会社であり続ける為に精進し歩んでまいりますので<br class="pc">変わらぬご指導ご鞭撻の程よろしくお願いいたします。
          <div class="p-message-wrap--desc__name">取締役社長　飯田哲郎</div>
        </div>
      </div>
    </section>
  </div>
<?php get_template_part('contact'); ?>
<?php get_footer(); ?>
