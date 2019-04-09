<!DOCTYPE html>



<html lang="nl">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Omegabijles - Vind Snel en Gemakkelijk de Bijlesgever die Bij je Past @yield('title')</title>

<meta name="description" content="@yield('description')">

  @yield('meta')

   <link rel="icon" href="{{asset('/public/favicon.ico')}}">



  <link rel="stylesheet" href="{{asset('public/temp/styles/styles.css')}}">


  <style type="text/css">
    *:not(input.field) {    
    -webkit-user-select: auto;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    .work-cus {
      width: 90%;
    }

    #drift-widget{
      margin-right:25px !important;
    }
  </style>
</head>

    @yield('content')

  <script src="{{asset('public/temp/js/jquery.min.js')}}"></script>

  <script src="{{asset('public/temp/js/popper.min.js')}}"></script>

  <script src="{{asset('public/temp/js/bootstrap.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGQP5ZlgVr-tUIc2inBMeZgO7iZWkOuv8&libraries=places"
        type="text/javascript"></script>
  <script src="{{asset('public/temp/js/all.js')}}"></script>

  <script src="{{asset('public/temp/js/jquery-ui.js')}}"></script>

    <script src="{{asset('public/temp/js/coustom.js')}}"></script>

  @yield('scriptjs')


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MTVSMTB');</script>
<!-- End Google Tag Manager -->

	<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('d8dw5i9dyzfa');
</script>
<!-- End of Async Drift Code -->

<!--Cookiebot script-->
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="52c2e50a-ce3e-4fdc-8907-45ee95cb9c0f" type="text/javascript" async></script>
<!--End of Cookiebot script-->
 @stack("bottom_js")
</body>
</html>

 

   