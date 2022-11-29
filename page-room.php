<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-header.jpg" alt="お部屋紹介のメインビュー画像">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="mv-sub__title-ja">お部屋紹介</h2>
            <p class="mv-sub__title-en">Room</p>
        </div>
    </div>
</section>

<?php breadcrumb(); ?>

<?php get_template_part('template/reservation'); ?>

<section class="room-sub layout-room-sub">
    <div class="room-sub__inner">
        <div class="room-sub__text-area">
            <p class="room-sub__text1">
                ６室のカラフルな客室は、それぞれアーティストによる異なる内装が施され、伝統的な美術品やアートが飾られています。<br>
                非日常感たっぷりのインテリア。どこも個性的なオシャレな部屋で外国人の方にも人気です。
            </p>
            <p class="room-sub__text2">
                基本的には２人部屋ですが、２階の１室のみ４人部屋です。各部屋にはトイレとバスルームはなく、<br>
                共有のトイレ・バスルームが２ヶ所用意されています。
            </p>
        </div>
        <div class="room-sub__thumbnail layout-room-thumbnail">
            <div class="banners">
                <a href="#hananoma">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-hana.jpg" alt="華の間">
                        <p class="banners__text">華の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="#tsukinoma">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-tsuki.jpg" alt="月の間">
                        <p class="banners__text">月の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="#toranoma">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-tora.jpg" alt="虎の間">
                        <p class="banners__text">虎の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="#shizukunoma">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-shizuku.jpg" alt="雫の間">
                        <p class="banners__text">雫の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="#tsurunoma">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-tsuru.jpg" alt="鶴の間">
                        <p class="banners__text">鶴の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="#nizinoma">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-niji.jpg" alt="虹の間">
                        <p class="banners__text">虹の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!--華の間-->
<section id="hananoma" class="hananoma layout-hananoma room">
    <!-- スライダー -->
    <div class="swiper slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma1.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma2.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma3.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma4.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma5.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma6.jpg" alt="花の間">
            </div>
        </div>
    </div>

    <!-- サムネイル -->
    <div class="swiper slider-thumbnail">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma1.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma2.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma3.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma4.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma5.jpg" alt="花の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma6.jpg" alt="花の間">
            </div>
        </div>
    </div>
    <div class="hananoma__inner room__inner">
        <h3 class="hananoma__title-area room__title">華の間</h3>
        <div class="hananoma__text-area room__text-area">
            <p class="hananoma__text1 room__text1">日本画家・石田紫織</p>
            <p class="hananoma__text2 room__text2">
                天蓋付きのクイーンサイズ・ベッド１台とキューブ状のひとり掛け椅子が３つ、
                押し入れを改造した広くて落ち着けるライティングデスク、などが設えられた室内。
                壁には、日本画家・石田紫織による鳳凰と花々の豪華絢爛な壁画が描かれています。
            </p>
        </div>
        <div class="hananoma-plan layout-hananoma-plan plan">
            <div class="hananoma-plan__contents plan__contents">
                <div class="hananoma-plan__items plan__items">
                    <p class="hananoma-plan__item plan__item1">部屋定員：1～2 名</p>
                    <p class="hananoma-plan__item plan__item2">部屋の広さ：9 平米</p>
                </div>
                <p class="hananoma-plan__text1 plan__text1">１泊１名（1室）： 6,000 円～（税込）</p>
                <p class="hananoma-plan__text2 plan__text2">１泊２名（1室）： 8,000 円～（税込・1名当たり4,000円～）</p>
                <p class="hananoma-plan__text3 plan__text3">B&Bプラン：朝食券 +700円（1枚当たり）　夕食券+1,000円（1枚当たり）</p>
            </div>
        </div>
    </div>

    <section class="roomplan layout-roomplan">
        <div class="roomplan__inner">
            <div class="roomplan__container">
                <a href="/">
                    <div class="roomplan__left">
                        <p class="roomplan__title">DAY USE（日帰り）</p>
                </a>
            </div>
            <div class="roomplan__center">
                <a href="/">
                    <p class="roomplan__title">ACTIVITY</p>
                </a>
            </div>
            <div class="roomplan__right">
                <a href="/">
                    <p class="roomplan__title">全国旅行支援</p>
                </a>
            </div>
        </div>
        </div>
    </section>

</section>

<div class="room__border-line"></div>
<!--月の間-->
<section id="tsukinoma" class="tsukinoma layout-tsukinoma room">

    <!-- スライダー -->
    <div class="swiper2 slider2">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma1.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma2.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma3.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma4.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma5.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma6.jpg" alt="月の間">
            </div>
        </div>
    </div>

    <!-- サムネイル -->
    <div class="swiper2 slider-thumbnail2">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma1.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma2.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma3.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma4.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma5.jpg" alt="月の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsukinoma6.jpg" alt="月の間">
            </div>
        </div>
    </div>


    <div class="tsukinoma__inner room__inner">
        <h3 class="tsukinoma__title-area room__title">月の間</h3>
        <div class="tsukinoma__text-area room__text-area">
            <p class="tsukinoma__text1 room__text1">現代美術家・滝沢達史
            </p>
            <p class="tsukinoma__text2 room__text2">
                セミダブルベッド１台とソファベッド１台が設置された部屋です。<br>
                部屋中に書家・松田響野の書を張りつめ、その上に藍色で雲を描いた現代美術家
                ・滝沢達史の作品世界を堪能できます。月の形の調光ライトが部屋のムードを気分に合わせてかえてくれます。
            </p>
        </div>
        <div class="tsukinoma-plan layout-tsukinoma-plan plan">
            <div class="tsukinoma-plan__contents plan__contents">
                <div class="tsukinoma-plan__items plan__items">
                    <p class="tsukinoma-plan__item plan__item1">部屋定員：1～2 名</p>
                    <p class="tsukinoma-plan__item plan__item2">部屋の広さ：11平米</p>
                </div>
                <p class="tsukinoma-plan__text1 plan__text1">１泊１名（1室）： 6,000 円～（税込）</p>
                <p class="tsukinoma-plan__text2 plan__text2">１泊２名（1室）： 8,000 円～（税込・1名当たり4,000円～）</p>
                <p class="tsukinoma-plan__text3 plan__text3">B&Bプラン：朝食券 +700円（1枚当たり）　夕食券+1,000円（1枚当たり）</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template/roomplan'); ?>
</section>

<div class="room__border-line"></div>

<!--虎の間-->
<section id="toranoma" class="toranoma layout-toranoma room">
    <!-- スライダー -->
    <div class="swiper3 slider3">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma1.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma2.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma3.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma4.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma5.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma6.jpg" alt="虎の間">
            </div>
        </div>
    </div>

    <!-- サムネイル -->
    <div class="swiper3 slider-thumbnail3">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma1.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma2.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma3.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma4.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma5.jpg" alt="虎の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/toranoma6.jpg" alt="虎の間">
            </div>
        </div>
    </div>


    <div class="toranoma__inner room__inner">
        <h3 class="toranoma__title-area room__title">虎の間</h3>
        <div class="toranoma__text-area room__text-area">
            <p class="toranoma__text1 room__text1">ragazzi works</p>
            <p class="toranoma__text2 room__text2">
                駕籠をモチーフとした和風な２段ベッドに布団を敷いてあります。<br>
                奥には、畳二畳弱の寛ぎスペース。ちゃぶ台と行灯風ランプ付き。<br>
                和紙のブラインドや虎模様の壁もユニークです。狭いながらも落ち着く部屋になっています。
                竹のはしごは、扱いにご注意ください。
            </p>
        </div>
        <div class="toranoma-plan layout-toranoma-plan plan">
            <div class="toranoma-plan__contents plan__contents">
                <div class="toranoma-plan__items plan__items">
                    <p class="toranoma-plan__item plan__item1">部屋定員：1～2 名</p>
                    <p class="toranoma-plan__item plan__item2">部屋の広さ：9 平米</p>
                </div>
                <p class="toranoma-plan__text1 plan__text1">１泊１名（1室）： 5,000 円～（税込） </p>
                <p class="toranoma-plan__text2 plan__text2">１泊２名（1室）： 7,000 円～（税込・1名当たり3,500円～）</p>
                <p class="toranoma-plan__text3 plan__text3">B&Bプラン：朝食券 +700円（1枚当たり）　夕食券+1,000円（1枚当たり）</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template/roomplan'); ?>
</section>

<div class="room__border-line"></div>
<!--雫の間-->
<section id="shizukunoma" class="shizukunoma layout-shizukunoma room">
    <!-- スライダー -->
    <div class="swiper4 slider4">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma1.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma2.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma3.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma4.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma5.jpg" alt="雫の間">
            </div>
        </div>
    </div>

    <!-- サムネイル -->
    <div class="swiper4 slider-thumbnail4">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma1.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma2.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma3.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma4.jpg" alt="雫の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/shizukunoma5.jpg" alt="雫の間">
            </div>
        </div>
    </div>


    <div class="shizukunoma__inner room__inner">
        <h3 class="shizukunoma__title-area room__title">雫の間</h3>
        <div class="shizukunoma__text-area room__text-area">
            <p class="shizukunoma__text1 room__text1">写真家・湯沢英治</p>
            <p class="shizukunoma__text2 room__text2">
                小上がり風に畳二畳が敷き詰められたベッドに布団を敷くスタイルの部屋。
                ソファベッド１台、折り畳まれた布地でできたスタンドや白い玉砂利の敷かれたエントランス、
                なども配置。写真家・湯沢英治のオリジナルプリントによる作品が壁に張られ、
                写真集が置かれるなど写真好きにはたまらない滞在になるはずです。
            </p>
        </div>
        <div class="shizukunoma-plan layout-shizukunoma-plan plan">
            <div class="shizukunoma-plan__contents plan__contents">
                <div class="shizukunoma-plan__items plan__items">
                    <p class="shizukunoma-plan__item plan__item1">部屋定員：1～3 名</p>
                    <p class="shizukunoma-plan__item plan__item2">部屋の広さ：8平米</p>
                </div>
                <p class="shizukunoma-plan__text1 plan__text1">１泊１名（1室）： 6,000 円～（税込）</p>
                <p class="shizukunoma-plan__text2 plan__text2">１泊２名（1室）： 8,000 円～（税込・1名当たり4,000円～）</p>
                <p class="shizukunoma-plan__text3 plan__text3">１泊３名（1室）： 10,000円～（税込・1名当たり3,333円～）</p>
                <p class="shizukunoma-plan__text3 plan__text4">B&Bプラン：朝食券 +700円（1枚当たり）　夕食券+1,000円（1枚当たり）</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template/roomplan'); ?>
</section>

<div class="room__border-line"></div>
<!--鶴の間-->
<section id="tsurunoma" class="tsurunoma layout-tsurunoma room">
    <!-- スライダー -->
    <div class="swiper5 slider5">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma1.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma2.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma3.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma4.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma5.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma6.jpg" alt="鶴の間">
            </div>
        </div>
    </div>

    <!-- サムネイル -->
    <div class="swiper5 slider-thumbnail5">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma1.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma2.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma3.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma4.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma5.jpg" alt="鶴の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/tsurunoma6.jpg" alt="鶴の間">
            </div>
        </div>
    </div>


    <div class="tsurunoma__inner room__inner">
        <h3 class="tsurunoma__title-area room__title">鶴の間</h3>
        <div class="tsurunoma__text-area room__text-area">
            <p class="tsurunoma__text1 room__text1">消しゴムはんこ作家・津久井智子</p>
            <p class="tsurunoma__text2 room__text2">
                タタミの乗ったクイーンサイズのベッド１台、紙のランプシェイド、２つの白い籐椅子、白くて小さい丸テーブル。
                消しゴムはんこ作家・津久井智子により、漆喰と金の壁紙に押印された鶴たちの飛翔が見事なコントラストをみせています。
                明るく清潔な印象を与える広がりのある角部屋です。
            </p>
        </div>
        <div class="tsurunoma-plan layout-tsurunoma-plan plan">
            <div class="tsurunoma-plan__contents plan__contents">
                <div class="tsurunoma-plan__items plan__items">
                    <p class="tsurunoma-plan__item plan__item1">部屋定員：1～2 名</p>
                    <p class="tsurunoma-plan__item plan__item2">部屋の広さ：8平米</p>
                </div>
                <p class="tsurunoma-plan__text1 plan__text1">１泊１名（1室）： 6,000 円～（税込）</p>
                <p class="tsurunoma-plan__text2 plan__text2">１泊２名（1室）： 8,000 円～（税込・1名当たり4,000円～）</p>
                <p class="tsurunoma-plan__text3 plan__text3">B&Bプラン：朝食券 +700円（1枚当たり）　夕食券+1,000円（1枚当たり）</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template/roomplan'); ?>
</section>

<div class="room__border-line"></div>
<!--虹の間-->
<section id="nizinoma" class="nizinoma layout-nizinoma room">
    <!-- スライダー -->
    <div class="swiper6 slider6">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma1.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma2.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma3.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma4.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma5.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma6.jpg" alt="虹の間">
            </div>
        </div>
    </div>

    <!-- サムネイル -->
    <div class="swiper6 slider-thumbnail6">
        <div class="swiper-wrapper">
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma1.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma2.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma3.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma4.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma5.jpg" alt="虹の間">
            </div>
            <div class="swiper-slide room-swiper__slide room-swiper__slide--thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/images/room/nizinoma6.jpg" alt="虹の間">
            </div>
        </div>
    </div>


    <div class="nizinoma__inner room__inner">
        <h3 class="nizinoma__title-area room__title">虹の間</h3>
        <div class="nizinoma__text-area room__text-area">
            <p class="nizinoma__text1 room__text1">ragazzi works</p>
            <p class="nizinoma__text2 room__text2">
                あえて、そのまま古民家本来のつくりを残した和室です。六畳間ですが、
                虎画が飾られた床の間や出窓風のスペースなどもあり、広く感じられます。
                古さを愛しつつ大切に使われ続けて来た美しい建具は必見です。
                冬には日本古来の暖房器具・こたつも登場します。<br>
                押し入れに布団がありますので、ご自由に敷いてお使いください。
            </p>
        </div>
        <div class="nizinoma-plan layout-nizinoma-plan plan">
            <div class="nizinoma-plan__contents plan__contents">
                <div class="nizinoma-plan__items plan__items">
                    <p class="nizinoma-plan__item plan__item1">部屋定員：1～4 名</p>
                    <p class="nizinoma-plan__item plan__item2">部屋の広さ：10平米</p>
                </div>
                <p class="nizinoma-plan__text1 plan__text1">１泊１名（1室）： 8,500 円～（税込）</p>
                <p class="nizinoma-plan__text2 plan__text2">１泊２名（1室）： 12,000 円～（税込・1名当たり6,000円～）</p>
                <p class="nizinoma-plan__text3 plan__text3">１泊２名（1室）： 14,000 円～（税込・1名当たり4,660円～）</p>
                <p class="nizinoma-plan__text3 plan__text4">１泊２名（1室）： 16,000 円～（税込・1名当たり4,000円～）</p>
                <p class="nizinoma-plan__text3 plan__text5">B&Bプラン：朝食券 +700円（1枚当たり）　夕食券+1,000円（1枚当たり）</p>
            </div>
        </div>
    </div>
    <?php get_template_part('template/roomplan'); ?>
</section>
<div class="room__border-line"></div>



<section class="room-box box layout-box">
    <div class="box__inner">
        <div class="box__left">
            <div class="box__left-title-area section-title">
                <h2 class="box__left-title-ja section-title__ja">提携レストラン</h2>
                <p class="box__left-title-en section-title__en">Restaurant</p>
            </div>
            <div class="box__button-area">
                <!-- まだ -->
                <a href="" class="box__button button">MORE</a>
            </div>
        </div>
        <div class="box__right">
            <div class="box__right-title-area section-title">
                <h2 class="box__right-title-ja section-title__ja">共有スペース</h2>
                <p class="box__right-title-en section-title__en">Shared space</p>
            </div>
            <div class="box__button-area">
                <!-- まだ -->
                <a href="" class="box__button button">MORE</a>
            </div>
        </div>
    </div>
</section>

<section class="room__gallery layout-sub-room">
    <?php get_template_part('template/gallery'); ?>
</section>

<section class="sub-gallery layout-sub-gallery">
    <?php get_template_part('template/inquiry'); ?>
</section>

<?php get_footer(); ?>