<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Spectral" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers rel="stylesheet">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

  <script src="js/jquery.bgswitcher.js"></script>
<script>
jQuery(function($) {
    $('.bg-slider').bgSwitcher({
        images: ['clv01.jpg', 'clv02.jpg', 'clv03.jpg', 'clv04.jpg', 'clv05.jpg', 'clv06.jpg',], // 切り替える背景画像を指定
    });
});
</script>
</head>
<body>

<div class="bg-slider">
<nav>
  <ul>
    <li class=”current”><a href=”#”>Home</a></li>
    <li><a href=”#”>News</a></li>
    <li><a href=”#”>About</a></li>
    <li><a href=”#”>Access</a></li>
    <li><a href=”#”>Blog</a></li>
  </ul>
</nav>

  <div class="bg-slider__title"></div>
</div>

</body>
</html>