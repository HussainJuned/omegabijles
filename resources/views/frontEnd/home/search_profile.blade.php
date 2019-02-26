@extends('frontEnd.master1')



@section('content')

        <section class="search_profile">

            <h2 class="dpadding bg2">Jouw potentiële bijlesgevers (<span id="totaltutor">{{ $tutorinfo != null ? count($tutorinfo) : '0' }}</span>)</h2>

            <div class="search_bar dpadding">

                <div class="row no-gutters">

                    <div class="col-4 text-center">

                        <button type="button" class="btn btn-link" id="filter">Filters</button>

                    </div>

                    <div class="col-5 drp_ctn">

                        <div class="sl">

                            Zoeken

                        </div>

                        <form class="sf">

                            <div class="form-row">

                                <div class="col-12">

                                    <label class="sr-only" for="inlineFormInputGroup">Input value</label>

                                    <div class="input-group mb-2">

                                        <div class="input-group-prepend">

                                            <div class="input-group-text"><img src="{{asset('public/frontEnd/img/icons/search_icon.png')}}" alt="Zoeken"></div>

                                        </div>

                                        <input type="search" class="form-control" id="inlineFormInputGroup" onkeyup="getKeyword(this.value)" placeholder="Naam bijlesgever">

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                    <div class="col-3 text-right">

                        <div class="dropdown dropleft">

                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="Dropleft">

                                Sorteer <img src="{{asset('public/frontEnd/img/icons/arrow-down.svg')}}">

                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item" onclick="getSort('bestrate')">Best gewaardeerd</a>

                                <a class="dropdown-item" href="#" onclick="getSort('name')">Naam</a>

                                <a class="dropdown-item" href="#" onclick="getSort('priceasc')">Prijs oplopend</a>

                                <a class="dropdown-item" href="#" onclick="getSort('pricedesc')">Prijs aflopend</a>

                                <a class="dropdown-item" href="#" onclick="getSort('experience')">Ervaring</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="dpadding search_contents">

                <div class="row">

                    <div class="col-md-4 filters text-center">

                        <form class="card filters_form" id="filter_box">

                            <label for="SelectVakken" class="input_title mt-3">Vak(ken):</label>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Aardrijkskunde" id="defaultCheck11">

                                <label class="form-check-label" for="defaultCheck11">

                                    Aardrijkskunde

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="Biologie" onclick="getSubjects(this.value)" id="defaultCheck7">

                                <label class="form-check-label" for="defaultCheck7">

                                    Biologie

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Duits" id="defaultCheck16">

                                <label class="form-check-label" for="defaultCheck16">

                                    Duits

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Economie" id="defaultCheck10">

                                <label class="form-check-label" for="defaultCheck10">

                                    Economie

                                </label>

                            </div>

                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Engels" id="defaultCheck14">

                                <label class="form-check-label" for="defaultCheck14">

                                    Engels

                                </label>

                            </div>

                            <p class="underline text-left pointer mb-2" data-toggle="collapse" data-target="#demo2">Toon meer</p>

                            <div class="collapse mt-0" id="demo2">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Filosofie" id="defaultCheck12">

                                    <label class="form-check-label" for="defaultCheck12">

                                        Filosofie

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Frans" id="defaultCheck15">

                                    <label class="form-check-label" for="defaultCheck15">

                                        Frans

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Geschiedenis" id="defaultCheck8">

                                    <label class="form-check-label" for="defaultCheck8">

                                        Geschiedenis

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Grieks" id="defaultCheck18">

                                    <label class="form-check-label" for="defaultCheck18">

                                        Grieks

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Latijn" id="defaultCheck17">

                                    <label class="form-check-label" for="defaultCheck17">

                                        Latijn

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Maatschappijleer" id="defaultCheck9">

                                    <label class="form-check-label" for="defaultCheck9">

                                        Maatschappijleer

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Natuurkunde" id="defaultCheck4">

                                    <label class="form-check-label" for="defaultCheck4">

                                        Natuurkunde

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Nederlands" id="defaultCheck13">

                                    <label class="form-check-label" for="defaultCheck13">

                                        Nederlands

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="NLT" id="defaultCheck6">

                                    <label class="form-check-label" for="defaultCheck6">

                                        NLT

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Scheikunde" id="defaultCheck5">

                                    <label class="form-check-label" for="defaultCheck5">

                                        Scheikunde

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde (onderbouw)" id="defaultCheck1">

                                    <label class="form-check-label" for="defaultCheck1">

                                        Wiskunde (onderbouw)

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde A" id="defaultCheck1">

                                    <label class="form-check-label" for="defaultCheck1">

                                        Wiskunde A

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde B" id="defaultCheck2">

                                    <label class="form-check-label" for="defaultCheck2">

                                        Wiskunde B

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getSubjects(this.value)" value="Wiskunde C" id="defaultCheck3">

                                    <label class="form-check-label" for="defaultCheck3">

                                        Wiskunde C

                                    </label>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Ik zit in klas:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getClasses(value)">

                                    <option>Alle klassen</option>

                                    <?php for($i=1; $i < 7; $i++){ ?>

                                    <option value="{{ $i }}">Klas {{ $i }}</option>

                                    <?php } ?>

                                    

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Ik wil bijles van een:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getTutorType(this.value)">

                                    <option value="1">Een leerling</option>

                                    <option value="2">Een oud-leerling/student</option>

                                    <option selected="selected" value=''>Maakt niet uit</option>

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Ervaring:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getExperience(this.value)">

                                    <option value="3">Al meer dan 3 leerlingen bijles gegeven</option>

                                    <option value="2">Al 1-2 leerlingen bijles gegeven</option>

                                    <option value="1" selected="selected">Maakt niet uit</option>

                                </select>

                            </div>

                            <div class="form-group">

                                <label for="SelectVakken" class="input_title">Uurtarief:</label>

                                <select class="form-control custom-select" id="SelectVakken" onchange="getPrice(this.value)">

                                    <option value="1">€13,- (leerling)</option>

                                    <option value="2">€19,- (oud-leerling/student)</option>

                                    <option selected="selected" value="">Maakt niet uit</option>

                                </select>

                            </div>

                            <label for="SelectVakken" class="input_title mt-4">Beschikbaarheid:</label>

                            <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'mon')" id="defaultCheck19">

                                    <label class="form-check-label" for="defaultCheck19">

                                        Maandag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'mon')" id="defaultCheck20">

                                    <label class="form-check-label" for="defaultCheck20">

                                        Maandag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'mon')" id="defaultCheck21">

                                    <label class="form-check-label" for="defaultCheck21">

                                        Maandag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'tue')" id="defaultCheck22">

                                    <label class="form-check-label" for="defaultCheck22">

                                        Dinsdag: ochtend

                                    </label>

                                </div>

                            <p class="underline text-left pointer mb-2" data-toggle="collapse" data-target="#demo">Toon meer</p>

                            <div class="collapse mt-0" id="demo">

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'tue')" id="defaultCheck23">

                                    <label class="form-check-label" for="defaultCheck23">

                                        Dinsdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'tue')" value="avond" id="defaultCheck24">

                                    <label class="form-check-label" for="defaultCheck24">

                                        Dinsdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'wed')" value="ochtend" id="defaultCheck25">

                                    <label class="form-check-label" for="defaultCheck25">

                                        Woensdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'wed')" id="defaultCheck26">

                                    <label class="form-check-label" for="defaultCheck26">

                                        Woensdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'wed')" value="avond" id="defaultCheck27">

                                    <label class="form-check-label" for="defaultCheck27">

                                        Woensdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'thus')" id="defaultCheck28">

                                    <label class="form-check-label" for="defaultCheck28">

                                        Donderdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'thus')" value="middag" id="defaultCheck29">

                                    <label class="form-check-label" for="defaultCheck29">

                                        Donderdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'thus')" id="defaultCheck30">

                                    <label class="form-check-label" for="defaultCheck30">

                                        Donderdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'fri')" value="ochtend" id="defaultCheck31">

                                    <label class="form-check-label" for="defaultCheck31">

                                        Vrijdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="middag" onclick="getTutorTime(this.value, 'fri')"id="defaultCheck32">

                                    <label class="form-check-label" for="defaultCheck32">

                                        Vrijdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'fri')" value="avond" id="defaultCheck33">

                                    <label class="form-check-label" for="defaultCheck33">

                                        Vrijdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'sat')" id="defaultCheck34">

                                    <label class="form-check-label" for="defaultCheck34">

                                        Zaterdag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'sat')" value="middag" id="defaultCheck35">

                                    <label class="form-check-label" for="defaultCheck35">

                                        Zaterdag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'sat')" id="defaultCheck36">

                                    <label class="form-check-label" for="defaultCheck36">

                                        Zaterdag: avond

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="ochtend" onclick="getTutorTime(this.value, 'sun')" id="defaultCheck37">

                                    <label class="form-check-label" for="defaultCheck37">

                                        Zondag: ochtend

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" onclick="getTutorTime(this.value, 'sun')" value="middag" id="defaultCheck38">

                                    <label class="form-check-label" for="defaultCheck38">

                                        Zondag: middag

                                    </label>

                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox" value="avond" onclick="getTutorTime(this.value, 'sun')" id="defaultCheck39">

                                    <label class="form-check-label" for="defaultCheck39">

                                        Zondag: avond

                                    </label>

                                </div>

                            </div>

                            {{--<div class="text-center">

                                <button type="submit" class="btn btn-primary blue">Filter</button>

                            </div> --}}

                            <div class="text-center">

                                <button type="reset" class="btn btn-link underline">Reset filters</button>

                            </div>

                        </form>

                    </div>

                    <div class="col-md-8 results_container">

                        <div id="content">

                            @if($tutorinfo)

                        @foreach($tutorinfo as $data)

                        <div class="single_profile">

                            <div class="row">

                                <div class="profile_img">

                                    <img src="{{asset('public/uploads')}}/{{ $data->image }}" alt="prfl img">

                                </div>

                                <div class="col">

                                    <div class="row">

                                        <div class="col">

                                            <h2 class="tutor_name">

                                  <a href="{{ url('/tutorprofile/') }}/{{ $data->user_id }}">{{ $data->firstname }}</a>

                                </h2>

                                        </div>

                                        <div class="col text-right">

                                            <h2 class="pricings">€<?php 



                                            if($data->tutor_type == 2){

                                              echo '19';  

                                            }else{

                                                echo '13';

                                            }



                                            ?>,- p/u</h2>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-lg-8">

                                            <div class="star_ratings">

                                              @for($i=1; $i <= round($data->avgrating); $i++)

                                                <i class="fas fa-star checked"></i>

                                              @endfor

                                              @for($i = round($data->avgrating) + 1; $i <= 5; $i++)

                                                <i class="fas fa-star"></i>

                                              @endfor

                                            </div>

                                            <address>{{ $data->coursename }}</address>

                                            {{ nl2br($data->Briefintroduction) }}

                                        </div>

                                        <div class="col-lg-4 justify_end">
                                            <a class="btn btn-primary" href="{{ url('/tutorprofile/') }}/{{ $data->user_id }}">Bekijk profiel <img src="{{asset('public/frontEnd/img/icons/arrow-right.svg')}}" alt="arrow-right">
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        @endforeach

                                @endif

                        </div>

                        <!-- Holds your page information!! -->

                        <input type="hidden" id="page" value="1" />

                        <div id="total">

                            <input type="hidden" id="max_page" value="{{ $tutorinfo != null?count($tutorinfo):'0' }}" />

                        </div>

                        



                        <!-- Your End of page message. Hidden by default -->

                        <div id="end_of_page" style="text-align:center;display:none">

                            <hr/>

                      *    <span></span>
                        </div>

                        <p class="small_p">

                            Bekijk de profielen van onze bijlesgevers en kies gemakkelijk de bijlesgever die bij je past. Liever persoonlijk advies of lijkt jouw bijlesgever er niet tussen te zitten? Neem dan <a href="contact.html" class="underline">contact</a> op via de livechat of via de Contact pagina</p>

                        <p class="small_p">Onze bijlesgevers hebben allemaal minimaal een 7,5 voor het vak waarin ze bijles geven en hebben een training gevolgd. Ze zullen binnen 24 uur contact met je opnemen.

                        </p>

                    </div>

                </div>

            </div>

        </section>

@endsection



@section('script')

    <script type="text/javascript">

        var type = 'onload'

        $('#end_of_page').hide();

        var outerPane = $('#content'),

        didScroll = false;



        $(window).scroll(function() { //watches scroll of the window

            didScroll = true;

        });



        //Sets an interval so your window.scroll event doesn't fire constantly. This waits for the user to stop scrolling for not even a second and then fires the pageCountUpdate function (and then the getPost function)

        setInterval(function() {

            if (didScroll){

               didScroll = false;

               if(($(document).height()-$(window).height())-$(window).scrollTop() < 1){

                pageCountUpdate(); 

                }

           }

        }, 250);



        //This function runs when user scrolls. It will call the new posts if the max_page isn't met and will fade in/fade out the end of page message

        function pageCountUpdate(){

            var page = parseInt($('#page').val());

            var max_page = parseInt($('#max_page').val());



            if(max_page > 0){

               $('#page').val(page+1);

               if(type == 'onload'){

                getPosts();

            }else {

                var pp = $('#page').val();

                getPaginateData(pp)

            }

            $('#end_of_page').hide();

            } else {

              $('#end_of_page').fadeIn();

            }

        }





        //Ajax call to get your new posts

        function getPosts(){

            var page = parseInt($('#page').val());

            $.ajax({

                type: "GET",

                url: '{{ \Request::route()->getName() }}'  + '?page=' + page, // whatever your URL is

                beforeSend: function(){ //This is your loading message ADD AN ID

                    $('#content').append("<div id='loading' class='text-center'>Loading news items...</div>");

                },

                complete: function(){ //remove the loading message

                  $('#loading').remove()

                },

                success: function(data) { // success! YAY!! Add HTML to content container

                   

                   var html = $('<div />').append(data).find('#content').html()

                   var total = $('<div />').append(data).find('#total').html()

                    $('#total').html(total);

                    var totaltutor = $('#totaltutor').html();

                    var max_page = parseInt($('#max_page').val());

                    totaltutor = parseInt(totaltutor) + parseInt(max_page)

                    $('#totaltutor').html(totaltutor)

                    $('#content').append(html);

                }

             });



        } //end of getPosts function



        var subjects = []

        var classes, tutortype, price, sortitem,searchtext,experience

        var sat = []

        var mon = []

        var tue = []

        var wed = []

        var thus = []

        var fri = []

        var sun = []

        function getSubjects(value) {

            var checkValueExist = subjects.includes(value);

            if(checkValueExist){

                subjects.remove(value)

            }else{

                subjects.push(value)

            }

            getPaginateData(1)

            console.log(subjects)

        }



        function getClasses(value){

            classes = value

            console.log(classes)

            getPaginateData(1)

        }



        function getTutorType(value){

            tutortype = value

            getPaginateData(1)

            console.log(tutortype)

        }



        function getPrice(value){

            price = value

            getPaginateData(1)

        }



        function getTutorTime(value, day){

            if(day == 'sat'){

                let checkValueExist = sat.includes(value);

                if(checkValueExist){

                    sat.remove(value)

                }else{

                    sat.push(value)

                }

            }

            if(day == 'sun'){

                let checkValueExist = sun.includes(value);

                if(checkValueExist){

                    sun.remove(value)

                }else{

                    sun.push(value)

                }

            }

            if(day == 'mon'){

                let checkValueExist = mon.includes(value);

                if(checkValueExist){

                    mon.remove(value)

                }else{

                    mon.push(value)

                }

            }

            if(day == 'tue'){

                let checkValueExist = tue.includes(value);

                if(checkValueExist){

                    tue.remove(value)

                }else{

                    tue.push(value)

                }

            }

            if(day == 'wed'){

                let checkValueExist = wed.includes(value);

                if(checkValueExist){

                    wed.remove(value)

                }else{

                    wed.push(value)

                }

            }

            if(day == 'thus'){

                let checkValueExist = thus.includes(value);

                if(checkValueExist){

                    thus.remove(value)

                }else{

                    thus.push(value)

                }

            }

            if(day == 'fri'){

                let checkValueExist = fri.includes(value);

                if(checkValueExist){

                    fri.remove(value)

                }else{

                    fri.push(value)

                }

            }

            getPaginateData(1)

            console.log(sat, sun, mon, tue, wed,thus,fri)

        }



        function getSort(value){

            sortitem = value

            getPaginateData(1)

        }



        function getKeyword(value){

            searchtext = value

            getPaginateData(1)

        }



        function getExperience(value){

            experience = value

            getPaginateData(1)

        }



        function getPaginateData(value){

         var data = {}

         var token = $('meta[name="csrf-token"]').attr('content')

         if(value == 1){

            document.getElementById('page').value = 1

         }

        data._token = token;

        data.subjects = subjects;

        data.classes = classes;

        data.tutortype = tutortype;

        data.price = price;

        data.sortitem = sortitem;

        data.searchtext = searchtext;

        data.experience = experience

        data.sat = sat;

        data.mon = mon;

        data.tue = tue;

        data.wed = wed;

        data.thus = thus;

        data.fri = fri;

        data.sun = sun;

         var url = '{{ url('/search/filter') }}?page=' + value

         $.ajax({

            url: url,

            data:data,

            method: 'POST',              

            success: function(data){

                type = 'filter'

                if(value == 1){

                    showData(data)

                }else {

                    showPaginateData(data);

                }

                

            }

        });

      }



      function showData(data){

        let alldata = data.data

        if(alldata.length > 0){

            var html = ''

            for(var i =0; i < alldata.length; i++){

                 html += '<div class="single_profile"><div class="row"><div class="profile_img"><img src="{{asset('public/uploads')}}/'+ alldata[i].image +'" alt="prfl img"></div><div class="col"><div class="row"><div class="col"><h2 class="tutor_name"><a href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">' + alldata[i].firstname + '</a></h2></div><div class="col text-right"><h2 class="pricings">€'

                 if(alldata[i].tutor_type == 2) {

                    html += '18'

                 }else{

                    html += '11'

                 }

                 html += ',- p/u</h2></div></div><div class="row"><div class="col-lg-8"><div class="star_ratings">';

                 for(var j=0; j < Math.round(alldata[i].avgrating); j++){

                    html += '<i class="fas fa-star checked"></i>'

                 }



                 for(var k = Math.round(alldata[i].avgrating) + 1; k <= 5; k++){

                    html += '<i class="fas fa-star"></i>'

                 }

                 

                 html += '</div><address>' + alldata[i].coursename + '</address>'+ nl2br(alldata[i].Briefintroduction) +'</div><div class="col-lg-4 justify_end"><a class="btn btn-primary" href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">Bekijk profiel <img src="{{asset('public/frontEnd/img/icons/arrow-right.svg')}}" alt="arrow-right"></a></div></div></div></div></div>'

            }

            document.getElementById('content').innerHTML = html 

            document.getElementById('totaltutor').innerHTML = alldata.length

            document.getElementById('max_page').value = alldata.length



        } else {

            var html = '<p class="text-center">No data found</p>'

            document.getElementById('content').innerHTML = html

            document.getElementById('totaltutor').innerHTML = '0'

            document.getElementById('max_page').value = 0

        } 

      }



      function showPaginateData(data){

        let alldata = data.data

        if(alldata.length > 0){

            var html = ''

            for(var i =0; i < alldata.length; i++){

                 html += '<div class="single_profile"><div class="row"><div class="profile_img"><img src="{{asset('public/uploads')}}/'+ alldata[i].image +'" alt="prfl img"></div><div class="col"><div class="row"><div class="col"><h2 class="tutor_name"><a href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">' + alldata[i].firstname + '</a></h2></div><div class="col text-right"><h2 class="pricings">€'

                 if(alldata[i].tutor_type == 2) {

                    html += '18'

                 }else{

                    html += '11'

                 }

                 html += ',- p/u</h2></div></div><div class="row"><div class="col-lg-8"><div class="star_ratings">';

                 for(var j=0; j < Math.round(alldata[i].avgrating); j++){

                    html += '<i class="fas fa-star checked"></i>'

                 }



                 for(var k = Math.round(alldata[i].avgrating) + 1; k <= 5; k++){

                    html += '<i class="fas fa-star"></i>'

                 }

                 

                 html += '</div><address>' + alldata[i].coursename + '</address>'+ nl2br(alldata[i].Briefintroduction) +'</div><div class="col-lg-4 justify_end"><a class="btn btn-primary" href="{{ url('/tutorprofile/') }}/' + alldata[i].user_id + '">Bekijk profiel <img src="{{asset('public/frontEnd/img/icons/arrow-right.svg')}}" alt="arrow-right"></a></div></div></div></div></div>'

            }

            var totaltutor = document.getElementById('totaltutor').innerHTML

            $('#totaltutor').html(parseInt(totaltutor) + alldata.length)

            $('#content').append(html)

            document.getElementById('max_page').value = alldata.length

        }else{

            document.getElementById('max_page').value = 0

        }

      }



      function nl2br (str) {

        var breakTag = '<br />'

        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');

      }

        Array.prototype.remove = function() {

            var what, a = arguments, L = a.length, ax;

            while (L && this.length) {

                what = a[--L];

                while ((ax = this.indexOf(what)) !== -1) {

                    this.splice(ax, 1);

                }

            }

            return this;

        };

    </script>

@endsection