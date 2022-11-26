
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  //スクロールすると上部に固定させるための設定を関数でまとめる
  function FixedAnime() {
    var headerH = $('#header').outerHeight(true);
    var scroll = $(window).scrollTop();
    if (scroll >= headerH) {//headerの高さ以上になったら
      $('#header').addClass('fixed');//fixedというクラス名を付与
    } else {//それ以外は
      $('#header').removeClass('fixed');//fixedというクラス名を除去
    }
  }

  // PC headerのenglishモーダル
  var parent = document.querySelectorAll(".header__has-sub");
  var node = Array.prototype.slice.call(parent, 0);
  node.forEach(function (element) {
    element.addEventListener(
      "mouseover",
      function () {
        element.querySelector(".header__sub").classList.add("active");
      },
      false
    );
    element.addEventListener(
      "mouseout",
      function () {
        element.querySelector(".header__sub").classList.remove("active");
      },
      false
    );
  });

  // アコーディオン
  $(function () {
    $('.qa__label').click(function () {
      $(this).next('div').slideToggle('open');
      $(this).find(".icon").toggleClass('open');
    });
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });



  // トップページのスライダー
  let swiperTop = {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 3.5,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
  }
  new Swiper('.mySwiper-top', swiperTop);

  // 共有スペースのスライダー
  let swiperFacility = {
    loop: true,
    loopAdditionalSlides: 1,
    slidesPerView: 1,
    spaceBetween: 25,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
    
    grabCursor: true,
    watchSlidesProgress: true,
    
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: 'bullets'
    },
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    breakpoints: { // ブレークポイント
      768: { // 画面幅768px以上で適用
        slidesPerView: 3,
      },
      
      centeredSlides: false,
    },

  }
  new Swiper('.mySwiper-Facility', swiperFacility);

  // お部屋情報スライダー
  // サムネイル
  const sliderThumbnail = new Swiper(".slider-thumbnail", {
    slidesPerView: 3, // サムネイルの枚数
  });
  // スライダー
  const slider = new Swiper(".room-sub-slider", {
    loop: true,
    slidesPerView: 5,

    thumbs: {
      swiper: sliderThumbnail,
    },
  });

// トップページMVのアニメーション
function slideAnime(){
	//====左に動くアニメーションここから===
		$('.leftAnime').each(function(){ 
			var elemPos = $(this).offset().top-50;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight){
				//左から右へ表示するクラスを付与
				//テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
				$(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
				$(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
			}else{
				//左から右へ表示するクラスを取り除く
				$(this).removeClass("slideAnimeLeftRight");
				$(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
				
			}
		});
		
	}

});

