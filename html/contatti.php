<!DOCTYPE html>
<html>
<head>
	<title>Contatti</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./../css/fontawesome/all.css">
	<link rel="stylesheet" type="text/css" href="./../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="./../css/main.css">
</head>
<body>
<?php include './../includesPHP/navMobile.php';?>

<div class="container">
	<div class="row">
		<div class="col s12 center-align">
			<h2>Contatti</h2>
		</div>
	</div>
	<div class="row">
		<div class="col s12 l6 m6 xl6 center-align">
			<i class="far fa-envelope redPunto-color contactIco"></i>  
			<p  style="display: inline;">info@puntocasalecce.it</p>
		</div>
		<div class="col s12 l6 m6 xl6 center-align">
			<i class="fas fa-phone-alt redPunto-color contactIco"></i>  
			<p  style="display: inline;">39 21 640 406</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<div class="map-responsive">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24325.035314961046!2d18.16343034025518!3d40.35056616196993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13442edf7a33467d%3A0x7cd9bb9f69adfe3a!2sViale%20Gallipoli%2C%201%2C%2073100%20Lecce%20LE%2C%20W%C5%82ochy!5e0!3m2!1spl!2spl!4v1600179104489!5m2!1spl!2spl" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 center-align">
			<span class="redPunto-color">Aperti</span>
			<p>dal <span class="redPunto-color">Lunedì</span> al <span class="redPunto-color">venerdì</span></p>
			<p>dalle <span class="redPunto-color">9:00</span> alle <span class="redPunto-color">12:30</span></p>
			<p>dalle <span class="redPunto-color">15:30</span> alle <span class="redPunto-color">19:00</span></p>
			<p>Il <span class="redPunto-color">sabato</span> siamo disponibili su appuntamento. </p>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<img src="./../static/foto_ufficio.jpg" class="responsive-img materialboxed">
		</div>
	</div>
</div>


<?php include './../includesPHP/footer.php';?>
<script type="text/javascript" src="./../js/jQuery.min.js"></script>
<script type="text/javascript" src="./../js/materialize.min.js"></script>
<script type="text/javascript" src="./../js/init.js"></script>
</body>
</html>