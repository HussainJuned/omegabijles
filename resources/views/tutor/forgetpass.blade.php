@extends('frontEnd.master')

@section('content')
<style type="text/css">
  .help-block{
    color:red;
  }
</style>
                 <section class="pt-5 pb-5">
            <div class="fixed_container text-center">
                <h2>Reset Passowrd</h2>
                @if ( Session::has('forgetemailsuccess') )
                    <div class="alert alert-success"> {{ Session::get('forgetemailsuccess') }}</div>
                @endif
                @if ( Session::has('invalidtokenerror') )
                    <div class="alert alert-danger"> {{ Session::get('invalidtokenerror') }}</div>
                @endif
                <div class="login_img_container">
                    <img src="{{ URL::to('public/frontEnd/img/icons/images-128x128.png') }}" alt="fav icon" class="img-fluid">
                </div>
                <form class="mt-5 mb-5" method="POST" action="{{ url('/tutor/forgetpassword') }}">
                  {{ csrf_field() }}
                    <div class="form-group">
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
                    <button type="submit" class="btn btn2 btn-block">Reset Passowrd</button>
                </form>
            </div>
        </section>
@endsection