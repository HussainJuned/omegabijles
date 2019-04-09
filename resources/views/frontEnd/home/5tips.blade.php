<meta property="og:type" content="website">
<meta property="og:site_name" content="Omegabijles">
<meta property="og:description"
      content="Bijes in Haarlem, Bloemendaal of omgeving? Zoek gemakkelijk via Omegabijles de bijlesgever die bij je past! ✅ Bijles aan huis. ✅Voor VMBO, HAVO, VWO en gymnasium. ✅We helpen met de stof en geven persoonlijke tips mee. "/>
<meta name="description"
      content="Op zoek naar Bijles in Haarlem, Bloemendaal of omgeving? Neem contact met ons op. Wij helpen graag verder! ✅ Bijles aan huis. ✅ Voor VMBO, HAVO, VWO en gymnasium. ✅ We helpen met de stof en geven persoonlijke tips mee. ">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="Language" content="nederlands"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="keywords"
      content="contact, omegabijles, bijles, begeleiding, haarlem, bloemendaal, overveen, ijmuiden, velsen, santpoort, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium"/>
<meta name="robots" content="index, follow"/>

<Title>Omegabijles - 5 tips</Title>

@extends('frontEnd.master')
@section('content')
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTVSMTB"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="container-fluid main-header contact-main-header">
        @include('frontEnd.includes.nav')
        <div class="container work-cus-new">
            <h2 class="ml-2">5 Tips</h2>
        </div>
    </header>

    <section class="bg-white-2 d-flex">
        <div class="container">
            <div class="my-5 py-5">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('public/frontEnd/img/five_tips_book.png') }}" alt="five tips book"
                             class="img-fluid">
                    </div>
                    <div class="col-sm-6">
                        <h1 class="standout_h">Ook beter leren?</h1>
                        <h2 class="secondary_h">In dit gratis ebook zul je gaan ontdekken:</h2>
                        <ul class="small_notes">
                            <li><i class="fas fa-check-circle"></i>Hoe je efficient leert en meer tijd over houdt voor
                                andere dingen
                            </li>
                            <li><i class="fas fa-check-circle"></i>Welke shortcuts je kunt nemen om beter te leren</li>
                            <li><i class="fas fa-check-circle"></i>Hoe je meer motivatie voor school krijgt</li>
                            <li><i class="fas fa-check-circle"></i>Hoe je het best kunt focussen</li>
                            <li><i class="fas fa-check-circle"></i>Hoe je kunt plannen</li>
                            <li><i class="fas fa-check-circle"></i>Wat de ultieme leerhack is die iedereen vergeet</li>
                            <li><i class="fas fa-check-circle"></i>Kortom welke stappen je moet nemen om volgende toets
                                te knallen
                            </li>
                        </ul>
                        <button class="btn my-btn lb">Ontvang direct het ebook</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_standalone">
        <p>Bekijk nu wat je wel niet kunt bereiken man man man</p>
    </section>

    <section class="video_intro">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="video_container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ICCorYMwuUg" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>

    <section class="sec_standalone">
        <div class="sec_arrow_down"></div>
        <p>Bekijk nu wat je wel niet kunt bereiken man man man</p>
    </section>

    <section class="sec_tasks">
        <p>Hier nog even wat simpele tekst</p>
        <ul class="task_list mb-5">
            <li>- List</li>
            <li>- List</li>
            <li>- List</li>
        </ul>
        <button class="btn my-btn mlb mb-4" data-toggle="modal" data-target="#proModal">Klik hier op deze button
        </button>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="proModal" tabindex="-1" role="dialog" aria-labelledby="proModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="proModalLabel">Modal title</h5>--}}
                    <div class="progress task_progress" style="height: 20px; width: 100%">
                        <div class="progress-bar" role="progressbar" style="width: 16%;" aria-valuenow="16"
                             aria-valuemin="0" aria-valuemax="100">16%
                        </div>
                    </div>

                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>--}}
                </div>
                <div class="modal-body">

                    <div class="tq">
                        <form action="" id="regiration_form">
                            <fieldset>
                                <h1>Voor een persoonlijke experience willen we graag weten: Wat is jouw grootste
                                    frustratie op
                                    dit moment? (Vraag 1/5)</h1>


                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios1">
                                        k haal lagere cijfers dan ik zou kunnen
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios1" value="option1" checked>
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label rlabel" for="exampleRadios2">
                                        Ik leer super hard maar het komt er niet uit op de toets
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios2" value="option2">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios3">
                                        Ik ben te veel tijd kwijt aan huiswerk maken en leren
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios3" value="option3">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios4">
                                        Ik snap gewoon niet hoe ik het beste kan leren
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios4" value="option4">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios5">
                                        Mijn docent legt het super slecht uit
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios5" value="option5">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <button type="button" class="btn btn-primary next">volgende</button>
                            </fieldset>

                            <fieldset>
                                <h1>Welk niveau doe je? (Vraag 2/5)</h1>


                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios21">
                                        VMBO
                                        <input class="form-check-input" type="radio" name="exampleRadios2"
                                               id="exampleRadios21" value="option1" checked>
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label rlabel" for="exampleRadios22">
                                        HAVO

                                        <input class="form-check-input" type="radio" name="exampleRadios2"
                                               id="exampleRadios22" value="option2">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios23">

                                        VWO
                                        <input class="form-check-input" type="radio" name="exampleRadios2"
                                               id="exampleRadios23" value="option3">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios24">


                                        Gymnasium

                                        <input class="form-check-input" type="radio" name="exampleRadios2"
                                               id="exampleRadios24" value="option4">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <button type="button" class="btn btn-secondary previous">voorgaand</button>
                                <button type="button" class="btn btn-primary next">volgende</button>

                            </fieldset>

                            <fieldset>
                                <h1>n welke klas zit je op dit moment? (Vraag 3/5)</h1>


                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios31">
                                        Klas 1
                                        <input class="form-check-input" type="radio" name="exampleRadios3"
                                               id="exampleRadios31" value="option1" checked>
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label rlabel" for="exampleRadios32">
                                        Klas 2

                                        <input class="form-check-input" type="radio" name="exampleRadios3"
                                               id="exampleRadios32" value="option2">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios33">

                                        Klas 3
                                        <input class="form-check-input" type="radio" name="exampleRadios3"
                                               id="exampleRadios33" value="option3">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios34">
                                        Klas 4
                                        <input class="form-check-input" type="radio" name="exampleRadios3"
                                               id="exampleRadios34" value="option4">
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios35">
                                        Klas 5
                                        <input class="form-check-input" type="radio" name="exampleRadios3"
                                               id="exampleRadios35" value="option5">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios36">
                                        Klas 6
                                        <input class="form-check-input" type="radio" name="exampleRadios3"
                                               id="exampleRadios36" value="option6">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <button type="button" class="btn btn-secondary previous">voorgaand</button>
                                <button type="button" class="btn btn-primary next">volgende</button>

                            </fieldset>

                            <fieldset>
                                <h1>Wat hoop je vooral te bereiken de komende tijd?
                                    (Vraag 4/5)</h1>


                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios41">
                                        Eindelijk eens een voldoende halen voor dat lastige vak
                                        <input class="form-check-input" type="radio" name="exampleRadios4"
                                               id="exampleRadios41" value="option1" checked>
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label rlabel" for="exampleRadios42">
                                        Al m’n minpunten wegwerken en dit jaar overgaan
                                        <input class="form-check-input" type="radio" name="exampleRadios4"
                                               id="exampleRadios42" value="option2">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios43">
                                        Meer zelfvertrouwen/minder stress krijgen
                                        <input class="form-check-input" type="radio" name="exampleRadios4"
                                               id="exampleRadios43" value="option3">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios44">
                                        Een hoger gemiddelde halen voor mijn toelating (studie)
                                        <input class="form-check-input" type="radio" name="exampleRadios4"
                                               id="exampleRadios44" value="option4">
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios45">
                                        Meer tijd voor andere dingen dan leren overhouden
                                        <input class="form-check-input" type="radio" name="exampleRadios4"
                                               id="exampleRadios45" value="option5">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <button type="button" class="btn btn-secondary previous">voorgaand</button>
                                <button type="button" class="btn btn-primary next">volgende</button>

                            </fieldset>

                            <fieldset>
                                <h1>Als wij van Omegabijles je daarbij zouden mogen helpen op welke manier zou dat dan
                                    zijn?
                                    (Vraag 5/5)</h1>


                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios51">
                                        Online training/uitleg
                                        <input class="form-check-input" type="radio" name="exampleRadios5"
                                               id="exampleRadios51" value="option1" checked>
                                        <span class="crb"></span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label rlabel" for="exampleRadios52">
                                        Online toegang tot oefentoetsen/oefeningen
                                        <input class="form-check-input" type="radio" name="exampleRadios5"
                                               id="exampleRadios52" value="option2">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios53">
                                        1-op-1 bijles thuis
                                        <input class="form-check-input" type="radio" name="exampleRadios5"
                                               id="exampleRadios53" value="option3">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <div class="form-check">

                                    <label class="form-check-label rlabel" for="exampleRadios54">
                                        Ik heb geen hulp nodig
                                        <input class="form-check-input" type="radio" name="exampleRadios5"
                                               id="exampleRadios54" value="option4">
                                        <span class="crb"></span>
                                    </label>
                                </div>

                                <button type="button" class="btn btn-secondary previous">voorgaand</button>
                                <button type="button" class="btn btn-primary next">volgende</button>

                            </fieldset>

                            <fieldset>
                                <h1>Bijna klaar! Vul alleen nog je goede emailadres en naam in en we sturen het naar je
                                    op</h1>

                                <div class="form-group">
                                    {{--<label for="examplename">Email address</label>--}}
                                    <input type="text" class="form-control rounded_input" id="examplename"
                                           aria-describedby="emailHelp" placeholder="Je voornaam">
                                    <small id="emailHelp" class="form-text text-muted d-none">We'll never share your
                                        email with anyone else.
                                    </small>
                                </div>

                                <div class="form-group">
                                    {{--<label for="exampleInputEmail1">Email address</label>--}}
                                    <input type="email" class="form-control rounded_input" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Je emailadres">
                                    <small id="emailHelp" class="form-text text-muted d-none">We'll never share your
                                        email with anyone else.
                                    </small>
                                </div>

                                <div class="my-3">
                                    <button type="submit" class="btn my-btn btn_nil w-100">Ga verder...</button>
                                </div>

                                <button type="button" class="btn btn-secondary previous">voorgaand</button>

                            </fieldset>
                        </form>


                    </div>


                </div>
                {{--<div class="modal-footer">
                    <button type="button" class="btn btn-secondary previous">voorgaand</button>
                    <button type="button" class="btn btn-primary next">volgende</button>
                </div>--}}
            </div>
        </div>
    </div>
    @include('frontEnd.includes.footer')

    @endsection

    @push('bottom_js')
        <script type="text/javascript">

            $(document).ready(function () {
                var current = 1, current_step, next_step, steps;
                steps = $("fieldset").length;
                $(".next").click(function () {
                    current_step = $(this).parent();
                    next_step = $(this).parent().next();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                });
                $(".previous").click(function () {
                    current_step = $(this).parent();
                    next_step = $(this).parent().prev();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(--current);
                });
                setProgressBar(current);

                // Change progress bar action
                function setProgressBar(curStep) {
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".task_progress .progress-bar")
                        .css("width", percent + "%")
                        .html(percent + "%");
                }
            });

        </script>
    @endpush