<?php
// Partie 1
$somme = 0;
for ($i = 1; $i <= 100; $i++) {
  $somme += $i;
}
echo "La somme des nombres de 1 à 100 est $somme. \n";

// Partie 2
$debut = 3;
$fin = 13;
$somme = 0;
for ($i = $debut; $i <= $fin; $i++) {
  $somme += $i;
}
echo "La somme des nombres de $debut à $fin est de $somme. \n";

// Partie 3
$debut = 26;
$fin = 20;
$somme = 0;
if ($debut > $fin) {
  for ($i = $debut; $i >= $fin; $i--) {
    $somme += $i;
  }
  echo "La somme des nombres de $debut à $fin est de $somme. \n";
} else {
  for ($i = $debut; $i <= $fin; $i++) {
    $somme += $i;
  }
  echo "La somme des nombres de $debut à $fin est de $somme. \n";
}
?>
