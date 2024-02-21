<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Galerie</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main class="main_style">
<h1 class="h1_style_2"><span class="etoile">Galerie</span></h1>
    
    <form class="form_style_1" action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
    <label class="label" for="image">Choisir un fichier</label>
    <input class="input" style="margin-bottom: 10px;" type="file" name="image" id="image" />
    <input class="btn_style" type="submit" value="Télécharger" />
</form>

<div style="display: flex; margin-top: 20px; margin-bottom: 20px; justify-content: space-around; flex-wrap: wrap;">
<?php 
$nbFichiers=-2; // Le dossier contient deux fichier cachés . et ..
$dossier= opendir("images/galerie");
while ($fichier = readdir($dossier)) {
$nbFichiers++;
}
$i=1; // On initialise i à 1
while($i <= $nbFichiers) {
    if($i == 1) {
        $z = "https://bitcoin.org/";
    } elseif ($i == 2) {
        $z = "https://ethereum.org/";
    } elseif ($i == 3) {
        $z = "https://www.binance.com/en";
    } elseif ($i == 4) {
        $z = "https://www.cardano.org/";
    } elseif ($i == 5) {
        $z = "https://dogecoin.com/";
    } elseif ($i == 6) {
        $z = "https://ripple.com/xrp/";
    } elseif ($i == 7) {
        $z = "https://tether.to/";
    } elseif ($i == 8) {
        $z = "https://solana.com/";
    } elseif ($i == 9) {
        $z = "https://uniswap.org/";
    } elseif ($i == 10) {
        $z = "https://polkadot.network/";
    } elseif ($i == 11) {
        $z = "https://litecoin.org/";
    } elseif ($i == 12) {
        $z = "https://chain.link/";
    } elseif ($i == 13) {
        $z = "https://www.bitcoincash.org/";
    } elseif ($i == 14) {
        $z = "https://crypto.com/";
    } elseif ($i == 15) {
        $z = "https://aave.com/";
    } elseif ($i == 16) {
        $z = "https://www.stellar.org/";
    } elseif ($i == 17) {
        $z = "https://cosmos.network/";
    } elseif ($i == 18) {
        $z = "https://eos.io/";
    } elseif ($i == 19) {
        $z = "https://www.vechain.org/";
    } elseif ($i == 20) {
        $z = "https://getmonero.org/";
    } elseif ($i == 21) {
        $z = "https://www.linkedin.com/in/patrice-gommery-32a06733/?originalSubdomain=fr";
    }
    echo '<a href="'.$z.'" target="_blank" style="display:inline-block;width:40%;text-align:center;">
            <img src="images/galerie/image'.$i.'.jpg" alt="" style="width:100%; border-radius:10px; margin-bottom:10px;" class="image_galerie">
          </a>';
    $i++;
}
?>
</div>
    
</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>