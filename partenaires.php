<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Partenaires</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/partenaires.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main class="main_style">
<h1 class="h1_style_2"><span class="etoile">Partenaires</span></h1>

    <div class="container">
        <div class="card">
            <img class="img_styles" src="images/Ahamad_profil.jpg" alt="Ahamad Mohammad" title="Ahamad Mohammad">
            <div class="intro">
                <h2 class="petit_titre">Ahamad Mohammad</h2>
                <p class="sous_titre">Au <span class="animation">Cinéma</span>, les 50 plus gros blockbusters sont des films ayant remporté un immense succès au box-office. <br> Les voici ! 
                </p>
                <p class="sous_titre">
                    <a class="lien_style" href="http://mmi22h09.sae105.ovh/" target="_blank">VOIR LE SITE</a>
                </p>
            </div>
        </div>

        <div class="card">
            <img class="img_styles" src="images/Enzo_profil.jpg" alt="Enzo Russo" title="Enzo Russo">
            <div class="intro">
                <h2 class="petit_titre">Enzo Russo</h2>
                <p class="sous_titre"><span class="animation">Just-Crypto</span> présente les différentes monnaies virtuelles, leur créeateur, leur ATH et leur offre en circulation.
                </p>
                <p class="sous_titre">
                    <a class="lien_style" href="http://mmi22h14.sae105.ovh" target="_blank">VOIR LE SITE</a>
                </p>
            </div>
        </div>

        <div class="card">
            <img class="img_styles" src="images/Tristian_profil.jpg" alt="Tristan Adnot" title="Tristan Adnot">
            <div class="intro">
                <h2 class="petit_titre">Tristan Adnot</h2>
                <p class="sous_titre">L'<span class="animation">Artiste</span> Luv Resval a connu une évolution fulgurante lors de ces 2 dernières années, voici un condensé de sa carrière musicale…
                </p>
                <p class="sous_titre">
                    <a class="lien_style" href="http://mmi22h01.sae105.ovh/" target="_blank">VOIR LE SITE</a>
                </p>
            </div>
        </div>
    </div>

    <div class="docs">
        <a class="doc" href="charte_de_projet.pdf" target="_blank">Charte de projet</a>
        <a class="doc" href="plan_de_projet.pdf" target="_blank">Plan de projet</a>
    </div>
</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>