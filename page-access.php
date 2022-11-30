<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
  <div class="mv-sub__inner">
    <div class="mv-sub__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/access-sub/mv-sub-access.jpg" alt="アクセスのメインビュー画像">
      <div class="mv-sub__background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
      </div>
      <h2 class="mv-sub__title-ja">アクセス</h2>
      <p class="mv-sub__title-en">access</p>
    </div>
  </div>
</section>

<?php breadcrumb(); ?>

<?php get_template_part('template/reservation'); ?>

<section class="access-sub layout-access-sub">
  <div class="access-sub__inner">
    <h2 class="access-sub__title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.jpg" alt="アクセスページでのヴィラサクラの紹介タイトル">
    </h2>
    <div class="access-sub__wrapper">
      <div class="access-sub__map-area" id="wrapper">
        <iframe id="content" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.4038017053203!2d139.54785405145992!3d35.32079288018314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601845c1b11bf9d5%3A0xe238fda8e877df7!2z44CSMjQ4LTAwMTIg56We5aWI5bed55yM6Y6M5YCJ5biC5b6h5oiQ55S677yR77yT4oiS77yS77yZ!5e0!3m2!1sja!2sjp!4v1669177593243!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="access-sub__box">
      <div class="access-sub__left">
        <ul class="access-sub__nav">
          <li class="access-sub__list-item">住所：鎌倉市御成町13-29</li>
          <li class="access-sub__list-item">Mail：info@villa-sacra.com</li>
          <li class="access-sub__list-item">Tel：0467-40-4070</li>
        </ul>
      </div>
      <!--access-sub__left-->
      <div class="access-sub__right">
        <ul class="access-sub__sns">
          <div class="access-sub__container">
            <li class="access-sub__sub-text">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-instagram-white.png" alt="インスタグラムのアイコン画像">
              </a>
            </li>
            <li class="access-sub__sub-text">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-facebook-white.png" alt="フェイスブックのアイコン画像">
              </a>
            </li>
            <li class="access-sub__sub-text">
              <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-tiktok-white.png" alt="ティックトックのアイコン画像">
              </a>
            </li>
          </div>
        </ul>
      </div><!-- /.access-sub__right -->
    </div>
  </div>
</section>

<section class="affiliated layout-affiliated">
  <div class="affiliated__title-area section-title-sub">
    <h2 class="affiliated__title-ja  section-title-sub__ja">系列ゲストハウス</h2>
    <p class="affiliated__title-en section-title-sub__en">affiliated store</p>
  </div>
  <div class="affiliated__inner">
    <div class="affiliated__container">
      <div class="affiliated__place">
        <h3 class="affiliated__place-title-ja">大町ジャンクション</h3>
        <div class="affiliated__place-title-en">omachi junction</div>
      </div>
      <div class="affiliated__address">
        <p class="affiliated__text">〒248-0007&nbsp;&nbsp;神奈川県鎌倉市大町 2-2-35</p>
        <div class="affiliated__button-area">
          <!-- まだ -->
          <a href="https://goo.gl/maps/76pf75CafaVhmq3n6" class="affiliated__button button">詳しくはこちら</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery-access layout-gallery-access">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>