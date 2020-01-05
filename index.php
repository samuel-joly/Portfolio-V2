<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>Portfolio - Joly Samuel</title>
	</head>

	<body>
		<header>
			<a href="index.php" id="header-title">Samuel Joly<br/><span>Portfolio</span></a>
			<nav>
				<a href="realisation.php">Réalisations</a>
				<a href="contact.php">Contact</a>
				<a href="livreOr.php">Livre d'Or</a>
				<a href="curriculum.php">CV</a>
				<a href="index.php"><div></div></a>
			</nav>
		</header>

		<main>
			<div id="mainContainer">
				
				<div class="grid-item two-long" id="contact">
				
					<div class="cover">
						<div class="title-zone">
							<h1>Contact</h1>
							<a href="contact.php" class="a-btn">Par ici</a>
						</div>
						
						<article>
							<h2>Pour toute demande de contact :</h2>
							<p class="normal-font">Vous pouvez me contacter par <a href="contact.php">Ici</a> ou par mail sur <a href="mailto:samueljoly0@gmail.com">samueljoly0@gmail.com</a></p>
							<div id="contact-dispo">
								<ul id="contact-dispo-left">
									<li class="normal-font">Réponse ASAP</li>
									<li class="normal-font">Dispo 24/24-7/7</li>
								</ul>
								<ul>
									<li>Actuellement en recherche d'un projet pro</li>
									<li>Si vous voulez en parler <a href="contact.php">faites le moi savoir</a></li>
								</ul>
							</div>
						</article>
					</div>
					
				</div>
				
				<div class="grid-item" id="curriculum">

					<div class="cover">
						<div class="title-zone">
							<h1>Curriculum Vitæ</h1>
							<a href="curriculum.php" class="a-btn">Par ici</a>
						</div>
							
						<article id="cv-article">
							<h2>Mon cursus personnel et scolaire</h2>
							<span>
								<div id="cv-article-pdf">
									<a href="CVJOLYSamuel.pdf" class="cv-article-title">CV en PDF</a>
									<a href="CVJOLYSamuel.pdf"><div id="cv-pdf-img"></div></a>
								</div>
								<div>
									<a href="CVJOLYSamuel.odt">CV en ODT</a>
									<a href="CVJOLYSamuel.odt"><div id="cv-odt-img"></div></a>
								</div>
							</span>
						</article>
					
					</div>					
					
				</div>
				
				<div class="grid-item two-height" id="livre-or">
					<div class="cover">
						<div class="title-zone">
							<h1>Livre d'Or</h1>
							<a href="livreOr.php" class="a-btn">Par ici</a>
						</div>
						
						<article>
							<h2 id="livre-or-title">Les derniers messages</h2>
							
							<div id="livre-or-commentaires">
							
								<div class="comm"> 
									<p class="auteur"><span>De Samuel</span><span>le 16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le premier commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur"><span>De Samuel</span><span>le 16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le premier commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur"><span>De Samuel</span><span>le 16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le premier commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur"><span>De Samuel</span><span>le 16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le premier commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur"><span>De Samuel</span><span>le 16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le premier commentaire</p>
								</div>
							
							</div>
							
						</article>
					</div>
					
				</div>
				
				<div class="grid-item" id="real-perso">
					
					<div class="cover">
						<div class="title-zone">
							<h1>Réalisation Perso</h1>
							<a href="realisation.php?perso=true" class="a-btn">Par ici</a>
						</div>
						
						<article>
							<h2>Mes réalisation extra-scolaire :</h2>
						</article>
					</div>
					
				</div>
				
				<div class="grid-item" id="real-etude">
					<div class="cover">						
						<div class="title-zone">
							<h1>Réalisation Etudes</h1>
							<a href="realisation.php?etudes=true" class="a-btn">Par ici</a>
						</div>
						<article>
							<h2 >Mes réalisation à LaPlateforme :</h2>
						</article>
					</div>
				</div>
				
				<div class="grid-item two-height two-long" id="infos-perso">
					<div class="cover">
						<h1>Carte de visite</h1>
						
						<article>
							<div id="infos-top">
								<div id="infos-img">
									<img src="Images/moi.png" id="moi"/>
									<ul>
										<li>Html-CSS <span>1 ans</span></li>
										<li>Python <span>2 ans</span></li>
										<li>PHP-JS <span>3 mois</span></li>
										<li>Algorithmie <span>2 ans</span></li>
									</ul>
								</div>
								
								<div id="social-link">
									<a href="https://www.linkedin.com/in/samuel-joly-170a38156/"><img src="Images/linkedIn.png"/></a>
									<a href="https://github.com/samuel-joly"><img src="Images/gitHub.png"/></a>
									<a href="https://steamcommunity.com/profiles/76561198100216375/"><img src="Images/steam.png"/></a>
									<a href="Azefortwo#3814"><img src="Images/Discord.png"/></a>
									<a href="https://laplateforme.io"><img src="Images/plateforme.png"/></a>
									<a href="contact.php" id="contact-link">
										<span id="contact-link-case">?</span>
										<p id="contact-link-text">
											<img src="Images/contactarrow.png"/>
											Devenons partenaires
										</p>
									</a>
								</div>
							</div>
							
							<div id="infos-bottom">
								<ul>
									<li><strong>Je veux :</strong> Dévelloper mes connaissances dans le domaine professionnel.</li>
									<li><strong>Je sais :</strong> Apprendre de mes expériences et de mes pairs.</li>
									<li><strong>Je suis :</strong> Curieux et motivé dans mon travail.</li>
									<li><strong>Je dois :</strong> Me diversifier dans les champs d'application de la progammation</li>
									<li><strong>Je serais:</strong> Ravis d'apprendre a votre cotés.</li>
								<ul>
							</div>
						</article>
					</div>
				</div>
				
				<div class="grid-item" id="actualite">
					<div class="cover">
						<h1>Travail en cour</h1>
						<article>
						</article>
					</div>
				</div>
			</div>
		</main>

		<footer>
		</footer>
	</body>

</html>