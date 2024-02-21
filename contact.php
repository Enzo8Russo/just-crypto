<?php

    

?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main class="main_style">
<h1 class="h1_style_2"><span class="etoile">Contact</span></h1>

    <form class="form_style_1" action="traitements/envoi_mail.php" method="post">
        <div class="en-tete">
            <div style="margin-right: 10px;">
                <label class="label" for="prenom">Prénom <span class="etoile">* </span>:</label>
                <input class="input" type="text" name="prenom" id="prenom" placeholder="Votre prenom..." required>
            </div>

            <div>
                <label class="label" for="nom">Nom <span class="etoile">* </span>:</label>
                <input class="input" type="text" name="nom" id="nom" placeholder="Votre nom..." required>
            </div>
        </div>

            <label class="label" for="email">E-mail <span class="etoile">* </span>:</label>
            <input class="input" type="email" name="email" id="email" placeholder="nom@domaine.fr" required>


            <label class="label" for="message">Message <span class="etoile">* </span>:</label>
            <textarea class="textarea" name="message" id="message" placeholder="Votre message..." required></textarea>

        <input class="btn_style" type="submit" value="Envoyer !" style="margin-top: 10px;">
    </form>

</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>