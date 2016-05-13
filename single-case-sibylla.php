<?php include 'head.php'; ?>
<body>
	<header class="hero hero--sibylla">
		<nav class="main-nav divider-top--transparent">
			<ul>
				<li><img src="imgs/logo-menu.svg" alt=""><li>
				<li>Hem</li>
				<li>Case</li>
				<li>Feed</li>
			</ul>
		</nav>
		<div class="intro">
			<figure class="intro__logo">
				<img src="imgs/case_sibylla/sibylla-logo.svg" alt="">
			</figure>
			<h2 class="intro__heading">Butcher's Plate</h2>
			<p class="intro__caption">
				<span class="first">Lanseringsstrategi</span><br>
				<span class="second">Konceptutveckling</span><br>
				<span class="third">Designstrategi</span><br>
			</p>
		</div>
		<div class="divider-bottom"></div>
	</header>

	<article class="single">
		<figure class="single__icon" alt="Icon of a hand.">
			<img src="hand_red.svg" alt="">
		</figure>
		<h1 class="single__heading mission">Uppdrag</h1>
		<p class="single__paragraph">Intresset för korv av bättre kvalitet har ökat markant under de senaste åren. Men i den rådande korvtrenden är det inte bara kvalitet som efterfrågas utan nyfikenheten för nya smaker/varianter är stor. Sibylla ville därför lansera ett nytt koncept där kunden själv får välja mellan olika mindre stekkorvar av hög kvalitet. Ett nytt sätt att äta korv helt enkelt där man själv kan kombinera de korvar och tillbehör man tycker bäst om. Retail United fick i uppgift att namnge, ta fram en grafisk symbol och införsäljningsmaterial för konceptet.</p>
		
		<figure class="single__icon" alt="Icon of a cloud.">
			<img src="cloud_yellow.svg" alt="">
		</figure>
		<h1 class="single__heading solution">Lösning</h1>
		<p class="single__paragraph">Utmaningen var att hitta ett namn på konceptet och ta fram en symbol som signalerar premiumkorv, skapar intresse i servicehandeln och som hjälper slutkonsumenten att förstå och tycka om erbjudandet. Resultatet blev Butcher’s Plate!</p>
		
		<figure class="single__icon" alt="Icon for a explosion.">
			<img src="star_blue.svg" alt="">
		</figure>
		<h1 class="single__heading result">Resultat</h1>
		<p class="single__paragraph">7-Eleven beslutade sig för att lansera konceptet och ge sina kunder en möjlighet att ta del av det nya spännande erbjudandet. Man genomförde en betydande kampanj i sina butiker och lyfte Butcher’s Plate på sina food trucks. Butcher’s Plate bidrar nu på flera ställen till att visa att Sibylla är ett modernt och innovativt företag, som aktivt jobbar med produktutveckling och har näsa för de globala mattrenderna.</p>
		
	</article>
	<section class="col-container case-gallery">
		<div class="col-row">
			<figure class="single__image col-m-12 col-d-4" alt="">
				<img src="imgs/case_sibylla/sibylla01.jpg" alt="">
			</figure>
			<figure class="single__image col-m-12 col-d-4" alt="">
				<img src="imgs/case_sibylla/sibylla02.jpg" alt="">
			</figure>
			<figure class="single__image col-m-12 col-d-4" alt="">
				<img src="imgs/case_sibylla/sibylla03.jpg" alt="">
			</figure>		
			<figure class="single__image col-m-12 col-d-4" alt="">
				<img src="imgs/case_sibylla/sibylla04.jpg" alt="">
			</figure>
			<figure class="single__image col-m-12 col-d-4" alt="">
				<img src="imgs/case_sibylla/sibylla05.jpg" alt="">
			</figure>
		</div>
	</section>

	<section class="case-contact">
		<div class="divider-top"></div>
		<div class="col-container">
			<div class="col-row">
				<h2 class="case-contact__heading">Det här är mitt projekt!</h2>
				<div class="case-contact__portrait col-m-4 col-d-4">
					<img class="" src="imgs/lotta.png" alt="">
				</div>
				<div class="case-contact__contactinfo col-m-7 col-d-4">
					<p class="contactinfo__name">Anna Nilsson</p>
					<p class="contactinfo__role">Account Manager</p>
					<p class="contactinfo__phone"><a href="#">070 - 123 45 67</a></p>
					<p class="contactinfo__email"><a href="#">anna.nilsson@retailunited.se</a></p>
				</div>
				<div class="case-contact__qoute col-m-12 col-d-4">
					<p>"Utmaningen var att hitta ett namn på konceptet och ta fram en symbol som signalerar premiumkorv, skapar intresse i servicehandeln och som hjälper slutkonsumenten att förstå och tycka om erbjudandet."</p>
				</div>
			</div>
			<div class="col-row">
				<form class="case-contact__form">
					<label for="email">Ska jag höra av mig?</label>
					<input type="email" name="email" placeholder="Din e-postadress">
					<button>Skicka</button>
				</form>
			</div>
		</div>
		
		<div class="divider-bottom"></div>
	</section>
	
	<section class="case-gallery">
		<h2 class="case-gallery__heading">Fler case inom samma område:</h2>
		<div class="section-container">
			<?php include 'highlight-area.php'; ?>
		</div>
	</section>

	<?php include 'contact.php'; ?>
	
	<span class="switch-case switch-case--prev">
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</span>
	<span class="switch-case switch-case--next">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
	</span>
</body>
</html>