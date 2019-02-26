@extends('frontEnd.master1')
@section('css')
<link  href="{{ URL::to('public/frontEnd/css/datepicker.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="jcontainer">
    <div class="inner_container">
        <div class="inner_container">
            <h2>Wij hebben jouw profiel aangemaakt! Wat nu?</h2>
            <div class="success_icon">
                <svg id="successAnimation" class="animated" xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 70 70">
                    <path id="successAnimationResult" fill="#D8D8D8" d="M35,60 C21.1928813,60 10,48.8071187 10,35 C10,21.1928813 21.1928813,10 35,10 C48.8071187,10 60,21.1928813 60,35 C60,48.8071187 48.8071187,60 35,60 Z M23.6332378,33.2260427 L22.3667622,34.7739573 L34.1433655,44.40936 L47.776114,27.6305926 L46.223886,26.3694074 L33.8566345,41.59064 L23.6332378,33.2260427 Z" />
                    <circle id="successAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent" />
                    <polyline id="successAnimationCheck" stroke="#979797" stroke-width="2" points="23 34 34 43 47 27" fill="transparent" />
                </svg>
            </div>
             <div class="success_social">
            <p>Blijf sowieso op de hoogte via social media:</a></p>
                <div><a target="_blank" href="https://www.instagram.com/omegabijles/"><img src="{{ URL::to('/public/frontEnd/img/icons/instagram_icon.svg') }}" alt="istagram" class="instragram_icon"> <span>Volg ons op Instagram</span></a></div>
                <div><a target="_blank" href="https://www.facebook.com/omegabijles"><img src="{{ URL::to('/public/frontEnd/img/icons/fb_icon.svg') }}" alt="fb" class="fb_icon"> <span>Like ons op Facebook</span></a></div>
            </div>
            <p class="success_p">Wij benaderen je binnen 24 uur via Whatsapp om een (Skype) gesprek in te plannen om kennis te maken, uitleg te geven en zodat jij al je vragen kan stellen als je die hebt</p>
            <p class="success_p">Als onze verwachtingen matchen, zetten we na het (Skype) gesprek jouw profiel online!</p>
            <div class="success_small">
                <p>Heb je nu al vragen?</p>
                <p>Stuur ze naar <a href="mailto:info@omegabijles.nl">info@omegabijles.nl</a></p>
            </div>
           
        </div>
    </div>
</div>
@endsection        
