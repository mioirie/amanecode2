<?php get_header(); ?>

<div class="catenews">
  <div class="catenewst">
    <h3 class="catenews-title">news</h3>
  </div> <!-- catenewst -->
  <div class="catemenu-group">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- メインループ開始 -->
        <a href="<?php the_permalink(); ?>" class="catemenua">
          <!-- 個別記事へのリンクを出力 -->
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <div class="catemenu-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-image" class="macaronimg">
            </div> <!-- catemenu-image -->
          <?php endif; ?>
          <!-- サムネイルの出力 -->
          <div class="catemenu-text">
            <?php
            if (mb_strlen($post->post_title, 'UTF-8') > 30) {
              $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
              echo $title . '…';
            } else {
              echo $post->post_title;
            }
            ?>
            <!-- タイトルの文字数が30文字以降は表示せずに、最後に「…」をつける -->
          </div> <!-- catemenu-text -->
          <div class="catemenu-footer">
            <p class="catemenu-date"><?php echo get_the_date('Y-m-d'); ?></p>
            <!-- 投稿日時の出力 -->
            <p class="catemenu-readmore">read more</p>
          </div> <!-- catemenu-footer -->
        </a> <!-- catemenua -->
      <?php endwhile; ?>
    <?php else : ?>
      <!-- 投稿が無い場合の処理 -->
      <p>投稿が見つかりません。</p>
    <?php endif; ?>
  </div> <!-- catemenu-group -->
</div> <!-- catenews -->

<?php get_footer(); ?>