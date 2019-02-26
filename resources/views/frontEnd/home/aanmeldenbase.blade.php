<!DOCTYPE html>
<html lang="nl" id="page_event_create" class="step_nav progress_bar"  data-apps="ios,android" data-dateformat="DMY" data-timeformat="24" data-usertz="" data-accounttype="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Aanmelden als Bijlesgever bij Omegabijles! Kom Bijlesgeven bij Omegabijles </title>
    <link rel="icon" href="{{url('/public/favicon.ico')}}">
   <meta name="keywords" content="bijles, bijles geven, bijbaan, haarlem, bloemendaal, overveen, ijmuiden, velsen, santpoort, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles" />
    <meta name="description" content="✅ Goede verdiensten ✅ Bepaal Zelf Wanneer je Werkt ✅ Veel Voldoening. Meld je simpel aan.">
    <link rel="stylesheet" href="{{ asset('public/adminn/bower_components/font-awesome/css/font-awesome.min.css' ) }}">
    <link href="{{url('public/test/css.css')}}" rel="stylesheet"/>
    <link  href="{{ URL::to('public/frontEnd/css/datepicker.css') }}" rel="stylesheet">
    <link href="{{url('public/test/style.css')}}" rel="stylesheet"/>
    <style type="text/css">
      .small_line_height{
        padding-top: 0px !important
      }
      #eventwhat, #eventwhen, #eventwhere, #eventwho{
          pointer-events: none;
      }
        .mystyle{pointer-events: auto !important;}
        .dnone{display:none;}
        .dblock{display:block;}

    </style>

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

<nav class="navbar notloggedin" style="background:#4893ef ;color: #fff;">
    <!-- navbar-fixed-top -->
    <div class="navbar-header">
        <a href="{{ url('/') }}" class="navbar-brand logo" style="color: #fff;">
          Omegabijles.nl
        </a>
    </div>
</nav>
<div id="main">


<ul id="progress">
    <li class="eventwhat active" id="eventwhat" onclick="activeNav(1)">
        Start<div></div>
    </li>
    <!-- last -->
    <li class="eventwhen" id="eventwhen" onclick="activeNav(2)">
        Vakken <div></div>
    </li>
    <li class="eventwhere" id="eventwhere" onclick="activeNav(3)">
        Persoonlijke info<div></div>
    </li>
    <li class="eventwho" id="eventwho" onclick="activeNav(4)">
        Jouw profiel<div></div>
    </li>
</ul>
<?php
  $tempinfo = Session('tempinfo');
  $tempweek = Session('tempweek');


?>
<form method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
  {{ csrf_field()}}
<div id="steps">
    <div class="step step_categories active" style="min-height:100vh;overflow-x: scroll;">
        <div class="container my-5">
            <div class="row">
                <div class="col-xs-12 col-centered">
                    <div class="text-centered">
                        <h2 class="title">Aanmelden als bijlesgever</h2>
                        <p class="sub-title" data-formal="Kies een categorie" >Wat is op jou van toepassing?</p>
                    </div>

                </div>
            </div>
        </div>
        <div></div>
        <div class="container tutore__ask_ques">
          <div class="tutore__ask_ques_in">
              <input type="hidden" name="tutorType" id="tutorType" value="{{ $tempinfo != null? $tempinfo->tutor_type:'' }}">
              <div class="right" onclick="checkStart('1')">
                 <div class="form-group">
                   <button id="q1s"><img src="{{url('public/test/3.png')}}" alt="" width="100%"></button>
                   <p>Ik ben een leerling</p>

                 </div>
              </div>
              <div>
                 <div class="form-group" onclick="checkStart('2')">
                   <button id="q2s"><img src="{{url('public/test/4.png')}}" alt="" width="100%"></button>
                   <p>Ik ben een oud-leerling (/student)</p>
                 </div>
              </div>
              @if ($errors->has('tutorType'))
                <span style="color:red"> {{ $errors->first('tutorType') }}</span>
             @endif
          </div>
        </div>
        <div class="container tutore__anwser">
          <div class="question">
            <div class="display_b" id="question1">

              <div class="col-md-12" id="info1">
                <div class="add_info">
                  <div class="form-group same_width">
                      <label for="select_class" class="input_title">Op welke school zit je?</label>
                      <input class="form-control" placeholder="Jouw school" name="schoolname_for_s" value="{{ $tempinfo != null? $tempinfo->school:'' }}" onkeyup="checkStart(event)">
                      @if (Session::has('schoolname_for_s') )
                          <span style="color:red">{{ Session::get('schoolname_for_s') }}</span>
                      @endif
                  </div>
                </div>
              </div>

              <div class="col-md-12" id="info1">
                <div class="add_info">
                  <div class="form-group same_width">
                      <label for="select_class" class="input_title">In welke klas zit je?</label>
                      <select class="form-control" id="select_class" name="class" onchange="checkStart(event)">
                          <option value="">Selecteer</option>
                          <?php
                              for($i =3; $i < 7; $i++){
                          ?>
                          <option
                          @if($tempinfo != null && $tempinfo->class == $i)
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
              </div>
            </div>

            <div class="display_n" id="question2">
                <div class="col-md-12" id="info1">
                  <div class="add_info">
                    <div class="form-group same_width">
                        <label for="select_class" class="input_title">Op welke school heb je gezeten?</label>
                        <input class="form-control" name="schoolname_for_fs" placeholder="Jouw school" value="{{ $tempinfo != null? $tempinfo->school:'' }}" onkeyup="checkStart(event)">
                        @if (Session::has('schoolname_for_fs') )
                          <span style="color:red">{{ Session::get('schoolname_for_fs') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="col-md-12" id="info1">
                  <div class="add_info">
                    <div class="form-group same_width">
                        <label for="select_class" class="input_title">Welke studie doe je nu? (Even niks? Vul in dan in dat je een tussenjaar doet) </label>
                        <input type="text" class="form-control" id="currentstudy_for_fs" placeholder="Huidige studie" name="currentstudy_for_fs" value="{{ $tempinfo != null? $tempinfo->currentstudy:'' }}" onkeyup="checkStart(event)">
                        @if (Session::has('currentstudy_for_fs') )
                            <span style="color:red">{{ Session::get('currentstudy_for_fs') }}</span>
                        @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-12" id="info1">
                  <div class="add_info">
                    <div class="form-group same_width">
                        <label for="select_class" class="input_title">In welk jaar deed je eindexamen?</label>
                        <select class="form-control" id="select_graduation_year" name="graduationyear" onchange="checkStart(event)">
                              <option value="">Selecteer</option>
                              <?php
                              for($i =2010; $i <= date('Y'); $i++){
                              ?>
                              <option
                              @if($tempinfo != null && $tempinfo->graduation_year == $i)
                              selected="selected"
                              @endif
                              value="{{ $i }}">{{ $i }}</option>
                              <?php } ?>
                          </select>
                          @if (Session::has('graduationyear') )
                              <span style="color:red">{{ Session::get('graduationyear') }}</span>
                          @endif
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="step step_about">
        <div class="container">
            <div class="text-centered">
               <div class="row">
                  <div class="col-md-12 my-4" style="margin-bottom:160px;">
                    <h2 class="title" data-formal="Wat is de titel van de afspraak?" >Vakken</h2>
                    <p class="sub-title" data-formal="Typ zelf of kies een suggestie" >In welke vakken wil jij graag bijles geven?</p>

                    <div class="button__section">
                       @if ($errors->has('course'))
                        <span style="color:red"> {{ $errors->first('course') }}</span>
                        @endif
                      <ul>
                        <li class="btn btn-info btn__c accordion" id="bAardrijkskunde" onclick="chooseSubject(this, 'Aardrijkskunde')">Aardrijkskunde</li>
                        <div class="panel" style="display: none;" id="sAardrijkskunde"></div>

                        <li class="btn btn-info btn__c accordion" id="bBiologie" onclick="chooseSubject(this, 'Biologie')">Biologie</li>

                        <div class="panel" style="display: none;" id="sBiologie"></div>

                        <li class="btn btn-info btn__c accordion" id="bDuits" onclick="chooseSubject(this, 'Duits')">Duits</li>

                        <div class="panel" style="display: none;" id="sDuits"></div>

                        <li class="btn btn-info btn__c accordion" id="bEconomie" onclick="chooseSubject(this, 'Economie')">Economie</li>

                        <div class="panel" style="display: none;" id="sEconomie"></div>

                        <li class="btn btn-info btn__c accordion" id="bEngels" onclick="chooseSubject(this, 'Engels')">Engels</li>

                        <div class="panel" style="display: none;" id="sEngels"></div>
                        <li class="btn btn-info btn__c accordion" id="bFilosofie" onclick="chooseSubject(this, 'Filosofie')">Filosofie</li>

                        <div class="panel" style="display: none;" id="sFilosofie"></div>

                        <li class="btn btn-info btn__c accordion" id="bFrans" onclick="chooseSubject(this, 'Frans')">Frans</li>

                        <div class="panel" style="display: none;" id="sFrans"></div>

                        <li class="btn btn-info btn__c accordion" id="bGeschiedenis" onclick="chooseSubject(this, 'Geschiedenis')">Geschiedenis</li>

                        <div class="panel" style="display: none;" id="sGeschiedenis"></div>

                        <li class="btn btn-info btn__c accordion" id="bGrieks" onclick="chooseSubject(this, 'Grieks')">Grieks</li>

                        <div class="panel" style="display: none;" id="sGrieks"></div>

                        <li class="btn btn-info btn__c accordion" id="bLatijn" onclick="chooseSubject(this, 'Latijn')">Latijn</li>

                        <div class="panel" style="display: none;" id="sLatijn"></div>

                        <li class="btn btn-info btn__c accordion" id="bMO" onclick="chooseSubject(this, 'M&O')">M&O</li>
                        <div class="panel" style="display: none;" id="sMO"></div>

                        <li class="btn btn-info btn__c accordion" id="bMaatschappijleer" onclick="chooseSubject(this, 'Maatschappijleer')">Maatschappijleer</li>
                        <div class="panel" style="display: none;" id="sMaatschappijleer"></div>

                        <li class="btn btn-info btn__c accordion" id="bNatuurkunde" onclick="chooseSubject(this, 'Natuurkunde')">Natuurkunde</li>
                        <div class="panel" style="display: none;" id="sNatuurkunde"></div>

                        <li class="btn btn-info btn__c accordion" id="bNederlands" onclick="chooseSubject(this, 'Nederlands')">Nederlands</li>
                        <div class="panel" style="display: none;" id="sNederlands"></div>

                        <li class="btn btn-info btn__c accordion" id="bNLT" onclick="chooseSubject(this, 'NLT')">NLT</li>
                        <div class="panel" style="display: none;" id="sNLT"></div>

                        <li class="btn btn-info btn__c accordion" id="bScheikunde" onclick="chooseSubject(this, 'Scheikunde')">Scheikunde</li>
                        <div class="panel" style="display: none;" id="sScheikunde"></div>

                        <li class="btn btn-info btn__c accordion" id="bWiskundeonderbouw" onclick="chooseSubject(this, 'Wiskunde (onderbouw)')">Wiskunde (onderbouw)</li>
                        <div class="panel" style="display: none;" id="sWiskundeonderbouw"></div>

                        <li class="btn btn-info btn__c accordion" id="bWiskundeA" onclick="chooseSubject(this, 'Wiskunde A')">Wiskunde A</li>

                        <div class="panel" style="display: none;" id="sWiskundeA"></div>

                        <li class="btn btn-info btn__c accordion" id="bWiskundeB" onclick="chooseSubject(this, 'Wiskunde B')">Wiskunde B</li>

                        <div class="panel" style="display: none;" id="sWiskundeB"></div>

                        <li class="btn btn-info btn__c accordion" id="bWiskundeC" onclick="chooseSubject(this, 'Wiskunde C')">Wiskunde C</li>

                        <div class="panel" style="display: none;" id="sWiskundeC"></div>
                      </ul>
                    </div>
                  </div>
               </div>
            </div>
        </div>
    </div>

    <div class="step step_dates">
        <div class="container">
          <div class="row">
             <div class="col-md-12 my-4" style="margin-bottom:160px;">
                <h2 class="title" data-formal="Wat is de titel van de afspraak?" >Persoonlijke info</h2>
                <p class="sub-title" data-formal="Typ zelf of kies een suggestie" >We horen graag meer over je ;)</p>
                <div class="form">
                  <div class="row">


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Voornaam:</label>
                          <input type="text" class="form-control" name="firstname" placeholder="Voornaam" value="{{ $tempinfo != null? $tempinfo->firstname:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('firstname'))
                            <span style="color:red"> {{ $errors->first('firstname') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Achternaam:</label>
                          <input type="text" class="form-control" name="lastname" placeholder="Achternaam" value="{{ $tempinfo != null? $tempinfo->lastname:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('lastname'))
                            <span style="color:red"> {{ $errors->first('lastname') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Emailadres:</label>
                          <input type="text" class="form-control" name="email" placeholder="Emailadres" value="{{ $tempinfo != null? $tempinfo->email:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('email'))
                            <span style="color:red"> {{ $errors->first('email') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Telefoonnummer:</label>
                          <input type="text" class="form-control" name="telephone" placeholder="Telefoonnummer" value="{{ $tempinfo != null? $tempinfo->phone:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('telephone'))
                            <span style="color:red"> {{ $errors->first('telephone') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Straat:</label>
                          <input type="text" class="form-control" name="street" placeholder="Straat" value="{{ $tempinfo != null? $tempinfo->street:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('street'))
                            <span style="color:red"> {{ $errors->first('street') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Huisnummer:</label>
                          <input type="text" class="form-control" name="houseno" placeholder="Huisnummer" value="{{ $tempinfo != null? $tempinfo->houseno:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('houseno'))
                            <span style="color:red"> {{ $errors->first('houseno') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Postcode:</label>
                          <input type="text" class="form-control" name="tutorpostcode" placeholder="Postcode" value="{{ $tempinfo != null? $tempinfo->tutorpostcode:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('tutorpostcode'))
                            <span style="color:red"> {{ $errors->first('tutorpostcode') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Woonplaats:</label>
                          <input type="text" class="form-control" name="residence" placeholder="Woonplaats" value="{{ $tempinfo != null? $tempinfo->residence:'' }}" onkeyup="checkPersonInfo(event)">
                          @if ($errors->has('residence'))
                            <span style="color:red"> {{ $errors->first('residence') }}</span>
                          @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Geboortedatum:</label>
                          <input type="text" class="form-control" id="datepicker" name="birthdate" value="{{ $tempinfo != null? $tempinfo->birthdate:'' }}" onchange="checkPersonInfo(event)">
                           @if($errors->has('birthdate'))
                              <span style="color:red"> {{ $errors->first('birthdate') }}</span>
                           @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Geslacht:</label>
                          <div>
                           <input type="radio" class="form-check-input" name="gender" value="Man" {{ ($tempinfo != null && $tempinfo->gender == 'Man') || ($tempinfo != null && $tempinfo->gender) != 'Vrouw' ? 'checked':'' }} onclick="checkPersonInfo(event)"> Man
                          </div>
                          <div>
                          <input type="radio" class="form-check-input" name="gender"  value="Vrouw" {{ $tempinfo != null && $tempinfo->gender == 'Vrouw'? 'checked':'' }} onclick="checkPersonInfo(event)"> Vrouw
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>

    <div class="step step_times step step_locations eventwhere ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-4">
                   <div class="main-container">
                    <h2 class="title" data-formal="Wat is de titel van de afspraak?" >Jouw profiel</h2>
                    <p class="sub-title" data-formal="Typ zelf of kies een suggestie" >Ga voor een mooi profiel dat bij je past</p>
                     <div class="line"></div>
                    <div class="form form1">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Jouw wachtwoord (Minimaal 10 tekens, inclusief minimaal 1 cijfer en minimaal 1 afwijkend teken zoals @, # of %)</label>
                            <input type="password" class="form-control"  name="password" value="" onkeyup="checkProfile(event)">
                            @if ($errors->has('password'))
                              <span style="color:red"> {{ $errors->first('password') }}</span>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Herhaal je wachtwoord:</label>
                            <input type="password" class="form-control" name="password_confirmation" onkeyup="checkProfile(event)">
                            @if ($errors->has('password_confirmation'))
                              <span style="color:red"> {{ $errors->first('password_confirmation') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1">
                    <div class="form-group">
                        <label for="about_meTextarea" class="input_title">Korte introductie over jezelf</label>
                        <textarea class="form-control" id="about_meTextarea" rows="5" name="briefintroduction" placeholder="Wie je bent, wat je doet, waarom je bijles geeft" onkeyup="checkProfile(event)">{{ $tempinfo != null? $tempinfo->briefintroduction:'' }}</textarea>
                        @if ($errors->has('briefintroduction'))
                          <span style="color:red"> {{ $errors->first('briefintroduction') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="help_studentTextarea" class="input_title">Hoe je de leerling gaat helpen om echt vooruit te gaan</label>
                        <textarea class="form-control" id="help_studentTextarea" rows="5" name="helpthestudent" placeholder="Leg kort uit hoe jij jouw bijlessen tot een succes maakt en met wie jij graag aan de slag gaat" onkeyup="checkProfile(event)">{{ $tempinfo != null? $tempinfo->helpthestudent:'' }}</textarea>
                        @if ($errors->has('helpthestudent'))
                          <span style="color:red"> {{ $errors->first('helpthestudent') }}</span>
                       @endif
                    </div>

                    <div class="form-group">
                        <label for="more_about_meTextarea" class="input_title">Kort iets meer over jezelf (bijv. hobbies)</label>
                        <textarea class="form-control" id="more_about_meTextarea" rows="5" name="abitmore" placeholder="Wat vind je leuk om te doen naast school/studie? " onkeyup="checkProfile(event)">{{ $tempinfo != null? $tempinfo->abitmore:'' }}</textarea>
                        @if ($errors->has('abitmore'))
                                        <span style="color:red"> {{ $errors->first('abitmore') }}</span>
                                     @endif
                    </div>

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1 main_container_2">
                    <label class="input_title mt-5">Wanneer ben je beschikbaar om bijles te geven?</label><br>
                    @if ($errors->has('week'))
                            <span style="color:red;text-align: center"> {{ $errors->first('week') }}</span>
                         @endif


                    <div class="row mt-4">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Ma</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[mon][]" value="Ochtend"
                                    <?php

                                      if($tempweek != null && array_key_exists('mon', $tempweek)){
                                        if(in_array("Ochtend", $tempweek['mon'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[mon][]" value="Middag"
                                    <?php

                                      if($tempweek != null && array_key_exists('mon', $tempweek)){
                                        if(in_array("Middag", $tempweek['mon'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[mon][]" value="Avond"
                                    <?php

                                      if($tempweek != null && array_key_exists('mon', $tempweek)){
                                        if(in_array("Avond", $tempweek['mon'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Di</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[tue][]" value="Ochtend"
                                     <?php

                                      if($tempweek != null && array_key_exists('tue', $tempweek)){
                                        if(in_array("Ochtend", $tempweek['tue'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[tue][]" value="Middag"
                                    <?php

                                      if($tempweek != null && array_key_exists('tue', $tempweek)){
                                        if(in_array("Middag", $tempweek['tue'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[tue][]" value="Avond"
                                    <?php

                                      if($tempweek != null && array_key_exists('tue', $tempweek)){
                                        if(in_array("Avond", $tempweek['tue'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Woe</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[wed][]" value="Ochtend"
                                    <?php

                                      if($tempweek != null && array_key_exists('wed', $tempweek)){
                                        if(in_array("Ochtend", $tempweek['wed'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[wed][]" value="Middag"
                                    <?php

                                      if($tempweek != null && array_key_exists('wed', $tempweek)){
                                        if(in_array("Middag", $tempweek['wed'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[wed][]" value="Avond"
                                    <?php

                                      if($tempweek != null && array_key_exists('wed', $tempweek)){
                                        if(in_array("Avond", $tempweek['wed'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Do</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[thu][]" value="Ochtend"
                                    <?php

                                      if($tempweek != null && array_key_exists('thu', $tempweek)){
                                        if(in_array("Ochtend", $tempweek['thu'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[thu][]" value="Middag"
                                     <?php

                                      if($tempweek != null && array_key_exists('thu', $tempweek)){
                                        if(in_array("Middag", $tempweek['thu'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onkeyup="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[thu][]" value="Avond"
                                     <?php

                                      if($tempweek != null && array_key_exists('thu', $tempweek)){
                                        if(in_array("Avond", $tempweek['thu'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Vrij</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[fri][]" value="Ochtend"
                                     <?php

                                      if($tempweek != null && array_key_exists('fri', $tempweek)){
                                        if(in_array("Ochtend", $tempweek['fri'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[fri][]" value="Middag"
                                     <?php

                                      if($tempweek != null && array_key_exists('fri', $tempweek)){
                                        if(in_array("Middag", $tempweek['fri'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[fri][]" value="Avond"
                                     <?php

                                      if($tempweek != null && array_key_exists('fri', $tempweek)){
                                        if(in_array("Avond", $tempweek['fri'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Za</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sat][]" value="Ochtend"
                                     <?php

                                      if($tempweek != null && array_key_exists('sat', $tempweek)){
                                        if(in_array("Ochtend", $tempweek['sat'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sat][]" value="Middag"
                                    <?php

                                      if($tempweek != null && array_key_exists('sat', $tempweek)){
                                        if(in_array("Middag", $tempweek['sat'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sat][]" value="Avond"
                                    <?php

                                      if($tempweek != null && array_key_exists('sat', $tempweek)){
                                        if(in_array("Avond", $tempweek['sat'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 text-sm-right text-center date_p">
                            <p>Zo</p>
                        </div>
                        <div class="col-sm-9 text-sm-left text-center">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sun][]" value="Ochtend"
                                    <?php

                                      if($tempweek != null && array_key_exists('sun', $tempweek)){
                                        if(in_array("Avond", $tempweek['sun'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Ochtend
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sun][]" value="Middag"
                                    <?php

                                      if($tempweek != null && array_key_exists('sun', $tempweek)){
                                        if(in_array("Middag", $tempweek['sun'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Middag
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="week[sun][]" value="Avond"
                                     <?php

                                      if($tempweek != null && array_key_exists('sun', $tempweek)){
                                        if(in_array("Avond", $tempweek['sun'])){
                                          echo 'checked';
                                        }
                                      }

                                    ?>
                                    onclick="checkProfile(event)"> Avond
                                </label>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1 container_1 container_2">
                      <label class="input_title mt-4">Heb je al ervaring met het geven van bijles?</label><br>
                      @if ($errors->has('experiencewithtutoring'))
                                        <span style="color:red;text-align: center"> {{ $errors->first('experiencewithtutoring') }}</span>
                                     @endif
                      <div class="small_line_height">
                       <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Ja, ik heb al 3 of meer leerlingen bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithtutoring == 'Ja, ik heb al 3 of meer leerlingen bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al 3 of meer leerlingen bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Ja, ik heb al 1-2 leerlingen bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithtutoring == 'Ja, ik heb al 1-2 leerlingen bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al 1-2 leerlingen bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school"
                                 {{ $tempinfo != null && $tempinfo->experiencewithtutoring == 'Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school'? 'checked': ''}}
                                onclick="checkProfile(event)"> Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Nee, nog niet"
                                {{ $tempinfo != null && $tempinfo->experiencewithtutoring == 'Nee, nog niet'? 'checked': ''}}
                                onclick="checkProfile(event)"> Nee, nog niet
                            </label>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1 container_2">
                       <label class="input_title mt-4">Heb je ervaring met hoogbegaafdheid?</label><br>
                       @if ($errors->has('experiencewithgiftedness'))
                                        <span style="color:red;text-align: center"> {{ $errors->first('experiencewithgiftedness') }}</span>
                                     @endif
                      <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithgiftedness == 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithgiftedness == 'Ja, ik heb al een leerling die dit heeft bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                      </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, in persoonlijke sfeer/door mijn studie"
                                {{ $tempinfo != null && $tempinfo->experiencewithgiftedness == 'Ja, in persoonlijke sfeer/door mijn studie'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Nee, niet specifiek"
                                {{ $tempinfo != null && $tempinfo->experiencewithgiftedness == 'Nee, niet specifiek'? 'checked': ''}}
                                onclick="checkProfile(event)"> Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="main-container main-container_1 container_2">
                      <label class="input_title mt-4">Heb je ervaring met ADD/PDD NOS?</label><br>
                      @if ($errors->has('experiencewithaddpdd'))
                                        <span style="color:red;text-align: center"> {{ $errors->first('experiencewithaddpdd') }}</span>
                                     @endif
                        <div class="small_line_height">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithaddpdd == 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithaddpdd == 'Ja, ik heb al een leerling die dit heeft bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, in persoonlijke sfeer/door mijn studie"
                                {{ $tempinfo != null && $tempinfo->experiencewithaddpdd == 'Ja, in persoonlijke sfeer/door mijn studie'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>

                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Nee, niet specifiek"
                                {{ $tempinfo != null && $tempinfo->experiencewithaddpdd == 'Nee, niet specifiek'? 'checked': ''}}
                                onclick="checkProfile(event)"> Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1 container_2">
                    <label class="input_title mt-4">Heb je ervaring met ADHD?</label><br>
                      @if ($errors->has('experiencewithadhd'))
                                        <span style="color:red;text-align: center"> {{ $errors->first('experiencewithadhd') }}</span>
                                     @endif

                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithadhd == 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithadhd == 'Ja, ik heb al een leerling die dit heeft bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, in persoonlijke sfeer/door mijn studie"
                                {{ $tempinfo != null && $tempinfo->experiencewithadhd == 'Ja, in persoonlijke sfeer/door mijn studie'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Nee, niet specifiek"
                                {{ $tempinfo != null && $tempinfo->experiencewithadhd == 'Nee, niet specifiek'? 'checked': ''}}
                                onclick="checkProfile(event)">  Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1 container_2">
                    <label class="input_title mt-4">Heb je ervaring met autisme?</label><br>
                      @if ($errors->has('experiencewithautisme'))
                                        <span style="color:red;text-align: center"> {{ $errors->first('experiencewithautisme') }}</span>
                                     @endif
                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithautisme == 'Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, al meerdere leerlingen met autisme geholpen
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                {{ $tempinfo != null && $tempinfo->experiencewithautisme == 'Ja, ik heb al een leerling die dit heeft bijles gegeven'? 'checked': ''}}
                                onclick="checkProfile(event)">  Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>

                    <div class="small_line_height">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, in persoonlijke sfeer/door mijn studie"
                                {{ $tempinfo != null && $tempinfo->experiencewithautisme == 'Ja, in persoonlijke sfeer/door mijn studie'? 'checked': ''}}
                                onclick="checkProfile(event)"> Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Nee, niet specifiek"
                                {{ $tempinfo != null && $tempinfo->experiencewithautisme == 'Nee, niet specifiek"'? 'checked': ''}}
                                onclick="checkProfile(event)"> Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="main-container main-container_1 container_2" style="margin-bottom: 150px;">
                    <label class="input_title mt-4">Voeg als laatste nog een leuke profielfoto toe</label><br>
                    @if ($errors->has('image'))
                                        <span style="color:red;text-align: center"> {{ $errors->first('image') == 'The image failed to upload.'? '': $errors->first('image') }}</span>
                                     @endif
                     @if (!$errors->has('image') && Session::has('imageerr'))
                                        <span style="color:red;text-align: center"> {{ Session::get('imageerr') }}</span>
                                     @endif
                        <br>
                     <?php
                      if($tempinfo != null && $tempinfo->image != null) { ?>
                       <img height="200" width="200" src="{{ URL::to('public/uploads') }}/{{ $tempinfo->image }}">
                       <input type="hidden" name="oldimage" value="{{ $tempinfo->image }}">
                      <?php }
                     ?>
                    <div class="image-upload">
                        <input id="file-input" type="file" name="image" onchange="checkProfile(event)">
                    </div>
                    <div class="form-check mt-4">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="confirmcheck" value="1" onclick="checkProfile(event)"> Ik heb alle gegevens gecheckt en naar waarheid ingevuld,en ik ga akkoord met de <a href="{{ url('/algemenevoorwaarden') }}" target="_blank"> <u>algemene voorwaarden</u></a> en het <a href="{{ url('/privacyencookies') }}" target="_blank"> <u>cookies- en privacystatement</u>.</a>
                        </label><br>
                        @if ($errors->has('confirmcheck'))
                                        <span style="color:red"> {{ $errors->first('confirmcheck') }}</span>
                                     @endif
                    </div>
                  </div>
                </div>
            </div>
      </div>
    </div>
    <div class="clear"></div>
</div>

<div id="step_nav">
    <div class="container">
        <div class="row cus-row">
            <div class="col-abc">
              <button type="submit" id="regSubmit" style="display: none">submit</button>
                <div href="#" id="previous_step" class="previous_step button button-normal second-d-none" >Vorige</div>
                <div href="#" id="next_step" class="button button-normal dnone">Volgende</div>

            </div>
        </div>
    </div>
</div>
</form>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $( "#datepicker" ).datepicker({
            dateFormat : 'dd-mm-yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    </script>
    <script src="{{url('public/test/jquery.min.js')}}"></script>
    <script src="{{url('public/test/c.js')}}"></script>
    <script type="text/javascript">
    document.getElementById('q1s').style.border= '3px solid #0d67fc'
    document.getElementById('q2s').style.border= '0px solid #0d67fc'
    $("#question1").removeClass('display_n')
    $("#question1").addClass('display_b')
    $('#tutorType').val(1)
    </script>
    {{-- <script src="{{ URL::to('public/frontEnd/js/datepicker.js') }}"></script> --}}
    <script>
    var totalchecked = 0
    var checkbycourse = []
        // $('[data-toggle="datepicker"]').datepicker({format: 'dd-mm-yyyy'});
       // var date = $('datepicker').datepicker({ dateFormat: 'dd/mm/yy' }).val();
    function chooseOldSubject(key, value) {
        if(value) {
          $('#b' +  key).addClass('btnactive');
          subjects.push(key)
          let classhtml = ``
          for(var i =1; i < 7; i++) {
           var checked
           if(value.includes(i.toString())) {
            checked = 'checked'
           }else{
            checked = ''
           }
           classhtml += `<li>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" onclick="countCourse('${key}', 1, 'add', event)" name="course[${key}][]" value="${i}" ${checked}> Klas ${i}
                                </label>
                              </li>`
          }
          if(key.includes('&')) {
			     key = key.replace('&','')
            }
            if(key.includes(' ')) {
                key = key.replace(' ','')
            }
            if(key.includes('(') && key.includes(')','')) {
                key = key.replace('(','').replace(')','')
            }
          var subhtml = `<div class="panel">
                            <p class="py-5">Ik wil graag bijles geven in:</p>
                            <ul>
                              <li>${key}</li>
                              <li>voor</li>
                              ${classhtml}
                            <li class="closes" style="cursor:pointer;color:red;font-weight:bold" onclick="removeSubject('${key}')"><span style="color:red">Verwijderen</span></li>
                            </ul>
                          </div>`
                  $('#s'+ key).html(subhtml)
                  $('#s'+ key).show()
          }

    }

    var courses = <?php echo json_encode(Session('tempcourse')); ?>;
    if(courses){
      Object.keys(courses).forEach(function(key) {
        chooseOldSubject(key, courses[key])
        countCourse(key, courses[key].length, 'edit', null)
      })
    }


    var tutortype = "{{ $tempinfo != null? $tempinfo->tutor_type:0 }}"

    var tutortype = document.getElementById('tutorType').value
    var school = "{{ isset($tempinfo) ? $tempinfo->school: null }}"
    var classname = "{{ isset($tempinfo) ? $tempinfo->class: null}}"
    var currentstudy = "{{ $tempinfo != null ? $tempinfo->currentstudy:null}}"
    var graduationyear = "{{ $tempinfo != null ? $tempinfo->graduation_year:null}}"
    if(tutortype && tutortype == 1) {
      document.getElementById('q1s').style.border= '3px solid #0d67fc'
      document.getElementById('q2s').style.border= '0px solid #0d67fc'
      $("#question1").removeClass('display_n')

      $("#question1").addClass('display_b')



      $("#question2").removeClass('display_b')

      $("#question2").addClass('display_n')

      $('#tutorType').val(1)
    }else if(tutortype && tutortype == 2) {
      document.getElementById('q1s').style.border= '0px solid #0d67fc'
      document.getElementById('q2s').style.border= '3px solid #0d67fc'
      $("#question2").removeClass('display_n')

      $("#question2").addClass('display_b')



      $("#question1").removeClass('display_b')

      $("#question1").addClass('display_n')
      $('#tutorType').val(2)
    }

    var firstname = "{{ $tempinfo != null? $tempinfo->firstname: null}}"
    var lastname = "{{ $tempinfo != null? $tempinfo->lastname: null}}"
    var email = "{{ $tempinfo != null? $tempinfo->email: null}}"
    var telephone = "{{ $tempinfo != null? $tempinfo->phone: null}}"
    var street = "{{ $tempinfo != null? $tempinfo->street: null}}"
    var houseno = "{{ $tempinfo != null? $tempinfo->houseno: null}}"
    var tutorpostcode = "{{ $tempinfo != null? $tempinfo->tutorpostcode: null}}"
    var residence = "{{ $tempinfo != null? $tempinfo->residence: null}}"
    var birthdate = "{{ $tempinfo != null? $tempinfo->birthdate: null}}"
    var gender = "{{ $tempinfo != null? $tempinfo->gender: 'Man'}}"
    if (firstname && lastname && email && street && telephone && houseno && tutorpostcode && residence && birthdate && gender) {
      document.getElementById('eventwhere').innerHTML = 'Persoonlijke info <i style="font-size: 25px; margin-left: 10px;" class="fa fa-check-circle"></i>'

    } else {
      document.getElementById('eventwhere').innerHTML = 'Persoonlijke info'
    }

    var password = null
    var confirmpassword = null
    var briefintroduction = "{{ $tempinfo != null? $tempinfo->briefintroduction: null }}"
    var helpthestudent = "{{ $tempinfo != null? $tempinfo->helpthestudent:null }}"
    var abitmore = "{{ $tempinfo != null? $tempinfo->abitmore:null }}"
    var experiencewithtutoring = "{{ $tempinfo != null ? $tempinfo->experiencewithtutoring: null }}"
    var experiencewithgiftedness = "{{ $tempinfo != null ? $tempinfo->experiencewithtutoring: null }}"
    var experiencewithaddpdd = "{{ $tempinfo != null ? $tempinfo->experiencewithtutoring: null }}"
    var experiencewithadhd = "{{ $tempinfo != null ? $tempinfo->experiencewithtutoring: null }}"
    var experiencewithautisme = "{{ $tempinfo != null ? $tempinfo->experiencewithtutoring: null }}"
    var oldimage = "{{ $tempinfo != null ? $tempinfo->image: null }}"
    var confirmcheck = null
    var image = null
    var week = 0
    var weeks = <?php echo json_encode($tempweek); ?>;
    if (weeks) {
      Object.keys(weeks).forEach(function(key) {
        console.log(weeks[key].length)
        week += weeks[key].length
      })
    }

    </script>
    <script src="{{ URL::to('/public/frontEnd/js/anmelden.js') }}"></script>
</body>
</html>


