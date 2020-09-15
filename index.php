<!DOCTYPE html>
<html lang="it">
<head>
	<title>Punto Casa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/fontawesome/all.css">
	<link rel="stylesheet" type="text/css" href="./css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<!-- header for mobile only -->
	<header class="hide-on-large-only navbar-fixed">
		<nav class="white top-nav">
			<div id="mobileNav">
				<div class="container">
					<div class="nav-wrapper">
						<div class="row">
							<div class="col s12 m10 offset-m1">
								<img src="./static/logo.jpg" class="logo" height="50" style="position: absolute;top: 50%;transform: translate(0,-50%);">

								<a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger full right">
									<i class="fas fa-bars redPunto-color"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- sidenav -->
	<ul id="nav-mobile" class="sidenav">
		<a href="#!" class="sidenav-close right redPunto-color" style="font-size: 1.5em">
			<i class="fas fa-times"></i>
		</a>
		<li class="mobileNavMargin">Home</li>
		<li>Vuoi vendere casa</li>
		<li>Chi siamo</li>
		<li class="nestActivator">Altro  <i class="fas fa-caret-down"></i></li>
		<div class="navNest nestOff">
			<li class="nest">Immobili in vendita</li>
			<li class="nest">9 errori da evitare per vendere casa</li>
			<li class="nest"><a href="./html/contatti.php">Contatti</a></li>
			<li class="nest">Privacy Policy</li>
		</div>
	</ul>
	<!-- sidenav end -->
	<!-- header for mobile only end -->

	<main>
		<div class="startSection valign-wrapper">
			<div class="mainText">
				<p class="white-text flow-text">"Ci occupiamo di case come delle persone che le vivono."</p>
			</div>

			<div class="media">
				<a class="mediaIco valign-wrapper center-align">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a class="mediaIco valign-wrapper center-align">
					<i class="fab fa-youtube"></i>
				</a>
				<a class="mediaIco valign-wrapper center-align">
					<i class="fab fa-linkedin-in"></i>
				</a>
			</div>

			<a href="#mainContent" class="scrolDown mediaIco valign-wrapper center-align">
				<i class="fas fa-chevron-down"></i>
			</a>
		</div>

		<div id="mainContent" class="container center-align scrollspy" style="margin-top: 110vh;">
			<a href="#!" class="puntoBnt redPunto-color">I NOSTRI IMMOBILI</a>
			<br>
			<br>
			<div class="row">
				<div class="col s12">
					<div class="memo">
						<p class="flow-text">
							La passione per il nostro lavoro è il motivo che ci ha spinto a migliorare e ad offrire un servizio sempre attento e aggiornato. Chi sceglie di vendere con <span class="redPunto-color">Punto Casa</span> di Lecce sa che può smettere di preoccuparsi della casa. Penseremo a tutto noi, offrendo la nostra più completa attenzione, prendendoci cura di casa Vostra come fosse nostra. Per chi invece è impegnato nel cercare la casa dei propri sogni, saremo tutt'orecchi, perchè capire davvero cosa si cerca è il primo vero passo per trovarlo.
						</p>
					</div>
				</div>
			</div>
			<br>
		</div>
	</main>

	<?php include './includesPHP/footer.php';?>

<script type="text/javascript" src="./js/jQuery.min.js"></script>
<script type="text/javascript" src="./js/materialize.min.js"></script>
<script type="text/javascript" src="./js/init.js">
</script>
</body>
</html>