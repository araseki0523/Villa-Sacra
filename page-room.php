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

<?php get_template_part('template/breadcrumb'); ?>

<?php get_template_part('template/reservation'); ?>

<section class="room-sub layout-room-sub">
    <div class="room-sub__inner">
        <div class="room-sub__text-area">
            <p class="room-sub__text1">
                それぞれ異なった趣向が凝らされた部屋が全部で６つ。基本的には２人部屋ですが、
                ２階の１室のみ、４人部屋です。
            </p>
            <p class="room-sub__text2">
                このうち、アーティストが手がけた部屋が３つ、写真家の協力による部屋が１つ、
                時折展示作品の替わるギャラリーのような部屋が１つ、あります。事前にお選びいただけますが、
                空いている場合には実際に見てから、交換することも可能です。
            </p>
        </div>
        <div class="room-sub__thumbnail layout-room-thumbnail">
            <div class="banners">
                <a href="/">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-hana.jpg" alt="華の間">
                        <p class="banners__text">華の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="/">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-tsuki.jpg" alt="月の間">
                        <p class="banners__text">月の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="/">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-tora.jpg" alt="虎の間">
                        <p class="banners__text">虎の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="/">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-shizuku.jpg" alt="雫の間">
                        <p class="banners__text">雫の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="/">
                    <div class="banners__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/room/room-tsuru.jpg" alt="鶴の間">
                        <p class="banners__text">鶴の間</p>
                        <div class="banners_icon"></div>
                    </div>
                </a>
                <a href="/">
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

<!-- スライダー -->
<div class="swiper room-sub-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma1.jpg" alt="花の間">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma2.jpg" alt="花の間">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma3.jpg" alt="花の間">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma4.jpg" alt="花の間">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma5.jpg" alt="花の間">
        </div>
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma6.jpg" alt="花の間">
        </div>
    </div>
</div>

<!-- サムネイル -->
<div class="swiper slider-thumbnail">
    <div class="swiper-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma1.jpg" alt="花の間">
    </div>
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma2.jpg" alt="花の間">
    </div>
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma3.jpg" alt="花の間">
    </div>
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma4.jpg" alt="花の間">
    </div>
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma5.jpg" alt="花の間">
    </div>
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/images/room/hananoma6.jpg" alt="花の間">
    </div>
</div>
</div>

<!--華の間-->
<section id="hananoma" class="hananoma layout-hananoma room">
    <div class="hananoma__inner">
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
</section>

<section class="room-plan layout-room-plan">
    <div class="room-plan__inner">
        <a href="/">
            <div class="room-plan__container">
                <div class="room-plan__left">
                    <p class="room-plan__title">DAY USE</p>
                </div>
        </a>
        <a href="/">
            <div class="room-plan__center">
                <p class="room-plan__title">旅行支援</p>
            </div>
        </a>
        <a href="/">
            <div class="room-plan__right">
                <p class="room-plan__title">ACTIVITY</p>
            </div>
        </a>
    </div>
    </div>
</section>


<section class="box layout-box">
    <div class="box__inner">
        <div class="box__left">
            <div class="box__left-title-area section-title">
                <h2 class="box__left-title-ja section-title__ja">提携レストラン</h2>
                <p class="box__left-title-en section-title__en">Restaurant</p>
            </div>
            <div class="box__button-area">
                <a href="" class="box__button button">MORE</a>
            </div>
        </div>
        <div class="box__right">
            <div class="box__right-title-area section-title">
                <h2 class="box__right-title-ja section-title__ja">共有スペース</h2>
                <p class="box__right-title-en section-title__en">Shared space</p>
            </div>
            <div class="box__button-area">
                <a href="" class="box__button button">MORE</a>
            </div>
        </div>
    </div>
</section>

<section class="facility__gallery layout-sub-facility">
    <?php get_template_part('template/gallery'); ?>
</section>

<section class="sub-gallery layout-sub-gallery">
    <?php get_template_part('template/inquiry'); ?>
</section>

<?php get_footer(); ?>