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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
if (getenv('WP_ENV') == "development") { 
	/* for development 開発用のデータベース設定です。*/

    define('DB_NAME', 'shataku');
  
    /** MySQL データベースのユーザー名 */
    define('DB_USER', 'shataku');
  
    /** MySQL データベースのパスワード */
    define('DB_PASSWORD', 'shataku305');
  
    /** MySQL のホスト名 */
    define('DB_HOST', '127.0.0.1:8889');
  
    /** データベースのテーブルを作成する際のデータベースの文字セット */
    define('DB_CHARSET', 'utf8');
  
    /** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
    define('DB_COLLATE', '');
  
    /* ローカル開発用 */
    define('WP_HOME','http://localhost:8888');
    define('WP_SITEURL','http://localhost:8888');
    /**
     * 開発者へ: WordPress デバッグモード
     *
     * この値を true にすると、開発中に注意 (notice) を表示します。
     * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
     *
     * その他のデバッグに利用できる定数については Codex をご覧ください。
     *
     * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
     */
    define('WP_DEBUG', true);

} else {

/** 公開用のデータベース設定です。　サーバ契約してないので見設定です｡ﾟ(ﾟ´ω`ﾟ)ﾟ｡ */
define( 'DB_NAME', 'shataku_git' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Matu8986' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );
}

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tRn$Z^)n[`otbeztf0mH,76E&}7q3aP0zDubCF=FuS8atHDHQ;c3LU!vrs)_A(2 ' );
define( 'SECURE_AUTH_KEY',  'O%rc7QeV6=cjZ|-,EEpBzxQbW[)V/G|]5M^,7 5Y~Y0B;+.|Hw/DS1UdBl(H>Iji' );
define( 'LOGGED_IN_KEY',    'lPeceAD?jNN<K>:%-4Mp7X=H8|M-Z2[.Sx?:ivCEw*$(B&xP!~waCTz;SI>~S771' );
define( 'NONCE_KEY',        'jD`a|d,nHJI!m(*hKD|`QRT8Gvl21iD%N)y_cH[g#,osgSB05>?hd +@?8rh1AEV' );
define( 'AUTH_SALT',        '~cMbK?npKs*PiWUa^@#,594f=(@N?%Q!in WT7jlijcnYM?_vEIQ&V2362OvFzQ_' );
define( 'SECURE_AUTH_SALT', 'B*[4<wNd5 *;4=h53!?e)+_P0Ve+-*z6d8[QXhx7M2{e/U 5xN*7E Bvl<XzBAPo' );
define( 'LOGGED_IN_SALT',   '[V@n)X{ae2tPsH>hp-AIHc+$^Y`A3ZvpA3x7|yN]eYRS JS hU.,m|w<M`+xqD[+' );
define( 'NONCE_SALT',       'WM&xC9R41b:#eICA)~[.Q**B> Vu(^`S{2DM1s1emEw#%mZZ6P;MzG`fN}6s(#s%' );

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
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );