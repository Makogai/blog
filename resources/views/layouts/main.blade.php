<!DOCTYPE html>
<html lang="en">
  <head>

      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-MP30YX2PGB"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-MP30YX2PGB');
      </script>

      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8767414358867968"
              crossorigin="anonymous"></script>

    <title>ForYouth {{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Serbian">
      <meta name="revisit-after" content="1 days">


      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">


      {{ $meta ?? '' }}

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("fonts/icomoon/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/flaticon/font/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar pt-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-6 logo">
            <h1 class="mb-0"><a href="/" class="text-black h2 mb-0"><img src="{{asset("images/logo.PNG")}}" class="logo-img" style="max-width: 50%;" alt=""></a></h1>
          </div>

          <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
            <div class="social-icons d-inline">
              <a href="{{$facebook}}"><img style="height: 70px; width: 70px; background-color: transparent;" src="{{asset("images/fb.PNG")}}" alt=""></span></a>
              <a href="{{$instagram}}"><img style="height: 70px; width: 70px; background-color: transparent;" src="{{asset("images/ig.PNG")}}" alt=""></a>
              <a href="{{$youtube}}"><img style="height: 70px; width: 70px; background-color: transparent;" src="{{asset("images/yt.PNG")}}" alt=""></span></a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a></div>
          </div>

          <div class="col-12 d-none d-xl-block border-top sticky">
            <nav class="site-navigation text-center " role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                <li class="{{strpos(Route::current()->getName(), 'home' ) !== false ? "active" : ""}}"><a href="/">Naslovna</a></li>
                <li class="{{strpos(Route::current()->getName(), 'about-us' ) !== false ? "active" : ""}}"><a href="/o-nama">O nama</a></li>
                <li class="{{strpos(\Illuminate\Support\Facades\Request::url(), 'novosti-za-mlade' ) !== false ? "active" : ""}}"><a href="/blog/novosti-za-mlade">Novosti za mlade</a></li>
                <li class="{{strpos(\Illuminate\Support\Facades\Request::url(), 'price-mladih' ) !== false ? "active" : ""}}"><a href="/blog/price-mladih">Priče mladih</a></li>
                  <li class="has-children
{{strpos(\Illuminate\Support\Facades\Request::url(), 'preporuke' ) !== false ? "active" : ""}}
">
                      <a href="#">Preporuke</a>
                      <ul class="dropdown">
                          @foreach($categories as $item)
                          <li class="{{strpos(\Illuminate\Support\Facades\Request::url(), $item->slug ) !== false ? "active" : ""}}"><a href="/blog/{{$item->slug}}">{{str_replace("Preporuke - ", "", $item->name)}}</a></li>
                          @endforeach
                      </ul>
                  </li>
                <li class="{{strpos(Route::current()->getName(), 'contact' ) !== false ? "active" : ""}}"><a href="/kontakt">Kontakt</a></li>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </header>



 {{ $slot  }}

    <div class="site-footer">
      <div class="container">
{{--        <div class="row mb-5">--}}
{{--          <div class="col-md-4">--}}
{{--            <h3 class="footer-heading mb-4">About Us</h3>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>--}}
{{--          </div>--}}
{{--          <div class="col-md-4">--}}

{{--            <div>--}}
{{--              <h3 class="footer-heading mb-4">Kontaktirajte nas</h3>--}}
{{--              <p>--}}
{{--                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>--}}
{{--                <a href="#"><span class="icon-twitter p-2"></span></a>--}}
{{--                <a href="#"><span class="icon-instagram p-2"></span></a>--}}
{{--                <a href="#"><span class="icon-rss p-2"></span></a>--}}
{{--                <a href="#"><span class="icon-envelope p-2"></span></a>--}}
{{--              </p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by Makogai
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
  <script src="{{asset("js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{asset("js/jquery-ui.js")}}"></script>
  <script src="{{asset("js/popper.min.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("js/jquery.stellar.min.js")}}"></script>
  <script src="{{asset("js/jquery.countdown.min.js")}}"></script>
  <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("js/bootstrap-datepicker.min.js")}}"></script>
  <script src="{{asset("js/aos.js")}}"></script>

  <script src="{{asset("js/main.js")}}"></script>
{{--  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}


  </body>
</html>
