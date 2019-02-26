@extends('frontEnd.master1')



@section('css')

    <link rel="stylesheet" href="{{ URL::to('public/frontEnd/css/tutor_profile.css') }}">
    <style type="text/css">
        .fixed_button {
            height: 85px !important;
        }

        @media only screen and (max-width: 768px) {
            body > div.container-fluid > main > div.my_card > div > div.col-lg-8.col-md-8 > div.left_content > div:nth-child(11) > form > div:nth-child(8) > div > div {
                width: 130px;
            }

            body > div.container-fluid > main > div.my_card > div > div.col-lg-8.col-md-8 > div.left_content > div:nth-child(11) > form > div:nth-child(8) > div > div > div > iframe {
                margin-left: -60px;
            }

            body > div.container-fluid > main > div.my_card > div > div.col-lg-8.col-md-8 > div.left_content > div:nth-child(11) > form > div:nth-child(8) > div > div {
                width: 260px !important;
            }
        }

    </style>
@endsection

@section('content')

    <main class="dpadding">

        @if(Session::has('review_success'))

            <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">

                <strong>Success: </strong> {{ Session::get('review_success') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

        @endif

        <div class="back_text">

            <a href="{{ url('/searchtutor') }}"><i class="fas fa-long-arrow-alt-left"></i>
                <span> Terug naar resultaten</span></a>

        </div>

        <div class="my_card">

            <div class="row">

                <div class="col-lg-8 col-md-8">

                    <div class="row">

                        <div class="col-lg-4 profile_image">

                            <img src="{{ URL::to('public/uploads') }}/{{ $tutorInfo->image }}" alt="profile image">

                        </div>

                        <div class="col-lg-8 profile_title">

                            <div class="row">

                                <div class="col-md-8 name_tutor text-center text-md-left">

                                    <h1>{{ $tutorInfo->firstname }}</h1>

                                    <div class="star_ratings">

                                        @if(isset($avg_rating))

                                            @for($i=1; $i <= round($avg_rating); $i++)

                                                <i class="fas fa-star checked"></i>

                                            @endfor

                                            @for($i=round($avg_rating)+1; $i <= 5; $i++)

                                                <i class="fas fa-star"></i>

                                            @endfor

                                        @endif

                                    </div>


                                    <div class="tutor_icons text-left">

                                        @if($tutorInfo->tutor_type == 1)

                                            <div class="ti_box"><img
                                                        src="{{ URL::to('public/frontEnd/img/icons/graduation-cap.svg') }}"
                                                        alt="icon" style="width: 16px">
                                                <span>Leerling klas {{ $tutorInfo->current_class_for_student }} </span>
                                            </div>

                                        @endif

                                        @if($tutorInfo->tutor_type == 2)

                                            <div class="ti_box"><img
                                                        src="{{ URL::to('public/frontEnd/img/icons/graduation-cap.svg') }}"
                                                        alt="icon" style="width: 16px"> <span>Oud-Leerling </span></div>

                                        @endif

                                        <div class="ti_box"><img
                                                    src="{{ URL::to('public/frontEnd/img/icons/badge.svg') }}"
                                                    alt="icon" style="width: 12px">
                                            <span>Geselecteerd en getraind</span></div>

                                        <div class="ti_box"><img
                                                    src="{{ URL::to('public/frontEnd/img/icons/seccess.svg') }}"
                                                    alt="icon" style="width: 14px"> <span>Niet blij met de eerste les? Dan geld terug</span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="left_content">

                        <h3>Introductie</h3>

                        <p>{{ $tutorInfo->Briefintroduction }}</p>

                        <h3>Hoe ik je help</h3>

                        <p>{{ $tutorInfo->helpthestudent }}

                        </p>

                        <h3>Meer over mij</h3>

                        <p>{{ $tutorInfo->abitmore }}

                        </p>

                        <div class="single_block">

                            <h3>Ervaring met</h3>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Hoogbegaafdheid:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorExperience->experiencewithgiftedness }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>ADD/ PDD NOS:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorExperience->experiencewithaddpdd }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>ADHD:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorExperience->experiencewithadhd }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Autisme:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorExperience->experiencewithautisme }}</p>

                                </div>

                            </div>

                        </div>

                        <div class="single_block">

                            <h3>Vakken</h3>

                            @foreach($tutorCourse as $val)

                                <div class="row tabular">

                                    <div class="col-sm-6 left_cell">

                                        <p>{{ $val->coursename }}:</p>

                                    </div>

                                    <div class="col-sm-6 right_cell">

                                        <p>klas {{ $val->classes }}</p>

                                    </div>

                                </div>

                            @endforeach

                        </div>

                        <div class="single_block">

                            <h3>Mijn beschikbaarheid</h3>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Maandag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->mon != null?$tutorTime->mon:'-' }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Dinsdag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->tue != null?$tutorTime->tue:'-' }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Woensdag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->wed != null?$tutorTime->wed:'-' }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Donderdag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->thus != null?$tutorTime->thus:'-' }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Vrijdag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->fri != null?$tutorTime->fri:'-' }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Zaterdag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->sat != null?$tutorTime->sat:'-' }}</p>

                                </div>

                            </div>

                            <div class="row tabular">

                                <div class="col-sm-6 left_cell">

                                    <p>Zondag:</p>

                                </div>

                                <div class="col-sm-6 right_cell">

                                    <p>{{ $tutorTime->sun != null?$tutorTime->sun:'-' }}</p>

                                </div>

                            </div>

                        </div>

                        <div class="single_block">

                            <h3>Ervaringen</h3>

                            <div class="standout_review">

                                <span class="standout">{{ $avg_rating }}/5</span>

                                <span class="inline_ratings">

                                    @if(isset($avg_rating))

                                        @for($i=1; $i <= $avg_rating; $i++)

                                            <i class="fas fa-star checked"></i>

                                        @endfor

                                        @for($i=$avg_rating+1; $i <= 5; $i++)

                                            <i class="fas fa-star"></i>

                                        @endfor

                                    @endif

                                </span>

                                <span class="small_text">op basis van {{ count($ratings) }} reviews</span>

                            </div>

                            <div class="curricullar_reviews text-lg-left">


                                @foreach($ratings as $rating)

                                    <div class="row mb-3">

                                        <div class="col text-lg-right">

                                            <div class="row no-gutters">

                                                <div class="col-lg-7 text-lg-right">

                                                    <span class="review_title">{{ $rating->r_comment }}</span>

                                                </div>

                                                <div class="col-lg-5 text-lg-right">

                                                <span class="inline_ratings">

                                                    @for($i=1; $i <= $rating->r_rating; $i++)

                                                        <i class="fas fa-star checked"></i>

                                                    @endfor

                                                    @for($i=$rating->r_rating+1; $i <= 5; $i++)

                                                        <i class="fas fa-star"></i>

                                                    @endfor

                                                </span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col text_left">

                                            <span class="review_cmt col-lg-6"><strong>{{ $rating->r_name }}</strong>  op {{ $rating->created_at->format('d/m/Y') }}</span>

                                        </div>

                                    </div>



                                @endforeach





                                {{--<div class="row mb-3">

                                    <div class="col text-lg-right">

                                        <div class="row no-gutters">

                                            <div class="col-lg-7 text-lg-right">

                                                <span class="review_title">De bijlesgever is prettig om mee te werken</span>

                                            </div>

                                            <div class="col-lg-5 text-lg-right">

                                                <span class="inline_ratings">

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star"></i>

                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col text_left">

                                        <span class="review_cmt"> more text more text</span>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col text-lg-right">

                                        <div class="row no-gutters">

                                            <div class="col-lg-7 text-lg-right">

                                                <span class="review_title">Ik beveel de bijlesgever aan</span>

                                            </div>

                                            <div class="col-lg-5 text-lg-right">

                                                <span class="inline_ratings">

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star checked"></i>

                                                    <i class="fas fa-star"></i>

                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col text_left">

                                        <span class="review_cmt">more text textmore textmore</span>

                                    </div>

                                </div>--}}

                            </div>

                        </div>

                        <div class="single_block">

                            <h5>Beoordelingen</h5>

                            <form class="review_form" method="post"
                                  action="{{ route('tutor.review.store', ['id' => $tutorInfo->user_id]) }}">

                                @csrf

                                <input type="text" name="r_name" placeholder="Uw naam" class="form_control" required>

                                <input type="email" name="r_email" placeholder="Uw emailadres" class="form_control"
                                       required>

                                {{--<input type="number" name="r_rating" placeholder="Give Rating 1 to 5" class="form_control" min="1" max="5" step="1" required>--}}

                                <div class="my-3 text-left">Deze bijlesgever krijgt van mij:</div>

                                <div id="star-rating">

                                    <input type="radio" name="r_rating" class="rating" value="1"/>

                                    <input type="radio" name="r_rating" class="rating" value="2"/>

                                    <input type="radio" name="r_rating" class="rating" value="3"/>

                                    <input type="radio" name="r_rating" class="rating" value="4"/>

                                    <input type="radio" name="r_rating" class="rating" value="5"/>

                                </div>

                                <div class="mb-4"></div>

                                <textarea placeholder="Opmerkingen" name="r_comment" class="form_control"
                                          required></textarea>

                                <div class="mb-4" style="width:220px;">
                                    {!! NoCaptcha::renderJs() !!}

                                    {!! NoCaptcha::display() !!}

                                    @if ($errors->has('g-recaptcha-response'))

                                        <span class="help-block">

                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>

                                        </span>

                                    @endif

                                </div>


                                <button type="submit" class="btn btn-primary">Verstuur beoordeling</button>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4">

                    <div class="sticky-top right_side">

                        <div class="price text-center text-md-left">

                            <h4 data-toggle="modal" data-target="#priceModal" style="cursor: pointer">&euro;

                                <?php



                                if ($tutorInfo->tutor_type == 2) {

                                    echo '21';

                                } else {

                                    echo '15';

                                }



                                ?>

                                ,<span>- p/u</span></h4>

                        </div>

                        <div class="right_content">

                            <h3>Neem contact op met deze bijlesgever</h3>

                            @if (Session::has('tsuccess') )

                                <div class="alert alert-success">{{ Session::get('tsuccess') }}</div>

                            @endif

                            @if (Session::has('terror') )

                                <div class="alert alert-danger">{{ Session::get('terror') }}</div>

                            @endif

                            <form method="post" action="{{ url('/contacttutor') }}" class="contact_form">

                                {{ csrf_field()}}

                                <input type="hidden" name="tutorid" value="{{ $tutorInfo->id }}">

                                <input type="text" name="name" placeholder="Naam" class="form_control">

                                @if ($errors->has('name'))

                                    <span style="color:red"> {{ $errors->first('name') }}</span>

                                @endif

                                <input type="text" name="email" placeholder="Emailadres" class="form_control">

                                @if ($errors->has('email'))

                                    <span style="color:red"> {{ $errors->first('email') }}</span>

                                @endif

                                <div class="form-check text-left">

                                    <input class="form-check-input" type="radio" name="tutortype" id="exampleRadios1"
                                           value="leerling" checked>

                                    <label class="form-check-label" for="exampleRadios1">

                                        Ik ben een leerling

                                    </label>

                                </div>

                                <div class="form-check text-left mb-3">

                                    <input class="form-check-input" type="radio" name="tutortype" id="exampleRadios2"
                                           value="ouder">

                                    <label class="form-check-label" for="exampleRadios2">

                                        Ik ben een ouder

                                    </label>

                                </div>

                                @if ($errors->has('tutortype'))

                                    <span style="color:red"> {{ $errors->first('tutortype') }}</span>

                                @endif

                                <textarea placeholder="Bericht" name="description" class="form_control"></textarea>

                                @if ($errors->has('description'))

                                    <span style="color:red"> {{ $errors->first('description') }}</span>

                                @endif

                                <button type="submit" class="btn btn-availability btn-block pl-0 pr-0">Check
                                    beschikbaarheid
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

    <div class="fixed_button dpadding">

        <div class="beng">

            <div class="price text-left">

                <h4 data-toggle="modal" data-target="#priceModal">&euro; <?php



                    if ($tutorInfo->tutor_type == 2) {

                        echo '21';

                    } else {

                        echo '15';

                    }



                    ?>

                    ,<span>- p/u</span></h4>
            </div>

        </div>

        <div class="beng">

            <button type="button" class="btn btn-availability" data-toggle="modal" data-target="#myModal">

                Check beschikbaarheid

            </button>

        </div>

    </div>

    <!-- The Modal -->

    <div class="modal fade" id="myModal">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <!-- Modal Header -->

                <div class="modal-header">

                    <h3 class="modal-title">Neem contact op met deze bijlesgever</h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <!-- Modal body -->

                <div class="modal-body">

                    @if (Session::has('tsuccess') )

                        <div class="alert alert-success">{{ Session::get('tsuccess') }}</div>

                    @endif

                    @if (Session::has('terror') )

                        <div class="alert alert-danger">{{ Session::get('terror') }}</div>

                    @endif

                    <form method="post" action="{{ url('/contacttutor') }}" class="contact_form">

                        {{ csrf_field()}}

                        <input type="hidden" name="tutorid" value="{{ $tutorInfo->id }}">

                        <input type="text" name="name" placeholder="Naam" class="form_control">

                        @if ($errors->has('name'))

                            <span style="color:red"> {{ $errors->first('name') }}</span>

                        @endif

                        <input type="text" name="email" placeholder="Emailadres" class="form_control">

                        @if ($errors->has('email'))

                            <span style="color:red"> {{ $errors->first('email') }}</span>

                        @endif

                        <div class="form-check text-left">

                            <input class="form-check-input" type="radio" name="tutortype" id="exampleRadios1"
                                   value="leerling" checked>

                            <label class="form-check-label" for="exampleRadios1">

                                Ik ben een leerling

                            </label>

                        </div>

                        <div class="form-check text-left mb-3">

                            <input class="form-check-input" type="radio" name="tutortype" id="exampleRadios2"
                                   value="ouder">

                            <label class="form-check-label" for="exampleRadios2">

                                Ik ben een ouder

                            </label>

                        </div>

                        @if ($errors->has('tutortype'))

                            <span style="color:red"> {{ $errors->first('tutortype') }}</span>

                        @endif

                        <textarea placeholder="Bericht" name="description" class="form_control"></textarea>

                        @if ($errors->has('description'))

                            <span style="color:red"> {{ $errors->first('description') }}</span>

                        @endif

                        <button type="submit" class="btn btn-availability btn-block pl-0 pr-0">Check beschikbaarheid
                        </button>

                    </form>

                </div>

                <!-- Modal footer -->

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal -->

    <div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Prijzen info</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <P>Het uurtarief voor een leerling bedraagt €15,- p/u en voor een oud-leerling/student is dit €21,-
                        p/u. U betaalt maandelijks achteraf gemakkelijk en veilig via iDeal.</P>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Sluiten</button>

                </div>

            </div>

        </div>

    </div>

@endsection