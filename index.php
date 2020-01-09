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
							<h2>Pour me contacter :</h2>
							<p class="normal-font">Vous pouvez me joindre par <a href="contact.php">Ici</a> ou par mail a <a href="mailto:samuel.joly@laplateforme.io">samuel.joly@laplateforme.io</a></p>
							<div id="contact-dispo">
								<ul>
									<li class="normal-font">Réponse ASAP</li>
									<li class="normal-font">Dispo 24/24-7/7</li>
								</ul>
								<ul>
									<li class="normal-font">Actuellement en recherche d'un projet pro</li>
									<li class="normal-font">Si vous voulez en parler <a href="contact.php">faites le moi savoir</a></li>
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
							<div>
								<div id="cv-article-pdf">
									<a href="CVJOLYSamuel.pdf"><div id="cv-pdf-img"></div></a>
									<a href="CVJOLYSamuel.pdf" class="cv-article-title">CV en PDF</a>
								</div>
								<div id="cv-article-odt">
									<a href="CVJOLYSamuel.odt"><div id="cv-odt-img"></div></a>
									<a href="CVJOLYSamuel.odt" class="cv-article-title">CV en ODT</a>
								</div>
							</div>
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
							<h2 >Mes réalisation LaPlateforme :</h2>
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
									<a target="blank" href="https://www.linkedin.com/in/samuel-joly-170a38156/"><img src="Images/linkedIn.png"/></a>
									<a target="blank" href="https://github.com/samuel-joly"><img src="Images/gitHub.png"/></a>
									
									<a target="blank" href="https://laplateforme.io"><img src="Images/plateforme.png"/></a>
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
									<li><strong>Je veux :</strong> Dévelloper mes connaissances professionnelles.</li>
									<li><strong>Je sais :</strong> Apprendre de mes expériences et de mes pairs.</li>
									<li><strong>Je suis :</strong> Curieux et motivé dans mon travail.</li>
									<li><strong>Je dois :</strong> Me diversifier dans ;es champs d'application.</li>
									<li><strong>Je serais:</strong> Ravis d'apprendre a votre cotés.</li>
								</ul>
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