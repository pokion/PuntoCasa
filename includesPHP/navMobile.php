<?php
	echo '
	<!-- header for mobile only -->
	<header class="hide-on-large-only navbar-fixed">
		<nav class="white top-nav">
			<div id="mobileNav">
				<div class="container">
					<div class="nav-wrapper">
						<div class="row">
							<div class="col s12 m10 offset-m1">
								<img src="./../static/logo.jpg" class="logo" height="50" style="position: absolute;top: 50%;transform: translate(0,-50%);">

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
		<li><a href="./vuoivenderecasa.php">Vuoi vendere casa</a></li>
		<li><a href="./chisiamo.php">Chi siamo</a></li>
		<li class="nestActivator">Altro  <i class="fas fa-caret-down"></i></li>
		<div class="navNest nestOff">
			<li class="nest">Immobili in vendita</li>
			<li class="nest"><a href="./9errori.php">9 errori da evitare per vendere casa</a></li>
			<li class="nest"><a href="./contatti.php">Contatti</a></li>
			<li class="nest">Privacy Policy</li>
		</div>
	</ul>
	<!-- sidenav end -->
	<!-- header for mobile only end -->

	';
?>