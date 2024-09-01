<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div class="header-inner" style="display:flex; flex-direction:column;">

        <!-- inner-white -->
        <div class="inner-white" style="height: 40px; display: flex; flex-direction:column; align-content: center; justify-content: center; align-items: center; background-color: #fff;">
          <!-- ロゴ -->
          <div class="flexrowYcenter sp-none">
            <div class="logo">
              <h1>
                <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                  <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:15%;">
                </a>
              </h1>
            </div>
          </div>
        </div>

        <!-- inner-black -->
        <div class="inner-black" style="height: 60px; display:flex; flex-direction: row; background-color: red">
          <!-- ハンバーガーボタン -->
          <button class="toggle-menu js-toggoleNav">
            <span class="toggle-line">メニュー</span>
          </button>
          <div class="header-nav">
            <!-- ロゴ -->
            <div class="flexrowYcenter sp-block">
              <div class="logo">
                <h1>
                  <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                    <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:20%;">
                  </a>
                </h1>
              </div>
            </div>
            <!-- ナビメニュー -->
            <nav class="global-nav">
              <?php
              wp_nav_menu([
                'theme_location' => 'place_global',
                'container' => false,
              ]);
              ?>
            </nav>
            <form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url()); ?>">
              <div class="search-box">
                <input type="text" class="search-input" name="s" placeholder="キーワードを入力してください" />
                <button type="submit" class="button-submit"></button>
              </div>
              <div class="search-buttons">
                <button type="button" class="close-icon js-searchIcon"></button>
                <button type="button" class="search-icon js-searchIcon"></button>
              </div>
            </form>
          </div>

          <div style="display:flex; flex-direction: row;">
            <!-- 電話番号 -->
            <div class="sp-none">
              <tel>0120-000-000</tel>
              <p>受付時間 / 9:00～18:00（水曜定休）</p>
            </div>
            <!-- メール -->
            <button class="mail">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-mail.png" alt="" srcset="" style="width:80px; height:auto;">
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- front-page.phpの場合 -->
    <?php if (is_front_page()): ?>
      <section class="section-contents" id="keyvisual" style="margin-top: 100px;">
        <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-02.jpg" alt="">
        <div class="wrapper">
          <h1 class="site-caption">コンテナで、かなえる。<br>自由を、つくる。</h1>
          <img src="https://atrail.co.jp/wp-content/uploads/images/logo-white@2x.png" alt="" srcset="" class="logo-img">
        </div>
      </section>
      <!-- front-page.php以外のphpページの場合 -->
    <?php else: ?>
      <div class="wrap">
        <div id="primary" class="content-area">
          <main>
            <div class="page-contents">
              <div class="page-head">
                <?php echo get_main_image(); ?>

                <div class="wrapper">
                  <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
                  <h2 class="page-title"><?php echo get_main_title(); ?></h2>
                </div>
              </div>
              <div class="page-container">
                <div class="bread_crumb">
                  <?php
                  if (function_exists('bcn_display')) {
                    bcn_display();
                  }
                  ?>
                </div>
              <?php endif; ?>