<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bloemendaal</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link href="{{ asset('/public/frontEnd/harleem/style.css') }}" type="text/css" rel="stylesheet"/>
</head>
<body>
	<div class="container-fluid">
		<div class="menu">
			<nav class="navbar navbar-expand-lg navbar-light bg-color">
				<a class="navbar-brand" href="#">
					 <img src="{{ asset('/public/frontEnd/harleem/images/logo.png') }}" width="250px" class="d-inline-block align-top" alt="">
				</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
				  <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
					  <li class="nav-item">
						<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="{{ url('/hoehetwerkt') }}">Hoe het werkt</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="{{ url('/overons') }}">Over ons</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="{{ url('/wordbijlesgever') }}">Word bijesgever</a>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="{{ url('/login') }}">Login</a>
					  </li>
					  </li>
					</ul>
				  </div>
			</nav>
		</div>
	</div>

<section class="top_section">
	<div class="container-fluid">
		 <div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="left_section text_wtite">	
					<h2>Op zoke naar bijles aan huis in Haarlem ?</h2>
						<p class="text_white">Wij geven persoonlijk afgestemade bijlessen aan huis en zien onze leerlingen groeien in (zelf-)keenis en vaardigheden! Vind ook via Omegabijles gemakkelijk de bijlesgever die uw kind past:</p>
						
						<div class="button">
							<a href="{{ url('/search-tutor') }}" class="btn btn-danger">Ik zoke een bijlesgever </a>
						</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="right_section d-none d-lg-block">
					<img src="{{ asset('/public/frontEnd/harleem/images/header.png') }}" class="img-fluid" alt="Responsive image">
				</div>
			</div>
		 </div>
	</div>
</section>

<!-- *// top_section END *// -->

<!-- *// about_section START *// -->
<section class="about_section">
	<div class="container">
		<div class="header">
			<h2>Bereick meer met bijles aan huis in Haarlem</h2>
				<span class="line"></span>
				<p class="text_gray">Heeft uw zoon of dochter moeite met een bepaald vak? Vaak willen leerlingen wel leren maar weten niet hoe ze het optimall kunnen aanpakken, of zorgt die telefoon of compute toch voor iets te veel afleding en is er simpelweg een stok achter de deur nodig. In zulke gevallen kan 1-op-1 <strong>bijles aan huis</strong> in Haarlem (en omgeving) uitkmst bieden.Via Omegabijles kunt u snel en gemakkelijk de bijlesgever vinder die bij uw kind past - voor bijles Engels of Lantijn tot bijles wiskunde of scheikunde en alles ertussenin. </p>
		</div>
		
		<div class="grid_section">
			<div class="row">
				<div class="col-sm-4">
					<div class="option">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><span>Bijles ann huis </span>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="option">
						<i class="fa fa-check-square-o" aria-hidden="true"></i><span>Persoonalijk afgestemd</span>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="option">
						<i class="fa fa-check-square-o" aria-hidden="true"></i> <span>Geselecteerde bijlesgever</span>
					</div>
				</div>

			</div>
		</div>
		
	</div>
</section>
<!-- *// about_section END *// -->


<!-- *// service_section START *// -->
<section class="service_section single">
	<div class="container">
		<div class="header">
			<h2>Over onze annpak</h2>
				<span class="line"></span>
				<p class="text_gray">Onze bijlesgever berngt in kaart waar de problemen liggen, hehaalt samen de vaksof en geef persoonlijke tips mee - handig voor  </p>
		</div>		
				<div class="grid_section">
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="img">
									<img src="{{ asset('public/frontEnd/harleem/images/01.png') }}" class="img-fluid" alt="Responsive image">
								</div>
									<div class="card-body text_gray">
										<p>Vooruit in kennis en zelfvertrouwen</p>
									</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="img">
									<img src="{{ asset('public/frontEnd/harleem/images/02.png') }}" class="img-fluid" alt="Responsive image">
								</div>
									<div class="card-body text_gray">
										<p>Meer overzitcht van de stof </p>
									</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="img">
									<img src="{{ asset('public/frontEnd/harleem/images/03.png') }}" class="img-fluid" alt="Responsive image">
								</div>
									<div class="card-body text_gray">
										<p>Berer voorbereid voor de volgende toets (en daarna)</p>
									</div>
							</div>
						</div>

					</div>
				</div>
		</div>
	</div>
</section>
<!-- *// service_section END *// -->


<!-- *// work_section START *// -->

<section class="work_section single">
	`<div class="container">
		<div class="grid_section">
			<div class="row">
				<div class="col-sm-6">
					<div class="left_side">
						<h4>Omegabijles in het kort:</h4>
							<ul>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Bijles aan huis in Haarlem, Bloemandaal,Velsen en Amsterdam</li><li>
								</li><li><i class="fa fa-check-circle" aria-hidden="true"></i>Geselecteerde en getrainde bijlesgevers</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Wij stemmen de bijlessen af op de voorkeuren van u en uw kind</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>100% tevredenheidsgarantie</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Veilig achteraf via iDeal betalen</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>U blijft op de hooget over de voortgang </li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Indien gewenst betrekken wij de vakdocent</li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>"Omega" is gebasserd op inzichten uit de pedagogiek en neuiowetenschappen </li>
								<li><i class="fa fa-check-circle" aria-hidden="true"></i>Optimaal vooruit in (zelf)kennis en vaardigheden - tot aan de toets en voor later!</li>
							</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="right_side">
						<img src="{{ asset('public/frontEnd/harleem/images/right_side.png') }}" class="img-fluid" alt="Responsive image">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- *// work_section END *// -->


<!-- *// client_opinion END *// -->
<section class="client_opinion single">
	<div class="container">
		<div class="header">
			<h2>Ervaringen</h2>
				<span class="line"></span>
				<p class="text_gray">Waar we trots op zijn </p>
		</div>	
		<div class="grid_section">
			<div class="row">
				<div class="col-sm-4">
					<div class="media">
						<div class="media-body text_gray">
							<p>
							"Hij weet gewoon precies waarik op vastliep en heeftme over dat punt geholpen." 
						</p>
							<p class="mt-0 mb-1">-Pieter over bijlesgever Michael</p>
						</div>
					 <img class="align-self-end mr-3" src="{{ asset('public/frontEnd/harleem/images/pro01.png') }}" alt="Generic placeholder image">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="media">
						<div class="media-body text_gray">
							<p>
								"Dikke 5 sterren voor bijles gever Cas! Hij brengt de bijles leuk over, waardoor je het niet erg vind dat hij langskomt. De bijlessen waar heel leerzaam en we waren goed optijd begonnen,waardoor m'n cifers van een onvoldoende naar enn ruim voldoende gingen!"
							</p>
							<p class="mt-0 mb-1">- Giligor over bijlesgever Cas </p>
						</div>
					<img class="align-self-end mr-3" src="{{ asset('public/frontEnd/harleem/images/pro02.png') }}" alt="Generic placeholder image">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="media">
						<div class="media-body text_gray">
							<p>
							"...ben zeer positief! Ik volg bijles in Grikes en Lantijn en haal sindsdien hogere cifers ook snap ik de stof makkelijker.Ik raad iedereen die bijles nodig heef omegabijles aan!" 
						</p>
							<p class="mt-0 mb-1">-Marilene over bijlesgever Milena</p>
						</div>
					 <img class="align-self-end mr-3" src="{{ asset('public/frontEnd/harleem/images/pro03.png') }}" alt="Generic placeholder image">
					</div>
				</div>
			</div>
			<div class="review">
				<p>Zie onze <strong>5</strong> review op <i class="fa fa-star" aria-hidden="true"></i> <strong>Trustpilot</strong></p>
			</div>
		</div>
	</div>
</section>

<!-- *// client_opinion END *// -->


<!-- *// link_section END *// -->

<section class="link_section">
	<div class="container">
		<div class="bg_color section_link">
			<div class="header">
				<p class="text_gray">Klik hieronder op een van de vakken om direct een bijlesgever in Haarlem te vinden:</p>
			</div>
			<div class="grid_section">
				<div class="row">
					<div class="col-md-12">
						<div class="link">
							<button type="button" class="btn btn-light" onclick="goToSearch('Aardrijkskunde')">Aardrijksunde</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Biologie')">Biologie</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Duits')">Duits</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Economie')">Economie</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Engels')">Engels</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Filosofie')">Filosofie</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Frans')">Frans</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Geschiedenis')">Geschiedenis</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Grieks')">Grieks</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Latijn')">Latijn</button>
						</div>
					</div>
				
					<div class="col-md-12">
						<div class="link link-2">
							<button type="button" class="btn btn-light" onclick="goToSearch('M&O')">M&O</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Maatschappijleer')">Maatschappijleer</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Nederlands')">Nederlands</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('NLT')">NLT</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Scheikunde')">Scheikunde</button>
						</div>
					</div>
				
					<div class="col-md-12">
						<div class="link link-3">
							<button type="button" class="btn btn-light" onclick="goToSearch('Wiskunde (onderbouw)')">Wiskunde (onderbouw)</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Wiskunde A')">Wiskunde A</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Wiskunde B')">Wiskunde B</button>
							<button type="button" class="btn btn-light" onclick="goToSearch('Wiskunde C')">Wiskunde C</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<section class="bottom_up_section bg_gray single">	
	<div class="container">
		<div class="bottom_up">
			<div class="header">
				<h2>Veelgestelde vragen</h2>
					<span class="line"></span>
			</div>
			<div class="grid_section">
				<div class="row">
					<div class="col-sm-6">
						<div class="left_side">
							<div class="accordion" id="accordionExample">
							  <div class="card">
								<div class="card-header" id="headingOne">
								  <h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fa fa-plus" aria-hidden="true"></i>Voor wie is Omegabijles bedoeld?
									</button>
								  </h5>
								</div>

								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingTwo">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									 <i class="fa fa-plus" aria-hidden="true"></i>Wat als het nite klikt de eerste bijles?
								  </h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingThree">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  <i class="fa fa-plus" aria-hidden="true"></i>Waar wornden de bijlessen gegeven?
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingFour">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									  <i class="fa fa-plus" aria-hidden="true"></i>Hoe verloopt de betaling
								  </h5>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingFive">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									  <i class="fa fa-plus" aria-hidden="true"></i>Hoeveel uren bijles adviseren jullie?
								  </h5>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingSix">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									 <i class="fa fa-plus" aria-hidden="true"></i>Wie zijn jullie bijlesgever?
								  </h5>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingSeven">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									<i class="fa fa-plus" aria-hidden="true"></i>Wat kosten bijlessen?
								  </h5>
								</div>
								<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-6">
						<div class="right_side">
							<div class="accordion" id="accordionExample">
							  <div class="card">
								<div class="card-header" id="headingEight">
								  <h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
										<i class="fa fa-plus" aria-hidden="true"></i>In welke vakken geven jullie bijles?
									</button>
								  </h5>
								</div>

								<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card Nine">
								<div class="card-header" id="headingNine">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
									 <i class="fa fa-plus" aria-hidden="true"></i>Voor vak ... kan ik geen bijlesgever binden bij mij in de </br>
									 buurt,wat nu
								  </h5>
								</div>
								<div id="collapseNine" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingThree">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  <i class="fa fa-plus" aria-hidden="true"></i>Hoe werkt het opzeggen
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingFour">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									  <i class="fa fa-plus" aria-hidden="true"></i>Bieden jullie ook huiswerkbegeleiding en </br>examentraining aan?
								  </h5>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							  <div class="card">
								<div class="card-header" id="headingFive">
								  <h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									  <i class="fa fa-plus" aria-hidden="true"></i>Kan ik als ouder op de hooget gehouden worden?
								  </h5>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								  </div>
								</div>
							  </div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<div class="bottom_section single">
		<div class="container">
			<div class="header">
				<h2>Ga voor bijles aan huis in Haarlem</h2>
					<span class="line"></span>
			</div>	
			<div class="button">
				<button type="button" class="btn btn-danger"> Zoeken  </button>
			</div>
		</div>
	</div>

<!-- *// link_section END *// -->

<!-- *// bottom_section START *// -->

<!-- *// bottom_section END *// -->
<!-- *// footer_section START *// -->
<section class="footer_section sky_bg">
	<div class="container">
		<div class="image">
			<img src="images/logo.png" width="300px" class="d-inline-block align-top" alt="">
		</div>
			<div class="grid_section">
				<div class="row">
					<div class="col-md-3 col-sm-4 ">
						<ul>
							<li><a href="https://omegabijles.nl">Home</a></li>
							<li><a href="https://omegabijles.nl/hoehetwerkt">Hoe het werkt</a></li>
							<li><a href="https://omegabijles.nl/overons">Over ons</a></li>
							<li><a href="https://omegabijles.nl/wordbijlesgever">Word bijlesgever</a></li>
							<li><a href="https://omegabijles.nl/contact">Contact</a></li>
						</ul>
					</div>
            
					<div class="col-md-3 col-sm-4 col-12">
						<ul class="footer_ul">
						<li><b>Vaak gezocht:</b></li>
							<li><a href="https://omegabijles.nl/bloemendaal/wiskundeb">Bijles Wiskunde B in Bloemendaal</a></li>
							 <li><a href="https://omegabijles.nl/bloemendaal/latijn">Bijles Latijn in Bloemendaal</a></li>
							<li><a href="https://omegabijles.nl/velsen/scheikunde">Bijles Scheikunde in Velsen</a></li>
							<li><a href="https://omegabijles.nl/velsen/biologie">Bijles Biologie in Velsen</a></li>
						</ul>
					</div>
            
					<div class="col-md-3 col-sm-4 col-12">
						<ul class="footer_ul">
							<li><a href="https://omegabijles.nl/haarlem/natuurkunde">Bijles Natuurkunde in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/economie" "="">Bijles Economie in Haarlem</a></li> 
							<li><a href="https://omegabijles.nl/haarlem/wiskundea">Bijles Wiskunde A in Haarlem </a></li>
							<li><a href="https://omegabijles.nl/velsen/geschiedenis">Bijles Geschiedenis in Velsen</a></li>
							<li><a href="https://omegabijles.nl/velsen/engels">Bijles Engels in Velsen</a></li>

						</ul>
					</div>
            
					<div class="col-md-3 col-sm-4 col-12">
						<ul class="footer_ul">
							<li><a target="_blank" href="https://nl.trustpilot.com/review/omegabijles.nl">Bekijk hier alle reviews</a></li>
							<li>Whatsapp: 0620054562<br>
							Email: info@omegabijles.nl<br>
							<br>
						   <div class="success_social">
								<div><a target="_blank" href="https://www.instagram.com/omegabijles/"><span>Volg ons op Instagram</span></a></div>
								<div><a target="_blank" href="https://www.facebook.com/omegabijles"><span>Like ons op Facebook</span></a></div>
							</div>  
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="grid_section">
				<div class="row 2">
					<div class="col-md-3 col-sm-4 ">
						<ul>
							<li><a href="https://omegabijles.nl/haarlem/aardrijkskunde">Bijles Aardrijkskunde in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/biologie">Bijles Biologie in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/duits">Bijles Duits in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/economie">Bijles Economie in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/engels">Bijles Engels in Haarlem</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 col-12">
						<ul class="footer_ul">
							<li><a href="https://omegabijles.nl/haarlem/filosofie">Bijles Filosofie in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/frans">Bijles Frans in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/geschiedenis">Bijles Geschiedenis in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/grieks">Bijles Grieks in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/latijn">Bijles Latijn in Haarlem</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 col-12">
						<ul class="footer_ul">
							<li><a href="https://omegabijles.nl/haarlem/m&amp;o">Bijles M&amp;O in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/maatschappijleer">Bijles Maatschappijleer in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/natuurkunde">Bijles Natuurkunde in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/nederlands">Bijles Nederlands in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/nlt">Bijles NLT in Haarlem</a></li>
						</ul>
					</div>
					
					<div class="col-md-3 col-sm-4 col-12">
						<ul class="footer_ul">
							<li><a href="https://omegabijles.nl/haarlem/scheikunde">Bijles Scheikunde in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/wiskundeonderbouw">Bijles Wiskunde (onderbouw) in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/wiskundea">Bijles Wiskunde A in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/wiskundeb">Bijles Wiskunde B in Haarlem</a></li>
							<li><a href="https://omegabijles.nl/haarlem/wiskundec">Bijles Wiskunde C in Haarlem</a></li>
						</ul>
					</div>  
				</div>
			</div>
	</div>
</section>

<!-- *// footer_section END *// -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>


function goToSearch(value) {
   window.location = '{{ url("/bloemendaal")}}/' + value
}

</script>
</body>
</html>	