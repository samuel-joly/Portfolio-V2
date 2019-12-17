<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>Portfolio - Joly Samuel</title>
	</head>

	<body>
		<header>
			<a href="index.php" id="header-title">Samuel Joly<br/><span>Portfolio<span></a>
			<nav>
				<a href="realisation.php">Réalisations</a>
				<a href="contact.php">Contact</a>
				<a href="livreOr.php">Livre d'Or</a>
				<a href="curriculum.php">CV</a>
			</nav>
		</header>

		<main>
			<div id="mainContainer">
				
				<div class="grid-item two-long first-row" id="contact">
				
					<div class="cover">
						<div class="title-zone">
							<h1>Contact</h1>
							<a href="contact.php" class="a-btn">Par ici</a>
						</div>
						
						<article>
							<h2>Pour toute demande de contact :</h2>
							<p class="normal-font">Vous pouvez me contacter par <a href="contact.php">Ici</a> ou par mail sur <a href="mailto:samueljoly0@gmail.com">samueljoly0@gmail.com</a></p>
						</article>
					</div>
					
				</div>
				
				<div class="grid-item first-row" id="curriculum">

					<div class="cover">

						<h1>Curriculum Vitæ</h1>
						<article id="cv-article">
							<h2>Mon cursus</h2>
							<p class="normal-font"> Mes histoires professionnelles et universitaires</p>
							<a href="curriculum.php" class="a-btn" id="cv-btn">Par ici</a>
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
							<h2>Les derniers messages</h2>
							
							<div id="livre-or-commentaires">
							
								<div class="comm"> 
									<p class="auteur">De <span>Samuel</span> le <span>16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le premier commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur">De <span>Samuel</span> le <span>16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le deuxième commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur">De <span>Samuel</span> le <span>16/12/19</span></p>
									<p class="commentaire">Je suis et resterais le troixième commentaire</p>
								</div>
								
								<div class="comm"> 
									<p class="auteur">De <span>Samuel</span> le <span>16/12/19</span></p>
									<p class="commentaire">Je suis le commentaire caché</p>
								</div>
							
							</div>
							
						</article>
					</div>
					
				</div>
				
				<div class="grid-item" id="real-perso">
					
					<div class="cover">
						<div class="title-zone">
							<h1>Réalisation<br/>Perso</h1>
							<a href="realisation.php?perso=true" class="a-btn">Par ici</a>
						</div>
						
						<article>
							<h2 class="realisation-p">Mes réalisation extra-scolaire</h2>
						</article>
					</div>
					
				</div>
				
				<div class="grid-item" id="real-etude">
					<div class="cover">						
						<div class="title-zone">
							<h1>Réalisation<br/>Etudes</h1>
							<a href="realisation.php?etudes=true" class="a-btn">Par ici</a>
						</div>
						<article>
							<h2 class="realisation-p">Mes réalisation chez LaPlateforme_</h2>
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
									<a href=""><img src="Images/steam.png"/></a>
									<a href=""><img src="Images/facebook.png" style="transform:scale(1.35);position:relative;bottom:0.5px;"/></a>
								</div>
							</div>
							
							<div id="infos-bottom">
								<ul>
									<li><strong>Je veux :</strong> apprendre.</li>
									<li><strong>Je sais :</strong> apprendre de nouvelles techs.</li>
									<li><strong>Je suis :</strong> appliqué et curieux dans mon travail.</li>
								<ul>
							</div>
						</article>
					</div>
				</div>
				
				<div class="grid-item border"></div>
				<div class="grid-item border"></div>
				<div class="grid-item two-long border"></div>
			</div>
		</main>

		<footer>
		</footer>
	</body>

</html>