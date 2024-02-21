<?php
// Création du tableau indexé
$tab = array(11, 13, 14, 16, 17, 14, 18);

echo "<p style='color: blue'>En MMI, j’ai 7 matières, elles sont respectivement de 0 à 6 : mathématiques, prog, reseau, com, droit, anglais, et lego, et ";
for ($i = 0; $i < count($tab); $i++) {
  echo "dans la matière $i j’ai $tab[$i], ";
}
echo "et c’est bien comme cela.</p> \n";
?>
