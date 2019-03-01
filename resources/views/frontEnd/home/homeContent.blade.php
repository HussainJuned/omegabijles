@extends('frontEnd.master')

@section('meta')

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Omegabijles">
    <meta property="og:description" content="Bijes in Haarlem, Bloemendaal of omgeving? Vind gemakkelijk via Omegabijles de bijlesgever die bij je past! â�� Bijles aan huis. Voor VMBO, HAVO, VWO en gymnasium. â��We helpen met de stof en geven persoonlijke tips mee. "/>
    <meta name="Language" content="nederlands"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="description" content="Gemakkelijk bijles aan huis vinden in regio Haarlem, Bloemendaal of omgeving? Vind via Omegabijles de bijlesgever die bij je past. En ga gestructureerd aan de slag! â�� Bijles aan huis. â�� Voor VMBO, HAVO, VWO en gymnasium. We helpen met de stof en geven persoonlijke tips mee. ">

    <meta name="keywords" content="bijles, begeleiding, haarlem, bloemendaal, overveen, ijmuiden, velsen, santpoort, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium, omegabijles, wiskunde, scheikunde, natuurkunde, nederlands, latijn, grieks, duits, frans, engels, aardrijskunde, geschiedenis, biologie"/>
    <meta name="robots" content="index, follow"/>

@endsection
@section('description','Vind Snel en Gemakkelijk de Bijlesgever Die Bij Je Past via Omegabijles.nl')



@section('content')
<style type="text/css">
  .tastimonials .carousel-control-next {
    right: -3%;
}

@media (max-width: 600px){
  .header-content {
    width: 90%;
  }
}

</style>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End Trustbox script -->

<!-- Hotjar Tracking Code for www.omegabijles.nl -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:637910,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<body>

 <header class="container-fluid main-header height-md-auto">

    <nav class="navbar navbar-expand-lg">

      <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('public/temp/img/logo.png')}}" alt="" width="100%"></a>

      <button class="header-manu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

        <i class="fas fa-align-justify" style="color: #fff;"></i>

      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav ml-auto">

           <a class="nav-item nav-link" 
          @if(request()->is('/'))
            style="color: #020401 !important"
       @endif 
          href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>

          <a class="nav-item nav-link" 
           @if(request()->is('/hoehetwerkt'))
            style="color: #020401 !important"
       @endif 
          href="{{ url('/hoehetwerkt') }}">Hoe het werkt</a>

          <a class="nav-item nav-link" 
          @if(request()->is('/overons'))
            style="color: #020401 !important"
       @endif 
          href="{{ url('/overons') }}">Over ons</a>

          <a class="nav-item nav-link" 
           @if(request()->is('/wordbijlesgever'))
            style="color: #020401 !important"
       @endif 
          href="{{ url('/wordbijlesgever') }}">Word bijlesgever</a>

          <a class="nav-item nav-link" 
          @if(request()->is('/contact'))
            style="color: #020401 !important"
       @endif 
          href="{{ url('/contact') }}">Contact</a>

          <a class="nav-item nav-link" 
          @if(request()->is('/login'))
            style="color: #020401 !important"
       @endif 
          href="{{ url('/login') }}">Login</a>

        </div>

      </div>

    </nav>

    <div class="header-content"> 

        <h2 class="pl-2">Moeite met een bepaald vak?</h2>

        <p class="py-3" style="color: #fff!important;">
            <span class="jontronar_lb">
                Wij geven persoonlijk afgestemde bijlessen zodat<br> ook jij beter leert en toetsen maakt zonder stress
            </span>
            <br>
            <br>
            Beoordeeld met een 8,2 (5/5 sterren) op Trustpilot!</p>

    </div>

  </header>

<section id="filter">

    <div class="filter cta-box container">

      <div class="row">

        <div class="col-md-3 no-pading">

           <select class="selections btn my-btn1 btn-select" name="subject" id="subject">

              <option value="Aardrijkskunde">Aardrijkskunde</option>

              <option value="Biologie">Biologie</option>

              <option value="Duits">Duits</option>

              <option value="Economie">Economie</option>

              <option value="Engels">Engels</option>

              <option value="Filosofie">Filosofie</option>

              <option value="Frans">Frans</option>

              <option value="Geschiedenis">Geschiedenis</option>

              <option value="Grieks">Grieks</option>

              <option value="Latijn">Latijn</option>

              <option value="Wiskunde C">M&O</option>

              <option value="Maatschappijleer">Maatschappijleer</option>

              <option value="Natuurkunde">Natuurkunde</option>

              <option value="Nederlands">Nederlands</option>

              <option value="NLT">NLT</option>

              <option value="Scheikunde">Scheikunde</option>

              <option value="Wiskunde (onderbouw)">Wiskunde (onderbouw)</option>

              <option value="Wiskunde A">Wiskunde A</option>

              <option value="Wiskunde B">Wiskunde B</option>

              <option value="Wiskunde C">Wiskunde C</option>

            </select>        

        </div>

        <div class="col-md-5 no-pading">

          <input type="text" name="postcode" id="autocomplete" placeholder="Postcode  bijv 1011AA" class=" btn my-btn1 selections">

        </div>

        <div class="col-md-3 no-pading">

          <button class="btn my-btn" onclick="searchTutor(event)">Zoeken</button>

        </div>

      </div>

      <p class="mb-1 filter-content">Bijles aan huis in regio Haarlem, Bloemendaal, Velsen en Amsterdam</p>

    </div>

  </section>



  <section class="text" id="first-text">

      <div class="container content">

      <h3 class="pb-2">Hoe je van stress en lagere cijfers naar zelfvertrouwen gaat</h3>

      <span class="line"></span>

      <p class="pt-3">Soms heb je een vak waarbij je de stof net niet goed snapt of waarbij de toetsen of het huiswerk <b>ontzettend moeilijk</b> zijn. Je haalt <b>lagere cijfers</b> terwijl jij en je ouders het gevoel hebben dat er meer in zit. Dat maakt het vak vaak ook minder leuk, je raakt er <b>gestresst en gefrustreerd</b> van en je motivatie wordt minder waardoor je nog lagere cijfers haalt dan je zou kunnen. Zonde! Ook kan dit thuis vervelende discussies opleveren. Herkenbaar? <br>
    
      <br>Waar het probleem ook ligt, met onze bijlessen aan huis helpen wij je graag optimaal vooruit. Wij vinden het een must dat we je zelfkennis en vaardigheden meegeven voor je algemene leerproces, zodat je echt wat aan onze bijlessen hebt - ook voor later. We helpen je met de leerstof, bieden je overzicht en geven je heel nuttige persoonlijke tips mee, zodat je:<br>
      <br>
      - Met <b>meer zelfvertrouwen</b> leert<br>
      <br>
      -<b> Meer overzicht</b> hebt van de stof <br>
       <br>
      - Beter snapt welke <b>leerstrategie</b> bij jou past<br>
       <br>
      - <b>Beter voorbereid</b> bent voor de toets<br>
       <br>
      - Met <b>minder stress</b> je toetsen ingaat<br>
       <br>
      - <b>Meer tijd</b> overhoudt voor leuke dingen<Br>
      <br>
      - <b>Minder discussies</b> thuis hebt met je ouders over leren en huiswerk maken
      <br></p>
 
      
       <div class="row">
       
    
          <div class="col-md-4">
          <br>
       <br>
         <center>  <img src="{{ URL::to('public/jatemp/temp/imgjs/iconha1.jpg ') }}" alt="Vooruit in kennis en zelfvertrouwen" width="40%"><center>
            <div class="text_botom">
             
              <div>
               <p class="top-text"><b>Vooruit in kennis en zelfvertrouwen</b></p>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
          <br>
       <br>
         <center>  <img src="{{ URL::to('public/jatemp/temp/imgjs/iconha2.jpg') }}" alt="Meer overzicht van de stof" width="40%"></center>
            <div class="text_botom">
        
              <div>
            <p class="top-text"><b>Meer overzicht van de stof</b></p>
               
              </div>
            </div>
          </div>
          <div class="col-md-4">
          <br>
       <br>
         <center> <img src="{{ URL::to('public/jatemp/temp/imgjs/iconha3.jpg') }}" alt="Beter voorbereid voor de volgende toets (en daarna)" width="40%"></center>
     
            <div class="text_botom">

              <div>
                       <p class="top-text"><b>Beter voorbereid en minder stress voor de volgende toets (en daarna)</b></p>
              </div>
            </div>
          </div>

 <p class="pt-3" style=!important;">Ben jij klaar om aan de slag te gaan? Dien een bijlesaanvraag in of vind via de zoekmachine hierboven de bijlesgever die bij jou past en zie dat je vooruit gaat!</p>
     </div>
  </section>



  <section id="red-post">

    <div class="container">

      <div class="row">

          <div class="col-md-9 col-sm-12">

            <div class="red-post-content">

              <h3 class="mpt-5 col">Een bijlesgever die bij je past</h3>

              <p class="pt-3 ml-3"  style="color: #fff!important;">Of je nu moeite hebt met Engels of wiskunde of misschien wel Latijn of economie, bij Omegabijles vind je de bijlesgever die bij je past. Dien een bijlesaanvraag in zodat wij de passende bijlesgever vinden, of neem zelf contact op met een bijlesgever naar keuze via onze zoekmachine. Al binnen drie dagen kun je aan de slag. 

              <h5 class="ml-3 mt-4">Onze bijlesgevers helpen je in (bijna) ieder vak vooruit!</h5>

              </p>

            </div>

          </div>

          <div class="col-sm-12 red-post-img">

              <img src="{{url('public/temp/img/read-post-ui.png')}}" alt="" width="100%">

          </div>

        </div>

    </div>

  </section>

  

  <section id="feature-1" class="feature">

    <div class="container">

      <div class="row">

        <div class="col-md-5">

          <img src="{{url('public/temp/img/feature-01.png')}}" alt="" width="100%">

        </div>

        <div class="col-md-7 pt-5">

         <h3>Alleen de beste bijlesgevers</h3>

         <span class="line-c"></span>

         <p>Al onze bijlesgevers zijn leerlingen of oud-leerlingen (studenten) die bekend zijn met jouw school.</p>

         <ul>

           <li><span><i class="fas fa-check"></i></span>We weten wat bepaalde docenten willen zien op je toetsen</li>

           <li><span><i class="fas fa-check"></i></span> Onze bijlesgevers hebben precies dezelfde stof ook al een keer gehad, dus we weten waar de moeilijkheden liggen</li>

           <li><span><i class="fas fa-check"></i></span>Jouw docent en ouders krijgen regelmatige updates van hoe het met de bijlessen gaat</li>

         </ul>

         <a href="{{url('hoehetwerkt')}}">Hoe het werkt</a>

        </div>

      </div>

    </div>

  </section>



  <section id="feature-2" class="feature">

    <div class="container">

      <div class="row">

        <div class="col-md-5 d_none">

          <img src="{{url('public/temp/img/feature-02.png')}}" alt="" width="100%">

        </div>

        <div class="col-md-7">

         <h3>Geselecteerd en getraind</h3>

         <span class="line-c"></span>

         <p>Al onze bijlesgevers zijn persoonlijk geselecteerd en hebben een uitgebreide training gehad. Onze bijlesgevers:</p>

         <ul>

           <li><span><i class="fas fa-check"></i></span>Hebben minimaal een 7,5 voor de vakken waar ze bijles in geven</li>

           <li><span><i class="fas fa-check"></i></span> Weten hoe ze jou vooruit kunnen helpen in oa. motivatie, concentratie en plannen</li>

           <li><span><i class="fas fa-check"></i></span> Zijn ook geselecteerd op enthousiasme en didactische vaardigheden (bijv. hoe ze uitleggen)</li>

         </ul>

        </div>

        <div class="col-md-5 d_block">

          <img src="{{url('public/temp/img/feature-02.png')}}" alt="" width="100%">

        </div>

      </div>

    </div>

  </section>



  <section id="feature-3" class="feature">

    <div class="container">

      <div class="row">

        <div class="col-md-5">

          <img src="{{url('public/temp/img/feature-03.png')}}" alt="" width="100%">

        </div>

        <div class="col-md-7">

         <h3>Ga effectief vooruit</h3>

         <span class="line-c"></span>

         <p>Onze bijlesgevers houden een handige structuur aan v&oacute;&oacute;r, tijdens en na de bijlessen. Zo maximaliseren we jouw leerproces.</p>

         <ul>

           <li><span><i class="fas fa-check"></i></span> We werken met een intakeformulier en een persoonlijk leerplan</li>

           <li><span><i class="fas fa-check"></i></span>  We evalueren regelmatig. Zo weet je precies wat je hebt geleerd en waar jouw bijlesgever je nog bij kan helpen</li>

           <li><span><i class="fas fa-check"></i></span> Je krijgt tips die specifiek afgestemd zijn op waar jij moeite mee hebt - erg handig voor later!</li>

         </ul>

        </div>

      </div>

    </div>

  </section>



  <section id="feature-4" class="feature">

    <div class="container">

      <div class="row">

        <div class="col-md-5 d_none">

          <img src="{{url('public/temp/img/feature-04.png')}}" alt="" width="100%">

        </div>

        <div class="col-md-7">

         <h3>Voor je ouders</h3>

         <span class="line-c"></span>

         <p>Bij Omegabijles bieden we heldere prijzen en betaalgemak. Wel zo makkelijk en effectief.</p>

         <ul>

           <li><span><i class="fas fa-check"></i></span>Betaal slechts &euro;15,- of &euro;21,- per bijlesuur, van respectievelijk een leerling of een student (oud-leerling) </li>

           <li> <span><i class="fas fa-check"></i></span> Klikt het onverhoopt niet tijdens de eerste les? Dan brengen wij de les niet in rekening</li>

           <li><span><i class="fas fa-check"></i></span> Maandelijks ontvangt u achteraf een factuur (via Whatsapp of per email) die u veilig via iDeal kunt voldoen</li>

         </ul>

        </div>

        <div class="col-md-5 d_block">

          <img src="{{url('public/temp/img/feature-04.png')}}" alt="" width="100%">

        </div>

      </div>

    </div>

  </section>



  <section id="tastimonials" class="tastimonials my-2">

    <div class="container">

      <div class="row">

        <div class="col-md-2 col-sm-2 d-none-when600">

          <img src="{{url('public/temp/img/test-left.png')}}" alt="" width="100%" class="mt-5">

        </div>

        <div class="col-md-8 col-sm-8">

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

            

              <div class="carousel-item active">

                 <div class="test-content">

                    <h3>Ervaringen</h3>

                    <span class="line"></span>

                    <p class="my-3">Zij gingen je al voor</p>

                    <p>R. heeft altijd zin om met Milena aan de slag te gaan. Milena helpt R. zelf het antwoord te vinden, geeft overzicht en leert R. de puntjes op de i te zetten. </p>

                    <p class="my-3">- Moeder R., klas 5 gymnasium</p>

               

                    

                  </div>

              </div>

              <div class="carousel-item">

                <div class="test-content">

                    <h3>Ervaringen</h3>

                    <span class="line"></span>

                    <p class="my-3">Zij gingen je al voor</p>

                    <p>Ik vind het altijd heel erg fijn om mijn Latijn en Grieks huiswerk samen te maken. Door de goede uitleg haal ik betere cijfers.</p>

                    <p class="my-3">- M. klas 5 gymnasium</p>

                    

                </div>

              </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

              <i class="fas fa-angle-left fa-3x" style="color: black;"></i>

              <span class="sr-only" style="color: black;">Previous</span>

            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

              <i class="fas fa-angle-right fa-3x" style="color: black;"></i>

              <span class="sr-only">Next</span>

            </a>

          </div>
<!-- TrustBox widget - Micro Review Count -->
<div class="trustpilot-widget" data-locale="nl-NL" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5b8d0789cc02dd00010b5926" data-style-height="24px" data-style-width="100%" data-theme="light">
  <a href="https://nl.trustpilot.com/review/omegabijles.nl" target="_blank">Trustpilot</a>
</div>
<!-- End TrustBox widget -->

           <p class="my-3" style="text-align: center;"><a target="_blank" href="https://nl.trustpilot.com/review/omegabijles.nl">Bekijk hier alle reviews</a></p>

        </div>



        <div class="col-md-2 col-sm-2 d-none-when600">

          <img src="{{url('public/temp/img/test-right.png')}}" alt="" width="100%" class="mt-5">

        </div>

      </div>

    </div>

  </section>


<div style="background-color: #F7FAFC;">
  <section class="test my-2" id="last-test">

    <div class="container content">

      <h3>Over Omegabijles</h3>

      <span class="line my-3"></span>

      <p>Omegabijles is in februari 2017 opgericht om leerlingen echt optimaal vooruit te helpen door ze te verbinden met bijlesgevers die ondersteuning bieden waar nodig. Het streven is de leerlingen niet alleen te helpen tot de toets maar juist ook tips mee te geven over hoe ze hun algemene leerproces kunnen verbeteren. Principes uit de pedagogiek en neurowetenschappen vormen de basis van Omegabijles. OMEGA staat voor “Opnemen”, “Monitoren”, “Efficiënt werken”, “Groeien” en “Antwoord geven”.</p>

    </div>

  </section>
</div>
    

  <section class="cta-box">

    <div class="container">

      <h3>Klaar om echt vooruit te gaan?</h3>

      <span class="line my-3"></span>

      <p class="my-5"></p>
      
        <div class="overpage-grid">

                <a href="{{ url('/contact') }}">
                    <button class="btn my-btn ml-c" style="width: 55%;">Bijlesaanvraag doen</button>
                </a>

                <a class="btn-margin" href="{{ url('/searchtutor') }}">
                    <button class="btn btn-outlin margin0" style="width:60%;">Zelf zoeken</button>
                </a>

            </div>


    </div>

  </section>





  @include('frontEnd.includes.footer')
@endsection

@section('scriptjs')
    <script>
        var options = {
  enableHighAccuracy: true,
  timeout: 20000,
  maximumAge: 0
};

navigator.geolocation.getCurrentPosition(success, error, options);

function success(pos) {
  var crd = pos.coords;
  var req = new XMLHttpRequest()
  //put the longitude and latitude into the API query
  req.open("GET", "http://maps.googleapis.com/maps/api/geocode/json?latlng="+crd.latitude+","+crd.longitude+"&sensor=true", true)
  //this is just the result callback -- it's the function arg to $.get, essentially
  req.onreadystatechange = function() {
      if(req.readyState == 4) {
          //again jquery will parse for you, but we want the results field
          var result = JSON.parse(req.response).results
          //the maps API returns a list of increasingly general results
          //i.e. street, suburb, town, city, region, country
          for(var i = 0, length = result.length; i < length; i++) {
              //each result has an address with multiple parts (it's all in the reference)
              for(var j = 0; j < result[i].address_components.length; j++) {
                  var component = result[i].address_components[j]
                  //if the address component has postal code then write it out
                 if(component.types[0] == 'postal_code'){
                    document.getElementById('postcode').value = component.long_name
                  }
              }
          }
      }
  }
  //dispatch the XHR... just use jquery
  req.send()
}
if (sessionStorage.getItem('footersubject').length > 4) {
  console.log('ss', sessionStorage.getItem('footersubject'))
  document.getElementById('subject').value = sessionStorage.getItem('footersubject')
  sessionStorage.setItem('footersubject', null)
}
function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

// function setSubject(value){
//     document.getElementById('subject').value = value
// }

function searchTutor(event){
    var postcode = document.getElementById('autocomplete').value
    var subject = document.getElementById('subject').value
    if (isNaN(postcode.charAt(0))) {
        alert('Vul alstublieft uw postcode in')
        return false
    }
    if(postcode != '' && subject != ''){
        window.location = '{{ url('/search-tutor')}}/'+postcode + '/' + subject
    }else{
        event.preventDefault();
    }
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.js"></script>

<script type="text/javascript">

  $("#autocomplete").geocomplete({
  country: 'nl',
  types:['(regions)']
}).bind("geocode:result", function(event, result) {
  document.getElementById('autocomplete').value = result.address_components[0].long_name
});   
</script>
@endsection