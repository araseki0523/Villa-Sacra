<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
    <div class="mv-sub__inner">
        <div class="mv-sub__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facility/facility.jpg" alt="共有スペース/アメニティ/注意事項のメインビュー画像">
            <div class="mv-sub__background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
            </div>
            <h2 class="facility__title-ja mv-sub__title-ja">共有スペース/アメニティ/注意事項</h2>
            <p class="mv-sub__title-en">facility</p>
        </div>
    </div>
</section>

<?php breadcrumb(); ?>

<?php get_template_part('template/reservation'); ?>

<section class="facility-box layout-facility-box">
    <div class="facility-box__inner">
        <div class="facility-box__container">
            <div class="facility-box__left">
                <a href="#shared-space">
                    <p class="facility-box__title">共有スペース</p>
                    <div class="facility-box__icon"></div>
                </a>
            </div>
            <div class="facility-box__center">
                <a href="#amenities">
                    <p class="facility-box__title">アメニティ</p>
                    <div class="facility-box__icon"></div>
                </a>
            </div>
            <div class="facility-box__right">
                <a href="#notes">
                    <p class="facility-box__title">注意事項</p>
                    <div class="facility-box__icon"></div>
                </a>
            </div>
        </div>
    </div>
</section>

<!--shared-space-->
<section id="shared-space" class="shared-space layout-shared-space">
    <div class="shared-space__inner">
        <div class="shared-space__title-area">
            <h2 class="shared-space__title-ja  section-title-sub__ja">共有スペース</h2>
            <p class="shared-space__title-en section-title-sub__en">Shared space</p>
        </div>
        <div class="shared-space__container">
            <p class="shared-space__text">
                ​当施設内には各部屋にバスルーム・トイレの設置はありません。 共有スペースに、共同利用のバスルール・トイレがそれぞれ２カ所、
                用意されています。うち１カ所はシャワーブースのみ、１カ所は通常のバスタブ付きユニットバスとなっております。全６部屋の小さな宿ですので、
                さほど混み合うことはないと思われますが、皆様で便宜を図りつつ、上手にご利用いただければ幸いです。
            </p>

            <!--swiper-->
            <div class="shared-swiper layout-shared-swiper">

                <div class="shared-swiper__container">
                    <div class="swiper mySwiper-Facility">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide shared-swiper__contant">
                                <div class="shared-swiper__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility/facility1.jpg" alt="共有スペース1">
                                </div>
                                <div class="shared-swiper__content">
                                    <div class="shared-swiper__title">この文章はダミーです</div>
                                    <p class="shared-swiper__text">
                                        この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                                        入れていますこの文章はダミーです
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide shared-swiper__contant">
                                <div class="shared-swiper__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility/facility2.jpg" alt="共有スペース2">
                                </div>
                                <div class="shared-swiper__content">
                                    <div class="shared-swiper__title">この文章はダミーです</div>
                                    <p class="shared-swiper__text">
                                        この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                                        入れていますこの文章はダミーです
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide shared-swiper__contant">
                                <div class="shared-swiper__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facility/facility3.jpg" alt="共有スペース3">
                                </div>
                                <div class="shared-swiper__content">
                                    <div class="shared-swiper__title">この文章はダミーです</div>
                                    <p class="shared-swiper__text">
                                        この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                                        入れていますこの文章はダミーです
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<!--Amenities-->
<section id="amenities" class="amenities layout-amenities">
    <div class="amenities__bg">
        <div class="amenities__inner">
            <div class="amenities__title-area">
                <h2 class="amenities__title-ja  section-title-sub__ja">アメニティ</h2>
                <p class="amenities__title-en section-title-sub__en">Amenities</p>
            </div>

            <div class="amenitiesList">
                <div class="amenitiesList__items">
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                </div>
                <div class="amenitiesList__items">
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                </div>
                <div class="amenitiesList__items">
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                    <div class="amenitiesList__item">
                        <h3 class="amenitiesList__title">この文章はダミーです</h3>
                        <p class="amenitiesList__text">
                            この文章はダミーです文字の大きさ・量・字間・行間等を確認するために
                            入れていますこの文章はダミーです
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--Notes-->
<section id="notes" class="notes layout-notes">
    <div class="notes__inner">
        <div class="notes__title-area section-title-sub">
            <h2 class="notes__title-ja  section-title-sub__ja">注意事項</h2>
            <p class="notes__title-en section-title-sub__en">Notes</p>
        </div>
        <div class="notes__wrapper">
            <h3 class="notes__index">​チェックイン・チェックアウト</h3>
            <p class="notes__text">
                原則的に、チェックインは16:00以降22:00くらいまで、チェックアウトは8：00以降11：00迄です。
                チェックインが遅くなる場合は事前にお知らせください。 またチェックイン前、チェックアウト後の荷物のお預かりにつきましては、
                フロントにご相談ください。鎌倉滞在＆観光をお気軽にお楽しみいただけますよう、出来る限り、対応させていただきます。
                同様に、アーリーチェックイン、レイトチェックアウトにつきましても、場合により、やむを得ずお断りすることや時間外料金をいただくケースが
                あるかもしれませんが、可能なかぎり、対応させていただきます。ご相談ください。
            </p>
        </div>
        <div class="notes__wrapper">
            <h3 class="notes__index">​バスルーム・トイレ</h3>
            <p class="notes__text">
                ​当施設内には各部屋にバスルーム・トイレの設置はありません。
                共有スペースに、共同利用のバスルール・トイレがそれぞれ２カ所、用意されています。
                うち１カ所はシャワーブースのみ、１カ所は通常のバスタブ付きユニットバスとなっております。
                全６部屋の小さな宿ですので、さほど混み合うことはないと思われますが、皆様で便宜を図りつつ、
                上手にご利用いただければ幸いです。
            </p>
        </div>
    </div>
</section>

<hr class="facility__border">

<div class="facility__button-area">
    <!-- リンク未貼付 -->
    <a href="#" class="facility__button">
        <img src="<?php echo get_template_directory_uri(); ?>/images/facility/facility-button.png" alt="お部屋の画像">
        <span>お部屋のご予約はこちら</span>
    </a>
</div>

<section class="facility__gallery layout-sub-facility">
    <?php get_template_part('template/gallery'); ?>
</section>


<?php get_footer(); ?>