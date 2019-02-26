<!DOCTYPE html>

<html lang="nl">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta_title')
     
   <link rel="icon" href="{{url('/public/favicon.ico')}}">
   
   
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="{{ URL::to('public/frontEnd/css/bootstrap.min.css') }}">
    @yield('css')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



    <script src="{{ URL::to('public/frontEnd/js/jquery-3.3.1.min.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="{{ URL::to('public/frontEnd/js/bootstrap.bundle.min.js') }}"></script>

    <!--Font Awesome-->

    <script src="{{ URL::to('public/frontEnd/js/fontawesome-all.min.js') }}"></script>

    <!-- my custom style -->

    <link rel="stylesheet" href="{{ URL::to('public/frontEnd/css/style.css') }}">

    <link rel="stylesheet" href="{{ URL::to('public/frontEnd/css/rating.css') }}">



    <!-- star rating js -->

    <script src="{{ URL::to('public/frontEnd/js/rating.js') }}"></script>

    @yield('css')

   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MTVSMTB');</script>
<!-- End Google Tag Manager -->

</head>



<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTVSMTB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="preloader">

        <div id="loader">

            <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="75" width="75" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="8"/></svg></div>

        </div>

    </div>

    <div class="container-fluid">

        <header class="sticky_top">

            <nav class="navbar navbar-expand-md navbar_custom navbar-dark dpadding top_nav">

                <!-- Brand -->

                <a class="navbar-brand" href="{{url('/')}}"><img src="{{ URL::to('public/frontEnd/img/icons/logo_w@3x.svg') }}" alt="Logo"></a>

                <!-- Toggler/collapsibe Button -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <!-- Navbar links -->

                @include('frontEnd.includes.sidebar')

            </nav>

        </header>

        @yield('content')

        @include('frontEnd.includes.footer')

    </div>

    <script type="text/javascript" src="{{ URL::to('public/frontEnd/js/script.js') }}"></script>
    <script type="text/javascript">
    function setSubject(value) {
        sessionStorage.setItem('footersubject', value)
        window.location = '{{ url('/') }}'
    }
</script>
    @yield('script')
    

</body>



</html>