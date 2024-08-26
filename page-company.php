<?php
/*
Template Name: company
*/
get_header();
?>

<section class="section-contents" id="company">
  <div class="wrapper maxw600">
    <span class="section-title-en"></span>
    <h2 class="section-title" style="margin-bottom:30px;">会社概要</h2>
    <div class="l-company-table">
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
<!-- 
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
</div> -->



<?php get_footer(); ?>