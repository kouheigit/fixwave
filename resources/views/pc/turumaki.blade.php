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
       <li><a href="#"><img src="{{ asset('img/menupic2.png') }}"width="60px" height="60px">トップ</a></li>
       <li><a href="#"><img src="{{ asset('img/menupic3.png') }}"width="60px" height="60px">当店について</a></li>
       <li><a href="#"><img src="{{ asset('img/menupic.png') }}"width="60px" height="50px">4つのサービス</a></li>
       <li><a href="#"><img src="{{ asset('img/menupic4.png') }}"width="60px" height="60px">店舗情報</a></li>
       <li><a href="#"><img src="{{ asset('img/menupic5.png') }}"width="60px" height="50px">千歳船橋店について</a></li>
     </ul>
    </nav>
  </div>
  <!--スライドショー-->
    <ul class="slider">
      <img src="{{ asset('img/pcplate1.jpg') }}">
      <img src="{{ asset('img/pcplate2.jpg') }}">
      <img src="{{ asset('img/pcplate3.jpg') }}">
 <!--- <img src="{{ asset('img/plate4.png') }}">-->
    </ul>
 <!--店舗情報-->
  <div id="content2">
    <h1>クリーニングWAVE　弦巻店</h1>
     <h2>衣服の汚れお任せください、染み抜きのプロがいるお店</h2>
     <p>当店ではプロの染み抜き職人が在籍し<span>とことんキレイに</span><span>あなたの衣服をもう一回輝かせる</span>をモットーに妥協をしない、<br>キレイな仕上げを心がけ開業から30年、弦巻のこだわりのあるクリーニング店として地域に愛されて営業してきました。</p>
    <dl class="store">
      <div class="storecontent">
       <img src="{{ asset('img/store.jpg') }}">
       <h3>キレイな仕上げを目指します</h3>
     	<p>シミ、汚れご相談下さい!シミの種類によって処理方法が違います。シミの原因を教えてください</p>
      </div> 
      <div class="storecontent">
        <img src="{{ asset('img/store2.jpg') }}">
        <h3>そのシミ、プロにお任せください</h3>
        <p>シミを付けてしまったらいじらず、いじらずそのままの状態でお待ちください。</p><p>自己流で取ろうとすることでかえってシミを広げてしまったりシミを取りずらくしてしまいます。</p>
      </div>
      <div class="storecontent">
       <img src="{{ asset('img/store3.jpg') }}">
       <h3>その修理、受付でご相談ください</h3>
       <p>キズ、破れ等の修理、丈詰め・寸法直し等のお直し、かけはぎ等幅広くお客様のご要望にお応えします</p>
      </div>
    </dl>
  </div>
 </body>
</html>
