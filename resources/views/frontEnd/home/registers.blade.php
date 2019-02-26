@extends('frontEnd.master1')
@section('css')
<link  href="{{ URL::to('public/frontEnd/css/datepicker.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="jcontainer clearfix">
            <h2 class="text-center">Aanmelden als bijlesgever</h2>
            <ul class="progress_bar text-center  clearfix">
                <li class="active">1. Persoonlijke info</li>
                <li>2. Vakken en voorkeur</li>
                <li>3. Jouw profiel</li>
            </ul>

            <form class="ms_form text-center clearfix" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" id="lat" name="lat" value="">
                <input type="hidden" id="long" name="long" value="">
                <fieldset class="step clearfix">
                    <h2 class="fs-title">1. Persoonlijke info</h2>
                    <p class="fs-subtitle">We hebben eerst wat persoonlijke info van je nodig.</p>

                    @if (Session::has('error') )
                                    <span style="color:red">{{ Session::get('error') }}</span>
                                @endif
                    <div class="form-group text-center">
                        <label class="d-block input_title">Wat is op jou van toepassing?</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" onclick="showInfo1()">
                                <input type="radio" class="form-check-input" name="tutorType" value="1" checked> Ik ben een leerling
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" onclick="showInfo2()">
                                <input type="radio" class="form-check-input" name="tutorType" value="2"> Ik ben een oud-leerling
                            </label>
                        </div>
                    </div>
                    <div class="reveal_additional_info">
                        <div class="add_info" id="info1">
                            <div class="form-group same_width">
                                <label for="select_class" class="input_title">In welke klas zit je?</label>
                                <select class="form-control" id="select_class" name="class">
                                    <option value="">Selecteer</option>
                                    <?php
                                        for($i =3; $i < 7; $i++){
                                    ?>
                                    <option value="{{ $i }}">Klas {{ $i }}</option>
                                    <?php } ?>
                                </select>
                                @if (Session::has('class') )
                                    <span style="color:red">{{ Session::get('class') }}</span>
                                @endif
                                
                            </div>
                        </div>
                        <div class="add_info" id="info2">
                            <div class="row text-left mb-4">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="select_graduation_year" class="d-block input_title text-left">In welk jaar deed je eindexamen?</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" id="select_graduation_year" name="graduationyear">
                                        <option value="">Selecteer</option>
                                        <?php
                                        for($i =2010; $i < 2019; $i++){
                                        ?>
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        <?php } ?>
                                    </select>
                                    @if (Session::has('graduationyear') )
                                        <span style="color:red">{{ Session::get('graduationyear') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="current_study" class="input_title">Welke studie doe je nu?</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="current_study" placeholder="Huidige studie" name="currentstudy">
                                    @if (Session::has('currentstudy') )
                                        <span style="color:red">{{ Session::get('currentstudy') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fixed_container">
                        <div class="row text-left">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname" class="input_title">Voornaam</label>
                                    <input type="text" class="form-control" id="firstname" placeholder="Voornaam" name="firstname" value="{{ old('firstname') }}">
                                    @if ($errors->has('firstname'))
                                        <span style="color:red"> {{ $errors->first('firstname') }}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname" class="input_title">Achternaam</label>
                                    <input type="text" class="form-control" id="lastname" placeholder="Achternaam" name="lastname" value="{{ old('lastname') }}">
                                    @if ($errors->has('lastname'))
                                        <span style="color:red"> {{ $errors->first('lastname') }}</span>
                                     @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="input_title">E-mailadres</label>
                            <input type="email" class="form-control" id="email" placeholder="E-mailadres" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                        <span style="color:red"> {{ $errors->first('email') }}</span>
                                     @endif
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="input_title">Telefoonnummer</label>
                            <input type="tel" class="form-control" id="telephone" placeholder="Telefoonnummer" name="telephone" value="{{ old('telephone') }}">
                            @if ($errors->has('telephone'))
                                        <span style="color:red"> {{ $errors->first('telephone') }}</span>
                                     @endif
                        </div>
                        <div class="row text-left">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="street" class="input_title">Straat</label>
                                    <input type="text" class="form-control" id="street" placeholder="Straat" name="street" value="{{ old('street') }}">
                                    @if ($errors->has('street'))
                                        <span style="color:red"> {{ $errors->first('street') }}</span>
                                     @endif
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="house_no" class="input_title">Huisnummer</label>
                                    <input type="text" class="form-control" id="house_no" placeholder="Huisnummer" name="houseno" value="{{ old('houseno') }}">
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
                                    <input type="text" class="form-control" id="postcode" placeholder="Postcode" onkeyup="searchTeacher(this.value)" name="tutorpostcode" value="{{ old('tutorpostcode') }}">
                                    @if ($errors->has('tutorpostcode'))
                                        <span style="color:red"> {{ $errors->first('tutorpostcode') }}</span>
                                     @endif
                                     @if ($errors->has('lat') && !$errors->has('tutorpostcode'))
                                        <span style="color:red"> {{ $errors->first('lat') }}</span>
                                     @endif

                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="residence" class="input_title">Woonplaats</label>
                                    <input type="text" class="form-control" id="residence" placeholder="Woonplaats" name="residence" value="{{ old('residence') }}">
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
                                    <input type="text" class="form-control" data-toggle="datepicker" placeholder="dd-mm-jjjj" name="birthdate"  value="{{ old('birthdate') }}">
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
                                            <input type="radio" class="form-check-input" name="gender" value="Man" checked> Man
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"  value="Vrouw"> Vrouw
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button_container row clearfix">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn2 next">2. Vakken en voorkeur <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="step clearfix">
                    <div class="fixed_container clearfix">
                        @if ($errors->has('course'))
                        <span style="color:red"> {{ $errors->first('course') }}</span>
                     @endif
                        <h2 class="fs-title">2. Vakken en voorkeur</h2>
                        <p class="fs-subtitle_lg">In welke vakken wil je bijles geven?</p>
                        <p class="fs-very-small">Je kunt bijlesgeven in de vakken waar je minimaal een 7,5 gemiddeld hebt gehaald</p>
                    </div>
                    <div class="row mb-3 d-none d-sm-flex">
                        <div class="col-sm-5 text-center">
                            <label class="input_title">Vakken</label>
                        </div>
                        <div class="col-sm-5 text-left">
                            <label class="input_title">Op welk niveau</label>
                        </div>
                        <div class="col-sm-2 bottom-right"></div>
                    </div>
                    <div id="course_container">
                        <div class="row course">
                            <div class="col-sm-5 text-center">
                                <h3>Wiskunde A</h3>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-7 text-md-left mb-3">
                                        <?php for($i=1; $i < 7; $i++){ ?>
                                        <div class="col-sm-7 text-md-left mb-3">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="course[Wiskunde A][]" value="{{ $i }}"> Klas {{ $i }}
                                                </label>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-5 bottom-right mb-3">Verwijder vak <img src="{{ URL::to('public/frontEnd/img/icons/remove.svg') }}" alt="delete" class="small_icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row course">
                            <div class="col-sm-5 text-center">
                                <h3>Wiskunde B</h3>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <?php for($i=1; $i < 7; $i++){ ?>
                                    <div class="col-sm-7 text-md-left mb-3">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="course[Wiskunde B][]" value="{{ $i }}"> Klas {{ $i }}
                                            </label>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-sm-5 bottom-right mb-3">Verwijder vak <img src="{{ URL::to('public/frontEnd/img/icons/remove.svg') }}" alt="delete" class="small_icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left" data-toggle="modal" data-target="#exampleModalCenter">
                            <div id="add_a_course">Voeg een vak toe <img src="{{ URL::to('public/frontEnd/img/icons/round-add-button.svg') }}" class="small_icon"></div>
                        </div>
                    </div>
                    <div class="button_container row">
                        <div class="col-sm-3 text-left">
                            <button type="button" class="btn btn2 previous"><i class="fas fa-arrow-left"></i>1. Persoonlijke info</button>
                        </div>
                        <div class="col-sm-5"></div>
                        <div class="col-sm-3 text-right">
                            <button type="button" class="btn btn2 next">3. Jouw profiel<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="step clearfix">
                    <h2 class="fs-title">3. Jouw profiel</h2>
                    <div class="fixed_container mt-5">
                        <div class="form-group">
                            <label for="password" class="input_title">Wachtwoord (voor je profiel)</label>
                            <input type="password" class="form-control" id="password" placeholder="Je wachtwoord" name="password" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                                        <span style="color:red"> {{ $errors->first('password') }}</span>
                                     @endif
                        </div>
                    </div>
                    <div class="fixed_container">
                        <div class="form-group">
                            <label for="retype_password" class="input_title">Herhaal wachtwoord</label>
                            <input type="password" class="form-control" id="retype_password" placeholder="Bevestig wachtwoord" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            @if ($errors->has('password_confirmation'))
                                        <span style="color:red"> {{ $errors->first('password_confirmation') }}</span>
                                     @endif
                        </div>
                        <div class="form-group">
                            <label for="about_meTextarea" class="input_title">Korte introductie over jezelf</label>
                            <textarea class="form-control" id="about_meTextarea" rows="5" name="briefintroduction" placeholder="Wie je bent, wat je doet, waarom je bijles geeft">{{ old('briefintroduction') }}</textarea>
                            @if ($errors->has('briefintroduction'))
                                        <span style="color:red"> {{ $errors->first('briefintroduction') }}</span>
                                     @endif
                        </div>
                        <div class="form-group">
                            <label for="help_studentTextarea" class="input_title">Hoe je de leerling gaat helpen om echt vooruit te gaan</label>
                            <textarea class="form-control" id="help_studentTextarea" rows="5" name="helpthestudent" placeholder="Leg kort uit hoe jij jouw bijlessen tot een succes maakt">{{ old('helpthestudent') }}</textarea>
                            @if ($errors->has('helpthestudent'))
                                        <span style="color:red"> {{ $errors->first('helpthestudent') }}</span>
                                     @endif
                        </div>
                        <div class="form-group">
                            <label for="more_about_meTextarea" class="input_title">Kort iets meer over jezelf (bijv. hobbies)</label>
                            <textarea class="form-control" id="more_about_meTextarea" rows="5" name="abitmore" placeholder="Wat vind je leuk om te doen naast school/studie? ">{{ old('abitmore') }}</textarea>
                            @if ($errors->has('abitmore'))
                                        <span style="color:red"> {{ $errors->first('abitmore') }}</span>
                                     @endif
                        </div>
                        <label class="input_title mt-5">Wanneer ben je beschikbaar om bijles te geven?</label>
                    </div>
                    @if ($errors->has('week'))
                        <span style="color:red"> {{ $errors->first('week') }}</span>
                     @endif
                    <div class="row mt-4">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Ma</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[mon][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[mon][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[mon][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Di</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[tue][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[tue][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[tue][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Woe</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[wed][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[wed][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[wed][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Do</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[thu][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[thu][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[thu][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Vrij</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[fri][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[fri][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[fri][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Za</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sat][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sat][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sat][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-sm-right text-center date_p">
                            <p>Zo</p>
                        </div>
                        <div class="col-sm-8 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sun][]" value="Ochtend"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sun][]" value="Middag"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sun][]" value="Avond"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="input_title mt-4">Heb je al ervaring met het geven van bijles?</label>
                    <div class="fixed_container text-left">
                        @if ($errors->has('experiencewithtutoring'))
                                        <span style="color:red"> {{ $errors->first('experiencewithtutoring') }}</span>
                                     @endif
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Ja, ik heb al 3 of meer leerlingen bijles gegeven"> Ja, ik heb al 3 of meer leerlingen bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Ja, ik heb al 1-2 leerlingen bijles gegeven"> Ja, ik heb al 1-2 leerlingen bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school"> Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Nee, nog niet"> Nee, nog niet
                            </label>
                        </div>
                    </div>
                    <label class="input_title mt-4">Heb je ervaring met hoogbegaafdheid?</label>
                        @if ($errors->has('experiencewithgiftedness'))
                                        <span style="color:red"> {{ $errors->first('experiencewithgiftedness') }}</span>
                                     @endif
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"> Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"> Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, in persoonlijke sfeer/door mijn studie"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                        
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Nee, niet specifiek"> Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                    <label class="input_title mt-4">Heb je ervaring met ADD/PDD NOS?</label>
                        @if ($errors->has('experiencewithaddpdd'))
                                        <span style="color:red"> {{ $errors->first('experiencewithaddpdd') }}</span>
                                     @endif
                    <div class="small_line_height">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"> Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven 
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"> Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, in persoonlijke sfeer/door mijn studie"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                       
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Nee, niet specifiek"> Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                    <label class="input_title mt-4">Heb je ervaring met ADHD?</label>
                        @if ($errors->has('experiencewithadhd'))
                                        <span style="color:red"> {{ $errors->first('experiencewithadhd') }}</span>
                                     @endif
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"> Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"> Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, in persoonlijke sfeer/door mijn studie"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                        
                    </div>
                    <div class="small_line_height">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Nee, niet specifiek">  Nee, niet specifiek 
                            </label>
                        </div>
                    </div>
                    <label class="input_title mt-4">Heb je ervaring met autisme?</label>
                        @if ($errors->has('experiencewithautisme'))
                                        <span style="color:red"> {{ $errors->first('experiencewithautisme') }}</span>
                                     @endif
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven"> Ja, al meerdere leerlingen met autisme geholpen 
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, ik heb al een leerling die dit heeft bijles gegeven">  Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, in persoonlijke sfeer/door mijn studie"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                       
                    </div>
                    <div class="small_line_height">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Nee, niet specifiek"> Nee, niet specifiek 
                            </label>
                        </div>
                    </div>
                    <label class="input_title mt-4">Voeg als laatste nog een leuke profielfoto toe</label>
                    @if ($errors->has('image'))
                                        <span style="color:red"> {{ $errors->first('image') }}</span>
                                     @endif
                    <div class="image-upload">
                        <label for="file-input">
                            <img src="{{ URL::to('public/frontEnd/img/icons/add-image.png') }}" id="profile_image" />
                        </label>
                        <input id="file-input" type="file" name="image"/>
                    </div>
                    <div class="form-check mt-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="confirmcheck" value="1"> Ik heb alle gegevens gecheckt en naar waarheid ingevuld,en ik ga akkoord met de <a href="#" target="_blank"> <u>algemene voorwaarden</u></a> en het <a href="#" target="_blank"> <u>cookies- en privacystatement</u>.</a>
                        </label><br>
                        @if ($errors->has('confirmcheck'))
                                        <span style="color:red"> {{ $errors->first('confirmcheck') }}</span>
                                     @endif
                    </div>
                    <div class="button_container row">
                        <div class="col-sm-3 text-left">
                            <button type="button" class="btn btn_link previous"><i class="fas fa-arrow-left"></i>2. Vakken en voorkeur</button>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5 text-md-right text-center">
                            <button type="submit" class="btn btn2 btn_lg">Verstuur!</button>
                        </div>
                    </div>
                   

                </fieldset>
            </form>
        </div>
        
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Voeg een vak toe </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="input_title">Selecteer een vak</label>
                        <select class="custom-select" id="select_course">
                            <option value="Aardrijkskunde" selected>Aardrijkskunde</option>
                            <option value="Biologie">Biologie</option>
                            <option value="Duits">Duits</option>
                            <option value="Economie">Economie</option>
                            <option value="Engels">Engels</option>
                            <option value="Filosofie">Filosofie</option>
                            <option value="Frans">Frans</option>
                            <option value="Geschiedenis">Geschiedenis</option>
                            <option value="Grieks">Grieks</option>
                            <option value="Latijn">Latijn</option>
                            <option value="Maatschappijvakken">Maatschappijvakken</option>
                            <option value="Natuurkunde">Natuurkunde</option>
                            <option value="Nederlands">Nederlands</option>
                            <option value="NLT">NLT</option>
                            <option value="Scheikunde">Scheikunde</option>
                            <option value="Wiskunde (onderbouw)">Wiskunde (onderbouw)</option>
                            <option value="Wiskunde A">Wiskunde A</option>
                            <option value="Wiskunde B">Wiskunde B</option>
                            <option value="Wiskunde C">Wiskunde C</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <div class="container pl-0 pr-0">
                            <div class="row no-gutters">
                                <div class="col-6 text-left">
                                    <button type="button" class="btn btn-secondary pr-4 pl-4" data-dismiss="modal">Cancel</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-primary pr-3 pl-3" id="modal_button_add">Voeg toe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection        

@section('script')
<script src="{{ URL::to('public/frontEnd/js/datepicker.js') }}"></script>
    <script>
        
        $('[data-toggle="datepicker"]').datepicker({format: 'dd-mm-yyyy'});
       // var date = $('datepicker').datepicker({ dateFormat: 'dd/mm/yy' }).val();
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPns7mDksSvNSzRWdLGc6RASWjqe2FrSc"
        type="text/javascript"></script>
    <script>
        
    function searchTeacher(value){
        let geocoder = new google.maps.Geocoder();
        geocoder.geocode({'address': value }, function(data, status) {
            
            if (status == google.maps.GeocoderStatus.OK) {
               var lat = data[0].geometry.location.lat();
               var lng = data[0].geometry.location.lng();
               document.getElementById('lat').value= lat
               document.getElementById('long').value= lng
            }else{
                document.getElementById('lat').value= ''
                document.getElementById('long').value= ''
            }
        })
    }

    var postcode = document.getElementById('postcode').value
    if(postcode){
        searchTeacher(postcode)
    }
</script>
@endsection