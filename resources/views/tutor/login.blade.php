<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title@yield('title')</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--Font Awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- my custom style -->
    <link rel="stylesheet" href="{{ URL::to('public/frontEnd/css/style.css') }}">
    @yield('css')
   
</head>

<body>
    <div id="preloader">
        <div id="loader">
        </div>
    </div>
    <div  class="container-fluid">
        <header class="sticky_top">
            <nav class="navbar navbar-expand-md navbar_custom navbar-dark dpadding top_nav">
                <!-- Brand -->
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{ URL::to('public/frontEnd/img/icons/logo_w@3x.svg') }}" alt="Logo"></a>
                <!-- Toggler/collapsibe Button -->
                
                <!-- Navbar links -->
                
            </nav>
        </header>
        @yield('content')
        
    </div>
    <script type="text/javascript" src="{{ URL::to('public/frontEnd/js/script.js') }}"></script>
    @yield('script')



<style type="text/css">
  .help-block{
    color:red;
  }
</style>
                 <section style="background:#f7fbff;" class="pt-5 pb-5">
            <div style="background:white;padding:9px;" class="fixed_container text-center">
                <h2 style="margin-bottom: -20px;margin-right: 34px;">Login</h2>

                
                <form  class="mt-5 mb-5" method="POST" action="{{ url('/tutor/login') }}">
                  {{ csrf_field() }}
                    <div  class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mailadres">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
                        @if ( Session::has('error') )
                                    <span class="help-block">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="pwd" placeholder="Wachtwoord">
                        @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif 
                    </div>
                    <div class="form-check text-left mb-5">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" value="1"> Onthoud mijn gegevens

                        </label>
                    </div>
                    <button type="submit" class="btn btn2 btn-block">Login</button>
                    <ul class="login-more text-left">
                        <li>
                            <span>Wachtwoord</span>
                            <a href="{{ url('/tutor/forget-password') }}" class="underline"> Vergeten?</a>
                        </li>
                       {{--  <li>
                            <span>Don’t have an account? Sign up to Nog geen account?</span>
                            <a href="contact.html" class="underline">Neem contact op</a>
                        </li> --}}
                    </ul>
                </form>
            </div>
        </section>

</body>

</html>