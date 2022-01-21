<!DOCTYPE>
 <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="ページの内容を説明する">
    <!--スライダー-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script><!--スライダー-->
     <script src="{{ asset('js/scroll.js') }}"></script>
     <!--CSS-->
    <link rel="stylesheet" href="{{ asset('css/turusmart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smartmenu.css') }}">
    <!--slickのテーマ-->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <script src="JavaScriptファイルのパス"></script>
  </head>
  <body>
 <div class="content">
  <div class="menubar">
   <dd class="interval">.</dd>
   <dd>クリーニングWAVE 弦巻店</dd>
   <dd class="storename">☎︎03-5477-1613</dd>
   <!--<dd>test</dd>
   <dd>test</dd>-->
  </div>
   <nav>
    <input id="gnav-input" type="checkbox" class="gnav-hidden">
     <label id="gnav-btn" for="gnav-input"></label>
     <label id="gnav-black" for="gnav-input"></label>
     <div id="gnav-content">
       <ul class="gnav-list">
         <li><a href="#">トップ<br>TOP</a></li>
         <li><a href="#">当店について<br>About us</a></li>
         <li><a href="#">4つのサービス<br>Service</a></li>
	 <li><a href="#">店舗情報<br>Store infomation</a></li>
         <li><a href="#">千歳台本店について<br>Titosedai store</a></li>
       </ul>
     </div>
   </div>
   </nav>
   <!--スライドショー-->
  <div id ="content2">
    <ul class="slider">
      <img src="{{ asset('img/plate4.jpg') }}">
      <img src="{{ asset('img/plate.jpg') }}">
      <img src="{{ asset('img/plate2.jpg') }}">
      <img src="{{ asset('img/plate3.jpg') }}">
    </ul>
  </div>
  </body>
 </html>
