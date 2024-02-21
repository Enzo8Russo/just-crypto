<?php

//$prenom = 'Enzo';
//$nom = "Russo";

//echo "Bonjour $prenom ! " . "<br> \n";

//if ($prenom == $nom) {
    //echo "C'est pas bien ! " . "<br> \n";
    //echo "Tu ne peux pas avoir le même nom et prénom !";
//}else {
    //echo "Ton est $nom " . "<br> \n";
    //echo "C'est bien !"  . "<br> <br> \n\n";
//}

//$calcul1 = rand(0, 5); //fontions qui donne un chiffre aléatoire, intéressant pour plus tard
//$calcul2 = rand(0, 5);

//$resultat = number_format($resultat, 5);

//$resultat = $calcul1 + $calcul2;

//echo "$resultat "  . "<br> <br> \n\n";

//$nom = "Corto Matesse";
//$mere = "Nina de Gibraltar";
//$ami = "Raspoutine";

//echo "Je m'appelle $nom l'aventurier, " . "<br> \n";
//echo "et je suis le fils de la $mere " . "<br> \n";
//echo "et mon meilleur ami est $ami. " . "<br> <br> \n\n";


//echo "Je m'appelle $nom l'aventurier, " . "<br> \n" . "et je suis le fils de la $mere " . "<br> \n" . "et mon meilleur ami est $ami. " . "<br> <br> \n\n";

/*
$prenom = "corto ";
$nom = "maltesse";
$age = 30;
$bourse = [143,132,101,202];
$coef = 1.5;

$bourse4 = $bourse[3]*$coef;
$bourse5 = $bourse4*$coef;

$age=18;

if ($age >= 18) {
    echo "Majeur";
} else {
    echo "Mineur";
}
*/


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <?php /*
echo "Je m'appelle " . ucfirst($prenom) . ucfirst($nom) . ", j'ai $age ans et" . " <br> \n";

echo "en 2017, j'avais " . ($bourse[0]/2) . "€" . " <br> \n";
echo "en 2018, j'avais $bourse[0] €" . " <br> \n";
echo "en 2019, j'avais $bourse[1] €" . " <br> \n";
echo "en 2020, j'avais $bourse[2] €" . " <br> \n";
echo "en 2021, j'avais $bourse[3] €" . " <br> \n";
echo "en 2022, j'avais $bourse4 €" . " <br> \n";
echo "en 2023, j'avais $bourse5 €" . " <br> \n"; */

    ?>

    <?php

    // Le programme sera enregistré sous tp3.php
// Définition des variables 

// Pour changer de perso, on met le numéro du perso que l'on veut
//$perso = 1;

    if ($perso = 1) {
        $i = 1;
    }

    if ($perso = 2) {
        $i = 2;
    }

    if ($perso = 3) {
        $i = 3;
    }

    if ($perso = 4) {
        $i = 4;
    }

    $a = 0; // Valeur décroissante, si $perso = 2 alors $a prends -1


for ($perso = 3; $perso <= $i-$a; $perso++) {

    switch ($perso) {
        case 1:
            //Perso 1
            $prenom = ucfirst('corto'); 
            $nom = ucfirst('maltese');
            $age = 30;
            $type = 'aventurier';
            $sexe = 'M';
            break;
        case 2:
            //Perso 2
            $prenom = 'M';
            $nom = 'raspoutine';
            $age = 50;
            $type = 'tueur';
            $sexe = 'M';
            break;
        case 3:
            //Perso 3
            $prenom = ucfirst('pandora');
            $nom = ucfirst('groovesnore');
            $age = 17;
            $type = 'fille de bonne famille';
            $sexe = 'F';
            break;
        case 4:
            //Perso 4
            $prenom = ucfirst('shangai');
            $nom = ucfirst('li');
            $age = 25;
            $type = 'femme des triades';
            $sexe = 'F';
            break;
    }
    
    echo "Je m'appelle $prenom $nom, je suis un"; 

        if ($sexe == 'M') {
            echo " ";
        } else {
            echo "e ";
        }
    
        if ($sexe == 'M') {
            echo "homme ";
        }else {
            echo "femme ";
        }
    
        if ($age >= 18) {
            echo "majeur";
        } else {
            echo "mineur";
        }
    
        if ($sexe == 'M') {
            echo " ";
        } else {
            echo "e ";
        }
    
        echo "et je suis un";
    
        if ($sexe == 'M') {
            echo " ";
        } else {
            echo "e ";
        }
    
        echo "$type.</br>";
    
    }

    ?>


</head>
<body>
    
</body>
</html>