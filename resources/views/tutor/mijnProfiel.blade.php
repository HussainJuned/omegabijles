@extends('tutor.layout.master') 


@section('mainContent')
<link rel="stylesheet" href="{{ asset('public/adminn/style.css') }}">
 <div class="row">
    <div class="col-sm-2"></div>
    <form method="POST" action="{{ url('/tutor/updateMijnprofiel') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div style="background-color: white;margin-bottom: 80px !important;" class="col-sm-8 profiel6">
        <h2 style="text-align:left; font-size: 24px;font-weight: 600;"" class="fs-title profiel1 profiel7">Mijn profiel<div style="margin-right: 50px;" class="text-center pull-right"><button style="border:0px;background-color: #4391F2;margin-bottom: 10px;" type="submit" class="btn btn-success profiel4">Wijzig</button></div></h2>
                    
                    <label class="input_title mt-4 profiel3 profiel5">Profielfoto wijzigen</label>
                    @if ($errors->has('image'))
                                        <span style="color:red"> {{ $errors->first('image') }}</span>
                                     @endif
                    <div class="image-upload profiel3 profiel5">
                        <input type="hidden" name="oldimage" value="{{ $tutorinfo->image }}">
                        <label for="file-input">
                            <img src="{{ URL::to('public/uploads') }}/{{ $tutorinfo->image }}" id="profile_image" />
                        </label>
                        <input id="file-input" type="file" name="image"/>
                    </div>
                    <div class="fixed_container">

                        <div class="form-group">
                            <label for="about_meTextarea" class="input_title">Korte introductie over jezelf</label>
                            <textarea class="form-control" id="about_meTextarea" rows="5" name="briefintroduction" placeholder="Wie je bent, wat je doet, waarom je bijles geeft">{{ $tutorinfo->Briefintroduction }}</textarea>
                            @if ($errors->has('briefintroduction'))
                                        <span style="color:red"> {{ $errors->first('briefintroduction') }}</span>
                                     @endif
                        </div>
                        <div class="form-group">
                            <label for="help_studentTextarea" class="input_title">Hoe je de leerling gaat helpen om echt vooruit te gaan</label>
                            <textarea class="form-control" id="help_studentTextarea" rows="5" name="helpthestudent" placeholder="Leg kort uit hoe jij jouw bijlessen tot een succes maakt">{{ $tutorinfo->helpthestudent }}</textarea>
                            @if ($errors->has('helpthestudent'))
                                        <span style="color:red"> {{ $errors->first('helpthestudent') }}</span>
                                     @endif
                        </div>
                        <div class="form-group">
                            <label for="more_about_meTextarea" class="input_title">Kort iets meer over jezelf (bijv. hobbies)</label>
                            <textarea class="form-control" id="more_about_meTextarea" rows="5" name="abitmore" placeholder="Wat vind je leuk om te doen naast school/studie? ">{{ $tutorinfo->abitmore }}</textarea>
                            @if ($errors->has('abitmore'))
                                        <span style="color:red"> {{ $errors->first('abitmore') }}</span>
                                     @endif
                        </div>
                        <label  class="input_title mt-5">Wanneer ben je beschikbaar om bijles te geven?</label>
                    </div>
                    @if ($errors->has('week'))
                        <span style="color:red"> {{ $errors->first('week') }}</span>
                     @endif
                    <div class="row" style="margin-top:17px;">
                        <div class="col-sm-4 text-lg-right profiel5 ">
                            <p class="f-w-500">Ma</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center ">
                            <div class="checkbox-inline ">
                                <label class="f-w-500">
                                    <input type="checkbox"  name="week[mon][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->mon);$i++){ ?>
                                        @if($tutortime->mon[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[mon][]" value="Middag"
                                    <?php for($i = 0; $i < count($tutortime->mon);$i++){ ?>
                                        @if($tutortime->mon[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[mon][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->mon);$i++){ ?>
                                        @if($tutortime->mon[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4px;">
                        <div class="col-sm-4  text-lg-right profiel5">
                            <p class="f-w-500">Di</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center">
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[tue][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->tue);$i++){ ?>
                                        @if($tutortime->tue[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[tue][]" value="Middag"
                                     <?php for($i = 0; $i < count($tutortime->tue);$i++){ ?>
                                        @if($tutortime->tue[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[tue][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->tue);$i++){ ?>
                                        @if($tutortime->tue[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>                  
                    <div class="row" style="margin-top:4px;">
                        <div class="col-sm-4  text-lg-right profiel5">
                            <p class="f-w-500">Woe</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center">
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[wed][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->wed);$i++){ ?>
                                        @if($tutortime->wed[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[wed][]" value="Middag"
                                     <?php for($i = 0; $i < count($tutortime->wed);$i++){ ?>
                                        @if($tutortime->wed[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[wed][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->wed);$i++){ ?>
                                        @if($tutortime->wed[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4px;">
                        <div class="col-sm-4  text-lg-right profiel5">
                            <p class="f-w-500">Do</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center">
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[thus][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->thus);$i++){ ?>
                                        @if($tutortime->thus[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[thus][]" value="Middag"
                                     <?php for($i = 0; $i < count($tutortime->thus);$i++){ ?>
                                        @if($tutortime->thus[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[thus][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->thus);$i++){ ?>
                                        @if($tutortime->thus[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4px;">
                        <div class="col-sm-4  text-lg-right profiel5">
                            <p class="f-w-500">Vrij</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center">
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[fri][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->fri);$i++){ ?>
                                        @if($tutortime->fri[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[fri][]" value="Middag"
                                     <?php for($i = 0; $i < count($tutortime->fri);$i++){ ?>
                                        @if($tutortime->fri[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[fri][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->fri);$i++){ ?>
                                        @if($tutortime->fri[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4px;">
                        <div class="col-sm-4  text-lg-right profiel5">
                            <p class="f-w-500">Za</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center">
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[sat][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->sat);$i++){ ?>
                                        @if($tutortime->sat[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[sat][]" value="Middag"
                                     <?php for($i = 0; $i < count($tutortime->sat);$i++){ ?>
                                        @if($tutortime->sat[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[sat][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->sat);$i++){ ?>
                                        @if($tutortime->sat[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:4px;">
                        <div class="col-sm-4  text-lg-right profiel5">
                            <p class="f-w-500">Zo</p>
                        </div>
                        <div class="col-sm-8 text-left text-sm-center">
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[sun][]" value="Ochtend"
                                    <?php for($i = 0; $i < count($tutortime->sun);$i++){ ?>
                                        @if($tutortime->sun[$i] == 'Ochtend')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Ochtend
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[sun][]" value="Middag"
                                     <?php for($i = 0; $i < count($tutortime->sun);$i++){ ?>
                                        @if($tutortime->sun[$i] == 'Middag')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Middag
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="f-w-500">
                                    <input type="checkbox" name="week[sun][]" value="Avond"
                                    <?php for($i = 0; $i < count($tutortime->sun);$i++){ ?>
                                        @if($tutortime->sun[$i] == 'Avond')
                                            checked
                                        @endif  
                                    <?php } ?>
                                    > Avond
                                </label>
                            </div>
                        </div>
                    </div>
                    <label style="margin-top: 8px;" class="input_title mt-4 profiel1 profiel5">Heb je al ervaring met het geven van bijles?</label>
                    <div style="margin-top: 10px;" class="fixed_container text-left profiel9 profiel10 ">
                        @if ($errors->has('experiencewithtutoring'))
                                        <span style="color:red"> {{ $errors->first('experiencewithtutoring') }}</span>
                                     @endif
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Ja, ik heb al 3 of meer leerlingen bijles gegeven"
                                @if($tutorexperience->experiencewithtutoring == 'Ja, ik heb al 3 of meer leerlingen bijles gegeven')
                                checked
                                @endif
                                > Ja, ik heb al 3 of meer leerlingen bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Ja, ik heb al 1-2 leerlingen bijles gegeven"
                                @if($tutorexperience->experiencewithtutoring == 'Ja, ik heb al 1-2 leerlingen bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al 1-2 leerlingen bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school"
                                @if($tutorexperience->experiencewithtutoring == 'Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school')
                                checked 
                                @endif
                                > Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithtutoring" value="Nee, nog niet"
                                @if($tutorexperience->experiencewithtutoring == 'Nee, nog niet')
                                checked 
                                @endif
                                > Nee, nog niet
                            </label>
                        </div>
                    </div>
                    <label style="margin-top: 8px;" class="input_title mt-4 profiel1 profiel5">Heb je ervaring met hoogbegaafdheid?</label>
                        @if ($errors->has('experiencewithgiftedness'))
                                        <span style="color:red"> {{ $errors->first('experiencewithgiftedness') }}</span>
                                     @endif
                    <div style="margin-top: 10px;" class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"
                                @if($tutorexperience->experiencewithgiftedness == 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                @if($tutorexperience->experiencewithgiftedness == 'Ja, ik heb al een leerling die dit heeft bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Ja, in persoonlijke sfeer/door mijn studie"
                                @if($tutorexperience->experiencewithgiftedness == 'Ja, in persoonlijke sfeer/door mijn studie')
                                checked 
                                @endif
                                > Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                        
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithgiftedness" value="Nee, niet specifiek"
                                 @if($tutorexperience->experiencewithgiftedness == 'Nee, niet specifiek')
                                checked 
                                @endif
                                > Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                    <label style="margin-top: 8px;" class="input_title mt-4 profiel1 profiel5">Heb je ervaring met ADD/PDD NOS?</label>
                        @if ($errors->has('experiencewithaddpdd'))
                                        <span style="color:red"> {{ $errors->first('experiencewithaddpdd') }}</span>
                                     @endif
                    <div style="margin-top: 10px;" class="small_line_height profiel2">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"
                                 @if($tutorexperience->experiencewithaddpdd == 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                @if($tutorexperience->experiencewithaddpdd == 'Ja, ik heb al een leerling die dit heeft bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Ja, in persoonlijke sfeer/door mijn studie"
                                @if($tutorexperience->experiencewithaddpdd == 'Ja, in persoonlijke sfeer/door mijn studie')
                                checked 
                                @endif
                                > Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                       
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithaddpdd" value="Nee, niet specifiek"
                                @if($tutorexperience->experiencewithaddpdd == 'Nee, niet specifiek')
                                checked 
                                @endif
                                > Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                    <label style="margin-top: 8px;" class="input_title mt-4 profiel1 profiel5">Heb je ervaring met ADHD?</label>
                        @if ($errors->has('experiencewithadhd'))
                                        <span style="color:red"> {{ $errors->first('experiencewithadhd') }}</span>
                                     @endif
                    <div style="margin-top: 10px;" class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven"
                                @if($tutorexperience->experiencewithadhd == 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                @if($tutorexperience->experiencewithadhd == 'Ja, ik heb al een leerling die dit heeft bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Ja, in persoonlijke sfeer/door mijn studie"
                                @if($tutorexperience->experiencewithadhd == 'Ja, in persoonlijke sfeer/door mijn studie')
                                checked 
                                @endif
                                > Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                        
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithadhd" value="Nee, niet specifiek"
                                @if($tutorexperience->experiencewithadhd == 'Nee, niet specifiek')
                                checked 
                                @endif
                                >  Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                    <label style="margin-top: 8px;" class="input_title mt-4 profiel1 profiel5">Heb je ervaring met autisme?</label>
                        @if ($errors->has('experiencewithautisme'))
                                        <span style="color:red"> {{ $errors->first('experiencewithautisme') }}</span>
                                     @endif
                    <div style="margin-top: 10px;" class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven"
                                @if($tutorexperience->experiencewithautisme == 'Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven')
                                checked 
                                @endif
                                > Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven 
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, ik heb al een leerling die dit heeft bijles gegeven"
                                @if($tutorexperience->experiencewithautisme == 'Ja, ik heb al een leerling die dit heeft bijles gegeven')
                                checked 
                                @endif
                                >  Ja, ik heb al een leerling die dit heeft bijles gegeven
                            </label>
                        </div>
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Ja, in persoonlijke sfeer/door mijn studie"
                                @if($tutorexperience->experiencewithautisme == 'Ja, in persoonlijke sfeer/door mijn studie')
                                checked 
                                @endif
                                > Ja, in persoonlijke sfeer/door mijn studie
                            </label>
                        </div>
                       
                    </div>
                    <div class="small_line_height profiel2">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label f-w-500">
                                <input class="form-check-input" type="radio" name="experiencewithautisme" value="Nee, niet specifiek"
                                @if($tutorexperience->experiencewithautisme == 'Nee, niet specifiek')
                                checked 
                                @endif
                                > Nee, niet specifiek
                            </label>
                        </div>
                    </div>
                    
                    <div class="text-center"><a href="#"><button style="border:0px;background-color: #4391F2;margin-bottom: 10px;" type="submit" class="btn btn-success profiel4">Wijzig</button></a></div>
        </div>
        </form>
        </div>

<div class="col-sm-2 "></div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('public/adminn/style.css' ) }}">
@endsection

