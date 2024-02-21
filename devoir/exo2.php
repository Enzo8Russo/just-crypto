<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exemple de page avec PHP</title>
    <style>
      * {
        padding: 0;
        margin: 0;
      }
      body {
        font-family: sans-serif;
        font-size: 16px;
        color: #000;
        background-color: #fff;
      }
      h1 {
        background-color: #ccc;
        text-shadow: 1px 1px yellow;
        padding: 12px;
        text-align: center;
      }
      p {
        padding: 12px;
      }
      #logo {
        width: 120px;
      }
      .important {
        color: orange;
        text-shadow: 1px 1px #000;
      }
    </style>
  </head>
  <body>
    <p><img src="https://www.iut-troyes.univ-reims.fr/assets/img/Logo_IUT_OK_FondJaune.png" alt="logo IUT" id="logo" /></p>
    <h1>Page contenant du PHP</h1>
    <p>Avec Javascript, on peut faire des calculs
      1234567/543 = <script>document.write(1234567/543)</script>
    </p>
    <p>Avec PHP aussi : 1234567/543 = <?= 1234567/543; ?></p>

    <p class="important">Avec PHP, si vous ouvrez directement votre fichier dans le navigateur, le code PHP ne sera pas exécuté !</p>
    <p class="important">Avec PHP, il faut un "moteur" PHP pour exécuter le code, il y en a un installé sur votre serveur VPS par M. GOMMERY. Il faut donc envoyer vos fichiers vers votre VPS, PHP est un langage CÔTÉ SERVEUR !</p>
    <p class="important">De plus, il faut OBLIGATOIREMENT nommer les fichiers contenant du PHP avec l'extension ".php" !</p>
  </body>
</html>

Question II.1.a) oui
Question II.1.b) extension du fichier en .php
Question II.1.c) le php ne peut pas être utiliser si l'extension n'est pas en .php, du coup rien ne s'affiche.
Question II.1.d) oui car il est bien écrit dans une balise <script></script>
