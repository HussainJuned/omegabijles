 <meta property="og:type" content="website">
    <meta property="og:site_name" content="Omegabijles">      
	<meta property="og:description" content="Bijes in Haarlem, Bloemendaal of omgeving? Zoek gemakkelijk via Omegabijles de bijlesgever die bij je past! ✅ Bijles aan huis. ✅Voor VMBO, HAVO, VWO en gymnasium. ✅We helpen met de stof en geven persoonlijke tips mee. " />
    <meta name="description" content="Op zoek naar Bijles in Haarlem, Bloemendaal of omgeving? Neem contact met ons op. Wij helpen graag verder! ✅ Bijles aan huis. ✅ Voor VMBO, HAVO, VWO en gymnasium. ✅ We helpen met de stof en geven persoonlijke tips mee. ">
 	<meta name="viewport" content="width=device-width, initial-scale=1"/> 
 	<meta name="Language" content="nederlands" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="contact, omegabijles, bijles, begeleiding, haarlem, bloemendaal, overveen, ijmuiden, velsen, santpoort, beverwijk, heemskerk, aan huis, vmbo, havo, vwo, gymnasium" />
	<meta name="robots" content="index, follow" />
	
<Title>Omegabijles -  Contact</Title>

@extends('frontEnd.master')
@section('content')
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTVSMTB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <header class="container-fluid main-header contact-main-header">
     @include('frontEnd.includes.nav')
    <div class="container work-cus-new">
      <h2 class="ml-2">Contact</h2>
    </div>
  </header>

  <section class="cta-box my-5 py-5">
    <div class="container">
      <p class="my-5"></p>
      <p><a target="blank" href="https://omegabijles.nl/hoehetwerkt" onclick="localStorage.setItem('faqp', 'yes')" style="color:blue !important;text-decoration:underline"><h4>Klik hier voor antwoord op Veelgestelde vragen (FAQ)</h4></a><br> Wilt u persoonlijk oriënterend advies voor de situatie van uw zoon of dochter of wilt u direct een bijlesaanvraag doen? Wij denken graag met u mee! Gebruik onderstaand contactformulier (aanbevolen). In de regel antwoorden we binnen 24 uur. </p>
    </div>
  </section>
   <section class="contact">
    <div class="contact-center">
     <h3>Contactformulier (aanbevolen)</h3>
      <span class="line my-3"></span>
      <form action="{{ url('/contact') }}" method="POST">
                {{ csrf_field() }}
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Uw naam">
           @if ($errors->has('name'))
                    <span style="color:red">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email" placeholder="Uw E-mailadres">
          @if ($errors->has('email'))
                    <span style="color:red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="phone" placeholder="Uw telefoonnummer (optioneel)">
          @if ($errors->has('phone'))
                    <span style="color:red">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Onderwerp">
          @if ($errors->has('subject'))
                    <span style="color:red">
                        <strong>{{ $errors->first('subject') }}</strong>
                    </span>
                @endif
        </div>
         <div class="form-group">
          <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Uw bericht (Bijv. Naam van uw kind, school, klas, het niveau, vak en overige wensen)"></textarea>
          @if ($errors->has('message'))
                    <span style="color:red">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                @endif
        </div>

        <button class="btn my-btn ml-3" style="width: 30%;">Verzenden</button>
      </form>
    </div>
    
  </section>

  <section id="icon" class="icon icon_world">
    <div class="container"> 
   
      <div class="row">
      
        <div class="col-md-4 col-sm-6">
          <div class="icon-content">
         
          <h4>Bericht via livechat</h4>
            <p>Zijn we online? Dan kunt u binnen enkele momenten een antwoord verwachten. Zijn wij offline? Stel uw vraag via de chat en laat uw email achter. Dan komen wij er binnen 24 uur op terug.</p>
       
      </div>
    </div>
    
      <div class="col-md-4 col-sm-6">
          <div class="icon-content">
            <h4 >Telefonisch: 023 23 40 565 / Whatsapp: 0620054562</h4>
            <p>We zijn telefonisch te bereiken via 023 23 40 565. Whatsappen kan uiteraard ook via: 0620054562. Zijn we even niet beschikbaar? Spreek de voicemail in of vul het contactformulier in dan bellen we u terug (<24 uur).</p>
          </div>
        </div>
        
         <div class="col-md-4 col-sm-6">
          <div class="icon-content">
         
            <h4>Email: info@omegabijles.nl</h4>
            <p>Stuur ons een email naar info@omegabijles.nl - gebruik hiervoor eventueel bovenstaand contactformulier. Wij antwoorden doorgaans binnen 24 uur. </p>
          </div>
        </div>
       
       
           
  </section>
  
 
  
  @include('frontEnd.includes.footer')

@endsection