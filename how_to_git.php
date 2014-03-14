<?php require_once("Slideshow.php"); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Let's Github!</title>
  <link rel="stylesheet" href="css/fixed-positioning.css">
  <link rel="stylesheet" href="css/how_to_git.css">
  <script src="js/jquery-2.0.3.min.js"></script>
</head>
<body>

 <!-- 背景 -->
  <div id="bg" data-0="background-position: 0px 0px;" data-end="background-position: -500px -10000px;"></div>

  <!-- プログレスバー -->
  <div id="progress" data-0="width: 0%; background: hsl(200, 100%, 50%);" data-end="width: 100%; background: hsl(920, 100%, 50%);"></div>

<?php
$ss1 = new Slideshow();
$ss2 = new Slideshow();
$ss3 = new Slideshow();
$ss1->margin(100);
/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet2',
  'attribute' => [
    0    => 'transform:scale(0) rotate(0deg);',
    500  => 'transform:scale(1) rotate(1440deg); opacity:1;',
    1200 => '',
    1400 => 'transform:scale(5) rotate(3240deg); opacity:0;'
  ]
];
$content = <<< EOF
<img src="images/git_logo2.png" alt="github_logo" style="display:inline;"><span style="font-weight:bold;">の紹介</span>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet1',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 3%; transform:rotate(0deg); transform-origin:0 0;',
    800 => '',
    1200 => 'opacity:0; top:-10%; transform:rotate(-90%);'
  ]
];
$content = <<< EOF
<h1>gitとは？</h1>
<p>分散型バージョン管理システムの一つ。<br>
ファイルやディレクトリの状態を変更履歴として記録して行くことができる
</p>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet1',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 3%; transform:rotate(0deg); transform-origin:0 0;',
    800 => '',
    1200 => 'opacity:0; top:-10%; transform:rotate(-90%);'
  ]
];
$content = <<< EOF
<h1>分散型バージョン管理システムとは？</h1>
<p>各ユーザごとにリポジトリ(ローカルリポジトリ)を持つことができ、そのリポジトリの状態(変更履歴)とサーバのリポジトリ(中央リポジトリ)の状態を同期することができるシステムのこと。</p>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet1',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 3%; transform:rotate(0deg); transform-origin:0 0;',
    800 => '',
    1200 => 'opacity:0; top:-10%; transform:rotate(-90%);'
  ]
];
$content = <<< EOF
<h2>中央リポジトリ(ホスティングサービス)の種類</h2>
<p>
<ul>
  <li>BitBucket</li>
  <li>Assembla</li>
  <li>GitLab</li>
  <li>Phabricator</li>
  <li><strong>GitHub</strong></li>
</ul>
</p>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet1',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 3%; transform:rotate(0deg); transform-origin:0 0;',
    800 => '',
    1200 => 'opacity:0; top:-10%; transform:rotate(-90%);'
  ]
];
$content = <<< EOF
<h2>GitHubを使用しているプロジェクト</h2>
<p>
<ul>
  <li>apache</li>
  <li>ruby</li>
  <li>jQuery</li>
  <li>vim</li>
  <li>cakePHP</li>
</ul>
</p>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet1',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 3%; transform:rotate(0deg); transform-origin:0 0;',
    800 => '',
    1200 => 'opacity:0; top:-10%; transform:rotate(-90%);'
  ]
];
$content = <<< EOF
<h2>git(GitHub)を勧める理由</h2>
<p>
<ul>
  <li>ほとんどの作業がローカルで完結する(ネットにつなぐ必要がない)</li>
  <li>中央リポジトリにマージするのが怖くない。</li>
  <li>直観的で簡単</li>
  <li>マスコットキャラがかわいい(?)</li>
</ul>
</p>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$ss3->sync($ss1);
$ss3->margin(-800);
$opt = [
  'class' => 'octcat',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => 'width: 200px;',
    100  => 'opacity:1; bottom: 5%; left: -20%;',
    400 => 'left: 150%;',
    800 => 'opacity:0;',
  ]
];
$content = <<< EOF
<img src="images/Octocat.org.png" alt="画像テスト">
EOF;
$ss3->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet2',
  'attribute' => [
    0    => 'transform:scale(0) rotate(0deg); color: #F92659;',
    500  => 'transform:scale(3) rotate(0deg); opacity:1;',
    1200 => '',
    1400 => 'transform:scale(5) rotate(0deg); opacity:0;'
  ]
];
$content = <<< EOF
<h1>基本的な流れ</h1>
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
    1300 => 'opacity:0;',
  ]
];
$content = <<< EOF
<img src="images/image1.png" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
    1300 => 'opacity:0;',
  ]
];
$content = <<< EOF
<img src="images/image2.png" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
    1300 => 'opacity:0;',
  ]
];
$content = <<< EOF
<img src="images/image3.png" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
    1300 => 'opacity:0;',
  ]
];
$content = <<< EOF
<img src="images/image4.png" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet1',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 3%; transform:rotate(0deg); transform-origin:0 0;',
    800 => '',
    1200 => 'opacity:0; top:-10%; transform:rotate(-90%);'
  ]
];
$content = <<< EOF
<h1>ブランチを使おう</h1>
<p>ブランチとは、履歴の流れを分岐して記録していくためのもの。<br>
分岐したブランチはほかのブランチの影響を受けないため、同じリポジトリの中で複数の変更を同時に進めていくことができる。</p>
EOF;
$ss1->set($content, $opt);

?>
<!--
 <div id="easing_wrapper" data-0="display:none;" data-3900="display:block;" data-4900="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-5900="background:rgba(0,0,0,1);color:rgb(255,255,255);" data-10000="top:0%;" data-12000="top:-100%;">
  -->
<?php
$opt = [
  'class' => 'easing_wrapper',
  'start' => 'display:none;',
  'attribute' => [
    0    => 'display:block;',
    1000  => 'background:rgba(0, 0, 0, 0); color[swing]rgba(0, 0, 0);',
    2000  => 'background:rgba(0, 0, 0, 1); color[swing]rgba(255, 255, 255);',
    4000 => 'top:0;',
  ]
];
var_dump('DEBUG:' . $ss1->getTimeline());
$ss1->startBg($opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'sheet2',
  'attribute' => [
    0    => 'transform:scale(0) rotate(0deg); color: #F92659;',
    500  => 'transform:scale(2.5) rotate(0deg); opacity:1;',
    1500 => '',
    2000 => 'transform:scale(5) rotate(0deg); opacity:0;'
  ]
];
$content = <<< EOF
<h1>ブランチの運用</h1>
<p>ブランチ運用モデル「A successful Git branching model」より</p>
EOF;
$ss1->set($content, $opt);

/*
/////////////////////////////////////////////////////////////////
$ss2->sync($ss1);
$ss2->margin(-100);
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; left: 50%; top: 5%; color: #000000; text-shadow: 0 0 4px #ffffff;',
    1300 => '',
    1500 => 'opacity:0;',
  ]
];
$content = <<< EOF
<h2>masterからdevelopブランチを作成</h2>
EOF;
$ss2->set($content, $opt);
*/

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow1.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/*
/////////////////////////////////////////////////////////////////
$ss2->sync($ss1);
$ss2->margin(-100);
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; left: 50%; top: 5%; color: #000000; text-shadow: 0 0 4px #ffffff;',
    1300 => '',
    1500 => 'opacity:0;',
  ]
];
$content = <<< EOF
<h2>developから分岐してfeatureで各自開発を行う。</h2>
EOF;
$ss2->set($content, $opt);
*/

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow2.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
/*
$ss2->sync($ss1);
$ss2->margin(-100);
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; left: 50%; top: 5%; color: #000000; text-shadow: 0 0 4px #ffffff;',
    1300 => '',
    1500 => 'opacity:0;',
  ]
];
$content = <<< EOF
<h2>masterからdevelopブランチを作成</h2>
EOF;
$ss2->set($content, $opt);
*/

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow3.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow4.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow5.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow6.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow7.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow8.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);
$ss1->margin(2000);

/////////////////////////////////////////////////////////////////
$opt = [
  'class' => 'image_sheet',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    100  => 'opacity:1; top: 3%;',
    1200 => '',
  ]
];
$content = <<< EOF
<img src="images/flow9.jpg" alt="画像テスト">
EOF;
$ss1->set($content, $opt);
var_dump('DEBUG:' . $ss1->getTimeline());
$ss1->endBg();

/////////////////////////////////////////////////////////////////
$ss1->margin(1000);
$opt = [
  'class' => 'sheet2',
  'attribute' => [
    0    => 'transform:scale(0) rotate(0deg); color: #272822;',
    500  => 'transform:scale(2.5) rotate(0deg); opacity:1;',
    3500 => '',
    4000 => 'transform:scale(5) rotate(0deg); opacity:0;'
  ]
];
$content = <<< EOF
<h1>ご清聴ありがとうございました。</h1>
EOF;
$ss1->set($content, $opt);

/*
$opt = [
  'class' => 'sheet2',
  'attribute' => [
    0    => 'transform:scale(0) rotate(0deg);',
    500  => 'transform:scale(1) rotate(1440deg); opacity:1;',
    1200 => '',
    1400 => 'transform:scale(5) rotate(3240deg); opacity:0;'
  ]
];
$content = <<< EOF
<h1>ご清聴ありがとうございました。</h1>
EOF;
$ss1->set($content, $opt);
*/

/////////////////////////////////////////////////////////////////
$ss1->show();
$ss2->show();
$ss3->show();

?>

  <script src="js/skrollr.min.js"></script>
  <script>
    var s = skrollr.init({
      edgeStrategy: 'set',
      easing: {
        WTF: Math.random,
        inverted: function(p) {
          return 1-p;
        }
      }
    });
  </script>
</body>
</html>