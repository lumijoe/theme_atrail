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
        <ul class='sns-navi'>
          <li class='twitter'><a href='#'></a></li>
          <li class='facebook'><a href='#'></a></li>
          <li class='instagram'><a href='#'></a></li>
        </ul>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; ATRAIL</small>
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