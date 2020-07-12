jQuery(function(){
  var imgHeight = jQuery('.p-top-overview').outerHeight(); //画像の高さを取得。これがイベント発火位置になる。
  var header = jQuery('.l-header'); //ヘッダーコンテンツ

  jQuery(window).on('load scroll', function(){
     if (jQuery(window).scrollTop() < imgHeight) {
       //メインビジュアル内にいるので、クラスを外す。
       header.removeClass('l-header__bg');
     }else {
       //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
       header.addClass('l-header__bg');
     }
  });
});
