@extends('frontEnd.master')

@section('content')
<style type="text/css">
  .help-block{
    color:red;
  }
</style>
        @if($changepass)
            <section class="pt-5 pb-5">
                <div class="fixed_container text-center">
                    <h2>Wachtwoord wijzigen</h2>
                    @if ( Session::has('passchangesuccess') )
                        <div class="alert alert-success text-center" style="color:red;font-size:20px;font-weight:bold;"> {{ Session::get('passchangesuccess') }}</div>
                    @endif
                    @if ( Session::has('passchangerror') )
                        <div class="alert alert-danger text-center" style="color:red;font-size:20px;font-weight:bold;"> {{ Session::get('passchangerror') }}</div>
                    @endif
                    <div class="login_img_container">
                        <img src="{{ URL::to('public/frontEnd/img/icons/images-128x128.png') }}" alt="fav icon" class="img-fluid">
                    </div>
                    <form class="mt-5 mb-5" method="POST" action="{{ url('/tutor/forgetchangepass') }}">
                      {{ csrf_field() }}
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="pwd" placeholder="Wachtwoord">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" id="pwd" placeholder="Wachtwoord">
                            @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif 
                        </div>
                        <button type="submit" class="btn btn2 btn-block">Wachtwoord wijzigen</button>
                    </form>
                </div>
            </section>
        @endif
@endsection