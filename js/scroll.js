jQuery(function(){
  var topBtn = jQuery('.l-footer-totop');
  //ボタンを非表示にする
  topBtn.hide();
  //スクロールしてページトップから100に達したらボタンを表示
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 300) {
　　　　　　　//フェードインで表示
          topBtn.fadeIn();
      } else {
　　　　　　　//フェードアウトで非表示
          topBtn.fadeOut();
      }
  });
});
