<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
  <!-- メインループ開始 -->
  <div class="sgltitle">
    <?php the_title(); ?>
    <!-- タイトルの出力 -->
    <h3 class="sgltitle-1"></h3>
    <p class="sgltitle-2"></p>
  </div>

  <!--
    <div class="flex tags-date">
    <p class="single-date"><?php echo get_the_date('Y-m-d'); ?></p>
    </div>
  投稿日時を出力 -->

  <div class="sglgroup">
    <div class="sglgroup-text">
      <?php the_content(); ?>
      <!-- 本文を出力 -->
    </div> <!-- sglgroup-text -->
    <div class="sglgroup-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/mdmacaron.png" alt="no-image" class="sglimg">
    </div> <!-- sglgroup-image -->
  </div> <!-- sglgroup -->
<?php endif; ?>
<!-- メインループ終了 -->

<?php get_footer(); ?>