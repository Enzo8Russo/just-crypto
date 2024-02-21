<?php
// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom,type,taille)
if (!empty($_FILES)) {
    $image_nom=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_taille=$_FILES['image']['size'];
    $image_temporaire=$_FILES['image']['tmp_name'];
    $image_error=$_FILES['image']['error'];
} else {
    echo 'Vous devez sélectionner un fichier';
    exit;
}

// Début Vérification de la conformité
$affichage_erreurs='';
$erreurs=0;

// Test si pas d'erreur de sélection
if ($image_error == 0) {
    // Test format du fichier avec la fonction exif_imagetype
    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
        $affichage_erreurs .='Ce fichier n\'est pas une image jpeg<br>';
        $erreurs++;
    }

    // Test file size
    if ($image_taille > 500000) {
        $affichage_erreurs .='Le fichier est trop lourd. Il doit être inférieur à 500KB<br>';
        $erreurs++;
    }

} else {
    $affichage_erreurs='Impossible de télécharger le fichier, erreur de sélection<br>';
}

// On affiche les erreurs
if ($erreurs != 0) {
    echo $affichage_erreurs;
    exit;
}

// On récupère le nombre de fichiers dans images/galerie
$nbFichiers=-2; // Le dossier contient deux fichiers cachés . et ..
$dossier= opendir("../images/galerie");
while ($fichier = readdir($dossier)) {
    $nbFichiers++;
}

// On renomme le fichier - imageN.jpg
$image_num=$nbFichiers+1;
$image_nom='image'.$image_num.'.jpg';

// On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
$destination="../images/galerie/".$image_nom;

// On déplace le fichier dans son emplacement définitif
if (move_uploaded_file($image_temporaire, $destination)) {
    echo "Fichier téléchargé avec succès";
} else {
    echo "Erreur de téléchargement";
}
?>