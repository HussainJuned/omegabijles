@extends('tutor.layout.master') 


@section('mainContent')
<link rel="stylesheet" href="{{ asset('public/adminn/style.css') }}">
 <div class="row">
    <div class="col-sm-2"></div>
    <div style="background-color: white;margin-bottom: 80px !important;" class="col-sm-8">
        <section class="content">
            <form class="ms_form text-center " method="POST" action="{{ url('/tutor/info/update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="userid" value={{ $tutor->user_id }}>
                <h2 style="text-align: left;font-size: 24px;font-weight: 600;" class="fs-title edit-info">Persoonlijke info<div style="margin-right:21px;" class="text-center pull-right"><button style="border:0px;background-color: #4391F2;margin-bottom: 10px;" type="submit" class="btn btn-success profiel4 ">Wijzig</button></div></h2>

                @if (Session::has('error') )
                                    <span style="color:red">{{ Session::get('error') }}</span>
                                @endif            
             <div style="margin-top: 34px;" class="fixed_container">
              @if($tutor->tutor_type == 1)  
              <div class="row text-left profiel8">
                        <div class="col-sm-6">
                            <div class="form-group">
                             <div class="form-check form-check-inline">
                             <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="tutorType" value="{{ $tutor->tutor_type }}" checked> leerling
                             </label>
                             </div>
                            </div>
                        </div>
                        <div style="width: 38%;" class="col-sm-6">
                            <div class="reveal_additional_info">
                    <div class="add_info" id="info1">
                        <div class="form-group same_width">
                            <select class="form-control" id="select_class" name="class">
                                <option value="">Selecteer</option>
                                <?php
                                        for($i =3; $i < 7; $i++){
                                    ?>
                                    <option 
                                    @if($tutor->current_class_for_student == $i)
                                    selected="selected" 
                                    @endif
                                    value="{{ $i }}">Klas {{ $i }}</option>
                                    <?php } ?>
                            </select>
                            @if (Session::has('class') )
                                    <span style="color:red">{{ Session::get('class') }}</span>
                                @endif

                        </div>
                    </div>
<!--cut-->
                </div>
                        </div>
                    </div>
                @endif    
                @if($tutor->tutor_type == 2)
                <div class="row text-left profiel8">
                        <div class="col-sm-6">
                            <div class="form-group">
                             <div class="form-check form-check-inline">
                             <label class="form-check-label">
                                 <input type="radio" class="form-check-input" name="tutorType" value="{{ $tutor->tutor_type }}" checked> 
                                   Oud-leerling
                             </label>
                             </div>
                            </div>
                        </div>
                        <div style="width: 38%;" class="col-sm-6">
                            <div class="reveal_additional_info">
                    <div class="add_info" id="info1">
                        <div class="form-group same_width">
                            <select class="form-control" id="select_class" name="graduationyear">
                                <option value="">Selecteer</option>
                                <?php
                                        for($i =2010; $i < 2019; $i++){
                                    ?>
                                    <option 
                                     @if($tutor->graduation_year == $i)
                                    selected="selected" 
                                    @endif
                                    value="{{ $i }}"> {{ $i }}</option>
                                    <?php } ?>
                            </select>
                            @if (Session::has('graduationyear') )
                                    <span style="color:red">{{ Session::get('graduationyear') }}</span>
                                @endif

                        </div>
                    </div>
<!--cut-->
                </div>
                        </div>


                    </div>

                <div class="form-group">
                        <label for="email" class="input_title">Welke studie doe je nu?</label>
                        <input type="text" class="form-control" id="current_study" placeholder="Huidige studie" name="currentstudy" value="{{ $tutor->current_study_for_former_student }}"> 
                        
                </div>
                @endif 
                <div class="fixed_container">
                    <div class="row text-left">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname" class="input_title">Voornaam</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Voornaam" name="firstname" value="{{ $tutor->firstname }}">
                                @if ($errors->has('firstname'))
                                        <span style="color:red"> {{ $errors->first('firstname') }}</span>
                                     @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname" class="input_title">Achternaam</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Achternaam" name="lastname" value="{{ $tutor->lastname }}">
                                @if ($errors->has('lastname'))
                                        <span style="color:red"> {{ $errors->first('lastname') }}</span>
                                     @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="input_title">E-mailadres</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mailadres" name="email" value="{{ $user->email }}">
                        @if ($errors->has('email'))
                                        <span style="color:red"> {{ $errors->first('email') }}</span>
                                     @endif
                    </div>
                    <div class="form-group">
                        <label for="telephone" class="input_title">Telefoonnummer</label>
                        <input type="tel" class="form-control" id="telephone" placeholder="Telefoonnummer" name="telephone" value="{{ $tutor->phone }}">
                        @if ($errors->has('telephone'))
                                        <span style="color:red"> {{ $errors->first('telephone') }}</span>
                                     @endif
                    </div>
                    <div class="row text-left">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="street" class="input_title">Straat</label>
                                <input type="text" class="form-control" id="street" placeholder="Straat" name="street" value="{{ $tutor->street }}">
                                 @if ($errors->has('street'))
                                        <span style="color:red"> {{ $errors->first('street') }}</span>
                                     @endif
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="house_no" class="input_title">Huisnummer</label>
                                <input type="text" class="form-control" id="house_no" placeholder="Huisnummer" name="houseno" value="{{ $tutor->house }}">
                                @if ($errors->has('houseno'))
                                        <span style="color:red"> {{ $errors->first('houseno') }}</span>
                                     @endif
                            </div>
                        </div>
                    </div>
                    <div class="row text-left">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="postcode" class="input_title">Postcode</label>
                                <input type="text" class="form-control" id="postcode" placeholder="Postcode" name="tutorpostcode" value="{{ $tutor->postalcode }}">
                                @if ($errors->has('tutorpostcode'))
                                        <span style="color:red"> {{ $errors->first('tutorpostcode') }}</span>
                                     @endif
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="residence" class="input_title">Woonplaats</label>
                                <input type="text" class="form-control" id="residence" placeholder="Woonplaats" name="residence" value="{{ $tutor->residence }}">
                                @if ($errors->has('residence'))
                                        <span style="color:red"> {{ $errors->first('residence') }}</span>
                                     @endif
                            </div>
                        </div>
                    </div>
                    <div class="row text-left">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="date" class="input_title">Geboortedatum</label>
                                <input type="text" class="form-control" data-toggle="datepicker" placeholder="dd-mm-jjjj" name="birthdate" value="{{ date_format(date_create($tutor->birthdate),"d-m-Y") }}">
                                     @if($errors->has('birthdate'))
                                        <span style="color:red"> {{ $errors->first('birthdate') }}</span>
                                     @endif
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group text-md-left text-center">
                                <label for="" class="input_title">Geslacht</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="sex" value="Man" {{ $tutor->sex == 'Man'?'checked':'' }}> Man
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="sex" value="Vrouw" {{ $tutor->sex == 'Vrouw'?'checked':'' }}> Vrouw
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="text-center"><a href="#"><button style="border:0px;background-color: #4391F2;" type="submit" class="btn btn-success">Wijzig</button></a></div>
        </section>
    </div>
    <div class="col-sm-2"></div>
</div> 

@endsection

@section('css')
<link  href="{{ URL::to('public/frontEnd/css/datepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/adminn/style.css' ) }}">
@endsection

@section('js')
<script src="{{ URL::to('public/frontEnd/js/datepicker.js') }}"></script>
    <script>
        
        $('[data-toggle="datepicker"]').datepicker({format: 'dd-mm-yyyy'});
       // var date = $('datepicker').datepicker({ dateFormat: 'dd/mm/yy' }).val();
    </script>

@endsection