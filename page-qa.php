<?php get_header(); ?>

<section class="mv-sub layout-mv-sub">
  <div class="mv-sub__inner">
    <div class="mv-sub__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/qa/mv-sub-qa.jpg" alt="qandaのメインビュー画像">
      <div class="mv-sub__background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv-sub-mask.png" alt="メインビュータイトル下の背景画像">
      </div>
      <h2 class="mv-sub__title-ja">q&amp;a</h2>
      <p class="mv-sub__title-en">question</p>
    </div>
  </div>
</section>

<?php breadcrumb(); ?>

<section id="qa" class="qa  layout-qa">
  <div class="qa__inner">
    <div class="qa__contents animation">
      <ul class="qa__content">
        <li>
          <div class="qa__label qa__label1">
            <p>
              回答テキストが閉じている際のサンプルです
            </p>
            <div class="icon-wrap"><span class="icon"></span></div>
          </div>
          <div class="qa__answer">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れています
            </p>
          </div>
        </li>
      </ul>
      <ul class="qa__content">
        <li>
          <div class="qa__label">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
            <div class="icon-wrap"><span class="icon"></span></div>
          </div>
          <div class="qa__answer">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーですこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーですこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
          </div>
        </li>
      </ul>
      <ul class="qa__content">
        <li>
          <div class="qa__label">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
            <div class="icon-wrap"><span class="icon"></span></div>
          </div>
          <div class="qa__answer">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れています </p>
          </div>
        </li>
      </ul>
      <ul class="qa__content">
        <li>
          <div class="qa__label">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
            <div class="icon-wrap"><span class="icon"></span></div>
          </div>
          <div class="qa__answer">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーですこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーですこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
          </div>
        </li>
      </ul>
      <ul class="qa__content">
        <li>
          <div class="qa__label">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
            <div class="icon-wrap"><span class="icon"></span></div>
          </div>
          <div class="qa__answer">
            <p>
              この文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーですこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーですこの文章はダミーです文字の大きさ・量・字間・行間等を確認するために入れていますこの文章はダミーです </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>


<section class="gallery-qa layout-gallery-qa">
  <?php get_template_part('template/gallery'); ?>
</section>

<?php get_footer(); ?>