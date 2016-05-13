<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="section-container">
		<nav class="main-nav divider-top">
			<ul>
				<li><img src="imgs/logo-menu.svg" alt=""><li>
				<li>Hem</li>
				<li>Case</li>
				<li>Feed</li>
			</ul>
		</nav>

		<figure class="puff">
				<div class="puff__item" style="background-image: url('imgs/fig8.jpg')"></div>
				<div class="puff__item" style="background-image: url('imgs/fig3.jpg')"></div>
				<div class="puff__item" style="background-image: url('imgs/fig4.jpg')"></div>
				<div class="puff__item" style="background-image: url('imgs/fig5.jpg')"></div>
		</figure>
		<figure class="puff">
				<div class="puff__item" style="background-image: url('imgs/fig2.jpg')"></div>
				<div class="puff__item" style="background-image: url('imgs/fig6.jpg')"></div>
				<div class="puff__item" style="background-image: url('imgs/fig7.jpg')"></div>
				<div class="puff__item" style="background-image: url('imgs/fig1.jpg')"></div>
		</figure>
		<div class="divider-bottom"></div>
	</header>

	<main>
		<section style="height: auto; position: relative;">
			<div class="divider-top"></div>
				<section class="col-container">
					<article class="col-d-6" style="padding-top: 10vh;">
						<h1 class="about__heading">Om oss</h1>
						<p class="about__bodyText">Vi är en ny fullservicebyrå inom retail som hjälper varumärken att bli valda. Vi startar den här byrån för att vi vill korta avståndet mellan insikt och genomförande. Det kan vi göra för att vi skapar en ny byråkonstellation där de tidigare kommunikationsexperterna inom butik – Locomotiv och Brand Support – går ihop under namnet Retail United. Nytt är också ett nära samarbete med strategerna på Agenda Retail. </p>
						<p class="about__bodyText">Hos Retail United samlar vi nu all den specialistkunskap som ger resultat, under ett tak. Djupare, uppdaterade insikter om kunder och konsumenter kombineras med ansvar för hela processen. Från säljkår, kedja, butik till shopper och konsument. Varmt välkommen till oss!</p>

						<h2 class="business__heading col-m-12">Våra affärsområden</h2>
						<div class="icons__section col-m-4">
							<figure class="icons__image"><img src="cloud_yellow.svg"></figure>
							<figcaption class="icons__image--caption">Insikt & Strategi</figcaption>
						</div>
						<div class="icons__section col-m-4">
							<figure class="icons__image"><img src="star_blue.svg"></figure>
							<figcaption class="icons__image--caption">Kreation</figcaption>
						</div>
						<div class="icons__section col-m-4">
							<figure class="icons__image"><img src="hand_red.svg"></figure>
							<figcaption class="icons__image--caption">Genomförande</figcaption>
						</div>
					</article>
					<article class="col-d-6">
						<div id="us" style="background-image: url('office.jpg'); margin-left: 10px; background-position: center center; background-size: cover; height: 80vh;"></div>
					</article>
					</section>
			<div class="divider-bottom"></div>
		</section>

		<section style="height: auto; position: relative;">
			<div class="divider-top"></div>
				<section class="about" style="padding-top: 15vh; padding-bottom: 10vh;">
					<h1 class="about__heading">Våra kunder</h1>
						<figure>
							<img src="imgs/kunder.jpg">
						</figure>
					</section> 
			<div class="divider-bottom"></div>
		</section>

		<section style="height: auto; position: relative;">
			<div class="divider-top"></div>
			<section class="col-container contact col-m-12 col-d-12">
				
				<h1 class="contact__heading">Kontakta oss</h1>
				<p class="contact__tagline">Bla bla bla..</p>
				
				<section class="contact__address col-m-12 col-d-6">
					<figure><i class="fa fa-phone" aria-hidden="true"></i></figure>
					<figcaption>08-451 55 00</figcaption>
					<figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
					<figcaption>Adress</figcaption>
					
					<section>
						<p>Kungsgatan 37</p>
						<p>Box 7793, 103 96 Stockholm</p>
						<p>Org. nr: 556551-1945</p>
					</section>	
					<section class="social">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</section>
				</section>
				<section class="contact__form col-m-12 col-d-6">
					<form action="" method="post" id="contact" class="contact-form">
					
						<label for="name" placeholder="Namn">Namn</label>
						<input type="text" name="name" id="name" placeholder="Namn" class="col-m-4">
						<label for="email">Mejladress</label>
						<input type="text" name="email" id="email" placeholder="Mejladress" class="col-m-4">
						<label for="tel">Telefon</label>
						<input type="tel" name="tel" id="tel" placeholder="Telefon" class="col-m-4">
						<label for="message">Meddelande</label>
						<textarea name="message" form="contact" placeholder="Skriv ditt meddelande här"class="col-m-12"></textarea>
						<input type="submit" value="Skicka" class="form__button">

					</form>
				</section>
				
				<footer class="footer">Lite copyright-text</footer>
			</section>
		</section>
	</main>
</body>
</html>
