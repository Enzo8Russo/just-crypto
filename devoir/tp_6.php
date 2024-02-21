<?php
$note = [11, 15, 20, 9, 4, 16, 18, 2];

function moyenne ($note1, $note2, $note3, $note4, $note5, $note6, $note7, $note8) {
	$result = ($note1+$note2+$note3+$note4+$note5+$note6+$note7+$note8)/8;
	return $result;
}

$tab = [11, 15, 20, 9, 4, 16, 18, 2];
$tab2 = [1, 0, 20, 20];
function moyenne3 ($tab) {
	$total = 0;
	$nvb = count($tab);
	for ($i = 0; $i < $nvb; $i++) {
		$total += $tab[$i];
	}
	$resultat = $total/$nvb;
	return $resultat;
}

$niveau = [1, 2, 3, 4];
$text = "La balade de la mer est salée";
function moyenne4 ($niveau) {
	$total = 0;
	$gg = ;
	for ($i = 0; $i < $nvb; $i++) {
		$total += $niveau[$i];
	}
	$resultat = $total/$gg;
	return $resultat;
}




?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<body>
	<?= (moyenne4 ($niveau)) ?>La balade de la mer est salée</h1>
	<p style="color: blue; font-style: italic;">
		La moyenne des notes obtenue par la fonction moyenne1 est de <?= (moyenne ($note[0], $note[1], $note[2], $note[3], $note[4], $note[5], $note[6], $note[7])); ?><br><br><br>

		La moyenne des notes obtenue par la fonction moyenne3 est de <?= (moyenne3 ($tab)) ?>
</p>
</body>
</html>