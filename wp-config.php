<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'blacklynx23_homepage217');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'blacklynx23_homepage217');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'Iojk3231');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql80.blacklynx23.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')#6.< $@p#DtHJX&NbekfQ@SS;ti0>9F#l1(Jw!RX@)k|([cM,j-JakLr!-`KFi]');
define('SECURE_AUTH_KEY',  'lYh5YH|u&:>Q#A]W6w?~>_DnL_}Z;kB Yxml$x!{/JoTYuS#G[DnC}+(5Z>!>7_Z');
define('LOGGED_IN_KEY',    'Mq|58.2OMu^Sqsfv@tGcB{YM.(rUn!Uo(0cR?#/g~RVC8d,9wsT4ULWK$Gc4WY:R');
define('NONCE_KEY',        'f>Wre`7n*@YxaQ-C6r.PdZw1iA&hIPRTj/!D[IB}kth>KN).!>m<5YptN7yE]HX(');
define('AUTH_SALT',        '{xb@ 7srm45m<EK:5Kt{Qw>_*Yjs)&/,x>>BTeGo ;m.Y->@efR0t:VdEebc6=<s');
define('SECURE_AUTH_SALT', '5NK+]52%c11CJjn}yRCaE)Lwiu%:?$VH8f-1#5cMI&p)K5jOcKz}64w[`#b>0LIR');
define('LOGGED_IN_SALT',   '=&Vi;h+O9Y;JN2prrG,^0zuv2SRb*STg&)_qKD[WQ+)sW7iPNXq6[au!gEfQsDIz');
define('NONCE_SALT',       'i,[M1gI+]v;|.ynZa-J{X#KgNLWa>/QIT!VAU,d<60`]!$3M{IBe[.Aj;/Xj@H.a');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wpaec76a';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
