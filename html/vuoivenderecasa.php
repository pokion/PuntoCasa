<!DOCTYPE html>
<html>
<head>
	<title>La tua casa vale se sai come valorizzarla</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./../css/fontawesome/all.css">
	<link rel="stylesheet" type="text/css" href="./../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="./../css/main.css">
	<link rel="stylesheet" type="text/css" href="./../css/vuoi.css">
</head>
<body>
<?php include './../includesPHP/navMobile.php';?>

	<div class="row">
		<div class="col s12 center-align">
			<h3>Voui vendere casa?</h3>
		</div>
	</div>
	<img src="./../static/werwrwererwr.jpg" class="responsive-img">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<p class="flow-text center-align">Vuoi cambiare casa e non sai da dove iniziare? hai un'abitazione che non utilizzi e non sai se vendere o metterla a rendita? Contattaci, offriremo una consulenza immobiliare gratuita e senza impegno affinchè tu possa valutare consapevolmente come procedere efficacemente. </p>
			</div>
		</div>
		<div class="row">
			<div class="col s12 center-align">
				<h3>I nostri servizi</h3>
			</div>
		</div>
		<div class="row">
			<div class="col s12 center-align">
				<div class="infoBox">
					<div class="infoHeader">
						<p class="flow-text">Vuoi sapere quanto vale la tua casa? Effettuiamo valutazioni gratuite e senza impegno.</p>
					</div>
					<div class="infoBody off">
						<p class="flow-text">
							Molti credono che il valore dell'immobile sia un dato esatto stabilito e dettato esclusivamente dalla zona. Riceviamo chiamate in cui ci vien chiesto di dare valutazioni al telefono, ma valutare un immobile è un'altra cosa. Il valore di casa tua dipende da moltissimi fattori, ad esempio se internamente è suddivisa bene, se il prospetto si presenta in ordine, se all'interno sono stati effettuati dei lavori e a quando risalgono. Il piano è senza dubbio una componente da considerare. L'ascensore, il tipo di condominio, la visuale da casa, la presenza di affacci esterni più o meno ampi. Il gusto delle finiture, se troppo personali, potrebbe condizionare la vendita. Potrà sembrare incredibile ma un'abitazione di pari superficie a 20 metri di distanza potrebbe avere un prezzo dimezzato o doppio rispetto all'altra.
						</p>
					</div>
					<div class="infoButton">
						<i class="fas fa-chevron-down"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include './../includesPHP/footer.php';?>

<script type="text/javascript" src="./../js/jQuery.min.js"></script>
<script type="text/javascript" src="./../js/materialize.min.js"></script>
<script type="text/javascript" src="./../js/init.js"></script>
<script type="text/javascript">
	$('.infoButton').click(function(){
		$('.infoBody').toggleClass('off')
		$('.infoBody').toggleClass('on')
		console.log('sad')
	})
</script>
</body>
</body>
</html>