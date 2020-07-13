jQuery(function(){
  jQuery('a[href^=#]').click(function(){
    var speed = 700;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
//spNavi
jQuery('.menu-trigger').on('click',function(){
  if(jQuery(this).hasClass('active')){
    jQuery(this).removeClass('active');
    jQuery('nav').fadeOut( 500 );
  } else {
    jQuery(this).addClass('active');
    jQuery('nav').fadeIn( 500 );
  }
});
//spNavi 取扱商品 +-とその子要素
jQuery('.nav-slide').click(function() {
  jQuery('.nav-slide span').toggleClass('active');
  jQuery('.nav-slide--parent').slideToggle('500');
});

});
