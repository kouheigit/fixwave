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
  <div id ="content3">
    <p class="contenttitle1">クリーニングWAVE弦巻店</p>
    <p class="text">衣服の汚れお任せください、染み抜きのプロがいるお店</p>
  </div>
  <div id="content4">
    <p class="text1">当店ではプロの染み抜き職人が在籍しとことんキレイに、あなたの衣服をもう一回輝かせるという二つの理念をモットーに営業してきました。</p>
   <p class="text2">妥協をしないキレイな仕上げを心がけ開業から30年弦巻のこだわりあるクリーニング店として地域に愛されてきました。</p>
  </div>
  <div id="content5">
    <p class="contenttitle1">🔹当店のサービスについて</p>
   <div class="fivecontent">
    <div class="fiveitem">
      <img class="img1"src="{{ asset('img/store.jpg') }}">
       <p class="fivetitle">キレイな仕上げを目指します</p>
       <p>シミ、汚れご相談下さい!シミの種類によって処理方法が違います。シミの原因を教えてください</p>
    </div>
    <div class="fiveitem">
      <img class="img1"src="{{ asset('img/store2.jpg') }}">
       <p class="fivetitle">そのシミ、プロにお任せください</p>
       <p>シミを付けてしまったらいじらずそのままの状態でお持ちこみください。</p>
       <p>自己流で取ろうとすることでかえってシミを広げてしまったりシミを取りずらくしてしまいます。</p>
    </div>
    <div class="fiveitem">
      <img class="img1"src="{{ asset('img/store3.jpg') }}">
       <p class="fivetitle">修理、受付でご相談ください</p> 
       <p>キズ、破れ等の修理、丈詰め・寸法直し等のお直し、かけはぎ等幅広くお客様のご要望にお応えします。</p>
    </div>
   </div>
  </div>
  <div id="content6">
    <p class="contenttitle1">🔹クリーニングWAVE4つのサービス</p>
  </div>
  </body>
 </html>
