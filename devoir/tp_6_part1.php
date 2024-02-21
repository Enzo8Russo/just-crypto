<?php

function moyenne1($x1, $x2, $x3, $x4, $x5, $x6, $x7, $x8) {
    // Calcul de la moyenne
    $moyenne = ($x1 + $x2 + $x3 + $x4 + $x5 + $x6 + $x7 + $x8) / 8;
    
    // Retourner la moyenne
    return $moyenne;
  }

  echo "La moyenne des notes obtenue par la fonction moyenne1 est de : " . moyenne1($tab[0], $tab[1], $tab[2], $tab[3], $tab[4], $tab[5], $tab[6], $tab[7]) . "/20";

  function moyenne2($tx) {
    // Initialisation de la variable qui contiendra la somme des éléments du tableau
    $somme = 0;
  
    // Boucle pour parcourir chaque élément du tableau
    for ($i = 0; $i < count($tx); $i++) {
      // On ajoute la valeur de l'élément courant à la somme
      $somme += $tx[$i];
    }
  
    // On retourne la moyenne en divisant la somme par le nombre d'éléments du tableau
    return $somme / count($tx);
  }

  $moyenne = moyenne2($tab);
echo "La moyenne des notes obtenue par la fonction moyenne2 est de : $moyenne/20";

function titre1($num, $texte) {
    // On vérifie que $num est compris entre 1 et 4
    if ($num >= 1 && $num <= 4) {
      // On affiche le titre en utilisant les balises h et le numéro choisi
      echo "<h$num>$texte</h$num>";
    }
  }

  titre1(2, "Mon titre"); // Affiche "<h2>Mon titre</h2>"

  function titre2($num, $texte, $couleur) {
    echo "<h$num style='color: $couleur'>$texte</h$num>";
}

titre2(1, "La ballade de la mer salée", "blue");


?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<body>
	<?=  ?>La balade de la mer est salée</h1>
	<p style="color: blue; font-style: italic;">
		La moyenne des notes obtenue par la fonction moyenne1 est de <?=  ?><br><br><br>

		La moyenne des notes obtenue par la fonction moyenne3 est de <?=  ?>
</p>
</body>
</html>