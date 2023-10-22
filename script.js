///////////////// webフォントが読み込まれてから
setTimeout(function() {
    if (document.getElementsByTagName("html")[0].classList.contains('wf-active') != true) {
        document.getElementsByTagName("html")[0].classList.add('loading-delay');
    }
}, 3000);

$(document).ready(function() {

  /////////////////// ノート
  // // クリック(デバッグ用)
  // var $card = $('.card');
  
  // $card.on('click', function() {
	// 	$(this).toggleClass('is-opened');
	// });

  // ホバー
  $(function() {
    $('.card').mouseover(function(e) {
    $(this).addClass("is-opened");
      })
    $('.card').mouseout(function(e) {
    $(this).removeClass("is-opened");
      })
  });

  ///////////////// ハンバーガーメニュー
  $('#menu-btn').on('click', function(){
    $('#menu-closeArea, #main-navtab').toggleClass('is-active');
  });
  
});

