<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/simplehtmldom_1_5/simple_html_dom.php'; // simple_html_dom ライブラリをインクルード

// データベース接続情報
$host = 'mysql3102.db.sakura.ne.jp'; // さくらのサーバーに記載のホスト名
$dbname = 'blacklynx23_homepage217'; // 作成したデータベース名
$user = 'blacklynx23_homepage217'; // データベースのユーザー名
$password = 'Iojk3231'; // データベースのパスワード

try {
    // PDO接続（UTF8設定）
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // エラーモード（例外）
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // デフォルトのフェッチモード（連想配列）
        PDO::ATTR_EMULATE_PREPARES   => false, // エミュレート無効（セキュリティ強化）
    ];

    $pdo = new PDO($dsn, $user, $password, $options);
    echo "データベース接続成功！";
} catch (PDOException $e) {
    echo "データベース接続失敗: " . $e->getMessage();
}
var_dump('aaa');
exit;
// URLリスト
$urls = [
    'https://example.com/page1',
    'https://example.com/page2',
    'https://example.com/page3'
];

$selector = 'div[class="post_content"]'; // CSSセレクタを指定

// const selector = 'div'; // 必要に応じてクラスやIDを指定
// const contents = [...document.querySelectorAll(selector)]
//     .map(el => el.innerHTML.trim());

// console.log(contents);

foreach ($urls as $url) {
    $html = file_get_html($url);
    if (!$html) {
        echo "取得失敗: $url\n";
        continue;
    }

    foreach ($html->find($selector) as $element) {
        // $content = trim($element->plaintext);
        
        // データをデータベースに保存
        $stmt = $pdo->prepare("INSERT INTO scraped_data (url, content) VALUES (:url, :content)");
        $stmt->execute(['url' => $url, 'content' => $element]);
        
        echo "保存成功: $url -> $element\n";
    }
}

echo "処理完了";

?>