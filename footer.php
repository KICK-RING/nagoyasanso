      <footer class="l-footer-wrap">
        <div class="l-footer-conts">
          <div class="l-footer-conts--company">
            <div class="l-footer-conts--logo">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png">
            </div>
            <div class="l-footer-conts--prof">
              <div class="l-footer-conts--prof__name">
                <?php if ( is_home() || is_front_page() ) : ?>
                  <h1>名古屋酸素株式会社</h1>
                <?php else : ?>
                  名古屋酸素株式会社
                <?php endif; ?>
              </div>
              <div class="l-footer-conts--prof__addr">
                〒455-0801  名古屋市港区小碓1-12<br>
                TEL　052-381-5281(代)<br>
                FAX　052-381-2453
              </div>
            </div>
            <a href="http://aisan-shoji.co.jp/" target="_blank">
              <div class="l-footer-conts--group">
                <div class="l-footer-conts--group__ttl">グループ会社</div>
                <div class="l-footer-conts--group__name">愛産商事株式会社</div>
              </div>
            </a>
          </div>
          <div class="l-footer-conts--nav">
            <ul>
              <li><a href="/sample/">ホーム</a></li>
              <li><a href="/sample/company/">会社案内</a></li>
              <li><a href="/sample/message/">社長挨拶</a></li>
              <li><a href="/sample/environment/">環境への取り組み</a></li>
            </ul>
            <ul>
              <li><a href="/sample/datasheet/">安心データシート</a></li>
              <li><a href="/sample/#service">取扱い製品</a></li>
              <li><a href="/sample/info/">お知らせ</a></li>
              <li><a href="/sample/recruit/">採用情報</a></li>
            </ul>
          </div>
          <div class="l-footer-conts--nav l-footer-conts--nav__sp">
            <ul>
              <li><a href="/sample/indust_invest/">産業用ガス<br>分析・研究用ガス</a></li>
              <li class="l-footer-conts--nav__child"><a href="/sample/indust/">- 産業用ガス</a></li>
              <li class="l-footer-conts--nav__child"><a href="/sample/invest/">- 分析・研究用ガス</a></li>
              <li><a href="/sample/medical/">医療用ガス</a></li>
              <li class="l-footer-conts--nav__child"><a href="/sample/medical_detail/">- 医療用ガス</a></li>
            </ul>
          </div>
          <div class="l-footer-conts--nav l-footer-conts--nav__last">
            <ul>
              <li><a href="/sample/welding/">溶接・産業機器関連</a></li>
              <li><a href="/sample/equipment/">ガス設備及び各種工事</a></li>
              <li class="l-footer-conts--nav__child"><a href="/sample/facility/">- ガス設備</a></li>
              <li class="l-footer-conts--nav__child"><a href="/sample/spot/">- スポット供給及び特殊ガス配管工事</a></li>
              <li class="l-footer-conts--nav__child"><a href="/sample/construction/">- 各種工事</a></li>
            </ul>
          </div>
        </div><? //.l-footer-conts ?>

        <div class="l-footer-copyright">
          <div class="l-footer-copyright--wrap">
            <div class="l-footer-copyright--contact"><a href="/sample/contact/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_mail_icon.png"><span class="l-footer-copyright--wrap__text">Contact</span></a></div>
            <div class="l-footer-copyright--privacy"><a href="/sample/privacy_policy/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_privacy_icon.png"><span class="l-footer-copyright--wrap__text">Privacy Policy</span></a></div>
            <div class="l-footer-copyright--copy">© 2019 Nagoya Sanso CO., LTD</div>
          </div>
        </div>

        <div class="l-footer-totop"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/to_top.png"></a></div>
      </footer>



    </main>
    <div class="menu-trigger" href="">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav>
      <div class="nav-logo"><a href="/sample/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp/logo.png" alt="NAGOYA SANSO"></a></div>
      <ul>
        <a href="/sample/company/"><li>会社案内</li></a>
        <a href="/sample/message/"><li>社長挨拶</li></a>
        <a href="/sample/environment/"><li>環境への取り組み</li></a>
        <a href="/sample/datasheet/"><li>安心データシート</li></a>
        <li class="nav-slide">取扱い製品<span></span></li>
        <ul class="nav-slide--parent">
          <a href="/sample/indust_invest/"><li>産業用ガス/分析・研究用ガス</li></a>
          <a href="/sample/indust/"><li class="nav-slide--child">産業用ガス</li></a>
          <a href="/sample/invest/"><li class="nav-slide--child">分析・研究用ガス</li></a>
          <a href="/sample/medical/"><li>医療用ガス</li></a>
          <a href="/sample/medical_detail/"><li class="nav-slide--child">医療用ガス</li></a>
          <a href="/sample/welding/"><li>溶接・産業機器関連</li></a>
          <a href="/sample/equipment/"><li>ガス設備及び各種工事</li></a>
          <a href="/sample/facility/"><li class="nav-slide--child">ガス設備</li></a>
          <a href="/sample/spot/"><li class="nav-slide--child">スポット供給及び特殊ガス配管工事</li></a>
          <a href="/sample/construction/"><li class="nav-slide--child">各種工事</li></a>
        </ul>
        <a href="/sample/info/"><li>お知らせ</li></a>
        <a href="/sample/recruit/"><li>採用情報</li></a>
        <a href="/sample/contact/"><li class="nav-contact"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mail_icon_white.png" class="nav-contact--img">お問い合わせ</li></a>
        <a href="/sample/privacy_policy/"><li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_privacy_icon.png" class="nav-privacy--img">Privacy Policy</li></a>
      </ul>
    </nav>
    <?php wp_footer(); ?>
    <?php if ( is_home() || is_front_page() ) : ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
    <?php endif; ?>
    <script src="//yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171450358-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-171450358-1');

     $(window).on("load", function(){
                   setTimeout(function(){

                 $('a[href^="tel:"]').on("click", function(){
                   gtag('event', 'click', {'event_category': 'tel','event_label': window.location.href, 'value': '1'});
                 });
                }, 1000);
              });
    </script>
  </body>
</html>
