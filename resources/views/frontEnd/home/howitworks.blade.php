@extends('frontEnd.master')

 @section('meta')
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Omegabijles">
     <meta property="og:description" content="Bijes in Haarlem, Bloemendaal of omgeving? Zoek gemakkelijk via Omegabijles de bijlesgever die bij je past! ✅ Bijles aan huis. ✅Voor VMBO, HAVO, VWO en gymnasium. ✅We helpen met de stof en geven persoonlijke tips mee. " />
     <meta name="description" content="Gemakkelijk bijles aan huis vinden in regio Haarlem, Bloemendaal of omgeving ✅  Gebruik onze zoekmachine, vind de bijlesgever die bij je past. En ga gestructureerd aan de slag! ✅ Bijles aan huis. ✅ Voor VMBO, HAVO, VWO en gymnasium. ✅ We helpen met de stof en geven persoonlijke tips mee. ">
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <meta name="Language" content="nederlands" />
     <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="bijles, begeleiding, haarlem, bloemendaal, overveen, ijmuiden, velsen, santpoort, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, hoe het werkt" />
     <meta name="robots" content="index, follow" />
 @endsection

@section('title', 'Hoe het werkt')
@section('description', 'Hoe het werkt')

@section('content')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTVSMTB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <header class="container-fluid main-header work-main-header">

     @include('frontEnd.includes.nav')

    <div class="container work-cus">

        <div class="row">

          <div class="col-md-5 pt-5">

            <h3 class="ml-2" style="color: #fff;">Hoe het werkt</h3>

            <p class="py-4" style="color: #ffffff!important;">In enkele simpele stappen aan de slag met jouw bijlesgever</p>

          </div>

          <div class="col-md-7">

              <img src="{{url('public/temp/img/read-post-ui.png')}}" alt="" width="100%">

          </div>

        </div>

    </div>

  </header>

  

  <section id="icon" class="icon">

    <div class="container"> 

      <div class="row">

        <div class="col-md-3 col-sm-6">

          <div class="icon-content">

            <img src="{{url('public/temp/icon/icon-07.png')}}" alt="" width="100%">

            <h4>1. Jouw bijlesgever</h4>

            <p> Dien een bijlesaanvraag in dan vinden we de bijlesgever die bij je past. Of kies zelf gemakkelijk via onze zoekmachine een van onze <b>geselecteerde en getrainde bijlesgevers</b>.  </p>


          </div>
        

        </div>

         <div class="col-md-3 col-sm-6">

          <div class="icon-content">

            <img src="{{url('public/temp/icon/icon-08.png')}}" alt="" width="100%">

            <h4>2. Vul het online intakeformulier in</h4>

            <p>Plan de eerste bijles in en vul het <B>intakeformulier</b> in.  Zo weten we beter hoe we de bijlessen op jouw voorkeuren (en die van je ouders) kunnen afstemmen.</p>

          </div>

        </div>

         <div class="col-md-3 col-sm-6">

          <div class="icon-content">

            <img src="{{url('public/temp/icon/icon-09.png')}}" alt="" width="100%">

            <h4>3. Ga samen aan de slag (al binnen 48 uur)</h4>

            <p>Ga aan de slag volgens een <b>persoonlijk leerplan</b>. Je evalueert met je bijlesgever regelmatig of jullie op de goede weg zitten. Ook je ouders en docent blijven (indien gewenst) op de hoogte.</p>

          </div>

        </div>

         <div class="col-md-3 col-sm-6">

          <div class="icon-content">

            <img src="{{url('public/temp/icon/icon-10.png')}}" alt="" width="100%">

            <h4>4. Betaal veilig achteraf via iDeal</h4>

            <p>Je ouders ontvangen iedere maand <b>achteraf</b> een factuur, van de bijlesuren die je hebt gevolgd, via email of Whatsapp. Deze kunnen ze veilig en gemakkelijk voldoen via iDeal. </p>

          </div>

        </div>

      </div>

    </div>
    

    

  </section>




  <section class="text" id="first-text">
     <div class="container content">
      <h3 class="pb-2">Waarom Omegabijles?</h3>

      <span class="line"></span>
      <Br>
<p>Beoordeeld met een 8,2 (5/5 sterren) op Trustpilot!</p>
<br>
  <div class="row">
          <div class="col-md-4">
         <center>  <img src="{{ URL::to('public/jatemp/temp/imgjs/iconhaarlem1.jpg ') }}" alt="Vooruit in kennis en zelfvertrouwen" width="40%"><center>
            <div class="text_botom">
             
              <div>
               <p class="top-text"><b>Vooruit in kennis en zelfvertrouwen</b></p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
         <center>  <img src="{{ URL::to('public/jatemp/temp/imgjs/iconhaarlem2.jpg') }}" alt="Meer overzicht van de stof" width="40%"></center>
            <div class="text_botom">
        
              <div>
            <p class="top-text"><b>Meer overzicht van de stof</b></p>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
         <center> <img src="{{ URL::to('public/temp/icon/icon-08.png') }}" alt="Beter voorbereid voor de volgende toets (en daarna)" width="40%"></center>
     
            <div class="text_botom">

              <div>
                       <p class="top-text"><b>Beter voorbereid voor de volgende toets (en daarna)</b></p>
              </div>
            </div>
          </div>
          
      <p class="pt-3">We vinden het belangrijk dat je met een bijlesgever aan de slag gaat die bij je past. We geven je persoonlijke tips mee en streven ernaar nuttige (zelf)kennis en vaardigheden bij te brengen die ook handig zijn voor later! Dit doen we op basis van wetenschappelijke inzichten en methodes die zich al bewezen hebben bij alle eerdere leerlingen. Zo helpen we jou optimaal vooruit. <Br>
   <br>
 <div class="container">
      <div class="row">
           <p><span><i class="fas fa-check"></i></span>Bijles aan huis</p>
       <p> <span><i class="fas fa-check"></i></span>Geselecteerde en getrainde bijlesgevers</p>
        <p>    <span><i class="fas fa-check"></i></span>Persoonlijk afgestemd</p>
            <br>
                <p> <span><i class="fas fa-check"></i></span>100% tevredenheidsgarantie </p>
       <p> <span><i class="fas fa-check"></i></span>Geen inschrijfkosten of vaste pakketten</p>
            <p><span><i class="fas fa-check"></i></span>Slechts &euro;15,- of &euro;21,- per bijlesuur</p>

      	
       </p>

      </div>
</div>

  </section>
  
  <section class="text overpagetext" id="first-text">
      <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h3 class="pb-2">100% Tevredenheidsgarantie</h3>
          <p class="pt-3">Alle leerlingen die bijles bij ons hebben gevolgd, hebben grote stappen vooruit gemaakt. Wij zijn er 100% zeker van dat we jou ook kunnen helpen precies daar waar nodig! Mocht de eerste les toch niet helemaal zijn wat je ervan verwacht had, dan brengen we de eerste les niet in rekening.   </p>
        </div>
        <div class="col-md-4 padding_top">
          <img src="{{url('public/temp/img/protectionicon.jpg')}}" alt="" width="60%">  
        </div>
      </div>
      </div>
  </section>


<div style="background-color: #F7FAFC;">
  <section id="faq" class="faq my-2">

    <div class="container">

      <div class="row">

        <div class="col-md-12 pb-5">

          <h3>
          <Br>
          Veelgestelde vragen</h3>

          <span class="line"></span>

        </div>

      </div>

      <div class="row">

        <div class="col-md-6">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingOne">

                  <h4 class="panel-title">

                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="" aria-controls="collapseOne">

                    Voor wie is Omegabijles bedoeld?

                  </a>

                </h4>

                </div>

                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

                  <div class="panel-body">

                 Omegabijles helpt middelbare scholieren van VMBO t/m gymnasium (klas 1 t/m klas 6). Onze bijlessen zijn met name bedoeld voor leerlingen die open staan om te leren en echt vooruit willen gaan. Of dat nu is om van die 4,5 een 6 te maken of van die 8,4 een 8,6. De meeste leerlingen volgen dan ook structureel wekelijks bijles om er alles uit te halen.

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingTwo">

                  <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="" aria-controls="collapseTwo">

                    Wat als het niet klikt de eerste bijles?  

                  </a>

                </h4>

                </div>

                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">

                  <div class="panel-body">

                    Wat vervelend dat het niet klikt. Geef het even aan ons door via info@omegabijles.nl of via de chat en wij brengen de eerste les niet in rekening. Eventueel kunnen we direct kijken naar een andere bijlesgever die hopelijk wat beter past. 

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingThree">

                  <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="" aria-controls="collapseThree">

                    Waar worden de bijlessen gegeven?

                  </a>

                </h4>

                </div>

                <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">

                  <div class="panel-body">

                    De bijlessen worden in principe aan huis gegeven (zonder extra kosten). Eventueel kunnen de bijlessen ook op een openbare plek of op school gegeven worden. Dit loopt in overleg met de bijlesgever.

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingF">

                  <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseF" aria-expanded="" aria-controls="collapseThree">

                  Hoe verloopt de betaling?

                  </a>

                </h4>

                </div>

                <div id="collapseF" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingF">

                  <div class="panel-body">

                    Wij sturen iedere 5e van de volgende maand een factuur via email of Whatsapp. Bij de factuur zit een betaallink waarmee u snel en veilig het bedrag via iDeal kunt voldoen. Het is dus niet nodig om de bijlesgever contant te betalen.

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingFi">

                <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFi" aria-expanded="" aria-controls="collapseThree">

                  Hoeveel uren bijles adviseren jullie?

                  </a>

                </h4>

                </div>

                <div id="collapseFi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFi">

                  <div class="panel-body">

                    Dat verschilt natuurlijk per persoon en per situatie. Echter zien wij in de meeste gevallen dat zo'n 2 a 3 uur bijles per week het meest effectief is. Bij 1 uur in de week is er vaak alleen ruimte voor wat vragen over het huiswerk en is er onvoldoende tijd om daadwerkelijk tot de onderliggende problemen te komen. Veel leerlingen vinden in eerste instantie meerdere uren bijles wat veel klinken, toch horen we dat ze de bijlessen vinden omvliegen. En als ze dan toch een keer in slaap dreigen te vallen, dan worden een of meerdere pauzes ingelast zodat er daarna weer fris gewerkt kan worden!

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingS">

                <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseS" aria-expanded="" aria-controls="collapseThree">

                  Wie zijn jullie bijlesgevers?

                  </a>

                </h4>

                </div>

                <div id="collapseS" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingS">

                  <div class="panel-body">

                    Onze bijlesgevers zijn enthousiaste en betrouwbare leerlingen (die bij jou op school zitten) en oud-leerlingen (die nu inmiddels aan het studeren zijn). Het klikt vaak al snel met zo'n relatief jong iemand. Allen zijn door ons gescreend, beschikken over minimaal een 7,5 voor de vakken waarin ze bijles geven en hebben ons trainingstraject gevolgd.

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingSe">

                <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSe" aria-expanded="" aria-controls="collapseThree">

                  Wat kosten jullie bijlessen?

                  </a>

                </h4>

                </div>

                <div id="collapseSe" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSe">

                  <div class="panel-body">

                    Bijles van een leerling kost &euro;15,- per uur en bijles van een oud-leerling kost &euro;21,- per uur. De uren kunnen flexibel ingepland worden. Wij hanteren geen inschrijfkosten of vaste pakketten.

                  </div>

                </div>

              </div>

            </div>

        </div>

        <div class="col-md-6">

         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingLOne">

                  <h4 class="panel-title">

                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLOne" aria-expanded="" aria-controls="collapseOne">

                    In welke vakken geven jullie bijles?

                  </a>

                </h4>

                </div>

                <div id="collapseLOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLOne">

                  <div class="panel-body">

                    In principe geven wij in bijna alle vakken bijles - van talen als Frans, Engels en Latijn tot aan wiskunde B, scheikunde en natuurkunde. Soms kan het voorkomen dat er bij jou in de buurt nog geen bijlesgever is die dat specifieke vak geeft. Is dat het geval? Neem dan even contact met ons op, dan gaan wij voor je op zoek!

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingLTwo">

                  <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLTwo" aria-expanded="" aria-controls="collapseTwo">

                    Voor vak ... kan ik geen bijlesgever vinden bij mij in de buurt, wat nu?  

                  </a>

                </h4>

                </div>

                <div id="collapseLTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLTwo">

                  <div class="panel-body">

                    Dat is vervelend! We proberen wekelijks nieuwe bijlesgevers toe te voegen. Helaas kan het nog voorkomen dat er bij jou in de buurt voor dat ene vak nog niemand beschikbaar is. Is dat het geval? Neem dan even contact met je op, dan gaan we voor je op zoek!

                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingLThree">

                  <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLThree" aria-expanded="" aria-controls="collapseThree">

                    Hoe werkt het opzeggen?

                  </a>

                </h4>

                </div>

                <div id="collapseLThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLThree">

                  <div class="panel-body">

                    Wat jammer dat je weggaat! Of je nu opzegt omdat je geen bijles meer nodig hebt, of omdat het je niet beviel, wij hanteren geen opzegtermijn. Geef het simpelweg door aan je bijlesgever en meld het even via info@omegabijles.nl


                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingLF">

                  <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLF" aria-expanded="" aria-controls="collapseThree">

                  Bieden jullie ook huiswerkbegeleiding en examentraining aan?

                  </a>

                </h4>

                </div>

                <div id="collapseLF" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLF">

                  <div class="panel-body">

                    Op dit moment bieden wij alleen bijlessen aan. Dit hoeft echter niet te betekenen dat je niet bij ons terecht kunt. Wij stemmen onze bijlessen namelijk geheel op jou af. Als je moeite hebt met het bijhouden van huiswerk of plannen dan zal daar meer de focus op liggen. Moeite met met het pakken van alle punten op je examen? Dan kun je daar met een oud-leerling mee aan de slag gaan. Neem even contact met ons, we adviseren je graag.
                  </div>

                </div>

              </div>

              <div class="panel panel-default">

                <div class="panel-heading" role="tab" id="headingLFi">

                <h4 class="panel-title">

                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseLFi" aria-expanded="" aria-controls="collapseThree">

                  Kan ik als ouder op de hoogte gehouden worden?

                  </a>

                </h4>

                </div>

                <div id="collapseLFi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingLFi">

                  <div class="panel-body">

                    Zeer zeker. Aan het eind van iedere maand ontvangt u een maandrapportage. Deze sturen we (indien gewenst) tevens door naar de betreffende vakdocent, zodat deze ook op de hoogte is van de voortgang. Daarnaast is het natuurlijk altijd mogelijk om tussendoor contact op te nemen met de bijlesgever van uw kind.

                  </div>

                </div>

              </div>

             

            </div>

        </div>

      </div>

    </div>

  </section>
</div>
    

  <section class="cta-box my-5 py-5">

    <div class="container">

      <h3>Klaar om aan de slag te gaan?</h3>

      <span class="line my-3"></span>

      <p class="my-5"></p>

        <div class="overpage-grid">

                <a href="{{ url('/contact') }}">
                    <button class="btn my-btn ml-c" style="width: 55%;">Nu bijles aanvragen</button>
                </a>

                <a class="btn-margin" href="{{ url('/') }}">
                    <button class="btn btn-outlin margin0" style="width:60%;">Zelf zoeken</button>
                </a>

            </div>

    </div>

  </section>


   @include('frontEnd.includes.footer')
<script>

    // Handler for .ready() called.
    if (localStorage.getItem('faqp') != null){
localStorage.removeItem('faqp')
var elmnt = document.getElementById("faq");
  elmnt.scrollIntoView();
    
    }
</script>
@endsection