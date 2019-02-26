@extends('frontEnd.master1')


 <meta property="og:type" content="website">
    <meta property="og:site_name" content="Omegabijles">      
	<meta property="og:description" content="Bijes in Haarlem, Bloemendaal of omgeving? Zoek gemakkelijk via Omegabijles de bijlesgever die bij je past! ✅ Bijles aan huis. ✅Voor VMBO, HAVO, VWO en gymnasium. ✅We helpen met de stof en geven persoonlijke tips mee. " />
    <meta name="description" content="Kom bijles geven bij Omegabijles! ✅ Bepaal zelf wanneer je werkt ✅ Goed verdienen ✅ Veel voldoening ✅ Kortom, de ideale bijbaan! Check deze pagina voor meer info! ">
 	<meta name="viewport" content="width=device-width, initial-scale=1"/> 
 	<meta name="Language" content="nederlands" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="bijles, bijles geven, haarlem, bloemendaal, overveen, ijmuiden, velsen, santpoort, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, ideale bijbaan, bijbaan, student" />
	<meta name="robots" content="index, follow" />
	
<Title>Omegabijles -  Word bijlesgever</Title>

@section('content')
<div class="bg-white">
	<div class="jcontainer">
            <div class="row mb-5">
                <heading class="col-md-7">
                    <h2>Een bijbaan met voldoening</h2>
                    <p>Goede verdiensten, je eigen tijd indelen en een goede aanvulling op je CV. Klinkt goed toch?</p>
                </heading>
                <div class="col-md-5 text-center">
                    <img src="{{ URL::to('public/frontEnd/img/path-3.png') }}" alt="dummy img">
                </div>
            </div>
            <div class="inner_container">
                <div class="standout_article mb-5">
                    <h2>Wat je gaat doen</h2>
                    <p>Je maakt je <a href="#apply_now" class="underline">profiel</a> aan, volgt een online training en leerlingen kunnen je vinden. Zodra een leerling met jou aan de slag wilt, krijg je bericht. Vervolgens spreek je af, je stelt samen een leerplan op in de eerste les en je helpt de leerling precies daar waar nodig. Ook evalueer je regelmatig of je op de goede koers zit. Maandelijks vul je je gewerkte uren in en wij betalen je uit ;)</p>
                </div>
                <div class="inner_container">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="single_img text-center">
                                <img src="{{ URL::to('public/frontEnd/img/icon01.png') }}" alt="dummy img">
                            </div>
                            <h3>Bepaal wanneer je werkt</h3>
                            <p>Je kunt zelf aangeven wanneer je bijles wilt geven. Zo kom je niet in de knoop met andere plannen.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="single_img text-center">
                                <img src="{{ URL::to('public/frontEnd/img/icon02.png') }}" alt="dummy img">
                            </div>
                            <h3>Je verdient meer</h3>
                            <p>Als leerling verdien je €7,- per uur en als student verdien je €14,- per uur. Plus voor iedere nieuwe klant krijg je een bonus.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="single_img text-center">
                                <img src="{{ URL::to('public/frontEnd/img/icon03.png') }}" alt="dummy img">
                            </div>
                            <h3>Veel waardering</h3>
                            <p>Jouw leerlingen (en hun ouders) zijn je veelal erg dankbaar voor jouw hulp - en dat voelt natuurlijk heel goed.</p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="single_img text-center">
                                <img src="{{ URL::to('public/frontEnd/img/icon04.png') }}" alt="dummy img">
                            </div>
                            <h3>Goed voor je cv</h3>
                            <p>Dat jij bereid bent om een ander te helpen én zelf te groeien staat natuurlijk niet verkeerd op je cv - handig voor een eventuele selectie.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="single_img text-center">
                                <img src="{{ URL::to('public/frontEnd/img/icon05.png') }}" alt="dummy img">
                            </div>
                            <h3>Zet je talenten in en breid ze uit</h3>
                            <p>Je krijgt de ruimte om je talenten in de praktijk te brengen. Bovendien doe je door de training nog meer handige vaardigheden op als coaching en het geven van feedback.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="single_img text-center">
                                <img src="{{ URL::to('public/frontEnd/img/icon06.png') }}" alt="dummy img">
                            </div>
                            <h3>Houd je kennis op peil</h3>
                            <p>Door de leerstof uit te leggen houd je uiteraard zelf ook je vakkennis bij. Ideaal, want zo hoef je zelf niet meer veel tijd aan de basis te besteden. </p>
                        </div>
                    </div>
                </div>
                <article class="standout_article mb-5">
                    <h4>Ben ik geschikt als bijlesgever?</h4>
                    <p>Jij kunt leerstof enthousiast en geduldig overbrengen. Ook besef je dat iedere leerling anders is en dat je het soms op een andere manier moet uitleggen. Het is een grote plus als jij wilt leren hoe je jouw leerling niet alleen vooruit helpt tot de volgende toets maar ook voor later. Wij vinden het namelijk belangrijk dat leerlingen echt wat aan de bijlessen hebben.</p>
                </article>
                <div class="row mb-5 text-left">
                    <div class="col-sm-6 small_lh">
                        <h3>Leerling:</h3>
                        <p><span><i class="fas fa-check"></i></span>Je hebt een 7,5 of hoger voor de vakken waar je bijles in wilt geven</p>
                        <p><span><i class="fas fa-check"></i></span>Je zit in klas 3 of hoger</p>
                        <p><span><i class="fas fa-check"></i></span>Je bent minimaal 2 uur per week beschikbaar</p>
                        <p><span><i class="fas fa-check"></i></span>Je bent enthousiast en gemotiveerd en straalt dit ook uit tijdens je bijles</p>
                        <p><span><i class="fas fa-check"></i></span>Het is een plus als je al enige ervaring hebt</p>
                    </div>
                    <div class="col-sm-6 small_lh">
                        <h3>Oud-leerling/student:</h3>
                        <p><span><i class="fas fa-check"></i></span>Je had een 7,5 of hoger voor de vakken waar je bijles in wilt geven</p>
                        <p><span><i class="fas fa-check"></i></span>Je woont nog in de omgeving van Velsen/Haarlem/Beverwijk/Amsterdam of bent bereid te reizen</p>
                        <p><span><i class="fas fa-check"></i></span>Je bent minimaal 2 uur per week beschikbaar</p>
                        <p><span><i class="fas fa-check"></i></span>Je bent enthousiast en gemotiveerd en straalt dit ook uit tijdens je bijles</p>
                        <p><span><i class="fas fa-check"></i></span>Het is een plus als je al enige ervaring hebt</p>
                    </div>
                </div>
                <article class="standout_article mb-5">
                    <h4>Maak nu jouw profiel aan</h4>
                    <p>Het aanmaken van jouw profiel duurt slechts een paar minuten. We nemen contact met je op zodra we het ontvangen hebben. We vinden het belangrijk dat we weten wie je bent dus we maken altijd eerst kennis via Skype. Daarin beantwoorden we al je vragen. Zijn we een match? Dan komt jouw profiel na het gesprek snel online. </p>
                </article>
                <a href="{{ url('register') }}" class="btn btn2 btn_lg" id="apply_now">Maak nu jouw profiel aan!</a>
            </div>
        </div>
    </div>
@endsection