<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>CV - Joly Samuel</title>
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
		
		<main id="contactMain">
			
			<div id="contactTitle"> 
				<h1>Contact</h1>
				<p>Voici mon formulaire de contact, je vous répondrais dans les plus brefs délais par mail.</p>
			</div>
			
			<form action="index.php?contactDone=true" method="post" id="contact-form">
				<div id="name-zone">
				
					<div class="inputZone">
						<input type="text" name="prenom" class="name"/>
						<label for="prenom" class="label-move">Prénom</label>
					</div>
					
					<div class="inputZone">
						<input type="text" name="nom" class="name"/>
						<label for="nom" class="label-move">Nom</label>
					</div>
				
				</div>
				
				<div class="inputZone" id="mail">
					<input type="mail" name="mail" class="absol-input"/>
					<label for="mail" class="label-move">Email</label>
				</div>
				
				<div class="inputZone" id="sujet">
					<input type="text" name="subject" class="absol-input"/>
					<label for="subject" class="label-move">Sujet</label>
				</div>
				
				<div class="inputZone">
					<textarea cols="50" rows="4" class="absol-input"></textarea>
					<label for="message" class="label-move">Votre message</label>
				</div>
				
				<div class="inputZone controls">
					<input type="reset"/>
					<input type="submit" name="submitBtn"/>
				</div>
			</form>
			
		</main>
		
	</body>
</html>