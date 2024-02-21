<?php
// Le programme sera enregistré sous tp3.php
// Définition des variables

$numero_personnage = 1; // choisir le numéro du personnage désiré (de 1 à 4)

switch ($numero_personnage) {
  case 1:
    $prenom = "Corto";
    $nom = "Maltese";
    $age = 30;
    $type = "aventurier";
    $sexe = "M";
    break;
  case 2:
    $prenom = "Mraspoutine";
    $nom = "Raspoutine";
    $age = 50;
    $type = "tueur";
    $sexe = "M";
    break;
  case 3:
    $prenom = "Pandora";
    $nom = "Groove-Snore";
    $age = 17;
    $type = "fille de bonne famille";
    $sexe = "F";
    break;
  case 4:
    $prenom = "Shangai";
    $nom = "Li";
    $age = 25;
    $type = "femme de strades";
    $sexe = "F";
    break;
}

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
