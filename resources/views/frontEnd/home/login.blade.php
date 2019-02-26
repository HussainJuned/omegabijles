<!DOCTYPE html>



<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Omegabijles</title>

  <meta name="keywords" content="Travel planning, travel bundles, travel escapes, affordable travel">

  <meta name="description" content="Your clarify. One trip away. We create soul restoring journeys that inspire you to be you.">



  <link rel="stylesheet" href="{{url('public/temp/styles/styles.css')}}">



</head>

<body>

 



  

  <section class="login">

    <h3 class="my-5">Omegabijles:</h3>

    <div>

      <form method="POST" action="{{ url('/tutor/login') }}">
      {{ csrf_field() }}
        <h4 class="pb-4">Login informatie</h4>

        <div class="form-group">

          <input type="text" class="form-control py-3" name="email" placeholder="Je Omegabijles e-mailadres">
          @if ($errors->has('email'))
                            <span class="help-block" style="color:red">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
           @if ( Session::has('error') )
                                    <span class="help-block" style="color:red">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
                                @endif             

        </div>

        <div class="form-group py-3">

          <input type="password" class="form-control py-3" name="password" placeholder="Wachtwoord">
          @if ($errors->has('password'))
                                <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif 

        </div>

        <div class="form-group login-checkbox">

          <div>

            <input type="checkbox" name="remember" class="mr-3">Onthoud mij  

          </div>

          <div style="text-align: right;"><a href="{{ url('/tutor/forget-password') }}">Wachtwoord vergeten?</a></div>

        </div>

        <div class="form-group pt-4" style="text-align: center;">

          <button class="btn my-btn mr-5" style="width: 50%;">login</button>

        </div>

      </form>

    </div>

  </section>

  



  <script src="/temp/js/jquery.min.js"></script>

  <script src="/temp/js/popper.min.js"></script>

  <script src="/temp/js/bootstrap.min.js"></script>

  <script src="/temp/js/all.js"></script>

  <script src="/temp/js/jquery-ui.js"></script>

  <script src="/temp/js/coustom.js"></script>

</body>

</html>