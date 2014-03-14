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

  <div class="sheet2" data-0="transform:scale(0) rotate(0deg);" data-500="transform:scale(1) rotate(1440deg); opacity: 1;" data-1100="" data-1200="transform:scale(5) rotate(3240deg); opacity: 0;">
    <img src="images/GitHub_Logo.png" alt="github_logo" style="display:inline;"><span style="font-weight:bold;">の紹介</span>
  </div>

  <div class="sheet1" data-0="opacity: 0;" data-1100="" data-1500="opacity: 1; top: 3%; transform: rotate(0deg); transform-origin: 0 0;" data-1800="" data-2000="opacity: 0; top: -10%; transform: rotate(-90%);">
    <h1>分散型ファイル管理システム「<strong>Git</strong>」</h1>
    <p>分散型ファイル管理システムとは。。。<br>各々がローカルで作業することができる。必要があればリモートリポジトリにローカルリポジトリの状態を反映(push)する。<br>ブランチを作ることで各々の作業を邪魔することなく開発することができる。<br>ブランチで開発したものは最終的にMasterにマージする。</p>
    <img src="images/sample.png" alt="スクショ" width="80%">
  </div>

  <div class="sheet_wrapper" data-0="display:none;" data-3900="display:block;" data-4900="background:rgba(0, 0, 0, 0);color[swing]:rgb(0,0,0);" data-5900="background:rgba(0,0,0,1);color:rgb(255,255,255);" data-10000="top:0%;" data-12000="top:-100%;">
    <div data-3900="background-color:rgba(0, 0, 0, 0.4); z-index:110; padding:10px; left:100%; top:10%;" data-4600="left:10%;">
      <h1>ブランチの運用モデル</h1>
      <p>「<a href="http://nvie.com/posts/a-successful-git-branching-model/">A successful Git branching model</a>」より</p>
    </div>
    <div class="center" data=3900="bottom:-500%;" data-9500="bottom:0%;">
      <img src="images/Screen-shot-2009-12-24-at-11.32.03.png" height="1600px">
    </div>
    <div data-4000="right:0%; bottom[bounce]:60%;" data-9000="" data-9500="bottom:0%"><img src="images/octocat.png" alt=""></div>
  </div>


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