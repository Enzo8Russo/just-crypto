<?php
// Création du tableau indexé
$tab = array(11, 13, 14, 16, 17, 14, 18);

echo "<p style='color: blue'>En MMI, j’ai ";
for ($i = 0; $i < count($tab); $i++) {
  if ($i == 0) {
    echo "$tab[$i] en mathématiques";
  } elseif ($i == 1) {
    echo ", $tab[$i] en prog";
  } elseif ($i == 2) {
    echo ", $tab[$i] en reseau";
  } elseif ($i == 3) {
    echo ", $tab[$i] en com";
  } elseif ($i == 4) {
    echo ", $tab[$i] en droit";
  } elseif ($i == 5) {
    echo ", $tab[$i] en anglais";
  } else {
    echo ", $tab[$i] en lego";
  }
}
echo ", et c’est bien comme cela.</p> \n";
?>
