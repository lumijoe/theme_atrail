<!-- <?php if (! is_front_page()): ?>
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
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/svg/logo-footer.svg" alt="atrail" />
          </div>
          <div class="enterprise-detail">
            <p class="name">ATRAIL</p>
            <p class="address">
              住所<br />
              住所
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
  </div>/.container -->


<!-- nav -->
<div class=l-nav>
  <nav class="global-nav nav-list">
    <?php
    wp_nav_menu([
      'theme_location' => 'place_global',
      'container' => false,
    ]);
    ?>
  </nav>
  <p class="copyright">
    <small class="copyright-text">&#169; ATRAIL</small>
  </p>
</div>


<!-- nav btn -->

<?php wp_footer(); ?>
</body>

</html>