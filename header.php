<?php
$home = esc_url(home_url('/'));
$concept = esc_url(home_url('/concept/'));
$room = esc_url(home_url('/room/'));
$bb = esc_url(home_url('/bb/'));
$facility = esc_url(home_url('/facility/'));
$access = esc_url(home_url('/access/'));
$blog = esc_url(home_url('/blog/'));
$qa = esc_url(home_url('/qa/'));
$contact = esc_url(home_url('/contact/'));
$privacypolicy = esc_url(home_url('/privacypolicy/'));
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- meta情報 -->
  <title>
    <?php
    global $page, $paged;
    if (is_front_page()) : //トップページ
      echo 'Villa-Sacra';
      bloginfo('name');
    elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
      wp_title('｜', true, 'right');
      bloginfo('name');
    elseif (is_page()) : //固定ページ
      wp_title('｜', true, 'right');
      bloginfo('name');
    elseif (is_single()) : //投稿ページ
      wp_title('｜', true, 'right');
      bloginfo('name');
    elseif (is_category()) : //カテゴリーページ
      echo 'カテゴリ ：';
      echo single_term_title();
      echo '｜Villa-Sacra';
    elseif (is_archive()) : //アーカイブページ
      echo wp_title('') . '年のお知らせ';
    elseif (is_404()) : //404ページ
      echo '404｜';
      bloginfo('name');
    endif;
    if ($paged >= 2 || $page >= 2) : //２ページ目以降の場合
      echo '｜' . sprintf(
        '%sページ',
        max($paged, $page)
      );
    endif;
    ?>
  </title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="all" />
  <!-- OGP -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ヘッダー部分（ロゴとハンバーガー） -->
  <header class="header layout-header" id="header">
    <div class="header__inner  fade-in-up">

      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo-link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.jpg" alt="ヘッダーロゴ">
        </a>
      </h1>

      <div class="header__nav">
        <ul class="header__nav-items">
          <li class="header__nav-item"><a href="<?php echo $concept ?>">concept</a></li>
          <li class="header__nav-item"><a href="<?php echo $room ?>">room</a></li>
          <li class="header__nav-item"><a href="<?php echo $bb ?>">b&amp;b</a></li>
          <li class="header__nav-item"><a href="<?php echo $facility ?>">facility</a></li>
          <li class="header__nav-item"><a href="<?php echo $access ?>">access</a></li>
          <li class="header__nav-item"><a href="<?php echo $blog ?>">blog</a></li>
          <li class="header__nav-item"><a href="<?php echo $qa ?>">q&amp;a</a></li>
          <li class="header__nav-item header__nav-item--white">
            <div class="header__nav-item-icon"></div><a href="<?php echo $contact ?>">contact</a>
          </li>
          <li class="header__nav-item header__has-sub"><a href="">english</a>
            <!-- Englishのホバー -->
            <ul class="header__sub">
              <div class="header__container">
                <li class="header__sub-text">
                  <!-- リンク未貼付 -->
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-instagram-white.png" alt="インスタグラムのアイコン画像">
                  </a>
                </li>
                <li class="header__sub-text">
                  <!-- リンク未貼付 -->
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-facebook-white.png" alt="フェイスブックのアイコン画像">
                  </a>
                </li>
                <li class="header__sub-text">
                  <!-- リンク未貼付 -->
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-tiktok-white.png" alt="ティックトックのアイコン画像">
                  </a>
                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>

      <button class="header__drawer hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="header__sp-nav" id="js-drawer">
        <ul class="header__sp-nav-items">
          <li class="header__sp-nav-item"><a href="<?php echo $concept ?>">concept</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $room ?>">room</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $bb ?>">b&amp;b</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $facility ?>">facility</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $access ?>">access</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $blog ?>">blog</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $qa ?>">q&amp;a</a></li>
          <li class="header__sp-nav-item"><a href="<?php echo $contact ?>">contact</a></li>
          <!-- リンク未貼付 -->
          <li class="header__sp-nav-item"><a href="">english</a></li>
        </ul>
      </div>

    </div>
    </header>