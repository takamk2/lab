<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>git紹介</title>
  <link rel="stylesheet" href="css/how_to_git2.css">
</head>
<body>

<div id="container">
  <div id="content">

<div class="section">
  <h1><img src="images/git_logo2.png" width="400" alt="">紹介</h1>
</div>

<div class="section">
  <h2>そもそもgitとはなんなのか？</h2>
  <p><strong>分散型バージョン管理システム</strong>の１つで、ファイルやフォルダなどの変更履歴を管理することができるシステム。</p>
</div>

<div class="section">
  <h2>バージョン管理システムについて</h2>
  <ul>
    <li>集中型バージョン管理システム</li>
    <li>分散型バージョン管理システム</li>
  </ul>
</div>

<div class="section">
  <h3>集中型バージョン管理システム</h3>
  <div class="image">No Image</div>
  <ul>
    <li>Subversion</li>
    <li>DEBUG:調べて埋める</li>
    <li class="etc">etc...</li>
  </ul>
</div>

<div class="section">
  <h3>分散型バージョン管理システム</h3>
  <div class="image">No Image</div>
  <ul>
    <li>git</li>
    <li>DEBUG:調べて埋める</li>
    <li class="etc">etc...</li>
  </ul>
  <p class="small">デファクトスタンダードになりつつあるとかならないとか。(適当)</p>
</div>

<div class="section">
  <h3>簡単に...</h3>
  <p><strong>集中型バージョン管理システム</strong><br>中央リポジトリのみ。</p>
  <p><strong>分散型バージョン管理システム</strong><br>中央リポジトリに加え、各ユーザごとにもリポジトリが存在する。</p>
</div>

<div class="section">
  <h2>git(分散型バージョン管理システム)は何が嬉しいか？</h2>
  <ol>
    <li>ローカルリポジトリ全ての変更履歴があることで、ネットワークのつながる環境にいなくても開発を進めることができる。</li>
    <li>ローカルリポジトリから丸々中央リポジトリにコピーすることができるので動かなくなる心配が少ない。</li>
    <li>他にもいろいろ。(割愛)</li>
  </ol>
</div>

<div class="section">
  <h2>中央リポジトリ</h2>
  <p>(今更ですが)リポジトリとは「倉庫、貯蔵庫」などの意味を持つ英単語。(repository)</p>
  <p>その倉庫がいつでも使えないと困りますよね。と、いうことで誰でも参照できるサーバ上にあるのが中央リポジトリ。</p>
  <p class="small">※中央リポジトリがなくてもローカルで完結することもできます。絶対に必要というわけではありません。</p>
</div>

<div class="section">
  <h2>中央リポジトリのためのホスティングサービス</h2>
  <ul>
    <li>GitHub</li>
    <li>DEBUG:調べて埋める</li>
    <li class="etc">etc...</li>
  </ul>
  <img src="images/Octocat.org.png" height="249" width="300" alt="">
  <p>GitHub公式マスコット「<strong>Octcat</strong>」くん</p>
  <p class="small">※英語でも日本語でも韻を踏んでいる素晴らしい名前の「<strong>たこ</strong>」</p>
</div>

<div class="section">
  <h2>Gitをインストールしてみよう！</h2>
  <h3>Linuxの場合</h3>
  <p>パッケージ管理システムでgitをインストール。</p>
  <p>RPM系(CentOS, Fedora)</p>
  <pre class="code">
$ yum install git-core</pre>
  <p>Debian系(Ubuntu, KNOPPIX)</p>
  <pre class="code">
$ apt-get install git</pre>

  <h3>Windowsの場合</h3>
  <p>以下の３つのいずれかの方法でインストール</p>
  <ol>
    <li>GitHubの提供している<a href="http://windows.github.com/">GitHub for Windows</a>をインストール。</li>
    <li>Cygwinからgitをインストール。</li>
    <li>VMPlayer上にLinuxをインストールしてLinuxの手順でインストール。</li>
  </ol>

  <p>ここでは１番目の方法を紹介します。</p>
</div>

<div class="section">
  <p>まず、以下のURLにアクセスして「GitHub for Windows」をダウンロードします。</p>
  <p><a href="http://windows.github.com/">http://windows.github.com/</a></p>
  <div class="image">No Image</div>
</div>

<div class="section">
  <p>適当な位置に解凍して、xxxx.exeファイルをダブルクリック。</p>
  <div class="image">No Image</div>
</div>

<div class="section">
  <p>適当に設定してインストール完了。(適当の概要は画像下部参照)<br>
  </p>
  <div class="image">No Image</div>
  <ul class="small">
    <li>保存ディレクトリはデフォルトのままでOK</li>
  </ul>
</div>

<div class="section">
  <p>インストールされた「Git Shell」なるものがインストールされていると思います。<br>
    主にこれを使用してファイルの管理を行います。</p>
    <p class="small">(もちろんGUIでも同等のことが可能です。)</p>
  <div class="image">No Image</div>
</div>

<div class="section">
  <h2>ローカルリポジトリの作成</h2>
  <p>２つの方法があります。</p>
  <h3>１．リポジトリの初期化(init)</h3>
  <p>[Git Shell]</p>
  <pre class="code">
$ cd /hoge
$ mkdir huga
$ cd huga
// ローカルリポジトリの作成
$ git init</pre>

  <p class="small">※中央リポジトリで使用するには追加で以下のコマンドを入力</p>
  <pre class="code">
// GitHubにhugaリポジトリを追加
$ git remote add huga https://github.com/username
</pre>

  <h3>２．中央リポジトリの複製を作成(clone)</h3>
  <p>[Git Shell]</p>
  <pre class="code">
$ cd /hoge
$ git clone https://github.com/username/huga.git</pre>
</div>

<div class="section">
  <h2>図解で簡単！How To git(GitHub)!!</h2>
  <img src="images/image1.png" width="1000" alt="">
  <img src="images/image2.png" width="1000" alt="">
  <img src="images/image3.png" width="1000" alt="">
  <img src="images/image4.png" width="1000" alt="">
</div>

<div class="section">
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
  <p>ブランチ運用モデル「<a href="http://nvie.com/posts/a-successful-git-branching-model/">A successful Git branching model</a>」より</p>
  <img src="images/flow1.jpg" width="1000" alt="">
  <img src="images/flow2.jpg" width="1000" alt="">
  <img src="images/flow3.jpg" width="1000" alt="">
  <img src="images/flow4.jpg" width="1000" alt="">
  <img src="images/flow5.jpg" width="1000" alt="">
  <img src="images/flow6.jpg" width="1000" alt="">
  <img src="images/flow7.jpg" width="1000" alt="">
  <img src="images/flow8.jpg" width="1000" alt="">
  <img src="images/flow9.jpg" width="1000" alt="">
</div>

<div class="section">
  <h2>最後に</h2>
  <p>gitを使えばgit(きっと)いいことあるかもね</p>
</div>

<div class="section">
  <img src="images/BSOD.png" width="1000" alt="">
  <img src="images/black.png" width="1000" alt="">
</div>

<div class="section">
  <h1>ご清聴ありがとうございました</h1>
  <h3>参考にしたサイト</h3>
  <ul>
    <li><a href="http://www.backlog.jp/git-guide/">サルでもわかるGit入門</a></li>
    <li><a href="https://www.google.co.jp/">Google</a></li>
    <li><a href="http://nvie.com/posts/a-successful-git-branching-model/">A successful Git branching model</a></li>
  </ul>
  <h3>ツール</h3>
  <ul>
    <li><a href="https://github.com/">GitHub</a></li>
    <li><a href="http://windows.github.com/">GitHub for Windows</a></li>
  </ul>
  <h3>author</h3>
  <p><a href="https://github.com/takamk2">takamk2</a></p>
</div>

  </div>
</div>

</body>
</html>