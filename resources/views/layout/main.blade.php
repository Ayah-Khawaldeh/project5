<!DOCTYPE html>
<html>

<!-- Mirrored from askbootstrap.com/preview/miver/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 08:14:33 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Gurdeep singh osahan">
<meta name="author" content="Gurdeep singh osahan">
<title>jobs website</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<link rel="icon" type="image/png" href="images/fav.svg">

<link href="{{asset('public_theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/vendor/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">

<link href="{{asset('public_theme/vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('public_theme/vendor/lightgallery-master/dist/css/lightgallery.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/vendor/select2/css/select2-bootstrap.css')}}" />
<link href="{{asset('public_theme/vendor/select2/css/select2.min.css')}}" rel="stylesheet">

<link href="{{asset('public_theme/css/style.css')}}" rel="stylesheet">
</head>
<body>

    {{-- //navbar --}}

<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
<div class="container">

<a class="navbar-brand" href="index-2.html"><img src="{{asset('public_theme/images/logo.svg')}}" alt=""></a>

<form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-white small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-success" type="button">
<i class="fa fa-search fa-sm"></i>
</button>
</div>
</div>
</form>

<ul class="navbar-nav align-items-center ml-auto">
<li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
<a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-search fa-fw"></i>
</a>

<div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-light border-0 small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fa fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>
<li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
    <a href="http://127.0.0.1:8000/login" >
        <button class="btn  btn-lg btn-success" type="button"> Login</button></li>
    </a>
    <a href="http://127.0.0.1:8000/register" >
        <button class="btn  btn-lg btn-success" type="button"> Register</button></li>
    </a>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
<div class="container">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link" href="http://127.0.0.1:8000/" id="navbarDropdownPortfolio"  aria-haspopup="true" aria-expanded="false">
Home
</a>

</li>
<li class="nav-item ">
    <a class="nav-link " href="http://127.0.0.1:8000/categories"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
    <a class="dropdown-item" href="product.html">Product List</a>
    <a class="dropdown-item" href="product2.html">Product List 2</a>
    <a class="dropdown-item" href="product-detail.html">List Detail</a>
    <a class="dropdown-item" href="profile.html">Profile</a>
    <a class="dropdown-item" href="company-profile.html">Company Profile</a>
    <a class="dropdown-item" href="alerts.html">Alerts</a>
    <a class="dropdown-item" href="messages.html">Messages</a>
    </div>
    </li>
<li class="nav-item">
<a class="nav-link" href="http://127.0.0.1:8000/about">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="http://127.0.0.1:8000/contactus">Contact</a>
</li>

</ul>
</div>

</div>
</nav>

  {{-- //endnavbar --}}
  
@yield('section1')


@yield('section2')

@yield('section3')

@yield('section4')








<footer class="bg-white">
<div class="container">
<div class="d-flex justify-content-between">
<div class="footer-list">
<h2>Categories</h2>
<ul class="list">
<li><a href="#">Graphics &amp; Design</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Writing &amp; Translation</a></li>
<li><a href="#">Video &amp; Animation</a></li>
<li><a href="#">Music &amp; Audio</a></li>
<li><a href="#">Programming &amp; Tech</a></li>
<li><a href="#">Business</a></li>
<li><a href="#">Lifestyle</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
<div class="footer-list">
<h2>About</h2>
<ul class="list">
<li><a href="#">Careers</a></li>
<li><a href="#">Press &amp; News</a></li>
<li><a href="#">Partnerships</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms of Service</a></li>
<li><a href="#">Intellectual Property Claims</a></li>
<li><a href="#" target="_blank">Investor Relations</a></li>
</ul>
</div>
<div class="footer-list">
<h2>Support</h2>
<ul class="list">
<li><a href="#">Help &amp; Support</a></li>
<li><a href="#">Trust &amp; Safety</a></li>
<li><a href="#">Selling on Miver
</a>
</li>
<li><a href="#">Buying on Miver
</a>
</li>
</ul>
</div>
<div class="footer-list">
<h2>Community</h2>
<ul class="list">
<li><a href="#">Events</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Community Standards</a></li>
<li><a href="#">Podcast</a></li>
<li><a href="#">Affiliates</a></li>
<li><a href="#">Invite a Friend</a></li>
<li><a href="#">Become a Seller</a></li>
<li><a href="#">Miver
Elevate<small>Exclusive Benefits</small></a>
</li>
</ul>
</div>
</div>
<div class="copyright">
<div class="logo">
<a href="index-2.html">
<img src="{{asset('public_theme/images/logo.svg')}}">
</a>
</div>
<p>© Copyright 2020 Miver. All Rights Reserved
</p>
<ul class="social">
<li>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</li>
</ul>
</div>
</div>
</footer>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.min.js" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="{{asset('public_theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>


<script src="https://askbootstrap.com/" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="https://askbootstrap.com/" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/vendor/slick-master/slick/slick.js')}}" type="ecb7038e94e4af7c30850274-text/javascript" charset="utf-8"></script>

<script src="{{asset('public_theme/vendor/lightgallery-master/dist/js/lightgallery-all.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/vendor/select2/js/select2.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/js/custom.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="{{asset('public_theme/../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="ecb7038e94e4af7c30850274-|49" defer=""></script></body>

<!-- Mirrored from askbootstrap.com/preview/miver/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 08:14:55 GMT -->
</html>