<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <!--SEO対策用タグを忘れるな-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="ページの内容を説明する">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script><!--スライダー-->
     <script src="{{ asset('js/scroll.js') }}"></script>
    <script src="{{ asset('js/judge.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/turumaki.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <script src="JavaScriptファイルのパス"></script>
 </head>
 <body>
  <div id="content">
   <h1 class="titles">クリーニングWAVE　弦巻店</h1>
  <!--メニューバー-->
    <nav>
     <ul class="menu">
       <li><a href="#content"><img src="{{ asset('img/menupic2.png') }}"width="60px" height="60px">トップ</a></li>
       <li><a href="#content2"><img src="{{ asset('img/menupic3.png') }}"width="60px" height="60px">当店について</a></li>
       <li><a href="#content3"><img src="{{ asset('img/menupic.png') }}"width="60px" height="50px">4つのサービス</a></li>
       <li><a href="#content4"><img src="{{ asset('img/menupic4.png') }}"width="60px" height="60px">店舗情報</a></li>
       <li><a href="titosedai"><img src="{{ asset('img/menupic5.png') }}"width="60px" height="50px">千歳台本店について</a></li>
     </ul>
    </nav>
  </div>
  <!--スライドショー-->
    <ul class="slider">
      <img src="{{ asset('img/pcplate2.jpg') }}">
      <img src="{{ asset('img/pcplate1.jpg') }}">
      <img src="{{ asset('img/pcplate4.png') }}">
      <img src="{{ asset('img/pcplate3.jpg') }}">
    </ul>
   @if ($value == 2)
    <div class="tokuhos">
      <!--<h1 class="tokuho"> {{$value}}</h1>-->
      <img src="{{ asset('img/saletue.jpg') }}">
    </div>
    @elseif ($value == 3)
     <div class="tokuhos">
      <!--<h1 class="tokuho"> {{$value}}</h1>-->
      <img src="{{ asset('img/salewed.jpg') }}">
    </div>
    @else
    @endif
 <!--WAVEについて-->
  <div id="content2">
    <h1>クリーニングWAVE　弦巻店</h1>
    <h2>衣服の汚れお任せください、染み抜きのプロがいるお店</h2>
    <p>当店ではプロの染み抜き職人が在籍し<span class="pic">とことんキレイに</span>、<span class="pic1">あなたの衣服をもう一回輝かせる</span>という二つの理念をモットーに妥協をしない<br>キレイな仕上げを心がけ開業から30年、弦巻のこだわりのあるクリーニング店として地域に愛されて営業してきました。</p>  
   <h2 class="subtitle">当店のサービスについて</h2>
    <dl class="store">
      <div class="storecontent">
        <img src="{{ asset('img/store.jpg') }}">
        <h3>キレイな仕上げを目指します</h3>
        <p>シミ、汚れご相談下さい!シミの種類によって処理方法が違います。シミの原因を教えてください</p>
     </div> 
      <div class="storecontent">
        <img src="{{ asset('img/store2.jpg') }}">
        <h3>そのシミ、プロにお任せください</h3>
        <p>シミを付けてしまったらいじらずそのままの状態でお持ちこみください。</p><p>自己流で取ろうとすることでかえってシミを広げてしまったりシミを取りずらくしてしまいます。</p>
      </div>
      <div class="storecontent">
       <img src="{{ asset('img/store3.jpg') }}">
       <h3>修理、受付でご相談ください</h3>
       <p>キズ、破れ等の修理、丈詰め・寸法直し等のお直し、かけはぎ等幅広くお客様のご要望にお応えします</p>
      </div>
    </dl>
  </div>
  <!--４つのサービス-->
  <div id="content3">
     <h1>４つのサービス</h1>
     <h1 class="servicetitle">クリーニングWAVE4つのサービス</h1>
   <dl class="service">
    <div class="servicecontent">
      <h2 class="title" >サービスその1</h2>
      <img src="{{ asset('img/service.png') }}">
      <p>当店は YシャツもWクリーニング無料、袖、袖口の皮脂汚れ水洗いだけでは落ちません。<br>油性と水溶性の汚れ、匂いをしっかりと落としてスッキリさっぱり仕上げます。</p>
    </div>
    <div class="servicecontent">
      <h2 class="title" >サービスその2</h2>
      <img src="{{ asset('img/service2.png') }}">
      <p>Yシャツセール(立体)弦巻店は毎週火曜日、水曜日におこないます。<br>但し特殊な品物は除きます。</p>
    </div>
    </dl>

   <dl class="service1">
     <div class="servicecontent">
      <h2 class="title" >サービスその3</h2>
      <img src="{{ asset('img/service3.png') }}">
      <p>キレイな仕上げを目指します!シミ・汚れ当店にご相談ください。<br>シミを付けてしまったらいじらずそのままの状態でお持ちください。<br>自己流で取ろうとすることでかえってシミを広げてしまったりシミを取りずらくしてしまいます。</p>
    </div>
    <div class="servicecontent">
      <h2 class="title" >サービスその4</h2>
      <img src="{{ asset('img/service4.png') }}">
      <p>オーバー類、セーター、カーディガン、マフラー等のニット類、<br>コート、ダウン、ジャンパー類の襟、袖口のニット部分<br>毛玉のふちなどの毛玉を無料でお取りします。</p>
</p>
    </div>
    </dl>
  </div>
 <!--店舗情報-->
  <div id="content4">
   <div class="map">
     <h1>店舗情報</h1>
     <dl class="mapall">
     <div class="mapcontent">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.6399381790043!2d139.6517688152576!3d35.636601980204624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f4813430063f%3A0x45c516be21df7ad6!2z44CSMTU0LTAwMTYg5p2x5Lqs6YO95LiW55Sw6LC35Yy65bym5be777yS5LiB55uu77yZ4oiS77yR77yTIOmnkumbu-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1642133983133!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="mapcontent">
      <ul>
        <li class="first">クリーニングWAVE【弦巻店】</li>
	<li>【営業時間】<br>月曜〜金曜日AM10:00~PM7:00<br>日曜祝日AM10:00~PM6:00<br><span class="dayoff">定休日金曜日</span></li>
        <li>☎︎03-5477-1613</li>
	<li>〒154-0016東京都世田谷区弦巻２丁目9-13駒電ビル１階</li>
	<li class="last">※当サイトに記載されている店舗写真等の無断転載、無断使用はご遠慮ください。<br>また当店の外観写真や店舗情報等を他サイト等に転載する行為などもかたくお断りしております。</li>
      </ul>
      <!--
        <h2 class="tel">☎︎03-5477-1613</h2>
        <h2>〒154-0016東京都世田谷区弦巻２丁目9-13駒電ビル１階</h2>-->
     </div>
    </div>
   </dl>
  </div>
 </div>
 <footer>
   <dd class="point">.</dd>
   <dd>Copyright © 2022 CLEANING WAVE All Rights Reserved.</dd>
   <dd class="point">.</dd>
 <footer>
 </body>
</html>
