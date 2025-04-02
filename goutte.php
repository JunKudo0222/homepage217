<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(0); // 実行時間を無制限に設定
require 'vendor/autoload.php';
require_once(__DIR__ . '/wp-load.php');
use Goutte\Client;

$client = new Client();




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






$urls=[
    [    "https://walt1121net.com/2024/12/31/lv-hermes/",'lv-hermes','2024-12-31 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2024/12/29/nice-talk-of-business/",'nice-talk-of-business','2024-12-29 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/IMG_8892-scaled.jpeg',],
[    "https://walt1121net.com/2024/12/23/okane-kasegu-orera-ha-star/",'okane-kasegu-orera-ha-star','2024-12-23 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2024/12/17/isekai-tensei-jinsei/",'isekai-tensei-jinsei','2024-12-17 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/FdZMrq4acAAJ1C7.jpg',],
[    "https://walt1121net.com/2024/12/14/big-effects/",'big-effects','2024-12-14 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/人生の分岐点の話-5.jpg',],
[    "https://walt1121net.com/2024/12/11/pillow-how-to-use/",'pillow-how-to-use','2024-12-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/img_0966.jpg',],
[    "https://walt1121net.com/2024/12/11/doryoku-muda/",'doryoku-muda','2024-12-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/人生の分岐点の話-1.jpg',],
[    "https://walt1121net.com/2024/12/11/mottaininai/",'mottaininai','2024-12-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/人生の分岐点の話-1-1.jpg',],
[    "https://walt1121net.com/2024/12/11/business-community/",'business-community','2024-12-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/Add-a-heading-19.jpg',],
[    "https://walt1121net.com/2024/12/10/tokkoutai-mind/",'tokkoutai-mind','2024-12-10 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/Add-a-heading-18.jpg',],
[    "https://walt1121net.com/2024/12/08/easy-earn/",'easy-earn','2024-12-8 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/スクリーンショット-2024-12-06-13.23.48.png',],
[    "https://walt1121net.com/2024/12/02/saikin-walt/",'saikin-walt','2024-12-2 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/半年50万円年間100万円-コンサルの概要について-22.jpg',],
[    "https://walt1121net.com/2024/11/11/moteru-otoko-tukuru/",'moteru-otoko-tukuru','2024-11-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/11/半年50万円年間100万円-コンサルの概要について-6.jpg',],
[    "https://walt1121net.com/2024/10/31/50-100-consult/",'50-100-consult','2024-10-31 00:00:00','https://walt1121net.com/wp-content/uploads/2024/10/半年50万円年間100万円-コンサルの概要について.jpg',],
[    "https://walt1121net.com/2024/10/23/1125/",'1125','2024-10-23 00:00:00','https://walt1121net.com/wp-content/uploads/2024/10/半年50万円年間100万円-コンサルの概要について-23.jpg',],
[    "https://walt1121net.com/2024/10/11/revo/",'revo','2024-10-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/10/堀江のメソッド-運営者の僕について-7.jpg',],
[    "https://walt1121net.com/2024/10/08/yobou-koufuku/",'yobou-koufuku','2024-10-8 00:00:00','https://walt1121net.com/wp-content/uploads/2024/10/堀江のメソッド-運営者の僕について-6.jpg',],
[    "https://walt1121net.com/2024/10/04/things-to-buy/",'things-to-buy','2024-10-4 00:00:00','https://walt1121net.com/wp-content/uploads/2024/10/堀江のメソッド-運営者の僕について-2.jpg',],
[    "https://walt1121net.com/2024/09/17/internet-saikyou/",'internet-saikyou','2024-9-17 00:00:00','https://walt1121net.com/wp-content/uploads/2024/09/堀江貴文さんコンサル.jpg',],
[    "https://walt1121net.com/2024/09/14/difference/",'difference','2024-9-14 00:00:00','https://walt1121net.com/wp-content/uploads/2024/09/S__17703154.jpg',],
[    "https://walt1121net.com/2024/09/12/fashion-cafe/",'fashion-cafe','2024-9-12 00:00:00','https://walt1121net.com/wp-content/uploads/2024/09/img_7474-1.png',],
[    "https://walt1121net.com/2024/09/11/be-kind-when-in-hard/",'be-kind-when-in-hard','2024-9-11 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2024/09/01/hokkaido-hataraku/",'hokkaido-hataraku','2024-9-1 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/S__15605816_0.jpg',],
[    "https://walt1121net.com/2024/08/24/snoopy/",'snoopy','2024-8-24 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/スヌーピー.webp',],
[    "https://walt1121net.com/2024/08/21/ike-oji/",'ike-oji','2024-8-21 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/【イケおじに学ぶ】-かっこいい男がすくない理由って-コレじゃね？.jpg',],
[    "https://walt1121net.com/2024/08/17/cant-notice-until-lost/",'cant-notice-until-lost','2024-8-17 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/main_0007.png',],
[    "https://walt1121net.com/2024/08/15/use-money-a-lot/",'use-money-a-lot','2024-8-15 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/main_0010.png',],
[    "https://walt1121net.com/2024/08/03/contents-buss/",'contents-buss','2024-8-3 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/金稼ぎ…楽勝やんけ…-脱初心者した時の話-一生お金に困らんやんけ.jpg',],
[    "https://walt1121net.com/2024/08/03/world-changed/",'world-changed','2024-8-3 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/科学が本当に変えたもの.jpg',],
[    "https://walt1121net.com/2024/08/03/how-to-find-whay-i-like/",'how-to-find-whay-i-like','2024-8-3 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/趣味の見つけ方.jpg',],
[    "https://walt1121net.com/2024/07/28/how-to-make-money/",'how-to-make-money','2024-7-28 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/お金の稼ぎ方.jpg',],
[    "https://walt1121net.com/2024/07/26/gessyuu-100-man-en/",'gessyuu-100-man-en','2024-7-26 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/人生で初めて-月収100万円を-稼いだ時の話.jpg',],
[    "https://walt1121net.com/2024/07/17/billionaire-earns-10000dollrs/",'billionaire-earns-10000dollrs','2024-7-17 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/スクリーンショット-2024-07-17-14.14.28.png',],
[    "https://walt1121net.com/2024/07/13/ookuwagata/",'ookuwagata','2024-7-13 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/オオクワガタ-とってきた.jpg',],
[    "https://walt1121net.com/2024/07/11/ai-apareru/",'ai-apareru','2024-7-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/DALL·E-2024-07-11-10.12.40-A-vividly-colored-traditional-Japanese-style-painting-of-Fujin-and-Raijin-the-gods-of-w.webp',],
[    "https://walt1121net.com/2024/07/05/my-strategy/",'my-strategy','2024-7-5 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/人生を変えた戦略.png',],
[    "https://walt1121net.com/2024/07/01/fate/",'fate','2024-7-1 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/それは天明である.jpg',],
[    "https://walt1121net.com/2024/06/30/abareru/",'abareru','2024-6-30 00:00:00','https://walt1121net.com/wp-content/uploads/2024/06/暴れたか.jpg',],
[    "https://walt1121net.com/2024/06/26/why-walt/",'why-walt','2024-6-26 00:00:00','https://walt1121net.com/wp-content/uploads/2024/06/【恋愛】-なぜ僕が恋愛系の情報発信を-しようと思ったのか？.jpg',],
[    "https://walt1121net.com/2024/06/23/no-friends/",'no-friends','2024-6-23 00:00:00','https://walt1121net.com/wp-content/uploads/2024/06/title-1643378158827.jpeg',],
[    "https://walt1121net.com/2024/06/06/oya-kara-kohe-ko-kara-magohe/",'oya-kara-kohe-ko-kara-magohe','2024-6-6 00:00:00','https://walt1121net.com/wp-content/uploads/2024/06/親から子へ-子から孫へ.jpg',],
[    "https://walt1121net.com/2024/05/28/okanemoti-kijyunti/",'okanemoti-kijyunti','2024-5-28 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/成功者の基準値.jpg',],
[    "https://walt1121net.com/2024/05/25/die-slowly/",'die-slowly','2024-5-25 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/毎日-ゆっくり-死んでいる.jpg',],
[    "https://walt1121net.com/2024/05/24/kiwameru-breath/",'kiwameru-breath','2024-5-24 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/極めるとは-「呼吸レベル」.jpg',],
[    "https://walt1121net.com/2024/05/23/girls-poor/",'girls-poor','2024-5-23 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/【教養】2040年に向けて女性がどんどん貧しくなる可能性.jpg',],
[    "https://walt1121net.com/2024/05/22/sand/",'sand','2024-5-22 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/【教養記事】-「砂」から考えるビジネス.jpg',],
[    "https://walt1121net.com/2024/05/14/i-am-strongest/",'i-am-strongest','2024-5-14 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/ウォルトの根源的な強さ-1.jpg',],
[    "https://walt1121net.com/2024/05/14/enjoy-ur-business/",'enjoy-ur-business','2024-5-14 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/95DD75A2-5955-4DF3-93E1-D2A517A896B7.jpeg',],
[    "https://walt1121net.com/2024/05/10/saitama-house-vol2/",'saitama-house-vol2','2024-5-10 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/埼玉ハウス-Vol2-僕の強みは成長速度.jpg',],
[    "https://walt1121net.com/2024/05/07/china-strong/",'china-strong','2024-5-7 00:00:00','https://walt1121net.com/wp-content/uploads/2024/05/Add-a-heading-16.jpg',],
[    "https://walt1121net.com/2024/04/29/gtav-business/",'gtav-business','2024-4-29 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/スクリーンショット-2024-04-29-17.26.26.png',],
[    "https://walt1121net.com/2024/04/29/jyoumon-reiwa/",'jyoumon-reiwa','2024-4-29 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/ダウンロード-2.jpeg',],
[    "https://walt1121net.com/2024/04/25/fukuzawa-yukichi-marketing/",'fukuzawa-yukichi-marketing','2024-4-25 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/諭吉-1.jpeg',],
[    "https://walt1121net.com/2024/04/25/young-is-strong/",'young-is-strong','2024-4-25 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/若さの重要性-768x432-1.jpg',],
[    "https://walt1121net.com/2024/04/19/saitama-house/",'saitama-house','2024-4-19 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/埼玉ハウス-VOl.1.jpg',],
[    "https://walt1121net.com/2024/04/04/they-are-adorable/",'they-are-adorable','2024-4-4 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/S__15605819_0.jpg',],
[    "https://walt1121net.com/2024/04/02/the-answer-for-human-life/",'the-answer-for-human-life','2024-4-2 00:00:00','https://walt1121net.com/wp-content/uploads/2024/04/人間関係の究極系-くるもの拒まず-去るもの追わず.jpg',],
[    "https://walt1121net.com/2024/03/25/be-a-main/",'be-a-main','2024-3-25 00:00:00','https://walt1121net.com/wp-content/uploads/2024/03/大抵のことは-叶うようにできている-1.jpg',],
[    "https://walt1121net.com/2024/03/25/everything-going-good/",'everything-going-good','2024-3-25 00:00:00','https://walt1121net.com/wp-content/uploads/2024/03/大抵のことは-叶うようにできている.jpg',],
[    "https://walt1121net.com/2024/03/13/inaka-tuki-100/",'inaka-tuki-100','2024-3-13 00:00:00','https://walt1121net.com/wp-content/uploads/2024/03/田舎で月100万円あるけど-退屈すぎて『うつ病』だった人がウォルトのコンサルを受け始めた時の感想.jpg',],
[    "https://walt1121net.com/2024/03/07/make-school/",'make-school','2024-3-7 00:00:00','https://walt1121net.com/wp-content/uploads/2024/03/学校を作ること.jpg',],
[    "https://walt1121net.com/2024/03/06/the-life-is/",'the-life-is','2024-3-6 00:00:00','https://walt1121net.com/wp-content/uploads/2024/03/【スピリチュアル】-生まれた時点で人生はすでに決まっているのではないか？.jpg',],
[    "https://walt1121net.com/2024/02/26/recommend/",'recommend','2024-2-26 00:00:00','https://walt1121net.com/wp-content/uploads/2024/02/ウォルト様3稿.png',],
[    "https://walt1121net.com/2024/02/26/mac-minim2-promac/",'mac-minim2-promac','2024-2-26 00:00:00','https://walt1121net.com/wp-content/uploads/2024/02/スクリーンショット-2024-02-26-7.06.32.png',],
[    "https://walt1121net.com/2024/02/26/kane-is-just-paper/",'kane-is-just-paper','2024-2-26 00:00:00','https://walt1121net.com/wp-content/uploads/2024/02/お金について思うこと.jpg',],
[    "https://walt1121net.com/2024/02/24/twitter-posts2/",'twitter-posts2','2024-2-24 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2024/02/15/100man-after/",'100man-after','2024-2-15 00:00:00','https://walt1121net.com/wp-content/uploads/2024/02/ウォルト様3稿.png',],
[    "https://walt1121net.com/2024/02/11/ganbaru-riyuu/",'ganbaru-riyuu','2024-2-11 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2024/02/11/to-be-a-nice-man/",'to-be-a-nice-man','2024-2-11 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/Black-Modern-with-Metalic-Shape-Twitter-Header.jpg',],
[    "https://walt1121net.com/2024/02/11/kani-yosi/",'kani-yosi','2024-2-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/02/kani.jpg',],
[    "https://walt1121net.com/2024/01/28/finger-or-million-lives/",'finger-or-million-lives','2024-1-28 00:00:00','https://walt1121net.com/wp-content/uploads/2024/01/娘の小指-か-100万人の命.jpg',],
[    "https://walt1121net.com/2024/01/22/elder-man-want-time/",'elder-man-want-time','2024-1-22 00:00:00','https://walt1121net.com/wp-content/uploads/2024/01/『老人は時間が欲しいと感じる』ことについて考えてみた。.jpg',],
[    "https://walt1121net.com/2024/01/21/canada-goose/",'canada-goose','2024-1-21 00:00:00','https://walt1121net.com/wp-content/uploads/2024/01/気温1度-冬の草津でも寒くない-最強ダウン-カナダグースのレビュー.jpg',],
[    "https://walt1121net.com/2024/01/11/mistery/",'mistery','2024-1-11 00:00:00','https://walt1121net.com/wp-content/uploads/2024/12/ダウンロード-3.jpeg',],
[    "https://walt1121net.com/2024/01/07/save-money-lose-chance/",'save-money-lose-chance','2024-1-7 00:00:00','https://walt1121net.com/wp-content/uploads/2024/01/Add-a-heading-14.jpg',],
[    "https://walt1121net.com/2024/01/01/2years-1oku/",'2years-1oku','2024-1-1 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/2年で１億円ほど-稼いだので-ざっくりやってきたことを書いた。.jpg',],
[    "https://walt1121net.com/2023/12/31/happy-life/",'happy-life','2023-12-31 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/幸せに暮らす方法.jpg',],
[    "https://walt1121net.com/2023/12/25/a-day-goes-forever/",'a-day-goes-forever','2023-12-25 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/こんな毎日が-一生続けばいいのに。-って思った話.jpg',],
[    "https://walt1121net.com/2023/12/19/input-is/",'input-is','2023-12-19 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2023/12/15/19sai-5-kara-150/",'19sai-5-kara-150','2023-12-15 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/5万円→150万円-19歳が２か月で150万円-稼げるようになった施策.jpg',],
[    "https://walt1121net.com/2023/12/13/3steps/",'3steps','2023-12-13 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/メルマガ講義⑥-オカンを稼ぐのが超絶簡単な理由.jpg',],
[    "https://walt1121net.com/2023/12/11/horie-takafumi-musical-christmas-carol/",'horie-takafumi-musical-christmas-carol','2023-12-11 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/S__14295068_0.jpg',],
[    "https://walt1121net.com/2023/12/06/update-page-of-yourlife/",'update-page-of-yourlife','2023-12-6 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/人生のページの更新.jpg',],
[    "https://walt1121net.com/2023/12/04/jinrui-sinka/",'jinrui-sinka','2023-12-4 00:00:00','https://walt1121net.com/wp-content/uploads/2023/12/人類.jpeg',],
[    "https://walt1121net.com/2023/11/25/hobby-business/",'hobby-business','2023-11-25 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/Add-a-heading-13.jpg',],
[    "https://walt1121net.com/2023/11/24/contents-banned/",'contents-banned','2023-11-24 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/コンテンツ販売が-禁止になりました。.jpg',],
[    "https://walt1121net.com/2023/11/22/dice-game-life/",'dice-game-life','2023-11-22 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/サイコロで-人生は変わる.jpg',],
[    "https://walt1121net.com/2023/11/17/brainding-memo/",'brainding-memo','2023-11-17 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2023/11/15/mikaeshite-yaru/",'mikaeshite-yaru','2023-11-15 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/見返してやる.jpg',],
[    "https://walt1121net.com/2023/11/14/sold-once-nomore/",'sold-once-nomore','2023-11-14 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/集客.jpg',],
[    "https://walt1121net.com/2023/11/13/kasegu-keieisya-rule/",'kasegu-keieisya-rule','2023-11-13 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/強い人.jpg',],
[    "https://walt1121net.com/2023/11/13/dog-life-is-hard/",'dog-life-is-hard','2023-11-13 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/S__14025082-e1699853783589.jpg',],
[    "https://walt1121net.com/2023/11/08/use-my-time/",'use-my-time','2023-11-8 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/マイペースに-仕事をする方法.jpg',],
[    "https://walt1121net.com/2023/11/04/tokubetu-na-ningen-ninaru/",'tokubetu-na-ningen-ninaru','2023-11-4 00:00:00','https://walt1121net.com/wp-content/uploads/2023/11/特別な人間になる方法.jpg',],
[    "https://walt1121net.com/2023/10/30/kane-moti-talk/",'kane-moti-talk','2023-10-30 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/8823a746-9e17-4c82-b265-54a892805c77-1.jpg',],
[    "https://walt1121net.com/2023/10/30/shiza-takai-hito-atumeru/",'shiza-takai-hito-atumeru','2023-10-30 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/レベルの高い人を集める方法.jpg',],
[    "https://walt1121net.com/2023/10/28/how-to-be-king-in-island/",'how-to-be-king-in-island','2023-10-28 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/島で王様になる方法を-真剣に考えてみた.jpg',],
[    "https://walt1121net.com/2023/10/25/writing-seminar/",'writing-seminar','2023-10-25 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/S__13877250_0.jpg',],
[    "https://walt1121net.com/2023/10/23/web-marketing/",'web-marketing','2023-10-23 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/Webマーケター集団-｜ウォルトの活動の目的｜-1.jpg',],
[    "https://walt1121net.com/2023/10/23/40days-300/",'40days-300','2023-10-23 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/クライアントが-4ヶ月で-1200万円稼ぎました。-2.jpg',],
[    "https://walt1121net.com/2023/10/23/client-earned-300/",'client-earned-300','2023-10-23 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/クライアントが-4ヶ月で-1200万円稼ぎました。-1.jpg',],
[    "https://walt1121net.com/2023/10/23/1200man-4kagetu/",'1200man-4kagetu','2023-10-23 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/クライアントが-4ヶ月で-1200万円稼ぎました。.jpg',],
[    "https://walt1121net.com/2023/10/20/dont-waste-of-your-imaginativeness/",'dont-waste-of-your-imaginativeness','2023-10-20 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/最強のレベル上げの仕方-工夫をしない-1.jpg',],
[    "https://walt1121net.com/2023/10/18/kyouikusya-konsaru-sei/",'kyouikusya-konsaru-sei','2023-10-18 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/顧客に結果を出させたいなら-コンテンツを作るべし-1.jpg',],
[    "https://walt1121net.com/2023/10/17/yuriko-marketing/",'yuriko-marketing','2023-10-17 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/Untitled-design-9.jpg',],
[    "https://walt1121net.com/2023/10/15/why-making-decision-so-fast/",'why-making-decision-so-fast','2023-10-15 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/なぜ優秀な人や-経営者の判断は-早いのか？.jpg',],
[    "https://walt1121net.com/2023/10/14/level-up-tokyo/",'level-up-tokyo','2023-10-14 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/東京に出ると-超成長する話.jpg',],
[    "https://walt1121net.com/2023/10/10/beyond-not-read/",'beyond-not-read','2023-10-10 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/最強の文章術-Not-Readを-超えて読ませる技術-1.jpg',],
[    "https://walt1121net.com/2023/10/10/clients-worked-only-for-5-hours/",'clients-worked-only-for-5-hours','2023-10-10 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/作業時間を減らして-お金も稼ぐ方法.jpg',],
[    "https://walt1121net.com/2023/10/08/follow-what-they-advised/",'follow-what-they-advised','2023-10-8 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/かっこいい男の-共通の本質-2.jpg',],
[    "https://walt1121net.com/2023/10/08/kakko-yoi-man/",'kakko-yoi-man','2023-10-8 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/かっこいい男の-共通の本質.jpg',],
[    "https://walt1121net.com/2023/10/08/mieken-iseebi/",'mieken-iseebi','2023-10-8 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/伊勢海老食べるために-三重県旅行してきた.jpg',],
[    "https://walt1121net.com/2023/10/06/okane-ga-nai/",'okane-ga-nai','2023-10-6 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/人生のフェーズ.jpg',],
[    "https://walt1121net.com/2023/10/03/restart-your-life/",'restart-your-life','2023-10-3 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/人生やり直す方法.jpg',],
[    "https://walt1121net.com/2023/10/01/keieisya-samishii/",'keieisya-samishii','2023-10-1 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/教材を買うな。-1.jpg',],
[    "https://walt1121net.com/2023/10/01/invest-returns/",'invest-returns','2023-10-1 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/教材を買うな。.jpg',],
[    "https://walt1121net.com/2023/10/01/fot-this-day/",'fot-this-day','2023-10-1 00:00:00','https://walt1121net.com/wp-content/uploads/2023/10/S__13665272.jpg',],
[    "https://walt1121net.com/2023/09/26/dice-makes-you/",'dice-makes-you','2023-9-26 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/しんどい-3.jpg',],
[    "https://walt1121net.com/2023/09/26/how-richmen-buy/",'how-richmen-buy','2023-9-26 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/しんどい-2.jpg',],
[    "https://walt1121net.com/2023/09/26/be-good/",'be-good','2023-9-26 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/しんどい-1.jpg',],
[    "https://walt1121net.com/2023/09/15/who-can-pay-1m/",'who-can-pay-1m','2023-9-15 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/100万円を使える人.jpg',],
[    "https://walt1121net.com/2023/09/11/100manen-kaiga/",'100manen-kaiga','2023-9-11 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/Add-a-heading-12.jpg',],
[    "https://walt1121net.com/2023/09/08/muti-no-ti/",'muti-no-ti','2023-9-8 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/無知の知の本当の意味.jpg',],
[    "https://walt1121net.com/2023/09/03/okanemoti-kinsenkankaku/",'okanemoti-kinsenkankaku','2023-9-3 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/年収3000万円の-金銭感覚-768x432-1.jpg',],
[    "https://walt1121net.com/2023/09/03/make-life-super-easy/",'make-life-super-easy','2023-9-3 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/人生を楽勝にする方法.jpg',],
[    "https://walt1121net.com/2023/09/02/if-you-think-you-can-dreams-come-true/",'if-you-think-you-can-dreams-come-true','2023-9-2 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/できると思えばできる、-できないと思えばできない。.jpg',],
[    "https://walt1121net.com/2023/09/01/sumou-muzukashi/",'sumou-muzukashi','2023-9-1 00:00:00','https://walt1121net.com/wp-content/uploads/2023/09/李ｓ期-1.jpeg',],
[    "https://walt1121net.com/2023/08/29/business-tumikasane/",'business-tumikasane','2023-8-29 00:00:00','https://walt1121net.com/wp-content/uploads/2023/08/積み重ね.jpg',],
[    "https://walt1121net.com/2023/08/27/0to330-secrets/",'0to330-secrets','2023-8-27 00:00:00','https://walt1121net.com/wp-content/uploads/2023/08/0から4ヶ月で-月収330万円を超えた秘密.jpg',],
[    "https://walt1121net.com/2023/08/26/kirin-beer-wada-toru/",'kirin-beer-wada-toru','2023-8-26 00:00:00','https://walt1121net.com/wp-content/uploads/2023/08/麒麟%E3%80%80イベント.jpeg',],
[    "https://walt1121net.com/2023/08/26/walt-service/",'walt-service','2023-8-26 00:00:00','https://walt1121net.com/wp-content/uploads/2023/08/提供サービス.jpg',],
[    "https://walt1121net.com/2023/07/13/jinsei-daijinakoto/",'jinsei-daijinakoto','2023-7-13 00:00:00','https://walt1121net.com/wp-content/uploads/2024/07/人生で一番大事なこと.jpg',],
[    "https://walt1121net.com/2023/05/11/wakariyasui-hanasi/",'wakariyasui-hanasi','2023-5-11 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2023/05/05/rirakuru-takeunochi-events/",'rirakuru-takeunochi-events','2023-5-5 00:00:00','https://walt1121net.com/wp-content/uploads/2023/05/uploaded.jpg',],
[    "https://walt1121net.com/2023/04/26/my-philosophy/",'my-philosophy','2023-4-26 00:00:00','https://walt1121net.com/wp-content/uploads/2023/08/Untitled-design-7.jpg',],
[    "https://walt1121net.com/2025/03/20/kawaikute-gomen/",'kawaikute-gomen','2025-3-20 00:00:00','https://walt1121net.com/wp-content/uploads/2025/03/スクリーンショット-2023-02-14-23.24.51.png',],
[    "https://walt1121net.com/2025/03/20/small-failure/",'small-failure','2025-3-20 00:00:00','https://walt1121net.com/wp-content/uploads/2025/03/img1.jpg',],
[    "https://walt1121net.com/2025/03/14/colab/",'colab','2025-3-14 00:00:00','https://walt1121net.com/wp-content/uploads/2025/03/講演会-768x432-1.jpg',],
[    "https://walt1121net.com/2025/03/03/yaruki/",'yaruki','2025-3-3 00:00:00','https://walt1121net.com/wp-content/uploads/2025/03/起業がおもろい理由-1.jpg',],
[    "https://walt1121net.com/2025/02/22/gamusyara/",'gamusyara','2025-2-22 00:00:00','https://walt1121net.com/wp-content/uploads/2025/02/IMG_9696-scaled.jpeg',],
[    "https://walt1121net.com/2025/02/14/kigyou-omosiroi/",'kigyou-omosiroi','2025-2-14 00:00:00','https://walt1121net.com/wp-content/uploads/2025/02/起業がおもろい理由.jpg',],
[    "https://walt1121net.com/2025/02/14/kaiwa-usui/",'kaiwa-usui','2025-2-14 00:00:00','https://walt1121net.com/wp-content/uploads/2024/08/S__17301664_0.jpg',],
[    "https://walt1121net.com/2025/02/05/furi-yuusyou/",'furi-yuusyou','2025-2-5 00:00:00','https://walt1121net.com/wp-content/uploads/2025/02/20190516213114.jpg',],
[    "https://walt1121net.com/2025/01/30/walt-kako/",'walt-kako','2025-1-30 00:00:00','https://walt1121net.com/wp-content/uploads/2025/01/S__19030107_0.jpg',],
[    "https://walt1121net.com/2025/01/29/technic/",'technic','2025-1-29 00:00:00','https://walt1121net.com/wp-content/uploads/2025/01/スクリーンショット-2025-01-29-20.10.11.png',],
[    "https://walt1121net.com/2025/01/27/before-success/",'before-success','2025-1-27 00:00:00','https://walt1121net.com/wp-content/uploads/2025/01/ratica3086_An_anime-style_depiction_of_a_young_boy_sitting_at_a_86186757-311d-4cbe-bb88-7ff707335c97.webp',],
[    "https://walt1121net.com/2025/01/06/meet-up-with-walt/",'meet-up-with-walt','2025-1-6 00:00:00','https://walt1121net.com/wp-content/uploads/2025/01/page-1-4.png',],
[    "https://walt1121net.com/2025/01/05/walt-manga-business-saikyou/",'walt-manga-business-saikyou','2025-1-5 00:00:00','https://walt1121net.com/wp-content/uploads/2025/01/page-2-2.png',],
[    "https://walt1121net.com/2025/01/04/walt-manga/",'walt-manga','2025-1-4 00:00:00','https://t3.ftcdn.net/jpg/04/91/01/36/360_F_491013638_90TVlErfq3W2GrgNclMlGpYaKBdPJvc7.jpg',],
[    "https://walt1121net.com/2025/01/01/jinsei-blog/",'jinsei-blog','2025-1-1 00:00:00','https://walt1121net.com/wp-content/uploads/2025/01/半年50万円年間100万円-コンサルの概要について-35.jpg',],

];











foreach($urls as $url){
    
$crawler = $client->request('GET', $url[0]);

// ページのタイトルを取得
// $title = $crawler->filter('div[class="post_content"]')->text();
$post_content = $crawler->filter('div[class="post_content"]')->html();
$title = $crawler->filter('h1[class="c-postTitle__ttl"]')->html();

// SQLクエリ（不要なカラムを省略）
$sql = "INSERT INTO wpe148dfposts (post_content, post_title, post_status,  post_type ,post_date,post_date_gmt,post_modified,post_modified_gmt,post_excerpt,to_ping,pinged,post_content_filtered,post_name) 
        VALUES (:content, :title, 'publish',  'post' ,:post_date,:post_date_gmt,:post_modified,:post_modified_gmt,:post_excerpt,:to_ping,:pinged,:post_content_filtered,:post_name)";


// プリペアドステートメントを準備
$stmt = $pdo->prepare($sql);

// データをループで挿入

    $stmt->execute([
        ':title' => $title,
        ':content' => $post_content,
        ':post_date' => $url[2],
        ':post_date_gmt' => $url[2],
        ':post_modified' => $url[2],
        ':post_modified_gmt' => $url[2],
        ':post_excerpt' => "",
        ':to_ping' => "",
        ':pinged' => "",
        ':post_content_filtered' => "",
        ':post_name' => $url[1],
    ]);

    $file = 'output.txt';
    $fp = fopen($file, 'a');
    fwrite($fp, "データを挿入しました！\n");   

$last_id = $pdo->lastInsertId();
echo "新しいID: " . $last_id;

if ($last_id) {
    echo "記事が投稿されました！ ID: " . $last_id . "\\n";

    // アイキャッチ画像のURL（外部画像）
    $image_url = $url[3];

    // 画像をWordPressにアップロード
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');

    $tmp = download_url($image_url);

    if (is_wp_error($tmp)) {
        echo "画像のダウンロードに失敗しました。";
        exit;
    }

    $file_array = [
        'name'     => basename($image_url),
        'tmp_name' => $tmp
    ];

    // メディアライブラリにアップロード
    $attachment_id = media_handle_sideload($file_array, $last_id);

    if (is_wp_error($attachment_id)) {
        @unlink($tmp);
        echo "画像のアップロードに失敗しました。";
        exit;
    }

    // 投稿にアイキャッチを設定
    set_post_thumbnail($last_id, $attachment_id);
    echo "サムネイル画像が設定されました！";
} else {
    echo "記事の投稿に失敗しました。";
}
    sleep(1);
}




?>