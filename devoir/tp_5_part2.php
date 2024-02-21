<?php
// Création du tableau associatif
$tabAsso = array(
  "mathématiques" => 11,
  "prog" => 13,
  "reseau" => 14,
  "com" => 16,
  "droit" => 17,
  "anglais" => 14,
  "lego" => 18
);

echo "<p style='color: blue'>En MMI, j’ai ";
foreach ($tabAsso as $cle => $valeur) {
  echo "$valeur en $cle, ";
}
echo "et c’est bien comme cela.</p> \n";
?>
