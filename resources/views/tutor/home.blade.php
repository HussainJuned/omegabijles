@extends('tutor.layout.master') 


@section('mainContent')

 <div class="row">
    <div class="col-sm-2"></div>
    <div style="background-color: white;margin-bottom: 80px !important;" class="col-sm-8">
        <section class="content">

                <h2 style="text-align: left;font-size: 23px;font-weight: 600;" class="fs-title edit-info2">Fijn dat je er weer bent!  😄</h2>
                <p style="margin-bottom: 30px;font-size: 18px;margin-top: 11px;" class="fs-very-small dash4">Gebruik het menu hiernaast of navigeer snel naar:</p>
                
                <div class="dpadding">
                    <div class="row mb-4">
                        <a href="http://vps371315.ovh.net/roundcube/" target="_blank"><div class="col-md-4 dash1 dash2">
                            <h3 class="dash5"><i class="fa fa-envelope dash6"></i></h3>
                            <p class="mb-5 dash7">Email </p>
                        </div></a>

                        <a href="http://goo.gl/forms/Gi0nLmJpXzTOhQ5S2" target="_blank"><div class="col-md-4 dash1 dash2">
                            <h3 class="dash5"><i class="fa fa-clock-o dash6"></i></h3>
                            <p class="mb-5 dash7">Uren </p>
                        </div></a>
                        
                    </div>
                    <div class="row">
                        <a href="http://docs.google.com/document/d/14a65pMtk04PyrKzHW1OV69c5O3oHG1bCwgblVXyhP9E/edit?usp=sharing" target="_blank"><div class="col-md-4 dash1 dash2 dash9">
                            <h3 class="dash5"><i class="fa fa-check dash6"></i></h3>
                            <p class="mb-5 dash7 ">Evaluatie </p>
                        </div></a>
                        <a href="http://drive.google.com/drive/folders/1iNG7dWLO6bv5wW5uthX4Elzv06EiZ0Td?usp=sharing" target="_blank"><div class="col-md-4 dash1 dash2" target="_blank">
                            <h3 class="dash5"><i class="fa fa-file dash6"></i></h3>
                            <p class="mb-5 dash7">Documenten </p>
                        </div></a>
                        
                    </div>
                </div>
                @auth
                <div class="text-center"><a href="{{ url('/tutorprofile/') }}/{{ Auth::user()->id }}" target="_blank"><button style="border:0px;background-color: #4391F2;margin-bottom: 10px;" type="button" class="btn btn-success dash10">Bekijk mijn profiel</button></a></div>

                <p style="margin-bottom: 30px;font-size: 18px;margin-top: 11px;" class="fs-very-small dash8">Als je vragen hebt, stuur ons dan vooral even een berichtje.</p>
                @endauth
        </section>
    </div>
    <div class="col-sm-2"></div>
</div> 
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('public/adminn/style.css' ) }}">
@endsection

 