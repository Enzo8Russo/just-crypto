<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>ACCUEIL</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>
<main>
	<div class="container-first">
		<h1><span class="etoile">Bienvenue </span><span class="etoile">sur </span><span class="etoile">Just </span><span class="etoile">Crypto</span></h1>
		<div class="container-btns">
			<button class="btn-first b1" onclick="window.location.href = 'donnees.php';">Voir le top 50</button>
			<button class="btn-first b2" onclick="window.location.href = 'partenaires.php';">Partenaires</button>
		</div>
	</div>

	<ul class="medias">
		<li class="bulle"><a href="https://just-streaming.com" target="_blank"><img src="images/badge-ad.svg" alt="Publicité" title="Publicité Just Streaming" class="logo-medias"></a></li>
		<li class="bulle"><a href="https://just-streaming.com/profil/classement" target="_blank"><img src="images/award.svg" alt="Liste Récompenses" title="Liste Récompenses" class="logo-medias"></a></li>
		<li class="bulle"><a href="https://just-streaming.com/profil/membres" target="_blank"><img src="images/person-lines-fill.svg" alt="Liste Membres" title="Liste Membres" class="logo-medias"></a></li>
		<li class="bulle"><a href="https://just-streaming.com/inscription" target="_blank"><img src="images/cadeau.svg" alt="Page Inscription" title="Page Inscription" class="logo-medias"></a></li>
	</ul>
</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>