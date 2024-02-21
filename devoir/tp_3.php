<?php
// Le programme sera enregistré sous tp3.php
// Définition des variables
$prenom = "Corto";
$nom = "Maltese";
$age = 30;
$type = "aventurier";
$sexe = "M";

// Mettre en commentaire les autres personnages ici

$prenom = ucfirst(strtolower($prenom)); // met en majuscule la première lettre du prénom et met le reste en minuscule
$nom = ucfirst(strtolower($nom)); // met en majuscule la première lettre du nom et met le reste en minuscule

if ($sexe == "M") {
  $genre = "un homme";
} else {
  $genre = "une femme";
}

if ($age >= 18) {
  $majeur = "majeur";
} else {
  $majeur = "mineur";
}

echo "Je m'appelle $prenom $nom, je suis $genre $majeur et je suis $type.";
?>
