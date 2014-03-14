<?php require_once('SlideShow2.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Let's Github!</title>
  <link rel="stylesheet" href="css/fixed-positioning.css">
  <link rel="stylesheet" href="css/how_to_git4.css">
  <script src="js/jquery-2.0.3.min.js"></script>
</head>
<body>

<!-- 背景 -->
<div id="bg" data-0="background-position: 0px 0px;" data-end="background-position: -500px -10000px;"></div>

<!-- プログレスバー -->
<div id="progress" data-0="width: 0%; background: hsl(200, 100%, 50%);" data-end="width: 100%; background: hsl(920, 100%, 50%);"></div>

<?php
$ss1 = new SlideShow();
$ss2 = new SlideShow();
$ss1->margin(1000);

// -------------------------------------------------------------
$content = <<< EOF
<h1><img src="images/git_logo2.png" width="600" alt="">の紹介</h1>
EOF;
$opt = [
  'class' => 'sheet1 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:30%; transform:rotate(0deg); transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: 200%; transform:rotate(-90%);',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>gitとは？</h2>
<p><strong>分散型バージョン管理システム</strong>の１つで、ファイルやフォルダなどの変更履歴を管理することができるツール。</p>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>バージョン管理システムについて</h2>
<ul>
  <li>集中型バージョン管理システム</li>
  <li>分散型バージョン管理システム</li>
</ul>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss2->sync($ss1);
$ss2->margin(1000);
$content = <<< EOF
<img src="images/repo1.png" width="600" alt="">
EOF;
$opt = [
  'class' => 'sheet3 center',
  'start' => 'opacity:0; display:none; z-index:60',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:25%;  transform-origin:0 0;',
    1500 => '',
    2000 => 'opacity:0; display:none; top: 150%;',
  ]
];
$ss2->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h3>集中型バージョン管理システム</h3>
<ul>
  <li>CVS</li>
  <li>Subversion</li>
  <li>Perforce</li>
  <li class="etc">etc...</li>
</ul>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none; z-index:61',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss2->sync($ss1);
$ss2->margin(1000);
$content = <<< EOF
<img src="images/repo2.png" width="600" alt="">
EOF;
$opt = [
  'class' => 'sheet3 center',
  'start' => 'opacity:0; display:none; z-index:60',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:25%;  transform-origin:0 0;',
    1500 => '',
    2000 => 'opacity:0; display:none; top: 150%;',
  ]
];
$ss2->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h3>分散型バージョン管理システム</h3>
<ul>
  <li><a href="http://git-scm.com/">git</a></li>
  <li><a href="http://mercurial.selenic.com/wiki/">Mercurial</a></li>
  <li><a href="http://bazaar.canonical.com/en/">Bazaar</a></li>
  <li class="etc">etc...</li>
</ul>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none; z-index:61',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h3>簡単に...</h3>
<h4>集中型バージョン管理システム</h4>
<p>中央リポジトリのみ。</p>
<h4>分散型バージョン管理システム</h4>
<p>中央リポジトリに加え、各ユーザごとにもリポジトリが存在する。</p>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display: block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>分散型バージョン管理システムのメリット</h2>
<ol>
  <li>ローカルリポジトリ全ての変更履歴があることで、ネットワークのつながる環境にいなくても開発を進めることができる。</li>
  <li>ローカルリポジトリから丸々中央リポジトリにコピーすることができるので動かなくなる心配が少ない。</li>
  <li>他にもいろいろ。(割愛)</li>
</ol>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>中央リポジトリ</h2>
<p>(今更ですが)リポジトリとは「倉庫、貯蔵庫」などの意味を持つ英単語。(repository)</p>
<p>その倉庫がいつでも使えないと困りますよね。と、いうことで誰でも参照できるサーバ上にあるのが中央リポジトリ。</p>
<p class="small">※中央リポジトリがなくてもローカルで完結することもできます。絶対に必要というわけではありません。</p>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss2->sync($ss1);
$ss2->margin(1000);
$content = <<< EOF
<img src="images/Octocat.org.png" height="249" width="300" alt="">
<p>GitHub公式マスコット「<strong>Octcat</strong>」くん</p>
<p class="small">※英語でも日本語でも韻を踏んでいる素晴らしい名前の「<strong>たこ</strong>」</p>
EOF;
$opt = [
  'class' => 'sheet3 center',
  'start' => 'opacity:0; display:none; z-index:60',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:30%;  transform-origin:0 0;',
    1500 => '',
    2000 => 'opacity:0; display:none; top: 150%;',
  ]
];
$ss2->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>中央リポジトリのためのホスティングサービス</h2>
<ul>
  <li><a href="https://github.com/">GitHub</a></li>
  <li><a href="https://bitbucket.org/">BitBucket</a></li>
  <li><a href="https://www.assembla.com/home">Assembla</a></li>
  <li><a href="https://www.gitlab.com/">GitLab</a></li>
  <li><a href="http://phabricator.org/">Phabricator</a></li>
  <li class="etc">etc...</li>
</ul>
EOF;
$opt = [
  'class' => 'sheet2 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    500  => 'opacity:1; top:10%; transform-origin:0 0;',
    2000 => '',
    3000 => 'opacity:0; display:none; top: -10%;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>Gitをインストールしてみよう！</h2>
<h3>for Linux</h3>
<p>パッケージ管理システムでgitをインストール。</p>
<h4>RPM系(CentOS, Fedora)</h4>
<pre class="code">
$ yum install git-core</pre>
<h4>Debian系(Ubuntu, KNOPPIX)</h4>
<pre class="code">
$ apt-get install git</pre>
EOF;
$opt = [
  'class' => 'sheet4 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block; top:0%;',
    1000  => 'opacity:1; transform-origin:0 0;',
    3000 => 'top:-100%;',
    4000 => 'opacity:0; display:none;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1500);
$content = <<< EOF
<h2>Gitをインストールしてみよう！</h2>
<h3>for Windows</h3>
<p>以下の３つのいずれかの方法でインストール</p>
<p>
  <ol>
    <li>GitHubの提供している<a href="http://windows.github.com/">GitHub for Windows</a>をインストール。</li>
    <li>Cygwinからgitをインストール。</li>
    <li>VMPlayer上にLinuxをインストールしてLinuxの手順でインストール。</li>
  </ol>
</p>
<p>ここでは１番目の方法を紹介します。</p>
<h4>ダウンロード</h4>
<p>まず、以下のURLにアクセスして「GitHub for Windows」をダウンロードします。</p>
<p><a href="http://windows.github.com/">http://windows.github.com/</a></p>
<img src="images/install1.png" width="600" alt="">
<br>
<h4>インストール</h4>
<p>ダウンロードしたGitHubSetup.exeファイルをダブルクリック。</p>
<img src="images/install2.png" width="600" alt="">
<br>
<p>気長に待つ…。</p>
<img src="images/install3.png" width="600" alt="">
<br>
<p>完了！？</p>
<p class="small">(再インストールしたらなんも設定することなかったけどいいのかな？もしかしたら初期インストール時は設定項目あるかも。)</p>
<p>インストールされたアプリケーションの中に「Git Shell」なるものがあると思います。<br>
  主にこれを使用してファイルの管理を行います。</p>
  <p class="small">(もちろんGUIでも同等のことが可能です。)</p>
<img src="images/install4.png" width="600" alt="">
EOF;
$opt = [
  'class' => 'sheet4 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block; top:0%;',
    1000  => 'opacity:1; transform-origin:0 0;',
    12000 => 'top:-500%;',
    13000 => 'opacity:0; display:none;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1500);
$content = <<< EOF
  <h2>ローカルリポジトリの作成</h2>
  <p>２つの方法があります。</p>
  <p class="small">例：/hogeディレクトリ配下にhugaリポジトリを作成。</p>
  <h3>１．リポジトリの初期化(init)</h3>
  <p>[Git Shell]</p>
  <pre class="code">
$ cd /hoge
$ mkdir huga
$ cd huga
$ git init</pre>

  <p class="small">※中央リポジトリで使用するには追加で以下のコマンドを入力</p>
  <pre class="code">
$ git remote add huga https://github.com/username
</pre>

  <h3>２．中央リポジトリの複製を作成(clone)</h3>
  <p>[Git Shell]</p>
  <pre class="code">
$ cd /hoge
$ git clone https://github.com/username/huga.git</pre>
EOF;
$opt = [
  'class' => 'sheet4 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block; top:0%;',
    1000  => 'opacity:1; transform-origin:0 0;',
    4000 => 'top:-100%;',
    5000 => 'opacity:0; display:none;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$opt = [
  'class' => 'wrapper',
  'start' => 'display:none;',
  'attribute' => [
    0    => 'display:block; background:rgba(255, 255, 255, 0); color[swing]:rgb(0, 0, 0);',
    1000 => 'background:rgba(255, 255, 255, 1); color[swing]:rgb(0, 0, 0);',
  ]
];
$ss1->startWrap($opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2 class="big">図解で簡単！How To git(GitHub)!!</h2>
EOF;
$opt = [
  'class' => 'sheet5',
  'start' => 'opacity:0; color:#2769B1; left:0%',
  'attribute' => [
    0    => 'top: 20%; transform:scale(0);',
    500  => 'transform:scale(1); opacity:1;',
    2000 => '',
    3000 => 'opacity:0; left:-100%;'
  ]
];
$ss1->setSlide($content, $opt);


// -------------------------------------------------------------
$content = <<< EOF
<img src="images/image1.png" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    3000 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-300);
$content = <<< EOF
<img src="images/image2.png" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    3000 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-300);
$content = <<< EOF
<img src="images/image3.png" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    3000 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-300);
$content = <<< EOF
<img src="images/image4.png" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    3000 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$opt = [
  'attribute' => [
    0   => '',
    500 => 'background:rgba(255, 255, 255, 0); color[swing]:rgb(0, 0, 0);',
  ]
];
$ss1->endWrap($opt);

// -------------------------------------------------------------
$opt = [
  'class' => 'wrapper',
  'start' => 'display:none;',
  'attribute' => [
    0    => 'display:block; background:rgba(27, 36, 65, 0); color[swing]:rgb(0, 0, 0);',
    1000 => 'background:rgba(27, 36, 65, 1); color[swing]:rgb(0, 0, 0);',
  ]
];
$ss1->startWrap($opt);

// -------------------------------------------------------------
$content = <<< EOF
<h2>ブランチ</h2>
<p>ブランチとは、履歴の流れを分岐して記録していくためのもの。</p>
<p>分岐したブランチは、他のブランチの影響を受けないため、<br>
同じリポジトリの中で複数の変更を同時に進めていくことができる。</p>
<h3>ブランチの作成</h3>
<pre class="code">
$ git branch develop</pre>
<h3>ブランチの切り替え</h3>
<pre class="code">
$ git checkout develop</pre>
<p class="small">※checkoutコマンド-bオプションでブランチの作成と切り替えを同時に行う。</p>
<h3>ブランチ運用</h3>
<p>ブランチ運用モデル「A successful Git branching model」より</p>
EOF;
$opt = [
  'class' => 'sheet7 center',
  'start' => 'opacity:0; color:#ffffff; margin-left:-40%;',
  'attribute' => [
    0    => 'top:5%;',
    1000  => 'opacity:1; transform-origin:0 0;',
    3000 => 'top:-100%;',
    3500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<img src="images/flow1.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow2.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow3.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow4.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow5.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow6.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow7.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow8.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$ss1->margin(-1000);
$content = <<< EOF
<img src="images/flow9.jpg" alt="">
EOF;
$opt = [
  'class' => 'sheet6 center',
  'start' => 'opacity:0;',
  'attribute' => [
    0    => '',
    500  => 'opacity:1; top: 15%;',
    2000 => '',
    2500 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$opt = [
  'attribute' => [
    0   => '',
    500 => 'display:none; background:rgba(20, 20, 20, 0); color[swing]:rgb(0, 0, 0);',
  ]
];
$ss1->endWrap($opt);

// -------------------------------------------------------------
$ss1->margin(2000);
$content = <<< EOF
  <h2 class="big">最後に</h2>
  <p>gitを使えばgit(きっと)いいことあるかもね</p>
EOF;
$opt = [
  'class' => 'sheet5 center',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block; transform:scale(0); top:30%;',
    500  => 'opacity:1; transform:scale(1);',
    2000 => '',
    3000 => 'display:none; transform:scale(10); opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$content = <<< EOF
<img src="images/BSOD.png" width="100%" alt="">
EOF;
$opt = [
  'class' => 'full',
  'start' => 'opacity:0; display:none;',
  'attribute' => [
    0    => 'display:block;',
    1  => 'opacity:1;',
    4900 => '',
    5000 => 'opacity:0; display:block;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$opt = [
  'class' => 'wrapper',
  'start' => 'display:none;',
  'attribute' => [
    0    => 'display:block; background:rgba(255, 255, 255, 0); color[swing]:rgb(0, 0, 0);',
    1000 => 'background:rgba(255, 255, 255, .8); color[swing]:rgb(0, 0, 0);',
  ]
];
$ss1->startWrap($opt);

// -------------------------------------------------------------
$content = <<< EOF
<h1>ご静聴ありがとうございました</h1>
<h3>参考にしたサイト</h3>
<ul>
  <li><a href="http://www.backlog.jp/git-guide/">サルでもわかるGit入門</a></li>
  <li><a href="http://nvie.com/posts/a-successful-git-branching-model/">A successful Git branching model</a></li>
  <li><a href="https://www.google.co.jp/">Google</a></li>
</ul>
<h3>ツール</h3>
<ul>
  <li><a href="https://github.com/">GitHub</a></li>
  <li><a href="http://windows.github.com/">GitHub for Windows</a></li>
</ul>
<h3>author</h3>
<p><a href="https://github.com/takamk2">takamk2</a></p>
EOF;
$opt = [
  'class' => 'sheet8 center',
  'start' => 'opacity:0',
  'attribute' => [
    0    => '',
    1  => 'opacity:1;',
    9900 => '',
    10000 => 'opacity:0;',
  ]
];
$ss1->setSlide($content, $opt);

// -------------------------------------------------------------
$opt = [
  'attribute' => [
    0   => '',
    500 => 'display:none; background:rgba(255, 255, 255, 0); color[swing]:rgb(0, 0, 0);',
  ]
];
$ss1->endWrap($opt);

// -------------------------------------------------------------
$ss1->show();
$ss2->show();
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
  $(function() {
    $('.center').each(function() {
      $(this).css({marginLeft: -($(this).width() / 2) + 'px'});
    });
  })
</script>
<!--
  改善したいところ
  ■－タイトルをもうちょっと右へ寄せる。
    →jQueryでセンタリングした。
  ■－全体的に表示されてからはけるまでが早いのでもっと遅くする。
  ■－背景画像を白系のみにする。(質感はOK)
  ■－h1.h2のcolorを黒以外にする。
  ■－h1.h2のfont-familyを変える。
  ■－ul>liの点を小さいのにする。
  ■－ul>liの行幅をもっと長くする。
  ■－DEBUG部分を埋める
  ■－文字のサイズに抑揚を持たせる。
  ■－octcatは右から出てくる感じにする。そのあとoctcatの説明を表示(説明はborderで枠みたいに表示)
  ■－sheet1は左から出てくる感じにする。
  ■－最後にはもうちょっと遅めに出す。
  ■－最後にの下の分は後から出す。
  ■－ご静聴のliの○は消す。
  ■－リンクをクリックできるようにopacity:0の後にdisplay:noneにする。
  □－すべての画像を作成する。
-->

</body>
</html>