@extends('frontEnd.master')
@section('title')
Word Bijlesgever - Kom Bijles geven bij Omegabijles
@endsection
@section('description','Help echt Iemand Vooruit! Bepaal Zelf Wanneer je Werkt, Goede Verdiensten en Veel Voldoening.')
@section('content')
<body>
    <header class="container-fluid main-header work-main-header">
    @include('frontEnd.includes.nav')
    <div class="container work-cus">
        <div class="row">
          <div class="col-md-6 pt-5">
            <h3 class="ml-2" style="color: #fff;">Word bijlesgever</h3>
            <p class="py-3" style="color: #ffffff!important;">Wij zijn enthousiast over bijles, jij ook?</p>
          </div>
          <div class="col-md-6">
              <img src="{{url('public/temp/img/Wordbijlesgever-header.png')}}" alt="" width="90%">
          </div>
        </div>
    </div>
  </header>
  
  <section class="text" id="first-text">
      <div class="container content">
      <h3 class="pb-2">Kom bijles geven bij Omegabijles</h3>
      <span class="line"></span>
      <p class="pt-3">Bij Omegabijles zijn we enthousiast over bijles. Waarom? Omdat het mooie kansen biedt. Waar op school niet altijd de ruimte is voor persoonlijke aandacht kunnen wij in onze bijlessen juist wel de ondersteuning bieden waar nodig. Dat betekent niet alleen uitleggen maar ook persoonlijke tips meegeven over hoe je bijvoorbeeld beter geconcentreerd kan blijven, of hoe je alle punten pakt bij toetsvragen. Met jouw bijlessen kun je de leerling echt vooruit helpen, ook voor later. Super mooie bijbaan dus. </p>
      </div>
  </section>

  <section class="text" id="first-text">
      <div class="container content">
      <h3 class="pb-2">Voordelen van werken bij Omegabijles</h3>
      <span class="line"></span>
      <p class="pt-3">Een kleine greep uit de hele collectie ;)</p>
      </div>
  </section>
  
  <section id="icon" class="icon icon_world">
    <div class="container"> 
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <img src="{{url('public/temp/icon/icon-01.png')}}" alt="" width="100%">
            <h4>Bepaal zelf wanneer je werkt</h4>
            <p>Je kunt zelf aangeven wanneer je bijles wilt geven. Zo kom je niet in de knoop met andere plannen.</p>
          </div>
        </div>
         <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <img src="{{url('public/temp/icon/icon-02.png')}}" alt="" width="100%">
            <h4>Je verdient meer</h4>
            <p>Als leerling verdien je €7,- per uur en als student verdien je €12,- per uur. Net even wat meer dan vakkenvullen.</p>
          </div>
        </div>
         <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <img src="{{url('public/temp/icon/icon-03.png')}}" alt="" width="100%">
            <h4>Veel waardering</h4>
            <p>Jouw leerlingen (en hun ouders) zijn je veelal erg dankbaar voor jouw hulp - en dat voelt natuurlijk heel goed.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="icon" class="icon icon_world">
    <div class="container"> 
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <img src="{{url('public/temp/icon/icon-04.png')}}" alt="">
            <h4>Goed voor je cv</h4>
            <p>Dat jij bereid bent om een ander te helpen én zelf te groeien staat natuurlijk niet verkeerd op je cv - handig voor een eventuele selectie.</p>
          </div>
        </div>
         <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <img src="{{url('public/temp/icon/icon-05.png')}}" alt="">
            <h4>Zet je talenten in en breid ze uit</h4>
            <p>Je krijgt de ruimte om je talenten in de praktijk te brengen. Bovendien doe je door de training nog meer handige vaardigheden op als coaching en het geven van feedback.</p>
          </div>
        </div>
         <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <img src="{{url('public/temp/icon/icon-06.png')}}" alt="">
            <h4>Houd je kennis op peil</h4>
            <p>Door de leerstof uit te leggen houd je uiteraard zelf ook je vakkennis bij. Of je nu studeert of dat je eindexamen in zicht is, het is altijd handig!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="text overpagetext" id="first-text">
      <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="pb-2">Trainingstraject</h3>
          <p class="pt-3">We willen onze leerlingen laten groeien. Hoe je dat precies doet en waar je op kunt letten, leer je in ons trainingstraject.  Je leert o.a. over OMEGA, hoe je de motivatie en concentratie bevordert en nog veel meer.  Kom je ergens niet uit tijdens je bijlessen? Wij zijn altijd laagdrempelig bereikbaar om met je mee te denken.</p>
        </div>
        <div class="col-md-4 padding_top">
          <img src="{{url('public/temp/img/last-test.jpg')}}" alt="" width="80%">  
        </div>
      </div>
      </div>
  </section>

  <section id="omega" class="omega">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 style="text-align: center;color: #fff;">Wat wij van je verwachten</h3>
        </div>
        <div class="col-md-12">
          <div class="tabs-list">
            <ul class="nav nav-tabs mynav-teb" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Leerling</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Oud-leerling</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tab panes -->
  <div class="tab-content abc-content">
    <div role="tabpanel" class="tab-pane fade-in active" id="profile">
       <p>
       Aangezien jouw vrienden/klasgenoten wel vaker voor schoolhulp naar jou toe komen, kun je er net zo goed je bijbaan van maken, niet waar? We zoeken bijlesgevers die het mooi vinden om een ander met handige bijlessen echt vooruit te helpen. Jij kunt lastige onderwerpen met enthousiasme en geduld uitleggen en bent soms creatief als de leerling het de eerste keer niet snapt. Je hoopt natuurlijk de leerling echt iets mee te geven, dus je geeft ook wat algemene leertips mee - handig voor later. Met slechts een paar uurtjes van je tijd draag je zo echt je steentje bij. 
       </p>

      <ul class="ml-2 mt-3">
        <li><i class="fas fa-check"></i> Je hebt een 7,5 of hoger voor de vakken waar je bijles in wilt geven</li>
        <li><i class="fas fa-check"></i> Je zit in klas 3 of hoger</li>
        <li><i class="fas fa-check"></i> Je bent minimaal 2 uur per week beschikbaar</li>
        <li><i class="fas fa-check"></i> Je bent enthousiast en gemotiveerd en straalt dit ook uit tijdens je bijles</li>
        <li><i class="fas fa-check"></i> Het is een plus als je in meerdere vakken bijles wilt geven</li>
      </ul>


    </div>
    <div role="tabpanel" class="tab-pane fade" id="buzz">
       <p>We zoeken bijlesgevers die het mooi vinden om een ander met handige bijlessen echt vooruit te helpen. Als oud-leerling sta je boven de stof en kunt lastige onderwerpen met enthousiasme en geduld uitleggen. Als de leerling het de eerste keer niet snapt ben je soms creatief. Je hoopt natuurlijk de leerling echt iets mee te geven, dus je geeft ook wat algemene leertips mee - handig voor later. Met slechts een paar uurtjes van je tijd draag je zo echt je steentje bij. </p>

      <ul class="ml-2 mt-3">
        <li><i class="fas fa-check"></i> Je hebt een 7,5 of hoger voor de vakken waarin je bijles wilt geven</li>
        <li><i class="fas fa-check"></i> Je bent minimaal 2 uur per week beschikbaar</li>
        <li><i class="fas fa-check"></i> Je bent enthousiast en gemotiveerd en straalt dit uit tijdens de bijles</li>
        <li><i class="fas fa-check"></i> Het is een plus als je in meerdere vakken bijles wilt geven</li>
    
      </ul>
    </div>
  </div>

  <!-- test 3 -->
  <div style="background-color: #f5f8fa;">
  <section class="cta-box my-5 py-5" id="first-text">
    <div class="container">
      <h3>Wie we niet zoeken</h3>
      <span class="line my-3"></span>
      <p class="my-5">We zijn nadrukkelijk niet op zoek naar bijlesgevers die niet enthousiast zijn over wat bijles voor mogelijkheden biedt, niet bereid zijn een training te volgen of nooit op hun berichten reageren. <span>Jij bent zo helemaal niet? Top! Meld je direct hieronder aan</span></p>
    </div>
  </section>
  </div>

  <section class="cta-box my-5 py-5">
    <div class="container">
      <h3>Enthousiast? Meld je meteen aan:</h3>
      <span class="line my-3"></span>
      <p class="my-5">Aanmelden duurt slechts een paar minuten</p>
      <a href="{{ url('/aanmelden') }}" class="btn my-btn my-btn-b width40" style="width: 30%;">Aanmelden</a>
    </div>
  </section>

 @include('frontEnd.includes.footer')

@endsection