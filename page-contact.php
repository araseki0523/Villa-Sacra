<?php
$home = esc_url(home_url('/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));
?>


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

<section class="contact layout-contact">
  <div class="contact__inner">
    <form class="contact__form contact7">
      <div class="contact7__flex">
        <div class="contact7__dt"><span class="contact7__must">必須</span>お名前</div>
        <div class="contact7__dd">[text* text-1]</div>
      </div>
      <div class="contact7__flex">
        <div class="contact7__dt"><span class="contact7__must">必須</span>メールアドレス</div>
        <div class="contact7__dd">[email* email-2 placeholder"example@mail.com"]</div>
      </div>
      <div class="contact7__flex">
        <div class="contact7__dt"><span class="contact7__any">任意</span>件名</div>
        <div class="contact7__dd">[text text-3]</div>
      </div>
      <div class="contact7__flex">
        <div class="contact7__dt"><span class="contact7__must">必須</span>メッセージ</div>
        <div class="contact7__dd-textarea">[textarea textarea-4 placeholder "その他、何かありましたらこちらにご記入ください。"]</div>
      </div>
      <div class="contact7__check">
          [checkbox* your-fruit exclusive "Apple" "Banana" "Grape"]
          <a href="<?php echo $privacypolicy ?>"><span>プライバシーポリシー</span></a>に同意する
      </div>
      <div class="contact7__button">[submit "送信内容を確認する"]</div>
    </form>
  </div>
</section>


<section class="gallery-contact layout-gallery-contact">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>