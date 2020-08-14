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
              <li><a href="/">ホーム</a></li>
              <li><a href="/company/">会社案内</a></li>
              <li><a href="/message/">社長挨拶</a></li>
              <li><a href="/environment/">環境への取り組み</a></li>
            </ul>
            <ul>
              <li><a href="/datasheet/">安全データシート</a></li>
              <li><a href="/#service">取扱い商品</a></li>
              <li><a href="/info/">お知らせ</a></li>
              <li><a href="/recruit/">採用情報</a></li>
            </ul>
          </div>
          <div class="l-footer-conts--nav l-footer-conts--nav__sp">
            <ul>
              <li><a href="/indust_invest/">産業用ガス<br>分析・研究用ガス</a></li>
              <li class="l-footer-conts--nav__child"><a href="/indust/">- 産業用ガス</a></li>
              <li class="l-footer-conts--nav__child"><a href="/invest/">- 分析・研究用ガス</a></li>
              <li><a href="/medical/">医療用ガス</a></li>
              <li class="l-footer-conts--nav__child"><a href="/medical_detail/">- 医療用ガス</a></li>
            </ul>
          </div>
          <div class="l-footer-conts--nav l-footer-conts--nav__last">
            <ul>
              <li><a href="/welding/">溶接・産業機器関連</a></li>
              <li><a href="/equipment/">ガス設備及び各種工事</a></li>
              <li class="l-footer-conts--nav__child"><a href="/facility/">- ガス設備</a></li>
              <li class="l-footer-conts--nav__child"><a href="/spot/">- スポット供給及び特殊ガス配管工事</a></li>
              <li class="l-footer-conts--nav__child"><a href="/construction/">- 各種工事</a></li>
            </ul>
          </div>
        </div><? //.l-footer-conts ?>

        <div class="l-footer-copyright">
          <div class="l-footer-copyright--wrap">
            <div class="l-footer-copyright--contact"><a href="/contact/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_mail_icon.png"><span class="l-footer-copyright--wrap__text">Contact</span></a></div>
            <div class="l-footer-copyright--privacy"><a href="/privacy_policy/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_privacy_icon.png"><span class="l-footer-copyright--wrap__text">Privacy Policy</span></a></div>
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
      <div class="nav-logo"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sp/logo.png" alt="NAGOYA SANSO"></a></div>
      <ul>
        <a href="/company/"><li>会社案内</li></a>
        <a href="/message/"><li>社長挨拶</li></a>
        <a href="/environment/"><li>環境への取り組み</li></a>
        <a href="/datasheet/"><li>安全データシート</li></a>
        <li class="nav-slide">取扱い商品<span></span></li>
        <ul class="nav-slide--parent">
          <a href="/indust_invest/"><li>産業用ガス/分析・研究用ガス</li></a>
          <a href="/indust/"><li class="nav-slide--child">産業用ガス</li></a>
          <a href="/invest/"><li class="nav-slide--child">分析・研究用ガス</li></a>
          <a href="/medical/"><li>医療用ガス</li></a>
          <a href="/medical_detail/"><li class="nav-slide--child">医療用ガス</li></a>
          <a href="/welding/"><li>溶接・産業機器関連</li></a>
          <a href="/equipment/"><li>ガス設備及び各種工事</li></a>
          <a href="/facility/"><li class="nav-slide--child">ガス設備</li></a>
          <a href="/spot/"><li class="nav-slide--child">スポット供給及び特殊ガス配管工事</li></a>
          <a href="/construction/"><li class="nav-slide--child">各種工事</li></a>
        </ul>
        <a href="/info/"><li>お知らせ</li></a>
        <a href="/recruit/"><li>採用情報</li></a>
        <a href="/contact/"><li class="nav-contact"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mail_icon_white.png" class="nav-contact--img">お問い合わせ</li></a>
        <a href="/privacy_policy/"><li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_privacy_icon.png" class="nav-privacy--img">Privacy Policy</li></a>
      </ul>
    </nav>
    <?php wp_footer(); ?>
    <?php if ( is_home() || is_front_page() ) : ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
    <?php endif; ?>
    <?php if(is_page('company')){ ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
    <?php } ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
    <script src="//yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  </body>
</html>
