<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/simplehtmldom_1_5/simple_html_dom.php'; 
$url = 'https://walt1121net.com/2025/01/27/before-success/';

$selector = 'div.post_content'; // CSSセレクタを指定

$html = file_get_html($url);
var_dump($html);
exit;

var_dump($html);
exit;

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