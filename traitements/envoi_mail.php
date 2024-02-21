<?php

// Vérification de l'appel via le formulaire
if (count($_POST)==0) {
	// Si le le tableau est vide, on affiche le formulaire
	header('location: ../contact.php');
}

// Vérification des données du formulaire

$affichage_retour = '';	
$erreur_envoie = '';													// Lignes à ajouter au début des vérifications
$erreurs=0;

// Exemple pour le nom
if (!empty($_POST['nom'])) {
	$nom=$_POST['nom'];
} else {
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Le champ NOM est obligatoire.<br>';
    $erreurs++;
}


// Exemple pour l'adresse mail
if (!empty($_POST['email'])) {
// Si le champ email contient des données
  
  	// Verification du format de l'email
  	if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      $email=$_POST['email'];
    } else {
    // Si l'email est incorrect 
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Adresse mail incorrecte.<br>';
    $erreurs++;
    }
        
// Si le champ email est vide
} else {
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Le champ EMAIL est obligatoire.<br>';
    $erreurs++;
}

if ($erreurs == 0) {

  // Préparation des données 

	// Récupération des données du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$message=$_POST['message'];
$email=$_POST['email'];

// Traitement des données

$prenom=mb_strtolower($prenom);
$nom=mb_strtolower($nom);

//Préparation des variables pour l'envoi du mail de contact
$subject='SAE105 : demande de '.$prenom.' '.$nom;
$headers['From']=$email;							// Pour pouvoir répondre à la demande de contact
$headers['Reply-to']=$email;						// On donne l'adresse de l'utilisateur comme adresse de réponse
$headers['X-Mailer']='PHP/'.phpversion();			// On précise quel programme à généré le mail

// On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
$email_dest="mmi22h14@mmi-troyes.fr";

//Envoi du mail avec confirmation d'envoi (ou pas)
if (mail($email_dest,$subject,$message,$headers)) {
  $erreur_envoie = "Mail de Contact OK.";
}else {
  $erreur_envoie = "Erreur d'envoi du mail de contact.";
}

// Traitement des données

$prenom=mb_strtolower($prenom);
$nom=mb_strtolower($nom);

//Préparation des variables pour l'envoi du mail de contact
$subject='Confirmation de votre demande sur SAE105';
$headers['From']='mmi22h14@mmi-troyes.fr';							// Pour pouvoir répondre à la demande de contact
$headers['Reply-to']='no-reply@mmi-troyes.fr';						// On donne l'adresse de l'utilisateur comme adresse de réponse
$headers['X-Mailer']='PHP/'.phpversion();	

$message = 'Bonjour '.$prenom.' '.$nom.'<br>'.'Nous avons bien pris en compte votre demande.';		// On précise quel programme à généré le mail

// On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
$email_dest=$_POST['email'];

//Envoi du mail avec confirmation d'envoi (ou pas)
if (mail($email_dest,$subject,$message,$headers)) {
  $erreur_envoie = "Mail de Confirmation OK.";
}else {
  $erreur_envoie = "Erreur d'envoi du mail de confirmation.";
}

// Fin de l'envoi en PHP
  
  // Détermination du message à affichée après les tentatives d'envoi
  	$affichage_retour='Votre demande à bien été envoyée.';
    
  	if ($erreurs != 0) {
    $affichage_retour='Echec de l\'envoi du message.';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Envoie du mail</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="../css/styles.css">
</head>
<body>

<header class="header_style">
    <div>
        <a href="index.php"><img src="../images/justcrypto.gif" alt="Just Crypto" width="80" class="logo"></a>
    </div>
  <nav class="nav_style">
      <ul class="ul_style">
          <li><a class="menu_style" href="../index.php">Accueil</a></li>
            <li><a class="menu_style" href="../donnees.php">Données</a></li>
            <li><a class="menu_style" href="../galerie.php">Galerie</a></li>
            <li><a class="menu_style" href="../contact.php">Contact</a></li>
            <li><a class="menu_style" href="../partenaires.php">Partenaires</a></li>
        </ul>
     </nav>
</header>
<main class="main_style">
  <h1 class="h1_style_2" style="color: rgba(255, 220, 0, 0.9);"><span class="etoile">Envoie</span><span class="etoile">du</span><span class="etoile">Mail</span></h1>

  <?php
if ($erreurs == 0) {                                       // aucune erreur
echo '<div id="reussite">'."\n";
echo '<form class="form_style_1" action="../index.php">'."\n";
echo '<p class="paragraphe">'.$affichage_retour.'</p>'."\n";
echo '<p class="paragraphe">'.$erreur_envoie.'</p>'."\n";
echo '<button class="btn_style" type="submit">Retour</button>'."\n";        // on retourne sur la page accuei
echo '</form>'."\n";
echo '</div>'."\n";

} else {                                                  // Erreurs de saisie ou d'envoi du mail

echo '<div id="echec">'."\n";
echo '<form class="form_style_1" action="../contact.php">'."\n";
echo '<p class="paragraphe">'.$affichage_retour.'</p>'."\n";
echo '<p class="paragraphe">'.$erreur_envoie.'</p>'."\n";
echo '<button class="btn_style" type="submit">Retour</button>'."\n";        // on retourne sur la page accuei
echo '</form>'."\n";
echo '</div>'."\n";
}
?>
</main>

<footer class="footer_style">
  <a class="footer_menu_style" href="../references.php">Références</a>
  <p style="margin-top: 5px">&copy; MMI Troyes 2023-2024 | Un site créé par Enzo Russo</p>
</footer>

</body>
</html>