git test

# atrail

お知らせ

<!-- お知らせ -->
<!-- <section class="section-contents" id="news">
  <div class="wrapper">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p>
    <ul class="news">
      <?php
      $news_posts = get_specific_posts('post', 'category', 'news', 3);
      if ($news_posts->have_posts()):
        while ($news_posts->have_posts()): $news_posts->the_post();
      ?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <?php echo $term_obj->name; ?>一覧を見る
      </button>
    </div>
  </div>
</section> -->

<!-- news test -->
<!-- <section class="section-contents" id="news">
  <div class="wrapper">
    <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
    <p class="section-lead"><?php echo $term_obj->description; ?></p> -->
<!-- ||| -->
<!-- <div class="page-inner full-width">
      <div class="page-main" id="pg-news">
        <div class="main-container">
          <div class="main-wrapper">
            <div class="newsLists">
              <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  get_template_part('content-archive');
                endwhile;
              endif;
              ?>
            </div>
            <div class="pager">
              <ul class="pagerList">
                <?php
                page_navi();
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <ul class="news">
      <?php
      $news_posts = get_specific_posts('post', 'category', 'news', 5);
      if ($news_posts->have_posts()):
        while ($news_posts->have_posts()): $news_posts->the_post();
      ?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <time class="time"><?php the_time('Y.m.d'); ?></time>
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </ul>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(get_term_link($term_obj)); ?>';">
        <?php echo $term_obj->name; ?>一覧を見る
      </button>
    </div>
  </div>
</section> -->

## wp-config.php

/\*\*

- 開発者へ: WordPress デバッグモード
-
- この値を true にすると、開発中に注意 (notice) を表示します。
- テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
  \*/
  define('WP_DEBUG', false);

/_ 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 _/

/** Absolute path to the WordPress directory. \*/
if (!defined('ABSPATH'))
define('ABSPATH', dirname(**FILE**) . '/');
/** コンタクトフォームの P タグ不要 \*/
define('WPCF7_AUTOP', false);

/\*_ Sets up WordPress vars and included files. _/
require_once(ABSPATH . 'wp-settings.php');

p タグ不要の追加

## form

<!-- <section class="l-contact" id="contact">
  <div class="l-contact-inner l-section-inner-plf--20px l-section-inner">
    <h3 class="p-section_ttl--pb32">お問い合わせ</h3>
    <div class="p-section_ttlborder"></div>
    <p>ご質問などがございましたら、下記の《お問い合わせフォーム》へご入力ください。</p>
    <div class="l-form">
      <div class="l-form-inner">

        <form action="" method="get" class="form-example-box">
          <div class="form-example">
            <label for="name" class="form_label">お名前</label>
            <input type="text" name="name" id="name" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="email" class="form_label">メールアドレス</label>
            <input type="email" name="email" id="email" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="tel" class="form_label">電話番号</label>
            <input type="tel" name="tel" id="tel" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="textcontent" class="form_label">お問い合わせ内容</label>
            <input type="text" name="textcontent" id="textcontent" required class="form_input--freetxt" />
          </div>
          <div class="py25 l-flex-center">
            <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
            <label for="privacy-policy">プライバシーポリシーに同意する</label>
          </div>
          <div class="form-example">
            <input type="submit" value="入力内容を確認する" class="btn-submit" />
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="l-contact" id="contact">
  <div class="l-contact-inner l-section-inner-plf--20px l-section-inner">
    <h3 class="p-section_ttl--pb32">お問い合わせ</h3>
    <div class="p-section_ttlborder"></div>
    <p>ご質問などがございましたら、下記の《お問い合わせフォーム》へご入力ください。</p>
    <div class="l-form">
      <div class="l-form-inner">
        <form action="" method="get" class="form-example-box">
          <div class="form-example">
            <label for="name" class="form_label">お名前</label>
            <input type="text" name="name" id="name" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="email" class="form_label">メールアドレス</label>
            <input type="email" name="email" id="email" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="tel" class="form_label">電話番号</label>
            <input type="tel" name="tel" id="tel" required class="form_input" />
          </div>
          <div class="form-example">
            <label for="textcontent" class="form_label">お問い合わせ内容</label>
            <input type="text" name="textcontent" id="textcontent" required class="form_input--freetxt" />
          </div>
          <div class="py25 l-flex-center">
            <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
            <label for="privacy-policy">プライバシーポリシーに同意する</label>
          </div>
          <div class="form-example">
            <input type="submit" value="入力内容を確認する" class="btn-submit" />
          </div>
        </form>
      </div>
    </div>
  </div>
</section> -->

## form

<section class="l-contact" id="contact">
  <div class="l-contact-inner l-section-inner-plf--20px l-section-inner">
    <h3 class="p-section_ttl--pb32">お問い合わせ</h3>
    <div class="p-section_ttlborder"></div>
<p>ご質問などがございましたら、下記の《お問い合わせフォーム》へご入力ください。</p>
    <div class="l-form">
      <div class="l-form-inner">
          <div class="form-example">
            <label for="name" class="form_label">お名前</label>
            [mwform_text name="your-name" id="your-name" class="form_input" placeholder="山田太郎" size="none"]
          </div>
　　　　　　<div class="form-example">
            <label for="email" class="form_label">メールアドレス</label>
            [mwform_email name="your-email" id="your-email" class="form_input" placeholder="xxx@xxxx.com" size="none"]
          </div>
          <div class="form-example">
            <label for="tel" class="form_label">電話番号</label>
            [mwform_tel name="your-tel" id="your-tel" class="form_input" placeholder="000-0000-0000" size="none"]
          </div>
          <div class="form-example">
            <label for="textcontent" class="form_label">お問い合わせ内容</label>
            [mwform_textarea name="your-textcontent" id="your-textcontent" class="form_input--freetxt" size="none"]
          </div>
          <div class="py25 l-flex-center">
            [mwform_checkbox name="privacy-policy" id="privacy-policy" children="プライバシーポリシーに同意する"]
          </div>
          <div class="form-example btn-center">
            [mwform_submitButton name="btn_confirmsubmit" confirm_value="確認画面へ" submit_value="送信する"]
          </div>
      </div>
    </div>
  </div>
</section>

## humburger

 <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <!-- <nav class="global-nav">
            <?php
            wp_nav_menu([
              'theme_location' => 'place_global',
              'container' => false,
            ]);
            ?>
          </nav> -->
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
# theme_atrail

## 会社概要　固定ページ繰り返しループ

0824・0935

<!-- <section class="section-contents" id="company">
  <div class="wrapper maxw600">
    <?php
    $company_page = get_page_by_path('company');
    $post = $company_page;
    setup_postdata($post);
    ?>
    <span class="section-title-en"><?php the_field('english_title'); ?></span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <div class="l-company-table">
      <table>
        <tr>
          <th>社名</th>
          <td>アトレイル株式会社</td>
        </tr>
        <tr>
          <th>代表者</th>
          <td>代表取締役 西田 博</td>
        </tr>
        <tr>
          <th>本社所在地</th>
          <td>〒533-0033 大阪市東淀川区東中島1丁目21番3号</td>
        </tr>
        <tr>
          <th>TEL</th>
          <td>00-0000-0000</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>1,000,000 円</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2023年</td>
        </tr>
        <tr>
          <th>取引銀行</th>
          <td>●●●●銀行 ●●支店</td>
        </tr>
      </table>
    </div>
  </div>
</section> -->
<!-- ↑ -->

## お問い合わせ

<!-- お問い合わせ -->
<!----------------------------------
        form
----------------------------------->
<?php echo apply_shortcodes('[mwform_formkey key="132"]'); ?>

linear-gradient(to right, #0f844c, #127dd6)

## privacy-policy

①
会社名（以下「当社」）は、以下の通り個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取り組みを徹底させることにより、個人情報の保護を推進いたします。

個人情報の管理
当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏えい等を防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行います。

個人情報の利用目的
お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内・ご質問に対する回答として、電子メールや資料のご送付に利用いたします。

個人情報の第三者への開示・提供の禁止
当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除いて、個人情報を第三者に開示いたしません。
・お客さまのご同意がある場合
・お客さまがご希望のサービスを提供するために当社が業務を委託する業者に対して開示する場合
・法令に基づき開示することが必要である場合

個人情報の安全対策
当社は、個人情報の正確性および安全性確保のために、セキュリティに万全の安全対策を講じています。

個人情報の照会・修正・削除
お客さまがご自身の個人情報の照会・修正・削除等をご希望される場合には、ご本人さま確認を行ったうえで適切に対応いたします。

法令、規範の順守と見直し
当社は、保有する個人情報に関して適用される日本の法令、その他規範を順守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。

お問い合わせ
当社の個人情報の取り扱いに関するお問い合わせは下記までご連絡ください。

会社名
〒 533-0033 大阪市東淀川区東中島 1 丁目 21 番 3 号
TEL.0000-00000-0000

## 会社概要

<section class="section-contents" id="company">
  <div class="wrapper maxw600">
    <span class="section-title-en"></span>
    <h2 class="section-title" style="margin-bottom:30px;">会社概要</h2>
    <div class="l-company-table">
      <p>会社概要の本文が入ります。会社概要の本文が入ります。会社概要の本文が入ります。<br>
        会社概要の本文が入ります。会社概要の本文が入ります。会社概要の本文が入ります。会社概要の本文が入ります。<br>
        会社概要の本文が入ります。会社概要の本文が入ります。</p>
      <div class="page-inner">
        <p>テsつ</p>
        <div class="page-main" id="pg-common">
          <ul class="commons">
            <?php
            $common_pages = get_child_pages();
            if ($common_pages->have_posts()):
              while ($common_pages->have_posts()): $common_pages->the_post();
                get_template_part('content-common');
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </ul>
        </div>
      </div>
      <table style="margin-top:4%!important;">
        <tr>
          <th>社名</th>
          <td>アトレイル株式会社</td>
        </tr>
        <tr>
          <th>代表者</th>
          <td>代表取締役 西田 博</td>
        </tr>
        <tr>
          <th>本社所在地</th>
          <td>〒533-0033 大阪市東淀川区東中島1丁目21番3号</td>
        </tr>
        <tr>
          <th>TEL</th>
          <td>00-0000-0000</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>1,000,000 円</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2024年</td>
        </tr>
        <tr>
          <th>取引銀行</th>
          <td>●●●●銀行 ●●支店</td>
        </tr>
      </table>
    </div>
  </div>
</section>
</div>

<?php get_footer(); ?>

## header

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="<?php echo esc_url( home_url() ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/logo-main.svg" class="main-logo" alt="PACIFIC MALL DEVELOPMENT" />
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/logo-fixed.svg" class="fixed-logo" alt="PACIFIC MALL DEVELOPMENT" />
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <nav class="global-nav">
<?php
wp_nav_menu([
  'theme_location' => 'place_global',
  'container' => false,
]);
?>
          </nav>
          <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
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
      </div>
    </header>
<?php if( is_front_page() ): ?>
    <section class="section-contents" id="keyvisual">
	  <?php echo get_main_image(); ?>
      <div class="wrapper">
        <h1 class="site-title">Connecting the future.</h1>
        <p class="site-caption"><?php echo get_the_excerpt(); ?></p>
      </div>
    </section>
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
if ( function_exists('bcn_display') ){
	bcn_display();
}
?>
              </div>
<?php endif; ?>

## 0830 header

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
      <div class="header-inner">
        <div class="flexrowYcenter">
          <div class="logo">
            <h1>
              <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:20%;">
              </a>
            </h1>
          </div>
        </div>
        <div style="display:flex; flex-direction: row;">
          <div>
            <tel>0120-000-000</tel>
            <p>受付時間 / 9:00～18:00（水曜定休）</p>
          </div>
          <button class="mail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-mail.png" alt="" srcset="" style="width:80px; height:auto;">
          </button>
        </div>
      </div>
    </header>
    <!-- front-page.phpの場合 -->
    <?php if (is_front_page()): ?>
      <section class="section-contents" id="keyvisual">
        <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-02.jpg" alt="">
        <div class="wrapper">
          <!-- <h1 class="site-title">your style</h1> -->
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

## 0901 header pcsp last setting before

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
      <div class="header-inner">
        <!-- ロゴ -->
        <div class="flexrowYcenter sp-none">
          <div class="logo">
            <h1>
              <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:20%;">
              </a>
            </h1>
          </div>
        </div>
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
    </header>
    <!-- front-page.phpの場合 -->
    <?php if (is_front_page()): ?>
      <section class="section-contents" id="keyvisual">
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

##0903header

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
      <div class="header-inner">
        <div class="flexrowYcenter">
          <div class="logo">
            <h1>
              <a class="logo-header" href="<?php echo esc_url(home_url()); ?>">
                <img src="https://atrail.co.jp/wp-content/uploads/images/logo-green@2x.png" class="fixed-logo" alt="ATRAIL" style="max-width:20%;">
              </a>
            </h1>
          </div>
        </div>
        <div style="display:flex; flex-direction: row;">
          <div>
            <tel>0120-000-000</tel>
            <p>受付時間 / 9:00～18:00（水曜定休）</p>
          </div>
          <button class="mail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon-mail.png" alt="" srcset="" style="width:80px; height:auto;">
          </button>
        </div>
      </div>
    </header>
    <!-- front-page.phpの場合 -->
    <?php if (is_front_page()): ?>
      <section class="section-contents" id="keyvisual">
        <img src="https://atrail.co.jp/wp-content/uploads/images/bg-section-keyvisual-02.jpg" alt="">
        <div class="wrapper">
          <!-- <h1 class="site-title">your style</h1> -->
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
              <img src="https://atrail.co.jp/wp-content/uploads/images/bg-page-contact.jpg" alt="">

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

## footer の自動 nav

<?php if (! is_front_page()): ?>
  </div>
  </div>
  </main>
  </div>
  </div>
<?php endif;
if (! $footer_cache = get_transient('footer_cache')):
  ob_start();
?>
  <footer class="footer" id="footer">
    <div class="footerContents">
      <div class="footerContents-contact">
        <div class="enterprise-logo">
          <img src="https://atrail.co.jp/wp-content/uploads/images/logo-white.png" alt="atrail" style="max-width:80px;" />
        </div>
        <div class="enterprise-detail">
          <p class="name">アトレイル株式会社</p>
          <p class="address">
            〒533-0033<br>
            大阪市東淀川区東中島1丁目21番3号<br>
            000-000-0000<br>
            受付時間 / 9:00～18:00（水曜定休）
          </p>
        </div>
      </div>
      <div class="footerContents-sitemap">
        <nav class="footer-nav">
          <?php
          wp_nav_menu([
            'theme_location' => 'place_footer',
            'container' => false,
          ]);
          ?>

        </nav>
      </div>
      <!-- <ul class='sns-navi'>
          <li class='twitter'><a href='#'></a></li>
          <li class='facebook'><a href='#'></a></li>
          <li class='instagram'><a href='#'></a></li>
        </ul> -->
    </div>
    <p class="copyright">
    <p class="copyright-text">&copy;ATRAIL</p>
    </p>

  </footer>
<?php
  $footer_cache = ob_get_clean();
  set_transient('footer_cache', $footer_cache, 60 * 5);
else:
  echo $footer_cache;
endif;
?>
</div>
<!-- nav -->
<!-- <div class="l-nav footer">
  <nav class="global-nav nav-list">
    <?php
    wp_nav_menu([
      'theme_location' => 'place_footer',
      'container' => false,
    ]);
    ?>
  </nav>
  <p class="copyright">
    <small class="copyright-text">&#169; ATRAIL CO.,LTD アトレイル株式会社 </small>
  </p>
</div> -->
<?php wp_footer(); ?>
</body>

</html>

## 表示を３０文字以内にするとき、...表示と...非表示の設定
functions.phpで事前設定
// 抜粋機能を固定ページに使えるよう設定
add_post_type_support('page', 'excerpt');

// 抜粋文字以降を...で表示する
function get_flexible_excerpt($number)
{
	$value = get_the_excerpt();
	$value = wp_trim_words($value, $number, '...');
	return $value;
}
<!-- 30文字以降の...を表示する -->
  <p class="caption"><?php echo get_flexible_excerpt(30); ?></p>
  <!-- 30文字以降の...を表示しない -->
  <p class="caption"><?php echo wp_trim_words(get_the_excerpt(), 30, ''); ?></p>


## 投稿のカテゴリ別で表示させたりCSS変更など