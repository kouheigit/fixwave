<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="ページの内容を説明する">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
     <script src="{{ asset('js/slider.js') }}"></script><!--スライダー-->
    <link rel="stylesheet" href="{{ asset('css/turumaki.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <script src="JavaScriptファイルのパス"></script>
 </head>
 <body>
 <h1 class="titles">クリーニングWAVE　弦巻店</h1>
 <!--メニューバー-->
  <nav>
   <ul class="menu">
      <li><a href="#"><img src="{{ asset('img/menupic2.png') }}"width="60px" height="60px">トップ</a></li>
      <li><a href="#"><img src="{{ asset('img/menupic3.png') }}"width="60px" height="60px">当店について</a></li>
      <li><a href="#"><img src="{{ asset('img/menupic.png') }}"width="60px" height="50px">4つのサービス</a></li>
      <li><a href="#"><img src="{{ asset('img/menupic4.png') }}"width="60px" height="60px">店舗情報</a></li>
      <li><a href="#"><img src="{{ asset('img/menupic5.png') }}"width="60px" height="50px">千歳船橋店について</a></li>
   </ul>
  </nav>
  <!--スライドショー-->
   <ul class="slider">
      <img src="{{ asset('img/pcplate1.png') }}">
      <img src="{{ asset('img/pcplate2.png') }}">
      <img src="{{ asset('img/pcplate3.png') }}">
 <!--- <img src="{{ asset('img/plate4.png') }}">-->
   </ul>
 </body>
</html>
