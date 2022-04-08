<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'amanedb' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/wVfV*]~uaCC`o*Wnm27K2RCl{ly~}]3]oEyNi{V6qYEihYc/e}+O80H&A?7@EN$' );
define( 'SECURE_AUTH_KEY',  'U^JJop$J!]R5^_n_nSqC][EaElY_?U,G&J.dWel]5QiWFUDmb[r(yYFg8oIE3krm' );
define( 'LOGGED_IN_KEY',    'Gzq2U3mj{JJvS.G7o-AWuP/6RY8VXZhNLPNCItnOS)(aMD nQ<a^u!SfIwp=oU r' );
define( 'NONCE_KEY',        '9VCk +5LO,Z!$94gznj0h[wkS-}Z#);%:F~|dvHE3C<>mcT;lW>WM`(jgQ9d$Ww+' );
define( 'AUTH_SALT',        'L%ZW`q9c_[i5>M9:g_Xb^GlvJ`!C?[tI1d<Ko96Ri_xmwQlJnY}A5y(#Fos{e,+(' );
define( 'SECURE_AUTH_SALT', '?@upZPGF2H$,8q=>o&A4EJbKi9C@etFrH{*7eQdD(?)*$k^3=a2L4|h3qvyqE~i~' );
define( 'LOGGED_IN_SALT',   'NJRSPG T{..N2(x|l6PCMZnwQd fh*{%-.R|Fzn^l5C=z>Pj]xJbGCR0g%pYbkI@' );
define( 'NONCE_SALT',       'q7mYeWvpjG<i)>$LZL&/#0ARxH:JRlvfo-CA/#f3)TT7a/(b_KMH8sqYMLw$W&+a' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
