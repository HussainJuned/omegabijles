@extends('admin.layout.master')


@section('title')
    Change Password
@endsection

@section('mainContent')
<style type="text/css">
    .help-block{
        color:red;
    }
</style>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header text-center">
                        <h3 class="box-title">Verander wachtwoord</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                     <form role="form" method="post" action="{{ url('/admin/changepass') }}">
                        {{ csrf_field() }}
                         <div class="box-body">
                            <div class="form-group">
                                <label for="old_password">Oud wachtwoord</label>
                                <input type="password" class="form-control" id="old_password" name="old_password">
                                @if ($errors->has('old_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                                @if ( Session::has('mismatch') )
                                    <span class="help-block">
                                        <strong>{{ Session::get('mismatch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="new_password">Nieuw wachtwoord</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                                @if ($errors->has('new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="confirm_password">Bevestig nieuw wachtwoord</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                                @if ($errors->has('confirm_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Verander wachtwoord</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </section> 
@endsection