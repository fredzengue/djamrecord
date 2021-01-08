
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>{{title($title)}}</title>
<meta charset="UTF-8">
<meta name="description" content="SolMusic HTML Template">
<meta name="keywords" content="music, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="img/favicon.ico" rel="shortcut icon" />

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://preview.colorlib.com/theme/solmusic/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="stylesheet" href="https://preview.colorlib.com/theme/solmusic/css/owl.carousel.min.css" />
<link rel="stylesheet" href="https://preview.colorlib.com/theme/solmusic/css/slicknav.min.css" />

<link rel="stylesheet" href="https://preview.colorlib.com/theme/solmusic/css/style.css" />
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div id="preloder">
<div class="loader"></div>
</div>

<header class="header-section clearfix">
  <a href="index.html" class="site-logo">
  <img src="{{asset('storage/djamrecord.png')}}" alt="">
  </a>
  <div class="header-right">
  <a href="#" class="hr-btn">Aide</a>
  <span>|</span>
  <div class="user-panel">
  <a href="" class="login">Connexion</a>
  <a href="" class="register">Inscription</a>
  </div>
  </div>
  <ul class="main-menu">
  <li><a href="/">Accueil</a></li>
  <li><a href="/piste">Music</a></li>
  <li><a href="/photo">Photo</a></li>
  <li><a href="/video">Vidéo</a></li>
  <li><a href="/blog">Blog</a></li>
  <li><a href="/contact">Contact</a></li>
  </ul>
</header>

@yield('content')

<footer class="footer-section">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-7 order-lg-2">
<div class="row">
<div class="col-sm-4">
<div class="footer-widget">
<h2>About us</h2>
<ul>
<li><a href="">Our Story</a></li>
<li><a href="">Sol Music Blog</a></li>
<li><a href="">History</a></li>
</ul>
</div>
</div>
<div class="col-sm-4">
<div class="footer-widget">
<h2>Products</h2>
<ul>
<li><a href="">Music</a></li>
<li><a href="">Subscription</a></li>
<li><a href="">Custom Music</a></li>
<li><a href="">Footage</a></li>
</ul>
</div>
</div>
<div class="col-sm-4">
<div class="footer-widget">
<h2>Playlists</h2>
<ul>
<li><a href="">Newsletter</a></li>
<li><a href="">Careers</a></li>
<li><a href="">Press</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-5 order-lg-1">
<img src="https://preview.colorlib.com/img/logo.png" alt="">
<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fas fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</div>
<div class="social-links">
<a href=""><i class="fab fa-instagram"></i></a>
<a href=""><i class="fab fa-pinterest"></i></a>
<a href=""><i class="fab fa-facebook-f"></i></a>
<a href=""><i class="fab fa-twitter"></i></a>
<a href=""><i class="fab fa-youtube"></i></a>
</div>
</div>
</div>
</div>
</footer>


<script src="https://preview.colorlib.com/theme/solmusic/js/jquery-3.2.1.min.js"></script>
<script src="https://preview.colorlib.com/theme/solmusic/js/bootstrap.min.js"></script>
<script src="https://preview.colorlib.com/theme/solmusic/js/jquery.slicknav.min.js"></script>
<script src="https://preview.colorlib.com/theme/solmusic/js/owl.carousel.min.js"></script>
<script src="https://preview.colorlib.com/theme/solmusic/js/mixitup.min.js"></script>
<script src="https://preview.colorlib.com/theme/solmusic/js/main.js"></script>
@yield('extra-js')

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
