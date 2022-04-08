  <div class="footer">
    <div class="footertext">
      <div class="ftext1">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="ftextlink">Home</a>
        <a href="<?php echo get_category_link(1); ?>" class="ftextlink">News</a>
        <a href="<?php echo home_url("grandmenu"); ?>" class="ftextlink">cafe</a>
      </div>
      <div class="ftext2">
        <p class="amane">Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div>
    </div> <!-- footertext -->
  </div> <!-- footer -->
  <?php wp_footer(); ?>
  </body>

  </html>