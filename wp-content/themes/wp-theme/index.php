<?php get_header(); ?>
<div class="frnews-box">
  <div class="frnews">
    <p class="frnews-title">News</p>
    <div class="frnewstbl">
      <table class="frnews-table">
        <tbody>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- メインループ開始 -->


              <tr class="frnews-table_row">
                <td class="frnews-table_date"><?php echo get_the_date('Y-m-d'); ?></td>
                <td class="frnews-table_link">


                  <a href="<?php the_permalink(); ?>" class="linktext">
                    <!-- 個別記事ページへのリンクを取得 -->
                    <?php the_title(); ?>
                    <!-- タイトルを出力 -->
                  </a>
                </td>
              </tr>
          <?php endwhile;
          endif; ?>
          <!-- ループの終了 -->

        </tbody>
      </table> <!-- frnews-table -->
      <a href="<?php echo get_category_link(1); ?>" class="fr-footer">show all news</a>
    </div> <!-- frnewstbl -->

  </div> <!-- frnews -->
</div> <!-- frnews-box -->

<div class="frinfo">
  <div class="frinfo-text">
    <div class="frinfo-title">
      <h2 class="frinfo-title_1">amane aromatique cafe</h2>
      <h2 class="frinfo-title_2">香りを愉しむ安らぎのカフェ</h2>
    </div> <!-- frinfo-title -->
    <div class="frinfo-text2">
      名古屋駅から徒歩5分、路地裏に広がる香りの癒し空間。<br>
      <br>
      中庭にあるオープンテラスカフェでは季節の移ろいを感じながら<br>
      自家製スイーツや材料にこだわったお飲み物をお楽しみいただけます。<br>
      <br>
      月替わりで登場するアフタヌーンティーや<br>
      季節のお花やフルーツを使ったマカロンやカップケーキ。<br>
      あわただしい日常から解き放たれた癒しの空間で<br>
      ゆっくりと流れる時間を感じてみませんか。<br>
      <br>
      不定期で香りをテーマとしたイベントを開催しています。<br>
      詳しくはNewsよりご確認ください。<br>
    </div> <!-- frinfo-text2 -->
  </div> <!-- frinfo-text  -->
  <div class="frinfo-image">
    <img src="wp-content/themes/wp-theme/img/terasse.png" alt="no-image" class="frinfoimg">
  </div><!-- frinfo-image -->
</div> <!-- frinfo -->

<div class="color">

  <div class="frmenu">
    <div class="frmenut">
      <h3 class="frmenu-title">Cafe menu</h3>
    </div> <!-- frmenut -->
    <div class="frmenu-content">
      <div class="frmenua">
        <div class="frmenua-image">
          <img src="wp-content/themes/wp-theme/img/yummycupcakes.png" alt="no-image" class="menuaimg">
        </div> <!-- frmenua-image -->
        <div class="frmenua-textgroup">
          <div class="frmenua-title">香るカップケーキ （グルテンフリー）</div>
          <div class="frmenua-text">
            ローズ・バイオレット・ジャスミン・ゆず<br>
            amane cafeの看板商品！<br>
            米粉を使い上品な甘さに仕上げました。こだわりのクリームは<br>
            天然香料のエッセンスで優しい香り。
          </div> <!-- frmenua-text -->
        </div> <!-- frmenua-textgroup -->
      </div> <!-- frmenua -->

      <div class="frmenua">
        <div class="frmenua-image">
          <img src="wp-content/themes/wp-theme/img/chai.png" alt="no-image" class="menuaimg">
        </div> <!-- frmenua-image -->
        <div class="frmenua-textgroup">
          <div class="frmenua-title">本格スパイスのマサラチャイ</div>
          <div class="frmenua-text">
            インドから取り寄せたシナモン・カルダモン・クローブを<br>
            使いました。現地のレシピを参考にした本格派です
          </div> <!-- frmenua-text -->
        </div> <!-- frmenua-textgroup -->
      </div> <!-- frmenua -->

      <div class="frmenua">
        <div class="frmenua-image">
          <img src="wp-content/themes/wp-theme/img/kissyu.png" alt="no-image" class="menuaimg">
        </div> <!-- frmenua-image -->
        <div class="frmenua-textgroup">
          <div class="frmenua-title">自家製キッシュのランチ</div>
          <div class="frmenua-text">
            愛知県と岐阜県の契約農家さんから仕入れた野菜にこだわった<br>
            キッシュを毎朝お店で焼いています。
          </div> <!-- frmenua-text -->
        </div> <!-- frmenua-textgroup -->
      </div> <!-- frmenua -->

      <div class="frmenua">
        <div class="frmenua-image">
          <img src="wp-content/themes/wp-theme/img/sakuramochi.png" alt="no-image" class="menuaimg">
        </div> <!-- frmenua-image -->
        <div class="frmenua-textgroup">
          <div class="frmenua-title">季節の緑茶（和菓子付き）※数量限定</div>
          <div class="frmenua-text">
            産地にこだわった緑茶を季節の和菓子とともに。
          </div> <!-- frmenua-text -->
        </div> <!-- frmenua-textgroup -->
      </div> <!-- frmenua -->
    </div> <!-- frmenu-content -->
    <div class="frmenut">
      <a href="<?php echo home_url("grandmenu"); ?>" class="fr-footer">show all news</a>
    </div> <!-- frmenut -->
  </div> <!-- frmenu -->

  <div class="sns">
    <div class="snsgroup">
      <a href=""><img src="wp-content/themes/wp-theme/img/lineicon.png" alt="no-image" class="snsimg"></a>
      <a href=""><img src="wp-content/themes/wp-theme/img/twicon.jpeg" alt="no-image" class="snsimg"></a>
      <a href=""><img src="wp-content/themes/wp-theme/img/instaicon.png" alt="no-image" class="snsimg"></a>
      <a href=""><img src="wp-content/themes/wp-theme/img/fbicon.png" alt="no-image" class="snsimg"></a>
      <a href=""><img src="wp-content/themes/wp-theme/img/tiktokicon.svg" alt="no-image" class="snsimg"></a>
    </div>
  </div> <!-- sns -->

  <div class="shopinfo">
    <div class="sinfotext">
      <h3 class="sinfotitle">amane aromatique cafe</h3>
      <h3 class="sinfosubtitle">Information & Access</h3>
      <div class="sinfotbl">
        <table class="sinfotable">
          <tbody>
            <tr class="sinfotable_row">
              <td class="sinfotable1">Address</td>
              <td class="sinfotable2">名古屋市中村区名駅1‐100</td>
            </tr>
            <tr class="sinfotable_row">
              <td class="sinfotable1">営業時間</td>
              <td class="sinfotable2">11:00-23:00（l.o.22:30）<br>※イベント時はオープンします</td>
            </tr>
            <tr class="sinfotable_row">
              <td class="sinfotable1">定休日</td>
              <td class="sinfotable2">月曜日</td>
            </tr>
          </tbody>
        </table> <!-- sinfotable -->
        <p class="sinfotext2">終日全席禁煙</p>
        <br>
        <p class="sinfotext2">ご予約・お問い合わせはこちらから</p>
        <p class="sinfotext2">Tel 　（052）123-0000　　mail amanecafe@ngo.com</p>
      </div>
    </div> <!-- sinfotext -->

    <div class="sinfoimage">
      <img src="wp-content/themes/wp-theme/img/mapimage.png" alt="no-image" class="map">
    </div> <!-- sinfoimage -->
  </div> <!-- shopinfo -->
</div> <!-- color -->
<?php get_footer(); ?>