<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('home/blacklynx23/www/homepage217.com/vendor/sunra/php-simple-html-dom-parser/Src/Sunra/PhpSimple/simplehtmldom_1_5/simple_html_dom.php');
$s_url ="http://homepage217.com/test.html";
$getHTML = @file_get_contents($s_url);

$test=$getHTML->find('div')[0]->plaintext;
var_dump($test);
exit;
?>